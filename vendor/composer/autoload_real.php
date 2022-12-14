<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit36126a6a7a4db89722bdc9913ec20287
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

        spl_autoload_register(array('ComposerAutoloaderInit36126a6a7a4db89722bdc9913ec20287', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit36126a6a7a4db89722bdc9913ec20287', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit36126a6a7a4db89722bdc9913ec20287::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
