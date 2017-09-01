<?php

namespace AppBundle\Domain\Core;

use Domain\Command;
use Domain\Handler;

class CreateConfigurationHandler implements Handler
{

    /**
     * @var \Domain\Core\ConfigurationRepository
     */
    private $configurationRepository;

    /**
     * @var \Domain\Core\Market
     */
    private $market;

    public function __construct(Market $market)
    {
        $this->market = $market;
    }

    /**
     * @param ConfigurationRepository $configurationRepository
     */
    public function setConfigurationRepository($configurationRepository)
    {
        $this->configurationRepository = $configurationRepository;
    }

    public function handle(Command $command)
    {
        $this->save($command);
    }

    protected function save(Command $command)
    {
        $configuration = new Configuration();
        $configuration->setMarket($this->market);
        $configuration->setKey($command->key);
        $configuration->setValue($command->value);
        $configuration = $command->domainEntity();
        $this->configurationRepository->add($configuration);
    }
} 