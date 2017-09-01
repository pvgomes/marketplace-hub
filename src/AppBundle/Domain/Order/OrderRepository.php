<?php

namespace AppBundle\Domain\Order;

use Domain;
use Domain\Core\Market;
use Domain\Core\Seller;


interface OrderRepository extends Domain\Core\RepositoryInterface
{
    /**
     * Persist Order in the Repository
     *
     * @param Order $order
     */
    public function add(Order $order);

    /**
     * @param string $marketOrderNumber
     * @param Domain\Core\Market $market
     * @return Order
     */
    public function getByMarketOrderNumber($marketOrderNumber, Market $market);

    /**
     * @param $sellerOrderNumber
     * @param Domain\Core\Seller $seller
     * @return Order
     */
    public function getBySellerOrderNumber($sellerOrderNumber, Seller $seller);

    /**
     * @param Domain\Core\Market $market
     * @param int $firstResult
     * @param int $maxResult
     * @param array $filter
     * @return object pagination
     */
    public function listByMarket(Market $market, $firstResult = 0, $maxResult = 20, $filter = []);

}
