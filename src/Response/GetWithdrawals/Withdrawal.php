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
 * Class Withdrawal
 * @package BitcoinVietnam\Blinktrade\Response\GetWithdrawals
 */
class Withdrawal
{
    /**
     * @Serializer\SerializedName("0")
     * @Serializer\Type("integer")
     * @var int
     */
    private $withdrawId;

    /**
     * @Serializer\SerializedName("1")
     * @Serializer\Type("string")
     * @var string
     */
    private $method;

    /**
     * @Serializer\SerializedName("2")
     * @Serializer\Type("string")
     * @var string
     */
    private $currency;

    /**
     * @Serializer\SerializedName("3")
     * @Serializer\Type("float")
     * @var float
     */
    private $amount;

    /**
     * @Serializer\SerializedName("4")
     * @Serializer\Type("BitcoinVietnam\Blinktrade\Response\GetWithdrawals\Data")
     * @var Data
     */
    private $data;

    /**
     * @Serializer\SerializedName("5")
     * @Serializer\Type("string")
     * @var string
     */
    private $created;

    /**
     * @Serializer\SerializedName("6")
     * @Serializer\Type("string")
     * @var string
     */
    private $status;

    /**
     * @Serializer\SerializedName("7")
     * @Serializer\Type("string")
     * @var string
     */
    private $reasonId;

    /**
     * @Serializer\SerializedName("8")
     * @Serializer\Type("string")
     * @var string
     */
    private $reason;

    /**
     * @Serializer\SerializedName("9")
     * @Serializer\Type("float")
     * @var float
     */
    private $percentFee;

    /**
     * @Serializer\SerializedName("10")
     * @Serializer\Type("float")
     * @var float
     */
    private $fixedFee;

    /**
     * @Serializer\SerializedName("11")
     * @Serializer\Type("float")
     * @var float
     */
    private $paidAmount;

    /**
     * @Serializer\SerializedName("12")
     * @Serializer\Type("integer")
     * @var int
     */
    private $userId;

    /**
     * @Serializer\SerializedName("13")
     * @Serializer\Type("string")
     * @var string
     */
    private $username;

    /**
     * @Serializer\SerializedName("14")
     * @Serializer\Type("integer")
     * @var int
     */
    private $brokerId;

    /**
     * @Serializer\SerializedName("15")
     * @Serializer\Type("string")
     * @var string
     */
    private $clOrdId;

    /**
     * @return int
     */
    public function getWithdrawId()
    {
        return $this->withdrawId;
    }

    /**
     * @param int $withdrawId
     */
    public function setWithdrawId($withdrawId)
    {
        $this->withdrawId = $withdrawId;
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
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return Data
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param array $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param string $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getReasonId()
    {
        return $this->reasonId;
    }

    /**
     * @param string $reasonId
     */
    public function setReasonId($reasonId)
    {
        $this->reasonId = $reasonId;
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
    }

    /**
     * @return float
     */
    public function getPercentFee()
    {
        return $this->percentFee;
    }

    /**
     * @param float $percentFee
     */
    public function setPercentFee($percentFee)
    {
        $this->percentFee = $percentFee;
    }

    /**
     * @return float
     */
    public function getFixedFee()
    {
        return $this->fixedFee;
    }

    /**
     * @param float $fixedFee
     */
    public function setFixedFee($fixedFee)
    {
        $this->fixedFee = $fixedFee;
    }

    /**
     * @return float
     */
    public function getPaidAmount()
    {
        return $this->paidAmount;
    }

    /**
     * @param float $paidAmount
     */
    public function setPaidAmount($paidAmount)
    {
        $this->paidAmount = $paidAmount;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return int
     */
    public function getBrokerId()
    {
        return $this->brokerId;
    }

    /**
     * @param int $brokerId
     */
    public function setBrokerId($brokerId)
    {
        $this->brokerId = $brokerId;
    }

    /**
     * @return string
     */
    public function getClOrdId()
    {
        return $this->clOrdId;
    }

    /**
     * @param string $clOrdId
     */
    public function setClOrdId($clOrdId)
    {
        $this->clOrdId = $clOrdId;
    }
}