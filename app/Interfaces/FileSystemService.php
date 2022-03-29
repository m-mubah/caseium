<?php

namespace App\Interfaces;

interface FileSystemService
{
    function createCSV($path, $contents);
}
