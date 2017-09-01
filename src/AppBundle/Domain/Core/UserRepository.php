<?php

namespace AppBundle\Domain\Core;

interface UserRepository extends RepositoryInterface
{
    /**
     * Get User by Username
     * @param $userName
     * @return mixed
     */
    public function getByUserName($userName);

    /**
     * Create and User
     * @param User $user
     * @return User
     */
    public function add(User $user);
}
