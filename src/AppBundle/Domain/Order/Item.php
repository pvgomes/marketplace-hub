<?php

namespace AppBundle\Domain\Order;

class Item
{
    Const ADDITIONS_TRACKING = "tracking";
    Const ADDITIONS_NFE = "nfe";

    protected $id;

    protected $order;

    protected $product;

    protected $total;

    protected $statusMarket;

    protected $statusSeller;

    protected $sellerId;

    protected $stateMarket;

    protected $stateSeller;

    protected $itemStatusHistory;

    protected $additions;

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
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param mixed $order
     */
    public function setOrder($order)
    {
        $this->order = $order;
    }

    /**
     * @return mixed
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param mixed $product
     */
    public function setProduct($product)
    {
        $this->product = $product;
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param mixed $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

    /**
     * @return mixed
     */
    public function getStatusMarket()
    {
        return $this->statusMarket;
    }

    /**
     * @param mixed $statusMarket
     */
    public function setStatusMarket($statusMarket)
    {
        $this->statusMarket = $statusMarket;
    }

    /**
     * @return mixed
     */
    public function getStatusSeller()
    {
        return $this->statusSeller;
    }

    /**
     * @param mixed $statusSeller
     */
    public function setStatusSeller($statusSeller)
    {
        $this->statusSeller = $statusSeller;
    }

    /**
     * @return mixed
     */
    public function getSellerId()
    {
        return $this->sellerId;
    }

    /**
     * @param mixed $sellerId
     */
    public function setSellerId($sellerId)
    {
        $this->sellerId = $sellerId;
    }

    /**
     * @return mixed
     */
    public function getStateMarket()
    {
        return $this->stateMarket;
    }

    /**
     * @param mixed $stateMarket
     */
    public function setStateMarket($stateMarket)
    {
        $this->stateMarket = $stateMarket;
    }

    /**
     * @return mixed
     */
    public function getStateSeller()
    {
        return $this->stateSeller;
    }

    /**
     * @param mixed $stateSeller
     */
    public function setStateSeller($stateSeller)
    {
        $this->stateSeller = $stateSeller;
    }

    /**
     * @return mixed
     */
    public function getItemStatusHistory()
    {
        return $this->itemStatusHistory;
    }

    /**
     * @param mixed $itemStatusHistory
     */
    public function setItemStatusHistory($itemStatusHistory)
    {
        $this->itemStatusHistory = $itemStatusHistory;
    }

    /**
     * @return mixed
     */
    public function getAdditions()
    {
        return $this->additions;
    }

    /**
     * @param mixed $additions
     */
    public function setAdditions($additions)
    {
        $this->additions = $additions;
    }

    public function addAdditions($index, $value)
    {
        $unserializedAdditions = [];
        $additions = $this->getAdditions();
        if ($additions) {
            $unserializedAdditions = json_decode($additions, true);
        }
        $unserializedAdditions[$index] = $value;

        $this->setAdditions(json_encode($unserializedAdditions));
    }

}
