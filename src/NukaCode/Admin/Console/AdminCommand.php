<?php namespace NukaCode\Admin\Console;

use Illuminate\Console\Command;
use NukaCode\Admin\Filesystem\AdminConfig;

class AdminCommand extends Command {

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'nuka:admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Compile all admin.json files from NukaCode packages.';

    private $filesystem;

    public function __construct(AdminConfig $filesystem)
    {
        parent::__construct();

        $this->filesystem = $filesystem;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function fire()
    {
		$this->filesystem->runAdminConfigs();
    }
} 