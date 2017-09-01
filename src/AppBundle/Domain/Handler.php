<?php

namespace AppBundle\Domain;

interface Handler {

    public function handle(Command $command);
}
 