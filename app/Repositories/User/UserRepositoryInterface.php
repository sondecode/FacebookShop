<?php

namespace App\Repositories\User;

use App\Repositories\RepositoryInterface;

interface UserRepositoryInterface extends RepositoryInterface
{
    /**
     * update profile
     *
     * @param  array $data
     * @return bool
     */
    public function updateProfile($data);

    /**
     * create user
     *
     * @param  array $data
     * @return bool
     */
    public function createUser($data);

    /**
     * update user
     *
     * @param  array $data
     * @return bool
     */
    public function updateUser($data);

    /**
     * get all users
     *
     * @return array
     */
    public function getUsers();
}
