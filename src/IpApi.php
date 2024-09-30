<?php

namespace Barstec\IpApi;

use stdClass;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use Barstec\IpApi\Exceptions\IpApiException;
use GuzzleHttp\Exception\TooManyRedirectsException;

class IpApi
{
    private function getApiKey(): string
    {
        $apiKey = config('ipapi.api_key');
        if (empty($apiKey)) {
            throw IpApiException::invalidApiKey();
        }
        return $apiKey;
    }

    private function getApiUrl(?string $ip): string
    {
        $apiKey = $this->getApiKey();
        $ip = $ip ?? request()->ip();
        return config('ipapi.api_url') . '?q='.$ip . '&key=' . $apiKey;
    }

    public function get(string $ip = null): stdClass
    {
        $url = $this->getApiUrl($ip);
        $client = new Client();

        try {
            $response = $client->get($url, [
                'timeout' => config('ipapi.timeout'),
            ]);
            return json_decode($response->getBody());
        } catch (ConnectException | RequestException | TooManyRedirectsException | Exception $e) {
            throw IpApiException::invalidApiResponse($e->getMessage());
        }
    }
}
