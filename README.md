# cowsayphp

[![Latest Version](https://img.shields.io/github/release/alrik11es/cowsayphp.svg?style=flat-square)](https://github.com/alrik11es/cowsayphp/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/alrik11es/cowsayphp/master.svg?style=flat-square)](https://travis-ci.org/alrik11es/cowsayphp)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/alrik11es/cowsayphp.svg?style=flat-square)](https://scrutinizer-ci.com/g/alrik11es/cowsayphp/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/alrik11es/cowsayphp.svg?style=flat-square)](https://scrutinizer-ci.com/g/alrik11es/cowsayphp)
[![Total Downloads](https://img.shields.io/packagist/dt/alrik11es/cowsayphp.svg?style=flat-square)](https://packagist.org/packages/alrik11es/cowsayphp)

Do you remember classic linux Cowsay? Well this is a port for PHP if you want lovely cows everywhere in your terminal
apps.

Now supporting more animals in the farm.

## Install

Via Composer

``` bash
$ composer require alrik11es/cowsayphp
```
Requires PHP >=5.6

## Using

``` php
use Cowsayphp\Farm;

$cow = Farm::create(\Cowsayphp\Farm\Cow::class);
echo '<pre>'.$cow->say("Ohmg I'm a cow!").'</pre>';
```

The result:
    
    < Ohmg I'm a cow! >
            \   ^__^
             \  (oo)\_______
                (__)\       )\/\
                    ||----w |
                    ||     ||
    
### Other animals

_\Cowsayphp\Farm\Whale::class_

    < hello I'm a whale! >
        \
         \            ##         .
                ## ## ##        ==
             ## ## ## ## ##    ===
         /"""""""""""""""""\___/ ===
    ~~~ {~~ ~~~~ ~~~ ~~~~ ~~~ ~ /  ===- ~~~
         \______ o           __/
          \    \         __/
           \____\_______/

_\Cowsayphp\Farm\Dragon::class_

    < Dragon! >
          \                    / \  //\
           \    |\___/|      /   \//  \\
                /0  0  \__  /    //  | \ \
               /     /  \/_/    //   |  \  \
               @_^_@'/   \/_   //    |   \   \
               //_^_/     \/_ //     |    \    \
            ( //) |        \///      |     \     \
          ( / /) _|_ /   )  //       |      \     _\
        ( // /) '/,_ _ _/  ( ; -.    |    _ _\.-~        .-~~~^-.
      (( / / )) ,-{        _      `-.|.-~-.           .~         `.
     (( // / ))  '/\      /                 ~-. _ .-~      .-~^-.  \
     (( /// ))      `.   {            }                   /      \  \
      (( / ))     .----~-.\        \-'                 .~         \  `. \^-.
                 ///.----..>        \             _ -~             `.  ^-`  ^-_
                   ///-._ _ _ _ _ _ _}^ - - - - ~                     ~-- ,.-~
                 
_\Cowsayphp\Farm\Tux::class_
    
    < Tux present! >
       \
        \
            .--.
           |o_o |
           |:_/ |
          //   \ \
         (|     | )
        /'\_   _/`\
        \___)=(___/
                                                        
    
## Deprecated use

This will be deprecated in future versions. But still works.

``` php
use Cowsayphp\Cow;

echo '<pre>'.Cow::say("Ohmg I'm a cow!").'</pre>';
```

## Testing

``` bash
$ ./bin/phpunit
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Marcos Sigueros Fernández](https://github.com/alrik11es)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
