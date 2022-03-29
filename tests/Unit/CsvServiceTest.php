<?php

use App\Interfaces\FileSystemService;
use App\Services\CsvService;
use App\Services\FileService;

test('generates_csv', function () {
    $fileSystemService = $this->createMock(FileSystemService::class);
    $fileSystemService->method('createCSV')->will($this->returnValue(true));

    $csvService = new CsvService($fileSystemService);

    $result = $csvService->stringToCsv("hello world!");

    expect($result)->toBeBool();
    expect($result)->toBe(true);
});
