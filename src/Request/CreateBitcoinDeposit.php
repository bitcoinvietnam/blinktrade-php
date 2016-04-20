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
use JMS\Serializer\Annotation as Serializer;

/**
 * Class CreateBitcoinDeposit
 * @package BitcoinVietnam\Blinktrade\Request
 */
class CreateBitcoinDeposit extends BaseRequest
{
    /**
     * @Serializer\SerializedName("DepositReqID")
     * @Serializer\Type("integer")
     * @var int
     */
    private $depositReqId;

    /**
     * @Serializer\SerializedName("Currency")
     * @Serializer\Type("string")
     * @var string
     */
    private $currency;

    /**
     * @Serializer\SerializedName("BrokerID")
     * @Serializer\Type("integer")
     * @var int
     */
    private $brokerId;

    /**
     * CreateBitcoinDeposit constructor.
     */
    public function __construct()
    {
        $this->setMsgType('U18');
        $this->setDepositReqId(1);
        $this->setCurrency('BTC');
    }

    /**
     * @return mixed
     */
    public function getDepositReqId()
    {
        return $this->depositReqId;
    }

    /**
     * @param mixed $depositReqId
     */
    public function setDepositReqId($depositReqId)
    {
        $this->depositReqId = $depositReqId;
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
     * @return mixed
     */
    public function getBrokerId()
    {
        return $this->brokerId;
    }

    /**
     * @param mixed $brokerId
     */
    public function setBrokerId($brokerId)
    {
        $this->brokerId = $brokerId;
    }
}