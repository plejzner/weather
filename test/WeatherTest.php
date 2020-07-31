<?php

declare(strict_types=1);

namespace Test;

use PHPUnit\Framework\TestCase;
use Weather\AmericanWeatherApiDecorator;
use Weather\CachedWeatherApiDecorator;
use Weather\WeatherApiClient;

class WeatherTest extends TestCase
{
    const EXPECTED_TEMPERATURE_VALUE = 71.6;
    const EXPECTED_TEMPERATURE_UNIT = 'F';

    public function test_if_temperature_is_correct_after_going_through_caching_and_converting_decorators()
    {
        $cachedAmericanClient = new AmericanWeatherApiDecorator(
            new CachedWeatherApiDecorator(
                new WeatherApiClient()
            )
        );

        $temp = $cachedAmericanClient->getTemperature();

        self::assertEquals(self::EXPECTED_TEMPERATURE_VALUE, $temp->getValue());
        self::assertEquals(self::EXPECTED_TEMPERATURE_UNIT, $temp->getUnit());
    }
}