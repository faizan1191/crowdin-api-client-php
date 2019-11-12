<?php

namespace Crowdin\Api;

use Crowdin\Model\User;

/**
 * Class UserApi
 * @package Crowdin\Api
 */
class UserApi extends AbstractApi
{
    /**
     * @param array $params
     * @return mixed
     */
    public function list(array $params = [])
    {
        return $this->_list('users', User::class, $params);
    }

    /**
     * @param int $userId
     * @return User|null
     */
    public function get(int $userId): ?User
    {
        return $this->_get('user/' . $userId, User::class);
    }
}