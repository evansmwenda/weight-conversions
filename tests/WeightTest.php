<?php

use Evansmwenda\WeightConversions\Weight;

it('can convert kilograms to pounds correctly', function () {
    $pounds = Weight::kilograms(100)->toPounds();

    expect($pounds)->toEqual(220.462);
});

it('can convert kilograms to stones correctly', function () {
    $stones = Weight::kilograms(100)->toStones();

    expect($stones)->toEqual(15.747);
});
