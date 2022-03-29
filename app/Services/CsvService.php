<?php

namespace App\Services;

use App\Interfaces\FileSystemService;

class CsvService
{
    private $fileService;

    public function __construct(FileSystemService $fileSystemService)
    {
        $this->fileService = $fileSystemService;
    }

    public function stringToCsv(string $input)
    {
        $content = implode(",", str_split($input));
        return $this->fileService->createCSV("converted.csv", $content);
    }
}
