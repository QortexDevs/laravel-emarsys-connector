# Proivdes Laravel wrapper for [qortex/php-emarsys-connector](https://github.com/QortexDevs/php-emarsys-connector) package

## Install

``` sh
$ composer require qortex/laravel-emarsys-connector
$ php artisan vendor:publish
```

## Use

First, obtain credentials for [Emarsys API User](https://help.emarsys.com/hc/en-us/articles/115004740329-your-account-security-settings#api-users).

Then, use these credentials as username and secret in `config/emarsys.php` file:
```php
return [
    'username' => 'username',
    'secret' => 'secret',
];
```

Then, get instance of `EmarsysConnector` from `ConnectorService`:
``` php
use Qortex\Emarsys\Services\Connector as EmarsysConnector;
use Qortex\Laravel\Emarsys\Services\ConnectorService as EmarsysConnectorService;

$emarsysConnector = new EmarsysConnectorService()->getConnector();
```
Finally you can use methods of the `EmarsysConnector` described in [qortex/php-emarsys-connector](https://github.com/QortexDevs/php-emarsys-connector) package