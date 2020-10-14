<?php

namespace Janguly\ServiceClient;

use Hanson\Foundation\AbstractAPI;

class AuthService extends Api
{
    public function login()
    {
        return $this->post('/api/app/login', [
            'user_id' => $this->app->getUserId(),
            'uuid' => $this->app->getAppId(),
            'secret' => $this->app->getAppSecret(),
        ]);
    }
}