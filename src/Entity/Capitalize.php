<?php


namespace App\Entity;


class Capitalize implements Transform
{
    public function transform(string $string): string
    {
        // TODO: Implement transform() method.
        //Split int char array
        return strtoupper($string);
    }
}