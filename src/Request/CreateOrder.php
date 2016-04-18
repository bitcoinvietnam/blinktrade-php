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
 * Class CreateOrder
 * @package BitcoinVietnam\Blinktrade\Request
 */
class CreateOrder extends BaseRequest
{
    /**
     * @Serializer\SerializedName("ClOrdID")
     * @Serializer\Type("string")
     * @var string
     */
    private $clientOrderId;

    /**
     * @Serializer\SerializedName("Symbol")
     * @Serializer\Type("string")
     * @var string
     */
    private $symbol;

    /**
     * @Serializer\SerializedName("Side")
     * @Serializer\Type("string")
     * @var string
     */
    private $side;

    /**
     * @Serializer\SerializedName("OrdType")
     * @Serializer\Type("string")
     * @var string
     */
    private $type;

    /**
     * @Serializer\SerializedName("Price")
     * @Serializer\Type("integer")
     * @var int
     */
    private $price;

    /**
     * @Serializer\SerializedName("OrderQty")
     * @Serializer\Type("integer")
     * @var int
     */
    private $quantity;

    /**
     * @Serializer\SerializedName("BrokerID")
     * @Serializer\Type("integer")
     * @var int
     */
    private $brokerId;

    /**
     * CreateOrder constructor.
     */
    public function __construct()
    {
        $this->setMsgType('D');
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
}