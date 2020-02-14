# Laravel Photo

[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/kodekeep/laravel-photo/run-tests?label=tests)](https://github.com/kodekeep/laravel-photo/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Code Coverage](https://badgen.now.sh/codecov/c/github/kodekeep/laravel-photo)](https://codecov.io/gh/kodekeep/laravel-photo)
[![Minimum PHP Version](https://badgen.net/packagist/php/kodekeep/laravel-photo)](https://packagist.org/packages/kodekeep/laravel-photo)
[![Latest Version](https://badgen.net/packagist/v/kodekeep/laravel-photo)](https://packagist.org/packages/kodekeep/laravel-photo)
[![Total Downloads](https://badgen.net/packagist/dt/kodekeep/laravel-photo)](https://packagist.org/packages/kodekeep/laravel-photo)
[![License](https://badgen.net/packagist/license/kodekeep/laravel-photo)](https://packagist.org/packages/kodekeep/laravel-photo)

> Attach Photos to Laravel Eloquent Models.

## Installation

```bash
composer require kodekeep/laravel-photo
```

## Usage

``` php
use KodeKeep\Photo\Concerns\HasPhoto;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasPhoto;
}
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@kodekeep.com. All security vulnerabilities will be promptly addressed.

## Credits

This project exists thanks to all the people who [contribute](../../contributors).

## License

Mozilla Public License Version 2.0 (MPL-2.0). Please see [License File](LICENSE.md) for more information.
