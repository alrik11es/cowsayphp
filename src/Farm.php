<?php

namespace Cowsayphp;

class Farm
{
    /**
     * @param $animal
     * @return AnimalInterface
     */
    public static function create($animal)
    {
        $result = null;
        if(class_exists($animal)) {
            $result = new $animal;
        }
        return $result;
    }
}