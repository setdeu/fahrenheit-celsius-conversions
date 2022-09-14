<?php

use Setdeu\FahrenheitCelsiusConversions\Temperature;

test('can convert celsius to fahrenheit', function () {
    $fahrenheit = Temperature::celsius(200)->toFahrenheit();

    expect($fahrenheit)->toEqual(212);
});
