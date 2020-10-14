<?php


namespace Janguly\ServiceClient;


use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['user'] = function (JangulyService $service) {
            return new UserService($service);
        };

        $pimple['auth'] = function (JangulyService $service) {
            return new AuthService($service);
        };

        $pimple['user_info_auth'] = function (JangulyService $service) {
            return new UserInfoAuthService($service);
        };

        $pimple['access_token'] = function (JangulyService $service) {
            return new AccessToken($service);
        };

        $pimple['notify'] = function (JangulyService $service) {
            return new Notify($service);
        };
    }

}