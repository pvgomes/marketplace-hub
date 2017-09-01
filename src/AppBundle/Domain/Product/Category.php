<?php

namespace AppBundle\Domain\Product;


use AppBundle\Domain\Core\Market;

class Category
{

    protected $id;

    /**
     * @var Market;
     */
    protected $market;

    /**
     * @var array categoryAttributes
     *
     */
    protected $categoryAttributes;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $nameKey;

    /**
     * @var string
     */
    protected $categoryMarketId;

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
     * @return Market
     */
    public function getMarket()
    {
        return $this->market;
    }

    /**
     * @param Market $market
     */
    public function setMarket($market)
    {
        $this->market = $market;
    }

    /**
     * @return array
     */
    public function getCategoryAttributes()
    {
        return $this->categoryAttributes;
    }

    /**
     * @param array $categoryAttributes
     */
    public function setCategoryAttributes($categoryAttributes)
    {
        $this->categoryAttributes = $categoryAttributes;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getNameKey()
    {
        return $this->nameKey;
    }

    /**
     * @param string $nameKey
     */
    public function setNameKey($nameKey)
    {
        $this->nameKey = $nameKey;
    }

    /**
     * @return string
     */
    public function getCategoryMarketId()
    {
        return $this->categoryMarketId;
    }

    /**
     * @param string $categoryMarketId
     */
    public function setCategoryMarketId($categoryMarketId)
    {
        $this->categoryMarketId = $categoryMarketId;
    }

}
