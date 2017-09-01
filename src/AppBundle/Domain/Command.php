<?php
/**
 * Created by PhpStorm.
 * User: pvgomes
 * Date: 11/9/15
 * Time: 9:56 AM
 */

namespace AppBundle\Domain;

interface Command {

    public function repositories();

    public function eventName();

    public function eventNameError();

}