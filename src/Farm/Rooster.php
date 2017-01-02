<?php
namespace Cowsayphp\Farm;

use Cowsayphp\AbstractAnimal;

class Rooster extends AbstractAnimal
{
    /**
     * The fantastic rooster string
     */
    protected $character = <<<DOC

      {{bubble}}
          	\
       _     \   ;-.-._
    .-" "-.   \   \.  _{
   /       \   \  /   o )_
  ;         |    ;  ,__(_<`
  |        /     |     \()
  |  /`\  (      |      ;
   \ \ |   '-..-';      |\
    '.;|   ,_ _.= \    /`|
       \  '.       '-'   |
        \   '=.         /
         '.     /     .'
           \  .'---';`
           | /  `.  |
          _||     `\\
         ` -.'-- .-'_'--.
             `"      `--

DOC;

}