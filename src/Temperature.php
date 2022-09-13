<?php

namespace Setdeu\FahrenheitCelsiusConversions;

class Temperature
{
    protected float $celsius;

    public function __construct(float $celsius)
    {
        $this->celsius = $celsius;
    }

    public function toFahrenheit(): float
    {
        return ($this->celsius * (9 / 5)) + 32;
    }

    public static function celsius(float $celsius): self
    {
        return new static($celsius);
    }
}
