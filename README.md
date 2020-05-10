# Laravel Nova External Image Field

An external image field for Laravel Nova

[![Latest Version on Packagist](https://img.shields.io/packagist/v/chaseconey/nova-external-image.svg?style=flat-square)](https://packagist.org/packages/chaseconey/nova-external-image)
[![Total Downloads](https://img.shields.io/packagist/dt/chaseconey/nova-external-image.svg?style=flat-square)](https://packagist.org/packages/chaseconey/nova-external-image)

![Index](https://raw.githubusercontent.com/chaseconey/nova-external-image/master/screenshots/index-ss.png)
![Detail](https://raw.githubusercontent.com/chaseconey/nova-external-image/master/screenshots/detail-ss.png)

## Installation

Install the package into a Laravel app that uses [Nova](https://nova.laravel.com) with Composer:

```bash
composer require chaseconey/nova-external-image
```

## Usage

Add the field to your resource in the `fields` method:

```php
use Chaseconey\ExternalImage\ExternalImage;

ExternalImage::make('Image')
```

The field extends the `Laravel\Nova\Fields\Text` field, so all the usual methods are available.

### Options

##### Prefix

Prepend the image field with a prefix path. This is useful if you don't store the absolute path of images, but instead point to a cdn.

```php
ExternalImage::make('Image')
    ->prefix('https://example.com/'),
```

##### Width

Set the width of the image  (in pixels).

```php
ExternalImage::make('Image')
    ->width(32),
```

##### Height

Set the height of the image (in pixels).

```php
ExternalImage::make('Image')
    ->height(32),
```

##### Radius

Set the border radius of the image (in pixels).

```php
ExternalImage::make('Image')
    ->radius(32),
```

##### Avatar

Set the image with avatar-like style (rounded and fixed height + width).

```php
ExternalImage::make('Image')
    ->avatar(),
```

### Search Avatar

If you want the external image to act as an [Avatar](https://nova.laravel.com/docs/2.0/resources/fields.html#avatar-field) in the search box use `ExternalImageAsAvatar` instead of `ExternalImage`
