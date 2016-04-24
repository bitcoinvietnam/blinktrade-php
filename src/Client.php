<?php
/**
 * Copyright (c) 2016 Bitcoin Viet Nam Co., Ltd.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software
 * and associated documentation files (the "Software"), to deal in the Software without restriction,
 * including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense,
 * and/or sell copies of the Software, and to permit persons to whom the Software is furnished to
 * do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial
 *  portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A
 * PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 * COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN
 * ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH
 * THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace BitcoinVietnam\Blinktrade;
use BitcoinVietnam\Blinktrade\Api\Manager as ApiManager;
use BitcoinVietnam\Blinktrade\Request\RequestInterface;
use BitcoinVietnam\Blinktrade\Response\CancelOrder;
use BitcoinVietnam\Blinktrade\Response\CreateBitcoinDeposit;
use BitcoinVietnam\Blinktrade\Response\CreateBitcoinWithdrawal;
use BitcoinVietnam\Blinktrade\Response\CreateOrder;
use BitcoinVietnam\Blinktrade\Response\GetBalance;
use BitcoinVietnam\Blinktrade\Response\GetOrders;
use BitcoinVietnam\Blinktrade\Response\GetWithdrawals;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\ResponseInterface;

/**
 * Class Client
 * @package BitcoinVietnam\Blinktrade
 */
class Client
{
    /**
     * @var string
     */
    private $key;

    /**
     * @var string
     */
    private $secret;

    /**
     * @var int
     */
    private $brokerId;

    /**
     * @var string
     */
    private $url;

    /**
     * @var ApiManager
     */
    private $apiM;

    /**
     * Client constructor.
     * @param string $key
     * @param string $secret
     * @param int $brokerId
     */
    public function __construct($key, $secret, $brokerId)
    {
        $this->key = (string) trim($key);
        $this->secret = (string) trim($secret);
        $this->brokerId = (int) $brokerId;
        $this->url = Blinktrade::BROKERID_TESTNET === $this->brokerId ? Blinktrade::URL : Blinktrade::URL;
    }
    
    // REQUESTS ========================

    /**
     * @param string $side
     * @param int $quantity
     * @param float $price
     * @param string $type
     * @return CreateOrder
     */
    public function createOrder($side, $quantity, $price, $type = '2')
    {
        $request = $this->apiM()->request()->createOrder();
        $request->setSymbol(Blinktrade::SYMBOLS[$this->brokerId]);
        $request->setClientOrderId($this->createUniqueOrderId());
        $request->setSide((string) $side);
        $request->setQuantity((int) $quantity);
        $request->setPrice((int) $price);
        $request->setType((string) $type);

        return $this->apiM()->serializer()->deserialize(
            $this->sendRequest($request)->getBody()->getContents(),
            'BitcoinVietnam\\Blinktrade\\Response\\CreateOrder',
            'json'
        );
    }

    /**
     * @param string$clientOrderId
     * @return CancelOrder
     */
    public function cancelOrder($clientOrderId)
    {
        $request = $this->apiM()->request()->cancelOrder();
        $request->setClientOrderId((string) $clientOrderId);

        return $this->apiM()->serializer()->deserialize(
            $this->sendRequest($request)->getBody()->getContents(),
            'BitcoinVietnam\\Blinktrade\\Response\\CancelOrder',
            'json'
        );
    }

    /**
     * @return CreateBitcoinDeposit
     */
    public function createBitcoinDeposit() 
    {
        $request = $this->apiM()->request()->createBitcoinDeposit();
        $request->setBrokerId($this->brokerId);

        return $this->apiM()->serializer()->deserialize(
            $this->sendRequest($request)->getBody()->getContents(),
            'BitcoinVietnam\\Blinktrade\\Response\\CreateBitcoinDeposit',
            'json'
        );
    }

    /**
     * @param int $amount
     * @param string $wallet
     * @return CreateBitcoinWithdrawal
     */
    public function createBitcoinWithdrawal($amount, $wallet) 
    {
        $request = $this->apiM()->request()->createBitcoinWithdrawal();
        $request->setAmount((int) $amount);
        $request->getData()->setWallet((string) $wallet);

        return $this->apiM()->serializer()->deserialize(
            $this->sendRequest($request)->getBody()->getContents(),
            'BitcoinVietnam\\Blinktrade\\Response\\CreateBitcoinWithdrawal',
            'json'
        );
    }

