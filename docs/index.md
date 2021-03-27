### Telerivet is an innovative mobile messaging platform that instantly connects businesses and organizations with their customers, employees, and community. No servers, programmers, expensive contracts, or shortcodes required

#### This package helps you to easily get started with integrating with Telerivet service via API made for laravel developers

[![Latest Version on Packagist](https://img.shields.io/packagist/v/epmnzava/telerivet.svg?style=flat-square)](https://packagist.org/packages/epmnzava/telerivet)
[![Build Status](https://img.shields.io/travis/epmnzava/telerivet/master.svg?style=flat-square)](https://travis-ci.org/dbrax/telerivet)
[![Quality Score](https://img.shields.io/scrutinizer/g/dbrax/telerivet.svg?style=flat-square)](https://scrutinizer-ci.com/g/dbrax/telerivet)
[![Total Downloads](https://img.shields.io/packagist/dt/epmnzava/telerivet.svg?style=flat-square)](https://packagist.org/packages/epmnzava/telerivet)



## Installation

You can install the package via composer:

```bash
composer require epmnzava/telerivet
```

## Update your config (for Laravel 5.4 and below)

Add the service provider to the providers array in config/app.php:

```php
Epmnzava\Telerivet\TelerivetServiceProvider::class,
```
Add the facade to the aliases array in config/app.php:

```php
'Sms' =>Epmnzava\Telerivet\TelerivetFacade,
```

## Publish the package configuration (for Laravel 5.4 and below)

Publish the configuration file and migrations by running the provided console command:

```bash
php artisan vendor:publish --provider="Epmnzava\Telerivet\TelerivetServiceProvider" --tag="config"
```
### Environmental Variables


- TELERIVET_API_ID ` your provided telerivet project id `<br/>

- TELERIVET_API_KEY ` your provided telerivet application  key `<br/>

- TELERIVET_WEB_HOOK ` COMING SOON  `<br/>



## Usage

## Sending sms
``` php
// coming soon ...

<?php
use Epmnzava\Telerivet\Telerivet;

class SendNotification extends Controller
{
    
public function send_sms(){

       $sms=new Telerivet;

       $result=$sms->send_sms("+255679079774","This is a hellow world text");
       
       

       echo json_encode($result);


}



```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email epmnzava@gmail.com instead of using the issue tracker.

## Credits

- [Emmanuel Mnzava](https://github.com/dbrax)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
