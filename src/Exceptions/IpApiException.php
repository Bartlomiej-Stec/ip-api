<?php

namespace Barstec\IpApi\Exceptions;

use Barstec\IpApi\Enums\IpApiExceptionCode;
use Exception;

class IpApiException extends Exception
{
    public static function invalidIp(): self
    {
        return new self('Invalid IP address', IpApiExceptionCode::INVALID_IP->value);
    }

    public static function invalidApiKey(): self
    {
        return new self('Invalid API key', IpApiExceptionCode::INVALID_API_KEY->value);
    }

    public static function invalidApiResponse(string $message): self
    {
        return new self('Invalid API response: '.$message, IpApiExceptionCode::INVALID_API_RESPONSE->value);
    }
}
