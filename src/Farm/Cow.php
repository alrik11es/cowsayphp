<?php
namespace Cowsayphp\Farm;

use Cowsayphp\AbstractAnimal;

class Cow extends AbstractAnimal
{
    /**
     * The fantastic cow string
     */
    protected $character = <<<DOC

{{bubble}}
        \   ^__^
         \  (oo)\_______
            (__)\       )\/\
                ||----w |
                ||     ||

DOC;

}