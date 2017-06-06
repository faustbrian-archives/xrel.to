# xREL.to PHP Client

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/xrel-php-client
```

## Usage

``` php
<?php

use BrianFaust\Config;

$client = new BrianFaust\xREL\Client();
$client->setConfig(new Config([
    'clientId' => 'your-client-id',
    'clientSecret' => 'your-client-secret',
    'accessToken' => 'your-access-token'
]));

print_r($client->api('User')->info());
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to Brian Faust at hello@brianfaust.de. All security vulnerabilities will be promptly addressed.

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.de)
