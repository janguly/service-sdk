<?php

namespace Janguly\ServiceClient;

class Notify
{
    /**
     * @var JangulyService
     */
    protected $app;

    public function __construct(JangulyService $app)
    {
        $this->app = $app;
    }

    public function verify(array $request): bool
    {
        if (isset($request['timestamp'], $request['nonce'], $request['signature'])) {
            $signature = $request['signature'];

            unset($request['signature']);


            ksort($request);

            $values = [];
            foreach ($request as $key => $param) {
                $param = is_array($param) ? json_encode($param) : $param;
                $values[] = "{$key}={$param}";
            }

            return $signature === md5(base64_encode(implode('&', $values)).$this->app->getAppSecret());
        }

        throw new JangulyServiceException('缺少参数');
    }
}