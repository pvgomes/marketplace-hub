<?php

namespace AppBundle\Domain\Core;

interface SellerRepository extends RepositoryInterface
{
    /**
     * Find Market By Key-Name
     *
     * @param string $keyName
     *
     * @return Market
     */
    public function byKeyName($keyName);

    public function byKeyNameAndToken($keyName, $token);

    /**
     * Create an Seller
     * @param Seller $seller
     * @return Seller
     */
    public function add(Seller $seller);
}
