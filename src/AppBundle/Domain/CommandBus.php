<?php
/**
 * Created by PhpStorm.
 * User: pvgomes
 * Date: 11/9/15
 * Time: 9:56 AM
 */

namespace AppBundle\Domain;

interface CommandBus {

    public function execute(Command $command);

} 