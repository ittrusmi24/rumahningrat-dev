<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CheckDatabaseConnectionRsp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:check-database-connection-rsp';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        try {
            DB::connection('rsp_connection')->getPdo();
            $this->info('Database connection is working!');
        } catch (\Exception $e) {
            $this->error('Failed to connect to the database: ' . $e->getMessage());
        }
    }
}
