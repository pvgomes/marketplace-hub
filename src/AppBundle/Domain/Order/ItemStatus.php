<?php

namespace AppBundle\Domain\Order;


class ItemStatus
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $keyName;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * @var \DateTime
     */
    protected $updatedAt;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getKeyName()
    {
        return $this->keyName;
    }

    /**
     * @param string $keyName
     */
    public function setKeyName($keyName)
    {
        $this->keyName = $keyName;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @return array
     */
    public static function listStatus()
    {
        return [
            self::STATUS_PARTNER_CREATE_ORDER      => self::STATUS_PARTNER_CREATE_ORDER,
            self::STATUS_VENTURE_CREATE_WAITING    => self::STATUS_VENTURE_CREATE_WAITING,
            self::STATUS_VENTURE_CREATE_PROCESSING => self::STATUS_VENTURE_CREATE_PROCESSING,
            self::STATUS_VENTURE_CREATE_ORDER      => self::STATUS_VENTURE_CREATE_ORDER,
            self::STATUS_PARTNER_CONFIRM_ORDER     => self::STATUS_PARTNER_CONFIRM_ORDER,
            self::STATUS_VENTURE_CONFIRM_ORDER     => self::STATUS_VENTURE_CONFIRM_ORDER,
            self::STATUS_PARTNER_SHIPPED_ORDER     => self::STATUS_PARTNER_SHIPPED_ORDER,
            self::STATUS_VENTURE_SHIPPED_ORDER     => self::STATUS_VENTURE_SHIPPED_ORDER,
            self::STATUS_PARTNER_CANCEL_ORDER      => self::STATUS_PARTNER_CANCEL_ORDER,
            self::STATUS_VENTURE_CANCEL_ORDER      => self::STATUS_VENTURE_CANCEL_ORDER,
            self::STATUS_CANCELED                  => self::STATUS_CANCELED,
            self::STATUS_PARTNER_DELIVERED_ORDER   => self::STATUS_PARTNER_DELIVERED_ORDER,
            self::STATUS_VENTURE_DELIVERED_ORDER   => self::STATUS_VENTURE_DELIVERED_ORDER,
            self::STATUS_VENTURE_DELIVERED_FAIL_ORDER  => self::STATUS_VENTURE_DELIVERED_FAIL_ORDER,
        ];
    }

    /**
     * Check if item is canceled.
     * @param Item $item
     * @return bool
     */
    public static function isCanceledItem(Item $item)
    {
        return static::isCanceledBySeller($item) || static::isCanceledByMarket($item);
    }

    /**
     * Check if item is canceled by market.
     * @param Item $item
     * @return bool
     */
    public static function isCanceledByMarket(Item $item)
    {
        $canceledStatus = [
            static::STATUS_CANCELED,
            static::STATUS_PARTNER_CANCEL_ORDER,
        ];
        return in_array($item->getStatusMarket()->getKeyName(), $canceledStatus);
    }

    /**
     * Check if item is canceled by market.
     * @param Item $item
     * @return bool
     */
    public static function isCanceledBySeller(Item $item)
    {
        $canceledStatus = [
            static::STATUS_CANCELED,
            static::STATUS_VENTURE_CANCEL_ORDER,
        ];
        return in_array($item->getStatusSeller()->getKeyName(), $canceledStatus);
    }

    public static function isShippedBySeller(Item $item)
    {
        $shippedStatus = [
            static::STATUS_VENTURE_SHIPPED_ORDER,
        ];
        return in_array($item->getStatusSeller()->getKeyName(), $shippedStatus);
    }


    public static function isDeliveredBySeller(Item $item)
    {
        $deliveredStatus = [
            static::STATUS_VENTURE_DELIVERED_ORDER,
        ];
        return in_array($item->getStatusSeller()->getKeyName(), $deliveredStatus);
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return ItemStatus
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return ItemStatus
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
