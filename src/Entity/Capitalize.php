<?php


namespace App\Entity;


class Capitalize implements transform
{

    public function transform(string $string): string
    {
        // TODO: Implement transform() method.

        $newString="";
        foreach (str_split($string) as $index => $char){
            $newString = strtoupper($char);
        }
        return $newString;
    }
}