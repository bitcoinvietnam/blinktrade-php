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

namespace BitcoinVietnam\Blinktrade\Request;
use BitcoinVietnam\Blinktrade\Request\CreateBitcoinWithdrawal\Data;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class CreateBitcoinWithdrawal
 * @package BitcoinVietnam\Blinktrade\Request
 */
class CreateBitcoinWithdrawal extends BaseRequest
{
    /**
     * @Serializer\SerializedName("WithdrawReqID")
     * @Serializer\Type("integer")
     * @var int
     */
    private $withdrawReqId;

    /**
     * @Serializer\SerializedName("Method")
     * @Serializer\Type("string")
     * @var string
     */
    private $method;

    /**
     * @Serializer\SerializedName("Amount")
     * @Serializer\Type("integer")
     * @var int
     */
    private $amount;

    /**
     * @Serializer\SerializedName("Currency")
     * @Serializer\Type("string")
     * @var
     */
    private $currency;

    /**
     * @Serializer\SerializedName("Data")
     * @Serializer\Type("BitcoinVietnam\Blinktrade\Request\CreateBitcoinWithdrawal\Data")
     * @var array
     */
    private $data;

    /**
     * CreateBitcoinWithdrawal constructor.
     */
    public function __construct()
    {
        $this->setMsgType('U6');
        $this->setWithdrawReqId(1);
        $this->setMethod('bitcoin');
        $this->setCurrency('BTC');
    }

    /**
     * @return int
     */
    public function getWithdrawReqId()
    {
        return $this->withdrawReqId;
    }

    /**
     * @param int $withdrawReqId
     */
    public function setWithdrawReqId($withdrawReqId)
    {
        $this->withdrawReqId = $withdrawReqId;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param string $method
     */
    public function setMethod($method)
    {
        $this->method = $method;
    }

    /**
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param mixed $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return Data
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param Data $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }
}