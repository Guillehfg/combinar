<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd37b656fe08499751ecd2bda0db31d9b
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitd37b656fe08499751ecd2bda0db31d9b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd37b656fe08499751ecd2bda0db31d9b', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd37b656fe08499751ecd2bda0db31d9b::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}