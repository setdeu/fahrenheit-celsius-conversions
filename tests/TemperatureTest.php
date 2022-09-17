<?php

use Setdeu\FahrenheitCelsiusConversions\Temperature;

test('can convert celsius to fahrenheit', function () {
    $fahrenheit = Temperature::celsius(100)->toFahrenheit();

    expect($fahrenheit)->toEqual(212);
});

test('can convert fahrenheit to celsius', function () {
    $celsius = Temperature::fahrenheit(212)->toCelsius();

    expect($celsius)->toEqual(100);
});
