<?php

namespace AppBundle\Application\CommandBus;

use AppBundle\Domain\Command;

class CommandNameInflector {

    public function getHandler(Command $command)
    {
        return str_replace('Command', 'Handler', str_replace('AppBundle\Application\\', 'AppBundle\\Domain\\', get_class($command)));
    }
} 