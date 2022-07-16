<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MigrateInOrder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'migrate_in_order';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Execute the migrations in the order specified in the file app/Console/Comands/MigrateInOrder.php \n Drop all the table in db before execute the command.';

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
        $migrations = [
            '2014_10_12_000000_create_users_table.php',
            '2022_03_13_035022_create_rencanas_table.php',
            '2022_03_14_125343_create_timelines_table.php',
            '2022_07_11_192458_create_kerja_desks_table.php',
            '2022_03_14_135422_create_desks_table.php',
            '2022_03_22_025645_create_visits_table.php',
            '2022_04_04_141214_create_beritas_table.php',
        ];

        foreach ($migrations as $migration) {
            $basePath = 'database/migrations/';
            $migrationName = trim($migration);
            $path = $basePath . $migrationName;
            $this->call('migrate:refresh', [
                '--path' => $path,
            ]);
        }

        // return 0;
    }
}
