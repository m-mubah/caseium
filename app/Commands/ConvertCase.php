<?php

namespace App\Commands;

use App\Exceptions\NoEnglishLettersException;
use App\Services\CaseConverterService;
use App\Services\CsvService;
use App\Validators\ContainsEnglishAlphabetValidator;
use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

class ConvertCase extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'convert-case';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Prompts the user for a string and converts the given string to uppercase, alternating case and generates a csv.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(CaseConverterService $caseConverterService, CsvService $csvService, ContainsEnglishAlphabetValidator $validator)
    {
        $this->info("Enter a string to convert: ");
        $input  = fgets(STDIN);

        $validator->validate($input);

        $this->info($caseConverterService->toUpperCase($input));
        $this->info($caseConverterService->toAlternatingCase($input));
        $this->info($csvService->stringToCsv($input) === true ? "CSV created!" : "");
    }

    /**
     * Define the command's schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    public function schedule(Schedule $schedule): void
    {
        // $schedule->command(static::class)->everyMinute();
    }
}
