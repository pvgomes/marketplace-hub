<?php

namespace AppBundle\Infrastructure\Core;


use Symfony\Component\Security\Core\User\UserInterface;
use AppBundle\Domain\Core\User as UserCore;

class User extends UserCore implements UserInterface, \Serializable
{

}
