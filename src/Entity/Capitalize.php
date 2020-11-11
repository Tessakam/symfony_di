<?php


namespace App\Entity;


class Capitalize implements transform
{
    public function transform(string $string): string
    {
        $capsString = '';
        foreach (str_split($string) as $index => $char) {
            $capsString .= ($index % 2) ? strtoupper($char) : strtolower($char);
            // strtoupper - Make a string uppercase
            // strtolower - Make a string lowercase
        }
        return $capsString;
    }
}
/*
Example https://stackoverflow.com/questions/7153801/how-to-capitalize-every-other-character-in-php
*/