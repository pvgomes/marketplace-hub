<?php

namespace AppBundle\Domain\Product;


class ExternalProduct
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var AppBundle\Domain\Core\Seller
     */
    protected $seller;

    /**
     * @var AppBundle\Domain\Product\Product
     */
    protected $product;

    /**
     * @var string
     */
    protected $sku;

    /**
     * @var string
     */
    protected $json;

    /**
     * @var string
     */
    protected $status;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return AppBundle\Domain\Core\Seller
     */
    public function getSeller()
    {
        return $this->seller;
    }

    /**
     * @param AppBundle\Domain\Core\Seller $seller
     */
    public function setSeller($seller)
    {
        $this->seller = $seller;
    }

    /**
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param Product $product
     */
    public function setProduct($product)
    {
        $this->product = $product;
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
     * @return string
     */
    public function getJson()
    {
        return $this->json;
    }

    /**
     * @param string $json
     */
    public function setJson($json)
    {
        $this->json = $json;
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


}
