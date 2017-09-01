<?php

namespace AppBundle\Domain\Product;


class Product
{

    protected $id;

    /**
     * @var \Domain\Core\Market;
     */
    protected $market;

    /**
     * @var Category;
     */
    protected $category;

    /**
     * @var array
     */
    protected $externalProducts;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $sku;

    /**
     * @var int
     */
    protected $stock;

    /**
     * @var \Domain\Core\Price
     */
    protected $price;

    /**
     * @var \Domain\Core\Price
     */
    protected $specialPrice;

    /**
     * @var array productAttributes
     *
     */
    protected $productAttributes;

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
     * @return \Domain\Core\Market
     */
    public function getMarket()
    {
        return $this->market;
    }

    /**
     * @param \Domain\Core\Market $market
     */
    public function setMarket($market)
    {
        $this->market = $market;
    }

    /**
     * @return Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param Category $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return array
     */
    public function getExternalProducts()
    {
        return $this->externalProducts;
    }

    /**
     * @param array $externalProducts
     */
    public function setExternalProducts($externalProducts)
    {
        $this->externalProducts = $externalProducts;
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
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param string $sku
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
    }

    /**
     * @return int
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * @param int $stock
     */
    public function setStock($stock)
    {
        $this->stock = $stock;
    }

    /**
     * @return \Domain\Core\Price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param \Domain\Core\Price $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return \Domain\Core\Price
     */
    public function getSpecialPrice()
    {
        return $this->specialPrice;
    }

    /**
     * @param \Domain\Core\Price $specialPrice
     */
    public function setSpecialPrice($specialPrice)
    {
        $this->specialPrice = $specialPrice;
    }

    /**
     * @return array
     */
    public function getProductAttributes()
    {
        return $this->productAttributes;
    }

    /**
     * @param array $productAttributes
     */
    public function setProductAttributes($productAttributes)
    {
        $this->productAttributes = $productAttributes;
    }


}
