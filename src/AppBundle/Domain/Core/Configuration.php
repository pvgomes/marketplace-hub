<?php

namespace AppBundle\Domain\Core;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

class Configuration
{

    Const STATUS_ACTIVE = 1;
    Const STATUS_INACTIVE = 0;

    Const VALUE_TYPE_ARRAY = "array";
    Const VALUE_TYPE_OBJECT = "object";
    Const VALUE_TYPE_JSON = "json";

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     *
     */
    protected $key;

    /**
     * @var string
     *
     */
    protected $value;

    /**
     * @var Market;
     */
    protected $market;

    /**
     * @var bool
     *
     */
    protected $status = self::STATUS_ACTIVE;



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
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param string $key
     */
    public function setKey($key)
    {
        $this->key = $key;
    }

    /**
     * @param string $type
     * @return it depends of type request
     */
    public function getValue($type = self::VALUE_TYPE_JSON)
    {
        switch ($type) {
            case self::VALUE_TYPE_ARRAY:
                $value = json_decode($this->value, true);
                if (!$value) {
                    $value = [$this->value];
                }
                break;
            case self::VALUE_TYPE_OBJECT:
                $value = json_decode($this->value);
                if (!$value) {
                    $value = (object) [$this->value];
                }
                break;
            default:
                $value = $this->value;
                break;
        }
        return $value;
    }

    /**
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
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
    public function setMarket(Market $market)
    {
        $this->market = $market;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }


}
