
# Laravel ipapi.is integration
A package for handling the ipapi.is API in Laravel. You will need an API key from [ipapi.is](https://ipapi.is/).


## Support
If this package is helpful to you, you can support my work on Ko-fi.

[![ko-fi](https://ko-fi.com/img/githubbutton_sm.svg)](https://ko-fi.com/S6S6PH8KM)


## Installation

1. Install composer package using command:

```bash
  composer require barstec/ip-api
```

2. Publish configuration files to your project

```bash
  php artisan vendor:publish --provider="Barstec\IpApi\IpApiServiceProvider"
```
## Setup
First, add an environment variable with your API key to the `.env` file:

```bash
IP_API_KEY=your_api_key
```

## Usage

Create an **IpApi** object and call the **get** method. You can pass an IP address as a parameter. If left empty, the IP from the current request will be used. The result will be an **stdClass**.

Example of geting city location:

```php
$ipApi = new IpApi;
$result = $ipApi->get("8.8.8.8");
$result->location->city;
```

## Author

[Bartłomiej Stec ](https://github.com/Bartlomiej-Stec)


## License
This package is distributed under the
[MIT](https://choosealicense.com/licenses/mit/)
license
