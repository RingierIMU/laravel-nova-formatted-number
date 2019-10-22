# Laravel Nova Formatted Number Field

This package allows the user to set up a field in Nova that is formatted using the [numeral.js](http://numeraljs.com/) library.

## Installation

You can install the package via composer:

```bash
composer require marcuschristiansen/laravel-nova-formatted-number
```

## Usage

```php
use Marcuschristiansen\FormattedNumber;

FormattedNumber::make('Price')
    ->format('0,0')   // Defaults to "0,0"
```

## License

The MIT License (MIT).
