Installation
====================================

Composer
--------
``composer require nukacode/admin:~1.0``

Service Providers
-----------------
Add the following service providers to ``configs/app.php``.

.. code::

     'NukaCode\Admin\AdminServiceProvider',
     'NukaCode\Bootstrap\Html\HtmlServiceProvider',

Configs/Migrations/Seeds
------------------------
Once that is done, you can publish the configs and migrations.

``php artisan vendor:publish``

This will create a nukacode-admin.php in your config folder and add all the migrations and seeds inside your database/
 folders.

.. warning:: Make sure to make any changes you need to the config before continuing.  It will determine what roles are
generated.

.. code::

    composer dump-autoload -o
    php artisan optimize
    php artisan migrate --seed

Optional
--------
Routes
~~~~~~~
If you would like to use the included routes, add the following to your ``app/Http/routes.php`` file.

``include_once(base_path() .'/vendor/nukacode/admin/src/routes.php');``

Menu
~~~~~~~
This step is completely optional.  But here is a  common addition to the menu located in ``app/Http/Controllers/BaseController``.

.. code::

        \Menu::getMenu('rightMenu')
             ->addDropDown('Admin')
                ->quickLink('Dashboard', 'admin.index')
                ->end()
             ->end();

Without Laravel-Base
--------------------
If you are not installing this on top of NukaCode:Laravel-Base, there are a few extra steps that are needed.

Theme
~~~~~~~
``bower install nukacode-admin#~1``

Elixir
~~~~~~~
Admin requires quite a few things to run.  Add the following to your ``gulpfile.js``.  Change this to suit your folder
structure for vendor packages and add them to your bower set up.

.. code:: Javascript

    // At the top before calling elixir
    var bower_dir = 'vendor/bower_components/';
        // Java script
        .copy(bower_dir + 'jquery/dist/jquery.min.js', 'resources/js/vendor/jquery.js')
        .copy(bower_dir + 'bootstrap/dist/js/bootstrap.min.js', 'resources/js/vendor/bootstrap.js')
        .copy(bower_dir + 'messenger/build/js/messenger.min.js', 'resources/js/vendor/messenger.js')
        .copy(bower_dir + 'messenger/build/js/messenger-theme-future.js', 'resources/js/vendor/messenger-theme-future.js')
        .copy(bower_dir + 'bootbox/bootbox.js', 'resources/js/vendor/bootbox.js')
        .copy(bower_dir + 'select2/select2.min.js', 'resources/js/vendor/select2.js')
        .copy(bower_dir + 'metisMenu/dist/metisMenu.min.js', 'resources/js/vendor/metisMenu.js')
        .copy(bower_dir + 'mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js', 'resources/js/vendor/bootstrap-colorpicker.js')
        .copy(bower_dir + 'jasny-bootstrap/dist/js/jasny-bootstrap.min.js', 'resources/js/vendor/jasny-bootstrap.js')

        .scripts(
        [
            'resources/js/vendor/jquery.js',
            'resources/js/vendor/bootstrap.js',
            'resources/js/vendor/messenger.js',
            'resources/js/vendor/messenger-theme-future.js',
            'resources/js/vendor/bootbox.js',
            'resources/js/vendor/select2.js',
            'resources/js/vendor/metisMenu.js',
            'resources/js/vendor/bootstrap-colorpicker.js',
            'resources/js/vendor/jasny-bootstrap.js',
        ], 'public/js/admin-all.js')

        // CSS
        .copy(bower_dir + 'nukacode-admin/css/admin.css', 'resources/css/vendor/admin.css')
        .copy(bower_dir + 'font-awesome/css/font-awesome.min.css', 'resources/css/vendor/font-awesome.css')
        .copy(bower_dir + 'messenger/build/css/messenger.css', 'resources/css/vendor/messenger.css')
        .copy(bower_dir + 'messenger/build/css/messenger-theme-future.css', 'resources/css/vendor/messenger-theme-future.css')
        .copy(bower_dir + 'select2/select2.css', 'resources/css/vendor/select2.css')
        .copy(bower_dir + 'select2-bootstrap3-css/select2-bootstrap.css', 'resources/css/vendor/select2-bootstrap.css')
        .copy(bower_dir + 'metisMenu/dist/metisMenu.css', 'resources/css/vendor/metisMenu.css')
        .copy(bower_dir + 'jasny-bootstrap/dist/css/jasny-bootstrap.min.css', 'resources/css/vendor/jasny-bootstrap.css')
        .copy(bower_dir + 'mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css', 'resources/css/vendor/bootstrap-colorpicker.css')

        .styles(
        [
            'resources/css/vendor/admin.css',
            'resources/css/vendor/font-awesome.css',
            'resources/css/vendor/messenger.css',
            'resources/css/vendor/messenger-theme-future.css',
            'resources/css/vendor/select2.css',
            'resources/css/vendor/select2-bootstrap.css',
            'resources/css/vendor/metisMenu.css',
            'resources/css/vendor/bootstrap-colorpicker.css',
            'resources/css/vendor/jasny-bootstrap.css',
        ], 'public/css/admin-all.css')

        // Extras
        .copy(bower_dir + 'font-awesome/fonts', 'public/fonts')
        .copy(bower_dir + 'mjolnic-bootstrap-colorpicker/dist/img', 'public/img')