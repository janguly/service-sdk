<?php


namespace Janguly\ServiceClient;


use Hanson\Foundation\AbstractAPI;

/**
 * Class Api
 *
 * @property-read JangulyService $app
 * @package Janguly\ServiceClient
 */
class Api extends AbstractAPI
{
    public function post($url, array $forms)
    {
        return @json_decode(
            $this->getHttp()->post($this->app->getHost().$url, $forms)->getBody()->__toString(), true
        );
    }

    public function get($url, array $queries)
    {
        return @json_decode(
            $this->getHttp()->get($this->app->getHost().$url, $queries)->getBody()->__toString(), true
        );
    }
}