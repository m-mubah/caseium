<?php

namespace App\Services;

use App\Interfaces\FileSystemService;
use Exception;
use Illuminate\Support\Facades\Storage;

class FileService implements FileSystemService
{
    function createCSV($path, $contents)
    {
        try {
            Storage::put("converted.csv", $contents);
            return true;
        } catch (Exception $e) {
            print_r("ERROR: an error occured saving the file.\n $e");
            return false;
        }
    }
}
