<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit942de8f7c6bc33c8626605f0199203f2
{
    public static $classMap = array (
        'App\\Controller\\PagesController' => __DIR__ . '/../..' . '/app/controllers/PagesController.php',
        'App\\Controller\\UsersController' => __DIR__ . '/../..' . '/app/controllers/UsersController.php',
        'App\\Core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'App\\Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'App\\models\\Task' => __DIR__ . '/../..' . '/app/models/task.php',
        'App\\models\\User' => __DIR__ . '/../..' . '/app/models/User.php',
        'ComposerAutoloaderInit942de8f7c6bc33c8626605f0199203f2' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit942de8f7c6bc33c8626605f0199203f2' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/connection.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/query_builder.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit942de8f7c6bc33c8626605f0199203f2::$classMap;

        }, null, ClassLoader::class);
    }
}