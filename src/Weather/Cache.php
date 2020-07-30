<?php

declare(strict_types=1);

namespace Weather;

// Cache mock
class Cache
{
    public function has(string $key): bool
    {
        return true;
    }

    public function get(string $key)
    {
        return new Temperature(22, 'C');
    }

    public function update(string $key, $value, $validPeriod)
    {
        // update cache
    }
}
