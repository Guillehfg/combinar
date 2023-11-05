<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd37b656fe08499751ecd2bda0db31d9b
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Coderwise\\Viauy\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Coderwise\\Viauy\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd37b656fe08499751ecd2bda0db31d9b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd37b656fe08499751ecd2bda0db31d9b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd37b656fe08499751ecd2bda0db31d9b::$classMap;

        }, null, ClassLoader::class);
    }
}
