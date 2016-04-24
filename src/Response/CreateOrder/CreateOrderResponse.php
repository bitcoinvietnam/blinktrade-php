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
 * portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A
 * PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 * COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN
 * ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH
 * THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace BitcoinVietnam\Blinktrade\Response\CreateOrder;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class BalanceResponse
 * @package BitcoinVietnam\Blinktrade\Response\CreateOrder
 */
class CreateOrderResponse
{
    /**
     * @Serializer\SerializedName("MsgType")
     * @Serializer\Type("string")
     * @var string
     */
    private $msgType;

    /**
     * @Serializer\SerializedName("OrderID")
     * @Serializer\Type("integer")
     * @var int
     */
    private $orderId;

    /**
     * @Serializer\SerializedName("Volume")
     * @Serializer\Type("integer")
     * @var int
     */
    private $volume;

    /**
     * @Serializer\SerializedName("ExecID")
     * @Serializer\Type("integer")
     * @var int
     */
    private $execId;

    /**
     * @Serializer\SerializedName("ExecType")
     * @Serializer\Type("string")
     * @var string
     */
    private $execType;

    /**
     * @Serializer\SerializedName("OrdStatus")
     * @Serializer\Type("string")
     * @var string
     */
    private $orderStatus;

    /**
     * @Serializer\SerializedName("LeavesQty")
     * @Serializer\Type("integer")
     * @var int
     */
    private $openQuantity;

    /**
     * @Serializer\SerializedName("Symbol")
     * @Serializer\Type("string")
     * @var string
     */
    private $symbol;

    /**
     * @Serializer\SerializedName("OrderQty")
     * @Serializer\Type("integer")
     * @var int
     */
    private $orderQuantity;

    /**
     * @Serializer\SerializedName("LastShares")
     * @Serializer\Type("integer")
     * @var int
     */
    private $lastShares;

    /**
     * @Serializer\SerializedName("LastPx")
     * @Serializer\Type("float")
     * @var float
     */
    private $lastPrice;

    /**
     * @Serializer\SerializedName("CxlQty")
     * @Serializer\Type("integer")
     * @var int
     */
    private $cancelledQuantity;

    /**
     * @Serializer\SerializedName("TimeInForce")
     * @Serializer\Type("string")
     * @var string
     */
    private $timeInForce;

    /**
     * @Serializer\SerializedName("CumQty")
     * @Serializer\Type("integer")
     * @var int
     */
    private $executedQuantity;

    /**
     * @Serializer\SerializedName("ClOrdID")
     * @Serializer\Type("string")
     * @var string
     */
    private $clientOrderId;

    /**
     * @Serializer\SerializedName("OrdType")
     * @Serializer\Type("string")
     * @var string
     */
    private $orderType;

    /**
     * @Serializer\SerializedName("OrdRejReason")
     * @Serializer\Type("string")
     * @var string
     */
    private $orderRejectReason;

    /**
     * @Serializer\SerializedName("Side")
     * @Serializer\Type("string")
     * @var string
     */
    private $side;

    /**
     * @Serializer\SerializedName("Price")
     * @Serializer\Type("float")
     * @var float
     */
    private $price;

    /**
     * @Serializer\SerializedName("ExecSide")
     * @Serializer\Type("string")
     * @var string
     */
    private $execSide;

    /**
     * @Serializer\SerializedName("AvgPx")
     * @Serializer\Type("float")
     * @var float
     */
    private $avgPrice;

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
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param int $orderId
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * @return mixed
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * @param mixed $volume
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;
    }

    /**
     * @return int
     */
    public function getExecId()
    {
        return $this->execId;
    }

    /**
     * @param int $execId
     */
    public function setExecId($execId)
    {
        $this->execId = $execId;
    }

    /**
     * @return string
     */
    public function getExecType()
    {
        return $this->execType;
    }

    /**
     * @param string $execType
     */
    public function setExecType($execType)
    {
        $this->execType = $execType;
    }

    /**
     * @return string
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * @param string $orderStatus
     */
    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus = $orderStatus;
    }

    /**
     * @return int
     */
    public function getOpenQuantity()
    {
        return $this->openQuantity;
    }

    /**
     * @param int $openQuantity
     */
    public function setOpenQuantity($openQuantity)
    {
        $this->openQuantity = $openQuantity;
    }

    /**
     * @return string
     */
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * @param string $symbol
     */
    public function setSymbol($symbol)
    {
        $this->symbol = $symbol;
    }

    /**
     * @return int
     */
    public function getOrderQuantity()
    {
        return $this->orderQuantity;
    }

    /**
     * @param int $orderQuantity
     */
    public function setOrderQuantity($orderQuantity)
    {
        $this->orderQuantity = $orderQuantity;
    }

    /**
     * @return int
     */
    public function getLastShares()
    {
        return $this->lastShares;
    }

    /**
     * @param int $lastShares
     */
    public function setLastShares($lastShares)
    {
        $this->lastShares = $lastShares;
    }

    /**
     * @return float
     */
    public function getLastPrice()
    {
        return $this->lastPrice;
    }

    /**
     * @param float $lastPrice
     */
    public function setLastPrice($lastPrice)
    {
        $this->lastPrice = $lastPrice;
    }

    /**
     * @return int
     */
    public function getCancelledQuantity()
    {
        return $this->cancelledQuantity;
    }

    /**
     * @param int $cancelledQuantity
     */
    public function setCancelledQuantity($cancelledQuantity)
    {
        $this->cancelledQuantity = $cancelledQuantity;
    }

    /**
     * @return string
     */
    public function getTimeInForce()
    {
        return $this->timeInForce;
    }

    /**
     * @param string $timeInForce
     */
    public function setTimeInForce($timeInForce)
    {
        $this->timeInForce = $timeInForce;
    }

    /**
     * @return int
     */
    public function getExecutedQuantity()
    {
        return $this->executedQuantity;
    }

    /**
     * @param int $executedQuantity
     */
    public function setExecutedQuantity($executedQuantity)
    {
        $this->executedQuantity = $executedQuantity;
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
    public function getOrderType()
    {
        return $this->orderType;
    }

    /**
     * @param string $orderType
     */
    public function setOrderType($orderType)
    {
        $this->orderType = $orderType;
    }

    /**
     * @return string
     */
    public function getOrderRejectReason()
    {
        return $this->orderRejectReason;
    }

    /**
     * @param string $orderRejectReason
     */
    public function setOrderRejectReason($orderRejectReason)
    {
        $this->orderRejectReason = $orderRejectReason;
    }

    /**
     * @return string
     */
    public function getSide()
    {
        return $this->side;
    }

    /**
     * @param string $side
     */
    public function setSide($side)
    {
        $this->side = $side;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getExecSide()
    {
        return $this->execSide;
    }

    /**
     * @param string $execSide
     */
    public function setExecSide($execSide)
    {
        $this->execSide = $execSide;
    }

    /**
     * @return float
     */
    public function getAvgPrice()
    {
        return $this->avgPrice;
    }

    /**
     * @param float $avgPrice
     */
    public function setAvgPrice($avgPrice)
    {
        $this->avgPrice = $avgPrice;
    }
}