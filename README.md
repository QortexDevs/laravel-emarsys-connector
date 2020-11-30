# Provides connection to Emarsys Omnichannel Customer Engagement Platform API v2

## Install

``` sh
$ composer require qortex/laravel-emarsys-connector
$ php artisan vendor:publish
```

## Use

First, obtain credentials for [Emarsys API User](https://help.emarsys.com/hc/en-us/articles/115004740329-your-account-security-settings#api-users).

Then, use these credentials as username and secret in `config/emarsys.php` file or via environmental variables:
```php
return [
    'username' => env('EMARSYS_USERNAME', ''),
    'secret' => 'env('EMARSYS_SECRET', ''),
];
```

Optionally, you can change Emarsys API url (which defaults to `https://api.emarsys.net/api/v2/`) if you are behing reverse proxy or something"
```php
return [
    'username' => env('EMARSYS_USERNAME', ''),
    'secret' => 'env('EMARSYS_SECRET', ''),
    'apiUrl' => 'env('EMARSYS_API_URL', ''),
];
```

Then, get instance of `EmarsysConnector` from `ConnectorService`:
``` php
use Qortex\Emarsys\Services\Connector as EmarsysConnector;
use Qortex\Laravel\Emarsys\Services\ConnectorService as EmarsysConnectorService;

$emarsysConnector = new EmarsysConnectorService()->getConnector();
```
Finally you can use methods of the `EmarsysConnector` described in [qortex/php-emarsys-connector](https://github.com/QortexDevs/php-emarsys-connector) package
