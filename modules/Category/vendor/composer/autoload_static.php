<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd45c4dae9e4411e8c955f92fc6ddf84a
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Rsruman\\Category\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Rsruman\\Category\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd45c4dae9e4411e8c955f92fc6ddf84a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd45c4dae9e4411e8c955f92fc6ddf84a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd45c4dae9e4411e8c955f92fc6ddf84a::$classMap;

        }, null, ClassLoader::class);
    }
}