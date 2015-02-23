<?php namespace NukaCode\Admin\Filesystem;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Validation\Factory;
use NukaCode\Core\Filesystem\Core;

class AdminConfig extends Core {

    protected $file;

    protected $validator;

    /**
     * @param Filesystem $file
     * @param Factory    $validator
     */
    public function __construct(Filesystem $file, Factory $validator)
    {
        $this->file      = $file;
        $this->validator = $validator;
    }

    public function runAdminConfigs()
    {
        $nukaDirectories = $this->file->directories(base_path('vendor/nukacode'));
        $adminConfig     = [];

        foreach ($nukaDirectories as $nukaDirectory) {
            // If the package has an admin.json, add it.
            if ($this->file->exists($nukaDirectory . '/admin.json')) {
                $adminConfig = array_merge_recursive($adminConfig, (array)json_decode($this->file->get($nukaDirectory . '/admin.json')));
            }
        }

        // Combine all the admin.json files into one.
        $this->file->put(base_path() . '/admin.json', json_encode($adminConfig, JSON_PRETTY_PRINT));
    }
}