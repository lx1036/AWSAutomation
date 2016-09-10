<?php

namespace App\Console\Commands\AWS;

use Illuminate\Console\Command;

class EC2 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'aws:ec2 {user}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Init AWS EC2';

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

    }
}
