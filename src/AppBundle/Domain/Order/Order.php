<?php

namespace AppBundle\Domain\Order;

use Domain\Core;

class Order
{

    protected $id;

    protected $orderNumber;

    protected $marketOrderNumber;

    protected $sellerOrderNumber;

    protected $totalAmount;

    protected $freightAmount;

    protected $rawData;

    /**
     * @var \Domain\Core\Market
     */
    protected $market;

    /**
     * @var \Domain\Core\Seller
     */
    protected $seller;

    protected $items;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * @param mixed $orderNumber
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;
    }

    /**
     * @return mixed
     */
    public function getMarketOrderNumber()
    {
        return $this->marketOrderNumber;
    }

    /**
     * @param mixed $marketOrderNumber
     */
    public function setMarketOrderNumber($marketOrderNumber)
    {
        $this->marketOrderNumber = $marketOrderNumber;
    }

    /**
     * @return mixed
     */
    public function getSellerOrderNumber()
    {
        return $this->sellerOrderNumber;
    }

    /**
     * @param mixed $sellerOrderNumber
     */
    public function setSellerOrderNumber($sellerOrderNumber)
    {
        $this->sellerOrderNumber = $sellerOrderNumber;
    }

    /**
     * @return mixed
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * @param mixed $totalAmount
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;
    }

    /**
     * @return mixed
     */
    public function getFreightAmount()
    {
        return $this->freightAmount;
    }

    /**
     * @param mixed $freightAmount
     */
    public function setFreightAmount($freightAmount)
    {
        $this->freightAmount = $freightAmount;
    }

    /**
     * @return mixed
     */
    public function getRawData()
    {
        return $this->rawData;
    }

    /**
     * @param mixed $rawData
     */
    public function setRawData($rawData)
    {
        $this->rawData = $rawData;
    }

    /**
     * @return Core\Market
     */
    public function getMarket()
    {
        return $this->market;
    }

    /**
     * @param Core\Market $market
     */
    public function setMarket($market)
    {
        $this->market = $market;
    }

    /**
     * @return Core\Seller
     */
    public function getSeller()
    {
        return $this->seller;
    }

    /**
     * @param Core\Seller $seller
     */
    public function setSeller($seller)
    {
        $this->seller = $seller;
    }

    /**
     * @return mixed
     */
    public function getItems()
    {
        return $this->items;
    }


    /**
     * @param int $orderId
     * @throws \Exception
     */
    public function generateOrderNumber($orderId)
    {
        if (! is_int($orderId)) {
            throw new \Exception('OrderId must be a integer: '. $orderId);
        }

        $ventureKey = $this->getMarket()->getKeyName();
        if (! $ventureKey) {
            throw new \Exception('Undefined Market Key');
        }

        $number = $orderId;

        $validKeys = array('4', '2', '6', '9', '8', '7', '5', '1', '3');

        $result = '';
        $length = count($validKeys);

        while (floor($number) != 0) {
            $remainder = $number % $length;
            $result .= $validKeys[$remainder];
            $number = floor(($number - $remainder) / $length);
        }

        $venturePrefix = strtoupper(substr(
                $this->getMarket()->getKeyName(), 0, 3)
        );

        $result = $venturePrefix.'-'.str_pad($result, 10, '0', STR_PAD_LEFT);

        $this->orderNumber = $result;
    }

}

