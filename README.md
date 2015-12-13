# Laravel SmsGateway

The https://smsgateway.me turn your Android phone into a SMS gateway and provide a friendly API to help us send and receive SMS messages.

This package help you to send SMS through the smsGateway from your Laravel APP.

## Instructions

### 1. Download the APP on Google Play
<a href="https://play.google.com/store/apps/details?id=networked.solutions.sms.gateway.api" target="_blank"><img src="http://smsgateway.me/assets/img/badge-google-play.svg" width="200" height="65" alt="smsgateway"/></a>

### 2. Sign Up For Free
You need <a href="https://smsgateway.me/admin/users/login#signup" target="_blank">sign up</a> to use the API.

## Installation
### 1. Dependency

Using <a href="https://getcomposer.org/" target="_blank">composer</a>, execute the following command to automatically update your `composer.json`:

```shell
composer require limatheus/smsgateway
```

or manually update your `composer.json` file

```json
{
    "require": {
        "limatheus/smsgateway": "^0.0.1"
    }
}
```

### 2. Provider

You need to update your application configuration in order to register the package, so it can be loaded by Laravel. Just update your `config/app.php` file adding the following code at the end of your `'providers'` section:

```php
// file START ommited
    'providers' => [
        // other providers ommited
        Limatheus\SmsGateway\SmsGatewayServiceProvider::class,
    ],
// file END ommited
```

### 3. Facade
In order to use the `SmsGateway` facade, you need to register it on the `config/app.php` file, you can do that the following way:

```php
// config.php file
// file START ommited
    'aliases' => [
        // other Facades ommited
        'SmsGateway' => Limatheus\SmsGateway\Facade::class,
    ],
// file END ommited
```

### 4. Publishing configuration 

To publish the default configuration file, execute the following command:

```shell
php artisan vendor:publish
```

### 5. Set your credentials
In order to use the `SmsGateway`, you need set your crendials  on the `config/smsgateway.php` file, you can do that the following way:

```php
// smsgateway.php  config file
// file START ommited
    return [
        'email' => 'demo@smsgateway.me',
        'password' => 'your.password'
    ];
// file END ommited
```

 Todos
----
 - Improve the documentation
 - Code examples
 - Write Tests
 - Add Code Comments
 
License
----

MIT
