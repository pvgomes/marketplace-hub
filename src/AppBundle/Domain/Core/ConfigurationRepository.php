<?php

namespace AppBundle\Domain\Core;

interface ConfigurationRepository extends RepositoryInterface
{
    /**
     * Find Configuration By Key only active status
     *
     * @param string $key
     *
     * @return Configuration
     */
    public function getByKey($key);

    public function getByMarket(Market $venture);

    /**
     * Persist Configuration in the Repository
     *
     * @param Configuration $configuration
     */
    public function add(Configuration $configuration);

    /**
     * Inactive configuration
     * @param Configuration $configuration
     * @return Configuration
     */
    public function inactive(Configuration $configuration);
}
