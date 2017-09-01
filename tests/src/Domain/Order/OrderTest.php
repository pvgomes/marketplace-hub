<?php

namespace AppBundle\Domain\Order;

use AppBundle\Domain\Core;
use AppBundle\Domain\Order\Order;


class OrderTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function testItCanGenerateDifferentOrderNumber()
    {
        $market = new Core\Market();
        $market->setKeyName("tricae");
        $order = new Order();
        $order->setId(1);
        $order->setMarket($market);
        $order->generateOrderNumber(1);

        $anotherOrder = new Order();
        $anotherOrder->setId(2);
        $anotherOrder->setMarket($market);
        $anotherOrder->generateOrderNumber(2);

        $this->assertNotEquals($order->getOrderNumber(), $anotherOrder->getOrderNumber());
    }

    /**
     * @test
     */
    public function testItCanGenerateNotSequentialOrderNumber()
    {
        $market = new Core\Market();
        $market->setKeyName("tricae");
        $order = new Order();
        $order->setId(1);
        $order->setMarket($market);
        $order->generateOrderNumber(1);

        $anotherOrder = new Order();
        $anotherOrder->setId(2);
        $anotherOrder->setMarket($market);
        $anotherOrder->generateOrderNumber(2);

        $this->assertNotEquals($order->getOrderNumber() + 1, $anotherOrder->getOrderNumber());
    }


}
