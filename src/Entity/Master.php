<?php


namespace App\Entity;


class Master
{
    private $weirdCapitalization;


    public function __construct(transform $weirdCapitalization)
    {
        $this->weirdCapitalization = $weirdCapitalization;
    }

    public function weirdCapitalization($string): string
    {
        return $this->weirdCapitalization;
    }


}