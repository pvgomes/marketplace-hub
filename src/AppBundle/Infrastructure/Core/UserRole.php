<?php

namespace AppBundle\Infrastructure\Core;

use Symfony\Component\Security\Core\Role\RoleInterface;

use AppBundle\Domain\Core\UserRole as CoreUserRole;

class UserRole extends CoreUserRole implements RoleInterface{}