<?php


namespace App\Entity;


class Capitalize implements transform
{

    public function transform(string $string): string
    {
        $newString = '';
        foreach (str_split($string) as $index => $char) {
            $newString .= ($index % 2) ? strtoupper($char) : strtolower($char);
            // strtoupper - Make a string uppercase
            // strtolower - Make a string lowercase
        }
        $logMessage = new LoggerInfo();
        $logMessage->logInfo($newString);
        return $newString;
    }
}

/*
Example https://stackoverflow.com/questions/7153801/how-to-capitalize-every-other-character-in-php
function capitalize($string){
    $return= "";
    foreach(explode(" ",$string) as $w){
        foreach(str_split($w) as $k=>$v) {
            if(($k+1)%2!=0 && ctype_alpha($v)){
                $return .= mb_strtoupper($v);
            }else{
                $return .= $v;
            }
        }
        $return .= " ";
    }
    return $return;
}
echo capitalize("text")
 */