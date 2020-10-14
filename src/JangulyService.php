<?php

namespace Janguly\ServiceClient;

use Hanson\Foundation\Foundation;

/**
 * Class JangulyService
 *
 * @property-read AuthService         auth
 * @property-read UserService         user
 * @property-read UserInfoAuthService user_info_auth
 * @property-read AccessToken         access_token
 * @property-read Notify              notify
 * @package Janguly\ServiceClient
 */
class JangulyService extends Foundation
{
    protected $providers = [
        ServiceProvider::class,
    ];

    public function getAppSecret()
    {
        return $this->getConfig('app_secret');
    }

    public function getUserId()
    {
        return $this->getConfig('user_id');
    }

    public function getAppId()
    {
        return $this->getConfig('app_id');
    }

    public function getHost()
    {
        return $this->getConfig('host');
    }

}