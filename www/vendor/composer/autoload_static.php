<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb49dad898c8196aa1516d8563b02d6f4
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb49dad898c8196aa1516d8563b02d6f4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb49dad898c8196aa1516d8563b02d6f4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb49dad898c8196aa1516d8563b02d6f4::$classMap;

        }, null, ClassLoader::class);
    }
}
