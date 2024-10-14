<?php

namespace Evansmwenda\WeightConversions;

class Weight
{
    public function __construct(protected float $kilograms)
    {

    }

    public static function kilograms(float $kilograms): self
    {
        $myArr = ['1','2','3'];

        return new static ($kilograms);
    }

    public function toPounds()
    {
        return $this->kilograms * 2.20462;
    }
}
