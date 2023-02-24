<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite4a29ce1f5f4fa099180b058c28d69c2
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
        'P' => 
        array (
            'Pt\\ComApp\\' => 10,
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
        'Pt\\ComApp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite4a29ce1f5f4fa099180b058c28d69c2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite4a29ce1f5f4fa099180b058c28d69c2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite4a29ce1f5f4fa099180b058c28d69c2::$classMap;

        }, null, ClassLoader::class);
    }
}