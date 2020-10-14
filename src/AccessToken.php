<?php


namespace Janguly\ServiceClient;


use Hanson\Foundation\AbstractAccessToken;

/**
 * Class AccessToken
 *
 * @property-read JangulyService $app
 * @package Janguly\ServiceClient
 */
class AccessToken extends AbstractAccessToken
{
    protected $tokenJsonKey = 'token';

    protected $expiresJsonKey = 'expired_in';

    public function getCacheKey()
    {
        return 'janguly.service.access_token:'.$this->app->getUserId().$this->app->getAppId();
    }

    public function getTokenFromServer()
    {
        return $this->app->auth->login();
    }

    public function checkTokenResponse($result)
    {

    }
}