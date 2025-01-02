<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CheckDatabaseConnection extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:check-database-connection';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check All Database Connection';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        try {
            DB::connection('rsp_connection')->getPdo();
            $this->info('Database RSP connection is working!');
            DB::connection('eces_connection')->getPdo();
            $this->info('Database ECES connection is working!');
            DB::connection('rumahningrat_connection')->getPdo();
            $this->info('Database Rumah Ningrat connection is working!');
        } catch (\Exception $e) {
            $this->error('Failed to connect to the database: ' . $e->getMessage());
        }
    }
}
