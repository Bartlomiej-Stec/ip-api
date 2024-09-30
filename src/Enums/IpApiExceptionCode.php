<?php

namespace Barstec\IpApi\Enums;

enum IpApiExceptionCode: int
{
    case INVALID_IP = 400;
    case INVALID_API_KEY = 401;
    case INVALID_API_RESPONSE = 500;
}
