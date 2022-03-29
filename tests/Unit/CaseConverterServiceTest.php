<?php

use App\Services\CaseConverterService;

test('toUpperCase_ConvertsCorrectly', function () {
    $caseConverterService = new CaseConverterService();

    $result = $caseConverterService->toUpperCase("hello world");

    expect($result)->toBeString();
    expect($result)->toBe("HELLO WORLD");
});

test('toAlternatingCase_ConvertsCorrectly', function () {
    $caseConverterService = new CaseConverterService();

    $result = $caseConverterService->toAlternatingCase("hello world");

    expect($result)->toBeString();
    expect($result)->toBe("hElLo wOrLd");
});
