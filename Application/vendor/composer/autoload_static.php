<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0694d1a1da87d6985cd19c52da3187f9
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
        'V' => 
        array (
            'Valitron\\' => 9,
        ),
        'M' => 
        array (
            'Mhe\\ComApp\\' => 11,
        ),
        'A' => 
        array (
            'APP\\WWW\\' => 8,
            'APP\\Admin\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Valitron\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/valitron/src/Valitron',
        ),
        'Mhe\\ComApp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib',
        ),
        'APP\\WWW\\' => 
        array (
            0 => __DIR__ . '/../..' . '/APP/WWW',
        ),
        'APP\\Admin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/APP/Admin',
        ),
    );

    public static $classMap = array (
        'APP\\Admin\\User' => __DIR__ . '/../..' . '/APP/Admin/User.php',
        'APP\\WWW\\Home' => __DIR__ . '/../..' . '/APP/WWW/Home.php',
        'APP\\WWW\\Kontakt' => __DIR__ . '/../..' . '/APP/WWW/Kontakt.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Valitron\\Validator' => __DIR__ . '/..' . '/vlucas/valitron/src/Valitron/Validator.php',
        'src\\Route' => __DIR__ . '/../..' . '/src/Route.php',
        'src\\app' => __DIR__ . '/../..' . '/src/app.php',
        'src\\database' => __DIR__ . '/../..' . '/src/database.php',
        'src\\error' => __DIR__ . '/../..' . '/src/error.php',
        'src\\mysql' => __DIR__ . '/../..' . '/src/mysql.php',
        'src\\pdo' => __DIR__ . '/../..' . '/src/pdo.php',
        'src\\sqlite3' => __DIR__ . '/../..' . '/src/sqlite3.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0694d1a1da87d6985cd19c52da3187f9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0694d1a1da87d6985cd19c52da3187f9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0694d1a1da87d6985cd19c52da3187f9::$classMap;

        }, null, ClassLoader::class);
    }
}
