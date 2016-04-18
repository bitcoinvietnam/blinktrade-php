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

namespace BitcoinVietnam\Blinktrade\Response\GetWithdrawals;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class Data
 * @package BitcoinVietnam\Blinktrade\Response\GetWithdrawals
 */
class Data
{
    /**
     * @Serializer\SerializedName("Wallet")
     * @Serializer\Type("string")
     * @var string
     */
    private $wallet;

    /**
     * @Serializer\SerializedName("TransactionID")
     * @Serializer\Type("string")
     * @var string
     */
    private $transactionId;

    /**
     * @Serializer\SerializedName("Currency")
     * @Serializer\Type("string")
     * @var string
     */
    private $currency;

    /**
     * @Serializer\SerializedName("Fees")
     * @Serializer\Type("string")
     * @var string
     */
    private $fees;

    /**
     * @return string
     */
    public function getWallet()
    {
        return $this->wallet;
    }

    /**
     * @param string $wallet
     */
    public function setWallet($wallet)
    {
        $this->wallet = $wallet;
    }

    /**
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * @param string $transactionId
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function getFees()
    {
        return $this->fees;
    }

    /**
     * @param string $fees
     */
    public function setFees($fees)
    {
        $this->fees = $fees;
    }
}