<?php

declare(strict_types=1);

namespace Cortex\Categories\Console\Commands;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cortex:install:categories';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install Cortex Categories Module.';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle(): void
    {
        $this->warn($this->description);

        $this->call('cortex:migrate:categories');
        $this->call('cortex:seed:categories');
        $this->call('cortex:publish:categories');
    }
}
