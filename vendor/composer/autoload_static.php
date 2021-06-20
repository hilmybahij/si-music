<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite5eb4928bbec32fd61c5ad9b9c984024
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite5eb4928bbec32fd61c5ad9b9c984024::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite5eb4928bbec32fd61c5ad9b9c984024::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite5eb4928bbec32fd61c5ad9b9c984024::$classMap;

        }, null, ClassLoader::class);
    }
}
