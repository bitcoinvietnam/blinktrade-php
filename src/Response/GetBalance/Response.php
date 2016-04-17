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

namespace BitcoinVietnam\Blinktrade\Response\GetBalance;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class GetBalance
 * @package BitcoinVietnam\Blinktrade\Response
 */
class Response
{
    /**
     * @Serializer\SerializedName("3")
     * @Serializer\Type("BitcoinVietnam\Blinktrade\Response\GetBalance\Vbtc")
     * @var Vbtc
     */
    private $vbtc;

    /**
     * @Serializer\SerializedName("MsgType")
     * @Serializer\Type("string")
     * @var string
     */
    private $msgType;

    /**
     * @Serializer\SerializedName("ClientID")
     * @Serializer\Type("integer")
     * @var int
     */
    private $clientId;

    /**
     * @Serializer\SerializedName("BalanceReqID")
     * @Serializer\Type("integer")
     * @var int
     */
    private $balanceReqId;

    /**
     * @return array
     */
    public function getVbtc()
    {
        return $this->vbtc;
    }

    /**
     * @param array $vbtc
     */
    public function setVbtc($vbtc)
    {
        $this->vbtc = $vbtc;
    }

    /**
     * @return string
     */
    public function getMsgType()
    {
        return $this->msgType;
    }

    /**
     * @param string $msgType
     */
    public function setMsgType($msgType)
    {
        $this->msgType = $msgType;
    }

    /**
     * @return int
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @param int $clientId
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;
    }

    /**
     * @return int
     */
    public function getBalanceReqId()
    {
        return $this->balanceReqId;
    }

    /**
     * @param int $balanceReqId
     */
    public function setBalanceReqId($balanceReqId)
    {
        $this->balanceReqId = $balanceReqId;
    }
}