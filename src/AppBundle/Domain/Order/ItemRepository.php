<?php

namespace AppBundle\Domain\Order;

use AppBundle\Domain;

interface ItemRepository extends Domain\Core\RepositoryInterface
{

    /**
     * Persist Order in the Repository
     * @param Item $item
     * @return mixed
     */
    public function add(Domain\Order\Item $item);


}
