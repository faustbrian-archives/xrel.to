# xREL.to PHP Client

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/xrel-php-client
```

## Usage

``` php
<?php

$client = new BrianFaust\xREL\Client([
    'client_id' => 'your_client_id',
    'client_secret' => 'your_client_secret',
    'access_token' => 'your_access_token' # Use https://github.com/xrelease/oauth2-xrel to retrieve the access token
]);

dump($client->api('User')->info()->json());
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to Brian Faust at hello@brianfaust.me. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.me)
