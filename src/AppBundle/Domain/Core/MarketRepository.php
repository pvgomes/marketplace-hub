<?php

namespace AppBundle\Domain\Core;

interface MarketRepository extends RepositoryInterface
{
    /**
     * Find Market By KeyName
     * @param $keyName
     * @return Market
     */
    public function byKeyName($keyName);

    /**
     * Find Market By KeyName and token
     * @param $keyName
     * @param $token
     * @return Market
     */
    public function byKeyNameAndToken($keyName, $token);

    /**
     * Create an Market
     * @param Market $market
     * @return Market
     */
    public function add(Market $market);
}
