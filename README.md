# slvler - Phone Validation

[![tests](https://github.com/slvler/phone-validation/actions/workflows/tests.yml/badge.svg)](https://github.com/slvler/phone-validation/actions/workflows/tests.yml)
[![Latest Stable Version](https://poser.pugx.org/slvler/phone-validation/v)](https://packagist.org/packages/slvler/phone-validation)
[![Latest Unstable Version](https://poser.pugx.org/slvler/phone-validation/v/unstable)](https://packagist.org/packages/slvler/phone-validation)
[![License](https://poser.pugx.org/slvler/phone-validation/license)](https://packagist.org/packages/slvler/phone-validation)
[![Total Downloads](https://poser.pugx.org/slvler/phone-validation/downloads)](https://packagist.org/packages/slvler/phone-validation)

Phone Validation API for app.abstractapi.com

Abstract's Phone Number Validation and Verification API is a fast, lightweight, modern, and RESTful JSON API for determining the validity and other details of phone numbers from over 190 countries.

It's very simple to use: you only need to submit your API key and a phone number, and the API will respond as assessment of its validity, as well as additional details like the carrier details, line type, region and city details, and more.

Validating and verifying phone numbers is a critical step to reducing the chances of low quality data and fraudulent or risky users in your website or application.


## Installation

To install this package tou can use composer:

```bash
composer require slvler/phone-validation
```
## Usage

- First, you should extract the config/phone.php file to the config folder. 

```php
php artisan vendor:publish --tag=phone
```

- First of all we'll add the API key and API Url of the service we're using to our .env file of our project. If you don't have an account yet on app.abstractapi.com, you should create one. Once you have an account you can copy your API key from the dashboard page and put it into you .env file.

```php
ABSTRACT_BASE_URL=https://phonevalidation.abstractapi.com
ABSTRACT_API_KEY=YOUR-API-KEY
```

- Abstract's Phone Number Validation and Verification API simply requires your unique API key and the phone number you'd like to check:

```php
use slvler\PhoneValidation\Phone;

Phone::getData('14152007986');
```

- This was a successful request, so the valid phone number and details associated with it are returned below:

```json
{
    "phone": "14152007986",
    "valid": true,
    "format": 
    {
        "international": "+14152007986",
        "local": "(415) 200-7986"
    },
    "country": 
    {
        "code": "US",
        "name": "United States",
        "prefix": "+1"
    },
    "location": "California",
    "type": "mobile",
    "carrier": "T-Mobile USA, Inc."
}
```

### Testing

```bash
composer test
```

## Credits

- [slvler](https://github.com/slvler)

## License

The MIT License (MIT). Please see [License File](https://github.com/slvler/phone-validation/blob/main/README.md) for more information.
