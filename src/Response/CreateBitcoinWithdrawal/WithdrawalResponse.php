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
 * Class WithdrawalResponse
 * @package BitcoinVietnam\Blinktrade\Response\CreateBitcoinWithdrawal
 */
class WithdrawalResponse
{
    /**
     * @Serializer\SerializedName("MsgType")
     * @Serializer\Type("string")
     * @var string
     */
    private $msgType;

    /**
     * @Serializer\SerializedName("WithdrawReqID")
     * @Serializer\Type("integer")
     * @var int
     */
    private $withdrawReqId;

    /**
     * @Serializer\SerializedName("WithdrawID")
     * @Serializer\Type("integer")
     * @var int
     */
    private $withdrawId;

    /**
     * @Serializer\SerializedName("UserID")
     * @Serializer\Type("integer")
     * @var int
     */
    private $userId;

    /**
     * @Serializer\SerializedName("Username")
     * @Serializer\Type("string")
     * @var string
     */
    private $username;

    /**
     * @Serializer\SerializedName("Method")
     * @Serializer\Type("string")
     * @var string
     */
    private $method;

    /**
     * @Serializer\SerializedName("BrokerID")
     * @Serializer\Type("integer")
     * @var int
     */
    private $brokerId;

    /**
     * @Serializer\SerializedName("ClOrdID")
     * @Serializer\Type("string")
     * @var string
     */
    private $clientOrderId;

    /**
     * @Serializer\SerializedName("Created")
     * @Serializer\Type("string")
     * @var string
     */
    private $created;

    /**
     * @Serializer\SerializedName("Currency")
     * @Serializer\Type("string")
     * @var string
     */
    private $currency;

    /**
     * @Serializer\SerializedName("Data")
     * @Serializer\Type("BitcoinVietnam\Blinktrade\Response\CreateBitcoinWithdrawal\Data")
     * @var Data
     */
    private $data;

    /**
     * @Serializer\SerializedName("FixedFee")
     * @Serializer\Type("integer")
     * @var int
     */
    private $fixedFee;

    /**
     * @Serializer\SerializedName("PercentFee")
     * @Serializer\Type("float")
     * @var float
     */
    private $percentFee;

    /**
     * @Serializer\SerializedName("PaidAmount")
     * @Serializer\Type("float")
     * @var float
     */
    private $paidAmount;

    /**
     * @Serializer\SerializedName("Reason")
     * @Serializer\Type("string")
     * @var string
     */
    private $reason;

    /**
     * @Serializer\SerializedName("ReasonID")
     * @Serializer\Type("string")
     * @var string
     */
    private $reasonId;

    /**
     * @Serializer\SerializedName("Status")
     * @Serializer\Type("string")
     * @var string
     */
    private $status;

    /**
     * @return mixed
     */
    public function getMsgType()
    {
        return $this->msgType;
    }

    /**
     * @param mixed $msgType
     */
    public function setMsgType($msgType)
    {
        $this->msgType = $msgType;
    }

    /**
     * @return mixed
     */
    public function getWithdrawReqId()
    {
        return $this->withdrawReqId;
    }

    /**
     * @param mixed $withdrawReqId
     */
    public function setWithdrawReqId($withdrawReqId)
    {
        $this->withdrawReqId = $withdrawReqId;
    }

    /**
     * @return mixed
     */
    public function getWithdrawId()
    {
        return $this->withdrawId;
    }

    /**
     * @param mixed $withdrawId
     */
    public function setWithdrawId($withdrawId)
    {
        $this->withdrawId = $withdrawId;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param mixed $method
     */
    public function setMethod($method)
    {
        $this->method = $method;
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

    /**
     * @return mixed
     */
    public function getClientOrderId()
    {
        return $this->clientOrderId;
    }

    /**
     * @param mixed $clientOrderId
     */
    public function setClientOrderId($clientOrderId)
    {
        $this->clientOrderId = $clientOrderId;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param mixed $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
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
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getFixedFee()
    {
        return $this->fixedFee;
    }

    /**
     * @param mixed $fixedFee
     */
    public function setFixedFee($fixedFee)
    {
        $this->fixedFee = $fixedFee;
    }

    /**
     * @return mixed
     */
    public function getPercentFee()
    {
        return $this->percentFee;
    }

    /**
     * @param mixed $percentFee
     */
    public function setPercentFee($percentFee)
    {
        $this->percentFee = $percentFee;
    }

    /**
     * @return mixed
     */
    public function getPaidAmount()
    {
        return $this->paidAmount;
    }

    /**
     * @param mixed $paidAmount
     */
    public function setPaidAmount($paidAmount)
    {
        $this->paidAmount = $paidAmount;
    }

    /**
     * @return mixed
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param mixed $reason
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
    }

    /**
     * @return mixed
     */
    public function getReasonId()
    {
        return $this->reasonId;
    }

    /**
     * @param mixed $reasonId
     */
    public function setReasonId($reasonId)
    {
        $this->reasonId = $reasonId;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }
}