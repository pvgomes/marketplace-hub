<?php

namespace AppBundle\Domain\Product;


class LoadProduct
{

    /**
     * @var int
     */
    protected $id;

    /**
     * @var AppBundle\Domain\Core\User
     *
     */
    protected $user;

    /**
     * @var AppBundle\Domain\Core\Seller
     */
    protected $seller;

    /**
     * @var AppBundle\Domain\Core\Market
     */
    protected $market;

    protected $loadProductReports;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var int
     */
    protected $quantity;

    /**
     * @var int
     */
    protected $republish;

    /**
     * @var \DateTime
     *
     */
    protected $createdAt;

    /**
     * @var \DateTime
     *
     */
    protected $updatedAt;

    public $file;

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
     * @return AppBundle\Domain\Core\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param AppBundle\Domain\Core\User $user
     */
    public function setUser($user)
    {
        $this->user = $user;
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
     * @return AppBundle\Domain\Core\Market
     */
    public function getMarket()
    {
        return $this->market;
    }

    /**
     * @param AppBundle\Domain\Core\Market $market
     */
    public function setMarket($market)
    {
        $this->market = $market;
    }

    /**
     * @return mixed
     */
    public function getLoadProductReports()
    {
        return $this->loadProductReports;
    }

    /**
     * @param mixed $loadProductReports
     */
    public function setLoadProductReports($loadProductReports)
    {
        $this->loadProductReports = $loadProductReports;
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
    public function getRepublish()
    {
        return $this->republish;
    }

    /**
     * @param int $republish
     */
    public function setRepublish($republish)
    {
        $this->republish = $republish;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param mixed $file
     */
    public function setFile($file)
    {
        $this->file = $file;
    }

}
