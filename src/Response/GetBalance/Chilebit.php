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
 * Class Chilebit
 * @package BitcoinVietnam\Blinktrade\Response\GetBalance
 */
class Chilebit implements BalanceInterface
{
    /**
     * @Serializer\SerializedName("BTC_locked")
     * @Serializer\Type("float")
     * @var float
     */
    private $btcLocked;

    /**
     * @Serializer\SerializedName("CLP_locked")
     * @Serializer\Type("float")
     * @var float
     */
    private $clpLocked;

    /**
     * @Serializer\SerializedName("CLP")
     * @Serializer\Type("float")
     * @var float
     */
    private $clp;

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
    public function getClpLocked()
    {
        return $this->clpLocked;
    }

    /**
     * @param float $clpLocked
     */
    public function setClpLocked($clpLocked)
    {
        $this->clpLocked = $clpLocked;
    }

    /**
     * @return float
     */
    public function getClp()
    {
        return $this->clp;
    }

    /**
     * @param float $clp
     */
    public function setClp($clp)
    {
        $this->clp = $clp;
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

    /**
     * @return float
     */
    public function getFiat()
    {
        return $this->getClp();
    }

    /**
     * @return float
     */
    public function getFiatLocked()
    {
        return $this->getClpLocked();
    }
}