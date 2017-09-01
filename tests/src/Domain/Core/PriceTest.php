<?php

namespace AppBundle\Domain\Core;

use AppBundle\Domain\Core;


class PriceTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function hasSpecialWhenIsLessValue()
    {
        $original = new Core\Money(100, new Core\Currency('BRL'));
        $special = new Core\Money(80, new Core\Currency('BRL'));
        $price = new Core\Price($original, $special);
        $this->assertTrue($price->hasSpecial());
    }

    /**
     * @test
     */
    public function notHasSpecialWhenIsBiggerValue()
    {
        $special = new Core\Money(100, new Core\Currency('BRL'));
        $original = new Core\Money(80, new Core\Currency('BRL'));
        $price = new Core\Price($original, $special);
        $this->assertFalse($price->hasSpecial());
    }

}
