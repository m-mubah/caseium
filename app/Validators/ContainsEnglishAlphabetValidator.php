<?php

namespace App\Validators;

use App\Exceptions\NoEnglishLettersException;

class ContainsEnglishAlphabetValidator implements Validator
{
    function validate($input)
    {
        $pattern = "/[a-zA-Z]/";

        if (!preg_match($pattern, $input)) {
            throw new NoEnglishLettersException();
        }

        return true;
    }
}
