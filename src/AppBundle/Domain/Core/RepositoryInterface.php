<?php

namespace AppBundle\Domain\Core;

interface RepositoryInterface
{
    /**
     * Find a entity by identification
     * @param $id
     * @return Domain Object
     */
    public function get($id);

    /**
     * Find all entities for context
     * @return array Domain Object
     */
    public function getAll();
}
