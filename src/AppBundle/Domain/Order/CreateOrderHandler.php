<?php

namespace AppBundle\Domain\Order;

use AppBundle\Domain\Command;
use AppBundle\Domain\Core\Market;
use AppBundle\Domain\Core\Seller;
use AppBundle\Domain\Handler;
use AppBundle\Domain\Product\Product;
use AppBundle\Domain\Product\ProductRepository;

class CreateOrderHandler implements Handler
{

    /**
     * @var \AppBundle\Domain\Order\OrderRepository
     */
    private $orderRepository;

    /**
     * @var \AppBundle\Domain\Product\ProductRepository
     */
    private $productRepository;

    /**
     * @var \AppBundle\Domain\Core\Market
     */
    private $market;

    /**
     * @var \AppBundle\Domain\Core\Seller
     */
    private $seller;

    public function __construct(Market $market, Seller $seller)
    {
        $this->market = $market;
        $this->seller = $seller;
    }

    /**
     * @param OrderRepository $orderRepository
     */
    public function setOrderRepository(OrderRepository $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function setProductRepository(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function handle(Command $command)
    {
        return $this->save($command);
    }

    protected function save(Command $command)
    {
        $order = $command->orderEntity();
        if (!$order instanceof Order) {
            throw new \DomainException("Invalid order");
        }
        $order->setMarket($this->market);
        $order->setSeller($this->seller);
        $order->setRawData($command->orderData);
        $order->setSellerOrderNumber($command->orderId);

        $totalAmount = 0;
        foreach ($command->items as $item) {
            $orderItem = $command->itemEntity();
            $sku = (isset($item['id']))? $item['id'] : null;
            $product = $this->productRepository->bySkuAndMarket($sku, $this->market);
            if (!$product instanceof Product) {
                throw new \DomainException("Invalid product {$sku}");
            }
            $orderItem->setProduct($product);
            $totalAmount += $item['price'];
        }
        $order->setTotalAmount($totalAmount);
        $this->orderRepository->add($order);

        return $order->getOrderNumber();
    }

} 