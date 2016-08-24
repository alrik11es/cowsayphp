<?php
namespace Cowsayphp;

/**
 * Class Cow FOR RETRO-COMPATIBILITY PURPOSES ONLY
 * @package Cowsayphp
 */
class Cow
{
    public static function say($text)
    {
        $cow = Farm::create('\Cowsayphp\Farm\Cow'); // @todo: Deprecate support for php <=5.5 \Cowsayphp\Farm\Cow::class
        return $cow->say($text);
    }
}