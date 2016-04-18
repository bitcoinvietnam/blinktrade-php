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
use BitcoinVietnam\Blinktrade\Response\GetBalance;
use BitcoinVietnam\Blinktrade\Response\GetOrders;
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
        $this->brokerId = $brokerId;
        $this->url = 'https://api.blinktrade.com/tapi/v1/message';
    }
    
    // REQUESTS ========================

    /**
     * Get balance
     *
     * @return GetBalance\Response
     */
    public function getBalance()
    {
        $response = $this->sendRequest($this->apiM()->request()->getBalance())->getBody()->getContents();

        /** @var GetBalance $responses */
        $responses = $this->apiM()->serializer()->deserialize($response, 'BitcoinVietnam\\Blinktrade\\Response\\GetBalance', 'json');

        return $responses->getResponses()->first();
    }

    /**
     * Get open orders
     *
     * @param int $page
     * @param int $pageSize
     * @return GetOrders\Order[]
     */
    public function getOpenOrders($page = 0, $pageSize = 100)
    {
        $request = $this->apiM()->request()->getOrders();
        $request->setPage((int) $page);
        $request->setPageSize((int) $pageSize);
        $request->setFilter(['has_leaves_qty eq 1']);

        $response = $this->sendRequest($request)->getBody()->getContents();

        /** @var GetOrders $responses */
        $responses = $this->apiM()->serializer()->deserialize($response, 'BitcoinVietnam\\Blinktrade\\Response\\GetOrders', 'json');

        return $responses->getResponses()->first()->getOrdListGrp();
    }

    /**
     * Get closed orders
     *
     * @param int $page
     * @param int $pageSize
     * @return GetOrders\Order[]
     */
    public function getExecutedOrders($page = 0, $pageSize = 100)
    {
        $request = $this->apiM()->request()->getOrders();
        $request->setPage((int) $page);
        $request->setPageSize((int) $pageSize);
        $request->setFilter(['has_cum_qty eq 1']);

        $response = $this->sendRequest($request)->getBody()->getContents();

        /** @var GetOrders $responses */
        $responses = $this->apiM()->serializer()->deserialize($response, 'BitcoinVietnam\\Blinktrade\\Response\\GetOrders', 'json');

        return $responses->getResponses()->first()->getOrdListGrp();
    }

    /**
     * Get closed orders
     *
     * @param int $page
     * @param int $pageSize
     * @return GetOrders\Order[]
     */
    public function getCancelledOrders($page = 0, $pageSize = 100)
    {
        $request = $this->apiM()->request()->getOrders();
        $request->setPage((int) $page);
        $request->setPageSize((int) $pageSize);
        $request->setFilter(['has_cxl_qty eq 1']);

        $response = $this->sendRequest($request)->getBody()->getContents();

        /** @var GetOrders $responses */
        $responses = $this->apiM()->serializer()->deserialize($response, 'BitcoinVietnam\\Blinktrade\\Response\\GetOrders', 'json');

        return $responses->getResponses()->first()->getOrdListGrp();
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

        return $this->apiM()->guzzle()->request('POST', $this->url, ['headers' => $headers, 'json' => $this->apiM()->serializer()->toArray($request)]);
    }

    /**
     * @return ApiManager
     */
    private function apiM()
    {
        return isset($this->apiM) ? $this->apiM : ($this->apiM = new ApiManager());
    }
}