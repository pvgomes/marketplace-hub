<?php

namespace AppBundle\Domain\Core;

use AppBundle\Domain\Command;
use AppBundle\Domain\Handler;

class CreateConfigurationHandler implements Handler
{

    /**
     * @var AppBundle\Domain\Core\ConfigurationRepository
     */
    private $configurationRepository;

    /**
     * @var AppBundle\Domain\Core\Market
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