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
        $cow = Farm::create(\Cowsayphp\Farm\Cow::class);
        return $cow->say($text);
    }
}