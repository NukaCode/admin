<?php namespace NukaCode\Admin\Controllers;

use Illuminate\Config\Repository;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Foundation\Application;
use NukaCode\Core\Controllers\BaseController;

class AdminController extends BaseController {

    public function __construct()
    {
        parent::__construct();

        $this->setViewLayout('layouts.admin');
    }

    public function dashboard(Filesystem $file, Repository $configRepository)
    {
        $adminConfig = base_path('admin.json');

        if ($file->exists($adminConfig)) {
            $config = json_decode($file->get($adminConfig));

            $laravelVersion = Application::VERSION;
            $packages       = $configRepository->get('packages.nukacode');

            $this->setViewData(compact('laravelVersion', 'packages', 'config'));
        } else {
            throw new \Exception('No admin.json was found!  Please run php artisan nuka:admin to generate one.');
        }
    }
}