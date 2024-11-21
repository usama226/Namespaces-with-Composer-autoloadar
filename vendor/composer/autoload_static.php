<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfa0c2fdee53503e97c8b41ef418a4d4d
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Src\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfa0c2fdee53503e97c8b41ef418a4d4d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfa0c2fdee53503e97c8b41ef418a4d4d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfa0c2fdee53503e97c8b41ef418a4d4d::$classMap;

        }, null, ClassLoader::class);
    }
}