<?php

namespace AppBundle\Domain\Product;

use Domain\Core;


interface ExternalProductRepository extends Core\RepositoryInterface
{
    /**
     * @param ExternalProduct $externalProduct
     */
    public function add(ExternalProduct $externalProduct);

    public function byProductId($productId);

    public function byProductAndMarket(Product $product, Core\Market $market);

}
