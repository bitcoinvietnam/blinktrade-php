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

namespace BitcoinVietnam\Blinktrade\Response\GetOrders;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class Order
 * @package BitcoinVietnam\Blinktrade\Response\GetOrders
 */
class Order
{
    /**
     * @Serializer\SerializedName("0")
     * @Serializer\Type("string")
     * @var string
     */
    private $clientOrderId;

    /**
     * @Serializer\SerializedName("1")
     * @Serializer\Type("integer")
     * @var int
     */
    private $orderId;

    /**
     * @Serializer\SerializedName("2")
     * @Serializer\Type("float")
     * @var float
     */
    private $executedQuantity;

    /**
     * @Serializer\SerializedName("3")
     * @Serializer\Type("string")
     * @var string
     */
    private $orderStatus;

    /**
     * @Serializer\SerializedName("4")
     * @Serializer\Type("float")
     * @var float
     */
    private $openQuantity;

    /**
     * @Serializer\SerializedName("5")
     * @Serializer\Type("float")
     * @var float
     */
    private $cancelledQuantity;

    /**
     * @Serializer\SerializedName("6")
     * @Serializer\Type("integer")
     * @var int
     */
    private $averagePrice;

    /**
     * @Serializer\SerializedName("7")
     * @Serializer\Type("string")
     * @var string
     */
    private $symbol;

    /**
     * @Serializer\SerializedName("8")
     * @Serializer\Type("string")
     * @var string
     */
    private $side;

    /**
     * @Serializer\SerializedName("9")
     * @Serializer\Type("string")
     * @var string
     */
    private $type;

    /**
     * @Serializer\SerializedName("10")
     * @Serializer\Type("integer")
     * @var int
     */
    private $quantity;

    /**
     * @Serializer\SerializedName("11")
     * @Serializer\Type("integer")
     * @var int
     */
    private $price;

    /**
     * @Serializer\SerializedName("12")
     * @Serializer\Type("string")
     * @var string
     */
    private $date;

    /**
     * @Serializer\SerializedName("13")
     * @Serializer\Type("float")
     * @var float
     */
    private $volume;

    /**
     * @Serializer\SerializedName("14")
     * @Serializer\Type("integer")
     * @var int
     */
    private $timeInForce;

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
     * @return float
     */
    public function getExecutedQuantity()
    {
        return $this->executedQuantity;
    }

    /**
     * @param float $executedQuantity
     */
    public function setExecutedQuantity($executedQuantity)
    {
        $this->executedQuantity = $executedQuantity;
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
     * @return float
     */
    public function getOpenQuantity()
    {
        return $this->openQuantity;
    }

    /**
     * @param float $openQuantity
     */
    public function setOpenQuantity($openQuantity)
    {
        $this->openQuantity = $openQuantity;
    }

    /**
     * @return float
     */
    public function getCancelledQuantity()
    {
        return $this->cancelledQuantity;
    }

    /**
     * @param float $cancelledQuantity
     */
    public function setCancelledQuantity($cancelledQuantity)
    {
        $this->cancelledQuantity = $cancelledQuantity;
    }

    /**
     * @return int
     */
    public function getAveragePrice()
    {
        return $this->averagePrice;
    }

    /**
     * @param int $averagePrice
     */
    public function setAveragePrice($averagePrice)
    {
        $this->averagePrice = $averagePrice;
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
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return float
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * @param float $volume
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;
    }

    /**
     * @return int
     */
    public function getTimeInForce()
    {
        return $this->timeInForce;
    }

    /**
     * @param int $timeInForce
     */
    public function setTimeInForce($timeInForce)
    {
        $this->timeInForce = $timeInForce;
    }
}