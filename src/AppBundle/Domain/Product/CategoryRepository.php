<?php

namespace AppBundle\Domain\Product;

use Domain\Core;

interface CategoryRepository extends Core\RepositoryInterface
{
    /**
     * List All categories by Market
     * @param Core\Market $market
     * @param int $firstResult
     * @param int $maxResult
     * @param array $filter
     * @return array
     */
    public function listByMarket(Core\Market $market, $firstResult = 0, $maxResult = 20, $filter = []);

    /**
     * Add Category to collection
     * @param Category $category
     * @return mixed
     */
    public function add(Category $category);

}
