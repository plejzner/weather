<?php

declare(strict_types=1);

namespace Weather;

class AmericanWeatherApiDecorator extends BaseWeatherApiDecorator
{
    private const CELSIUS_TO_FAHRENHEIT_MULTIPLIER = 9/5;
    private const CELSIUS_TO_FAHRENHEIT_ADDER = 32;

    public function getTemperature(): Temperature
    {
        $temp = parent::getTemperature();

        if ($temp->getUnit() === 'C') {
            $convertedValue = $temp->getValue()
                * self::CELSIUS_TO_FAHRENHEIT_MULTIPLIER
                + self::CELSIUS_TO_FAHRENHEIT_ADDER;

            return new Temperature($convertedValue, 'F');
        }

        return $temp;
    }
}
