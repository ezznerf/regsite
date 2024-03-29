<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit609f145ba7df60993fb4e8e63d1d9185
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit609f145ba7df60993fb4e8e63d1d9185::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit609f145ba7df60993fb4e8e63d1d9185::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit609f145ba7df60993fb4e8e63d1d9185::$classMap;

        }, null, ClassLoader::class);
    }
}
