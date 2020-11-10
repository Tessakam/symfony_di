<?php


namespace App\Entity;

// Create an interface called transform, that requires one public method called transform,
// this function accepts a string and returns a string.

interface transform
{
    public function transform(string $string);
}