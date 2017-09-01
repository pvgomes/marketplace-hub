<?php


namespace AppBundle\Domain\Product;


class LoadProductReport
{
    const ERROR = 'error';
    const SUCCESS = 'success';
    
    protected $id;

    protected $loadProduct;

    protected $market;

    protected $sku;

    protected $message;

    protected $type;

    protected $createdAt;

    protected $updatedAt;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set loadProduct.
     *
     * @param LoadProduct $loadProduct
     *
     * @return LoadProductReport
     */
    public function setLoadProduct(LoadProduct $loadProduct)
    {
        $this->loadProduct = $loadProduct;

        return $this;
    }

    /**
     * Get loadProduct.
     *
     * @return LoadProduct
     */
    public function getLoadProduct()
    {
        return $this->loadProduct;
    }

    public function setMarket($market)
    {
        $this->market = $market;

        return $this;
    }

    public function getMarket()
    {
        return $this->market;
    }

    /**
     * @param string $sku
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param string $message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $type
     *
     * @return LoadProductReport
     */
    public function setType($type)
    {
        if (!in_array($type, [self::ERROR, self::SUCCESS])) {
            throw new \InvalidArgumentException('Invalid type: '.$type);
        }

        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get createdAt.
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Get updatedAt.
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}
