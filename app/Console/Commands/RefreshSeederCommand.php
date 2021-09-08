<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RefreshSeederCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'seeding:s';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seeding for Account Admin and Category Structure';

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
        // $this->call(
        //     'db:seed --class=CategoryStructuresTableSeeder',
        // );
        $this->call(
            'db:seed --class=AccountTableSeeder',
        );

        $this->info('All database has been seeded');
    }
}
