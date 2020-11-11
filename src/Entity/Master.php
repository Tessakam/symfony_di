<?php

// Now make a "master" class that accepts a user input (simple form with 1 field). It should do the following.
//    You log the message
//    You echo it to the screen using the weird capitalization
namespace App\Entity;


class Master
{
    private $weirdCapitalization;

    //typehint transform so we use same interface (polymorphism)
    public function __construct(string $weirdCapitalization, transform $transform)
    {
        $this->weirdCapitalization = $transform->transform($weirdCapitalization);
    }

    public function getWeirdCapitalization()
    {
        return $this->weirdCapitalization;
    }
}