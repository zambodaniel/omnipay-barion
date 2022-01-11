<?php
namespace Omnipay\Barion\Http;

use Psr\Http\Message\RequestInterface;

class GuzzleClient extends \Omnipay\Common\Http\Client
{
    /**
     * @inheritdoc
     */
    public function sendRequest(RequestInterface $request)
    {
        return $this->request()->send($request, [
            'verify' => __DIR__ . '/../certs/cacert.pem'
        ]);
    }
}