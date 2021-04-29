<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;

use Twig\TwigFunction;

class AppExtentionExtension extends AbstractExtension
{
   

    public function getFunctions(): array
    {
        return [
            new TwigFunction('pluralize', [$this, 'pluralize']),
        ];
    }

    public function pluralize(int $count,String $singular,?String $plural = null): String
    {
        $plural ??=$singular ."s";
$str=$count===1 ? $singular : $plural;
        return "$count $str" ;   }
}
