<?php

namespace AppBundle\Domain\Product;

use AppBundle\Domain\Core;

interface ProductRepository extends Core\RepositoryInterface
{

    /**
     * Add Product to collection
     * @param Product $product
     */
    public function add(Product $product);

    public function bySkuAndMarket($sku, Core\Market $market);

    public function activeExternalProducts(array $skus, Core\Market $market, Core\Seller $seller);

    public function bySkuAndMarketId($sku, $marketId);

    public function listByMarket(Core\Market $market, $firstResult = 0, $maxResult = 20, $filter = []);

}
