# cowsayphp

[![Latest Version](https://img.shields.io/github/release/thephpleague/cowsayphp.svg?style=flat-square)](https://github.com/alrik11es/cowsayphp/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/thephpleague/cowsayphp/master.svg?style=flat-square)](https://travis-ci.org/alrik11es/cowsayphp)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/thephpleague/cowsayphp.svg?style=flat-square)](https://scrutinizer-ci.com/g/alrik11es/cowsayphp/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/thephpleague/cowsayphp.svg?style=flat-square)](https://scrutinizer-ci.com/g/alrik11es/cowsayphp)
[![Total Downloads](https://img.shields.io/packagist/dt/league/cowsayphp.svg?style=flat-square)](https://packagist.org/packages/league/cowsayphp)

Do you remember classic linux Cowsay? Well this is a port for PHP if you want lovely cow's everywhere in your terminal
apps.

## Install

Via Composer

``` bash
$ composer require league/cowsayphp
```

## Usage

``` php
use League\Cowsayphp\Cow;

echo '<pre>'.Cow::say("Ohmg I'm a cow!").'</pre>';
```

The result:
    
    < Ohmg I'm a cow! >
            \   ^__^
             \  (oo)\_______
                (__)\       )\/\
                    ||----w |
                    ||     ||
    
## Testing

``` bash
$ phpunit
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Marcos Sigueros Fernández](https://github.com/alrik11es)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
