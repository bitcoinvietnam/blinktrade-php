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

namespace BitcoinVietnam\Blinktrade\Response\CreateBitcoinDeposit;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class Response
 * @package BitcoinVietnam\Blinktrade\Response\CreateBitcoinDeposit
 */
class Response
{
    /**
     * @Serializer\SerializedName("DepositReqID")
     * @Serializer\Type("integer")
     * @var int
     */
    private $depositReqId;

    /**
     * @Serializer\SerializedName("MsgType")
     * @Serializer\Type("string")
     * @var string
     */
    private $msgType;

    /**
     * @Serializer\SerializedName("DepositMethodID")
     * @Serializer\Type("integer")
     * @var int
     */
    private $depositMethodId;

    /**
     * @Serializer\SerializedName("DepositMethodName")
     * @Serializer\Type("string")
     * @var string
     */
    private $depositMethodName;

    /**
     * @Serializer\SerializedName("DepositID")
     * @Serializer\Type("string")
     * @var string
     */
    private $depositId;

    /**
     * @Serializer\SerializedName("UserID")
     * @Serializer\Type("integer")
     * @var int
     */
    private $userId;

    /**
     * @Serializer\SerializedName("ControlNumber")
     * @Serializer\Type("string")
     * @var string
     */
    private $controlNumber;

    /**
     * @Serializer\SerializedName("Type")
     * @Serializer\Type("string")
     * @var string
     */
    private $type;

    /**
     * @Serializer\SerializedName("Username")
     * @Serializer\Type("string")
     * @var string
     */
    private $username;

    /**
     * @Serializer\SerializedName("AccountID")
     * @Serializer\Type("integer")
     * @var int
     */
    private $accountId;

    /**
     * @Serializer\SerializedName("Data")
     * @Serializer\Type("BitcoinVietnam\Blinktrade\Response\CreateBitcoinDeposit\Data")
     * @var Data
     */
    private $data;

    /**
     * @Serializer\SerializedName("ClOrdID")
     * @Serializer\Type("string")
     * @var string
     */
    private $clientOrderId;

    /**
     * @Serializer\SerializedName("Status")
     * @Serializer\Type("string")
     * @var string
     */
    private $status;

    /**
     * @Serializer\SerializedName("Created")
     * @Serializer\Type("string")
     * @var string
     */
    private $created;

    /**
     * @Serializer\SerializedName("BrokerID")
     * @Serializer\Type("integer")
     * @var int
     */
    private $brokerId;

    /**
     * @Serializer\SerializedName("Value")
     * @Serializer\Type("float")
     * @var float
     */
    private $value;

    /**
     * @Serializer\SerializedName("PaidValue")
     * @Serializer\Type("float")
     * @var float
     */
    private $paidValue;

    /**
     * @Serializer\SerializedName("Currency")
     * @Serializer\Type("string")
     * @var string
     */
    private $currency;

    /**
     * @Serializer\SerializedName("ReasonID")
     * @Serializer\Type("string")
     * @var string
     */
    private $reasonId;

    /**
     * @Serializer\SerializedName("Reason")
     * @Serializer\Type("string")
     * @var string
     */
    private $reason;

    /**
     * @Serializer\SerializedName("PercentFee")
     * @Serializer\Type("float")
     * @var float
     */
    private $percentFee;

    /**
     * @Serializer\SerializedName("FixedFee")
     * @Serializer\Type("integer")
     * @var int
     */
    private $fixedFee;

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
    public function getDepositMethodId()
    {
        return $this->depositMethodId;
    }

    /**
     * @param int $depositMethodId
     */
    public function setDepositMethodId($depositMethodId)
    {
        $this->depositMethodId = $depositMethodId;
    }

    /**
     * @return string
     */
    public function getDepositMethodName()
    {
        return $this->depositMethodName;
    }

    /**
     * @param string $depositMethodName
     */
    public function setDepositMethodName($depositMethodName)
    {
        $this->depositMethodName = $depositMethodName;
    }

    /**
     * @return string
     */
    public function getDepositId()
    {
        return $this->depositId;
    }

    /**
     * @param string $depositId
     */
    public function setDepositId($depositId)
    {
        $this->depositId = $depositId;
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
    public function getControlNumber()
    {
        return $this->controlNumber;
    }

    /**
     * @param string $controlNumber
     */
    public function setControlNumber($controlNumber)
    {
        $this->controlNumber = $controlNumber;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
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
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @param int $accountId
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
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

    /**
     * @return string
     */
    public function getClientOrderId()
    {
        return $this->clientOrderId;
    }

    /**
     * @param string $clientOrderId
     */
    public function setClientOrderId($clientOrderId)
    {
        $this->clientOrderId = $clientOrderId;
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
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param float $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return float
     */
    public function getPaidValue()
    {
        return $this->paidValue;
    }

    /**
     * @param float $paidValue
     */
    public function setPaidValue($paidValue)
    {
        $this->paidValue = $paidValue;
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
     * @return int
     */
    public function getFixedFee()
    {
        return $this->fixedFee;
    }

    /**
     * @param int $fixedFee
     */
    public function setFixedFee($fixedFee)
    {
        $this->fixedFee = $fixedFee;
    }
}