<?php

declare(strict_types=1);

namespace App\Domain\User;

interface UserRepository
{
    /**
     * @return User[]
     */
    public function findAll(): array;

    /**
     * @param  int                   $id
     * @throws UserNotFoundException
     * @return User
     */
    public function findUserOfId(int $id): User;
}
