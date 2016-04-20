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

namespace BitcoinVietnam\Blinktrade\Response\CreateBitcoinWithdrawal;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class BalanceResponse
 * @package BitcoinVietnam\Blinktrade\Response\CreateBitcoinWithdrawal
 */
class BalanceResponse
{
    /**
     * @Serializer\SerializedName("MsgType")
     * @Serializer\Type("string")
     * @var string
     */
    private $msgType;

    /**
     * @Serializer\SerializedName("1")
     * @Serializer\Type("BitcoinVietnam\Blinktrade\Response\CreateBitcoinWithdrawal\Surbitcoin")
     * @var Surbitcoin
     */
    private $surbitcoin;

    /**
     * @Serializer\SerializedName("3")
     * @Serializer\Type("BitcoinVietnam\Blinktrade\Response\CreateBitcoinWithdrawal\Vbtc")
     * @var Vbtc
     */
    private $vbtc;

    /**
     * @Serializer\SerializedName("4")
     * @Serializer\Type("BitcoinVietnam\Blinktrade\Response\CreateBitcoinWithdrawal\Foxbit")
     * @var Foxbit
     */
    private $foxbit;

    /**
     * @Serializer\SerializedName("5")
     * @Serializer\Type("BitcoinVietnam\Blinktrade\Response\CreateBitcoinWithdrawal\Testnet")
     * @var Testnet
     */
    private $testnet;

    /**
     * @Serializer\SerializedName("8")
     * @Serializer\Type("BitcoinVietnam\Blinktrade\Response\CreateBitcoinWithdrawal\Urdubit")
     * @var Urdubit
     */
    private $urdubit;

    /**
     * @Serializer\SerializedName("9")
     * @Serializer\Type("BitcoinVietnam\Blinktrade\Response\CreateBitcoinWithdrawal\Chilebit")
     * @var Chilebit
     */
    private $chilebit;

    /**
     * @Serializer\SerializedName("ClientID")
     * @Serializer\Type("integer")
     * @var int
     */
    private $clientId;

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
     * @return mixed
     */
    public function getSurbitcoin()
    {
        return $this->surbitcoin;
    }

    /**
     * @param mixed $surbitcoin
     */
    public function setSurbitcoin($surbitcoin)
    {
        $this->surbitcoin = $surbitcoin;
    }

    /**
     * @return Vbtc
     */
    public function getVbtc()
    {
        return $this->vbtc;
    }

    /**
     * @param Vbtc $vbtc
     */
    public function setVbtc($vbtc)
    {
        $this->vbtc = $vbtc;
    }

    /**
     * @return Foxbit
     */
    public function getFoxbit()
    {
        return $this->foxbit;
    }

    /**
     * @param Foxbit $foxbit
     */
    public function setFoxbit($foxbit)
    {
        $this->foxbit = $foxbit;
    }

    /**
     * @return Testnet
     */
    public function getTestnet()
    {
        return $this->testnet;
    }

    /**
     * @param Testnet $testnet
     */
    public function setTestnet($testnet)
    {
        $this->testnet = $testnet;
    }

    /**
     * @return Urdubit
     */
    public function getUrdubit()
    {
        return $this->urdubit;
    }

    /**
     * @param Urdubit $urdubit
     */
    public function setUrdubit($urdubit)
    {
        $this->urdubit = $urdubit;
    }

    /**
     * @return Chilebit
     */
    public function getChilebit()
    {
        return $this->chilebit;
    }

    /**
     * @param Chilebit $chilebit
     */
    public function setChilebit($chilebit)
    {
        $this->chilebit = $chilebit;
    }

    /**
     * @return mixed
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @param mixed $clientId
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;
    }
}