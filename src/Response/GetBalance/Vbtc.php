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
 * Class Vbtc
 * @package BitcoinVietnam\Blinktrade\Response\GetBalance
 */
class Vbtc
{
    /**
     * @Serializer\SerializedName("BTC_locked")
     * @Serializer\Type("float")
     * @var float
     */
    private $btcLocked;

    /**
     * @Serializer\SerializedName("VND_locked")
     * @Serializer\Type("float")
     * @var float
     */
    private $vndLocked;

    /**
     * @Serializer\SerializedName("VND")
     * @Serializer\Type("float")
     * @var float
     */
    private $vnd;

    /**
     * @Serializer\SerializedName("BTC")
     * @Serializer\Type("float")
     * @var float
     */
    private $btc;

    /**
     * @return float
     */
    public function getBtcLocked()
    {
        return $this->btcLocked;
    }

    /**
     * @param float $btcLocked
     */
    public function setBtcLocked($btcLocked)
    {
        $this->btcLocked = $btcLocked;
    }

    /**
     * @return float
     */
    public function getVndLocked()
    {
        return $this->vndLocked;
    }

    /**
     * @param float $vndLocked
     */
    public function setVndLocked($vndLocked)
    {
        $this->vndLocked = $vndLocked;
    }

    /**
     * @return float
     */
    public function getVnd()
    {
        return $this->vnd;
    }

    /**
     * @param float $vnd
     */
    public function setVnd($vnd)
    {
        $this->vnd = $vnd;
    }

    /**
     * @return float
     */
    public function getBtc()
    {
        return $this->btc;
    }

    /**
     * @param float $btc
     */
    public function setBtc($btc)
    {
        $this->btc = $btc;
    }
}