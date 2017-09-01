<?php

namespace AppBundle\Domain\Core;

class Price
{

    /**
     * @var Money
     */
    private $original;

    /**
     * @var Money
     */
    private $special;

    /**
     * @var bool
     */
    private $hasSpecial;

    public function __construct(Money $original, Money $special)
    {
        $this->definePrices($original, $special);
    }

    protected function definePrices(Money $original, Money $special)
    {
        $this->original = $original;
        $this->hasSpecial = true;
        if ($original->amount() <= $special->amount()) {
            $special = Money::ofCurrency($special->currency());
            $this->hasSpecial = false;
        }
        $this->special = $special;
    }

    public function hasSpecial()
    {
        return $this->hasSpecial;
    }

    /**
     * @param Money $original
     */
    public function setOriginal($original)
    {
        $this->original = $original;
    }

    /**
     * @param Money $special
     */
    public function setSpecial($special)
    {
        $this->special = $special;
    }

    public function special()
    {
        return $this->special;
    }

    public function original()
    {
        return $this->original;
    }

}