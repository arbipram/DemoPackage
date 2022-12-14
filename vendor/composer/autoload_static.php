<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit85e24afd37cd26f47278012bfcd53fe6
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Arbipram\\Demo\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Arbipram\\Demo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit85e24afd37cd26f47278012bfcd53fe6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit85e24afd37cd26f47278012bfcd53fe6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit85e24afd37cd26f47278012bfcd53fe6::$classMap;

        }, null, ClassLoader::class);
    }
}
