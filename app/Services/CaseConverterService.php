<?php

namespace App\Services;

class CaseConverterService
{
    public function toUpperCase(string $input)
    {
        return strtoupper($input);
    }

    public function toAlternatingCase(string $input)
    {
        $splitItems = str_split($input);
        $collection = collect($splitItems);

        return $collection->map(function ($item, $key) {
            return ($key % 2 !== 0) ? strtoupper($item) : strtolower($item);
        })->implode('');
    }
}
