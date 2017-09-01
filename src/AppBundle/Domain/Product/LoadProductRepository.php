<?php

namespace AppBundle\Domain\Product;

use Domain;

interface LoadProductRepository extends Domain\Core\RepositoryInterface
{
    /**
     * @param LoadProduct $loadProduct
     */
    public function add(LoadProduct $loadProduct);

    /**
     * @param LoadProduct $loadProduct
     * @param $sku
     * @param $message
     * @param Domain\Core\Market $market
     * @param string $type
     */
    public function addReport(Domain\Product\LoadProduct $loadProduct, $sku, $message, Domain\Core\Market $market = null, $type);

    /**
     * @param LoadProduct $loadProduct
     * @param $sku
     * @param $message
     * @param Domain\Core\Market $market
     */
    public function addErrors(LoadProduct $loadProduct, $sku, $message, Domain\Core\Market $market = null);

    /**
     * @param LoadProduct $loadProduct
     * @param $sku
     * @param $message
     * @param Domain\Core\Market $market
     */
    public function addSuccess(LoadProduct $loadProduct, $sku, $message, Domain\Core\Market $market = null);

    /**
     * @param UserInterface $user
     * @return mixed
     */
    public function getByUser(UserInterface $user);

    /**
     * @param int $loadId
     * @return array
     */
    public function getLoadReportCount($loadId);

}
