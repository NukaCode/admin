<?php namespace NukaCode\Admin;

use NukaCode\Core\BaseServiceProvider;

class AdminServiceProvider extends BaseServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    const NAME = 'admin';

    const VERSION = '1.0.2';

    const DOCS = 'nukacode-admin';

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->shareWithApp();
        $this->setPublishGroups();
        $this->registerAliases();
        $this->registerViews();
        $this->registerArtisanCommands();
    }

    /**
     * Share the package with application
     *
     * @return void
     */
    protected function shareWithApp()
    {
        $this->app['admin'] = $this->app->share(function () {
            return true;
        });
    }

    /**
     * Load the config for the package
     *
     * @return void
     */
    protected function setPublishGroups()
    {
        //
    }

    /**
     * Register aliases
     *
     * @return void
     */
    protected function registerAliases()
    {
        $aliases = [
            // Facades
            'bForm' => 'NukaCode\Bootstrap\Support\Html\Form',
            'bHTML' => 'NukaCode\Bootstrap\Support\Html\HTML',
        ];

        $exclude = $this->app['config']->get('nukacode-core.excludeAliases');

        $this->loadAliases($aliases, $exclude);
    }

    /**
     * Register views
     *
     * @return void
     */
    protected function registerViews()
    {
        if ($this->app['config']->has('nukacode-frontend.type')) {
            $this->app['view']->addLocation(__DIR__ . '/../../views/');
        }
    }

    public function registerArtisanCommands()
    {
        $this->commands(
            [
                'NukaCode\Admin\Console\AdminCommand',
            ]
        );
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['admin'];
    }
}
