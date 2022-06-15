<?php

namespace Webit\Dashboard;

use Illuminate\Console\Command;

class Dashboard2Command extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'webit:dashboard';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $d = new Dashboard();

        $this->info($d->done());

        return 0;
    }
}
