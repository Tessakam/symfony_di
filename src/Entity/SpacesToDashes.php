<?php


namespace App\Entity;


class SpacesToDashes implements transform
{
    public function transform(string $string)
    {
        $dashString = strtolower($string);
        return str_replace(' ', '-', $dashString);
    }
}