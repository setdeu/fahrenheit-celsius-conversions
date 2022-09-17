<?php

namespace Setdeu\FahrenheitCelsiusConversions;

class Temperature
{
    protected float $celsius;
    protected float $fahrenheit;

    public function __construct(float $celsius = 0, float $fahrenheit = 0)
    {
        $this->celsius = $celsius;
        $this->fahrenheit = $fahrenheit;
    }

    public function toFahrenheit(): float
    {
        return ($this->celsius * (9 / 5)) + 32;
    }

    public function toCelsius(): float
    {
        return ($this->fahrenheit - 32) * (5 / 9);
    }

    public static function celsius(float $celsius): self
    {
        return new static($celsius);
    }

    public static function fahrenheit(float $fahrenheit): self
    {
        return new static(0, $fahrenheit);
    }
}
