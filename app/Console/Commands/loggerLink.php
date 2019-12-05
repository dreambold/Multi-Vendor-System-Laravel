<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class loggerLink extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'logger:link';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'link for  logger controller';

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
     * @return mixed
     */
    public function handle()
    {
        exec('rm vendor/arcanedev/log-viewer/src/Http/Controllers/LogViewerController.php');
        exec('cp app/Http/Controllers/LogViewerController.php vendor/arcanedev/log-viewer/src/Http/Controllers/LogViewerController.php');
        echo('Logger link created successfully');
    }
}
