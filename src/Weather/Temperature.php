<?php

declare(strict_types=1);

namespace Weather;

use InvalidArgumentException;

class Temperature
{
    const CELSIUS_UNIT = 'C';
    const FAHRENHEIT_UNIT = 'F';
    const VALID_UNITS = [self::CELSIUS_UNIT, self::FAHRENHEIT_UNIT];

    private float $value;
    private string $unit;

    public function __construct(float $value, string $unit)
    {
        if (!in_array($unit, self::VALID_UNITS)) {
            throw new InvalidArgumentException('invalid unit');
        }

        $this->value = $value;
        $this->unit = $unit;
    }

    public function getValue(): float
    {
        return $this->value;
    }

    public function getUnit(): string
    {
        return $this->unit;
    }

    public function __toString(): string
    {
        return $this->value . ' ' . $this->unit;
    }
}
