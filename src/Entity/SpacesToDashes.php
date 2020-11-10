<?php


namespace App\Entity;


class SpacesToDashes implements transform
{

    public function transform(string $string)
    {
        $dash = strtolower($string);
        return str_replace(' ', '-', $dash);
    }
}