# Laravel Nova External Image Field
An external image field for Laravel Nova

[![Latest Version on Packagist](https://img.shields.io/packagist/v/chaseconey/nova-external-image.svg?style=flat-square)](https://packagist.org/packages/chaseconey/nova-external-image)
[![Total Downloads](https://img.shields.io/packagist/dt/chaseconey/nova-external-image.svg?style=flat-square)](https://packagist.org/packages/chaseconey/nova-external-image)

## Installation

Install the package into a Laravel app that uses [Nova](https://nova.laravel.com) with Composer:

```bash
composer require chaseconey/nova-external-image
```

## Usage

Add the field to your resource in the ```fields``` method:
```php
use Chaseconey\ExternalImage\ExternalImage;

ExternalImage::make('Image')
```

The field extends the `Laravel\Nova\Fields\Text` field, so all the usual methods are available.

### Options
#### Prefix
Prepend the image field with a prefix path. This is useful if you don't store the absolute path of images, but instead point to a cdn.

```php
ExternalImage::make('Image')
    ->prefix('https://example.com/'),
```