    // todo
    public function createFiatDeposit() {}

    // todo
    public function createFiatWithdrawal() {}

    /**
     * @param array $statusList
     * @param int $page
     * @param int $pageSize
     * @return GetWithdrawals
     */
    public function getWithdrawals($statusList = null, $page = 0, $pageSize = 100)
    {
        $request = $this->apiM()->request()->getWithdrawals();

        if (!$statusList) {
            $statusList = [
                Blinktrade::WITHDRAW_STATUS_PENDING,
                Blinktrade::WITHDRAW_STATUS_IN_PROGRESS,
                Blinktrade::WITHDRAW_STATUS_COMPLETED,
                Blinktrade::WITHDRAW_STATUS_CANCELLED
            ];
        }

        $request->setStatusList((array) $statusList);
        $request->setPage((int) $page);
        $request->setPageSize((int) $pageSize);

        return $this->apiM()->serializer()->deserialize(
            $this->sendRequest($request)->getBody()->getContents(),
            'BitcoinVietnam\\Blinktrade\\Response\\GetWithdrawals',
            'json'
        );
    }

    /**
     * @return GetBalance
     */
    public function getBalance()
    {
        /** @var GetBalance $responses */
        return $this->apiM()->serializer()->deserialize(
            $this->sendRequest($this->apiM()->request()->getBalance())->getBody()->getContents(),
            'BitcoinVietnam\\Blinktrade\\Response\\GetBalance',
            'json'
        );
    }

    /**
     * Get open orders
     *
     * @param int $page
     * @param int $pageSize
     * @return GetOrders
     */
    public function getOpenOrders($page = 0, $pageSize = 100)
    {
        $request = $this->apiM()->request()->getOrders();
        $request->setPage((int) $page);
        $request->setPageSize((int) $pageSize);
        $request->setFilter(['has_leaves_qty eq 1']);

        return $this->apiM()->serializer()->deserialize(
            $this->sendRequest($request)->getBody()->getContents(),
            'BitcoinVietnam\\Blinktrade\\Response\\GetOrders',
            'json'
        );
    }

    /**
     * Get closed orders
     *
     * @param int $page
     * @param int $pageSize
     * @return GetOrders
     */
    public function getExecutedOrders($page = 0, $pageSize = 100)
    {
        $request = $this->apiM()->request()->getOrders();
        $request->setPage((int) $page);
        $request->setPageSize((int) $pageSize);
        $request->setFilter(['has_cum_qty eq 1']);
        $response = $this->sendRequest($request)->getBody()->getContents();

        return $this->apiM()->serializer()->deserialize(
            $response,
            'BitcoinVietnam\\Blinktrade\\Response\\GetOrders',
            'json'
        );
    }

    /**
     * Get closed orders
     *
     * @param int $page
     * @param int $pageSize
     * @return GetOrders
     */
    public function getCancelledOrders($page = 0, $pageSize = 100)
    {
        $request = $this->apiM()->request()->getOrders();
        $request->setPage((int) $page);
        $request->setPageSize((int) $pageSize);
        $request->setFilter(['has_cxl_qty eq 1']);

        return $this->apiM()->serializer()->deserialize(
            $this->sendRequest($request)->getBody()->getContents(),
            'BitcoinVietnam\\Blinktrade\\Response\\GetOrders',
            'json'
        );
    }
    
    // REQUESTS END ====================

    /**
     * Send request
     *
     * @param RequestInterface $request
     * @return ResponseInterface
     */
    private function sendRequest(RequestInterface $request)
    {
        $headers = [
            'Content-Type' => 'application/json',
            'APIKey' => $this->key,
            'Nonce' => ($nonce = (int) ((microtime(true) * 1000) / 2)),
            'Signature' => hash_hmac('SHA256', $nonce, $this->secret)
        ];

        return $this->apiM()->guzzle()->request(
            'POST',
            $this->url,
            ['headers' => $headers, 'json' => $this->apiM()->serializer()->toArray($request)]
        );
    }

    /**
     * @return string
     */
    private function createUniqueOrderId()
    {
        $orderId = microtime(true) / 9;
        $orderId = (string) $orderId;
        $orderId = str_replace('.', '', $orderId);

        return $orderId;
    }

    /**
     * @return ApiManager
     */
    private function apiM()
    {
        return isset($this->apiM) ? $this->apiM : ($this->apiM = new ApiManager());
    }
}