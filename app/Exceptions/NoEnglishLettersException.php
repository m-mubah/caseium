<?php

namespace App\Exceptions;

use Exception;

class NoEnglishLettersException extends Exception
{
    public function __construct()
    {
        parent::__construct("Input must contain atleast one english letter!");
    }
}
