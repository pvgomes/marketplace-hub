<?php

namespace AppBundle\Domain\Core;

use AppBundle\Domain\Core;


class MoneyTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function copiedMoneyShouldRepresentSameValue()
    {
        $aMoney = new Core\Money(100, new Core\Currency('USD'));
        $copiedMoney = Core\Money::fromMoney($aMoney);
        $this->assertTrue($aMoney->equals($copiedMoney));
    }

    /**
     * @test
     */
    public function originalMoneyShouldNotBeModifiedOnAddition()
    {
        $aMoney = new Core\Money(100, new Core\Currency('USD'));
        $aMoney->add(new Core\Money(20, new Core\Currency('USD')));
        $this->assertEquals(100, $aMoney->amount());
    }

    /**
     * @test
     */
    public function moneysShouldBeAdded()
    {
        $aMoney = new Core\Money(100, new Core\Currency('USD'));
        $newMoney = $aMoney->add(new Core\Money(20, new Core\Currency('USD')));
        $this->assertEquals(120, $newMoney->amount());
    }

}
