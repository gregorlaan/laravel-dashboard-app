<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Reader;

class GenerateReading extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:reading';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate Gas Readings';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $readers = Reader::all();

        foreach ($readers as $reader) {
            // First because items are already ordered by Desc
            $lastVal = $reader->readings()->get()->first()->value ?? 0;
            $nextVal = $lastVal + 25;
            $reader->readings()->create(['value' => $nextVal]);
        }

        return true;
    }
}
