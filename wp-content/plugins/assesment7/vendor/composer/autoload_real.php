<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit2f2c850ec2b6d22002d8bffc5f3f5b99
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

        spl_autoload_register(array('ComposerAutoloaderInit2f2c850ec2b6d22002d8bffc5f3f5b99', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit2f2c850ec2b6d22002d8bffc5f3f5b99', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit2f2c850ec2b6d22002d8bffc5f3f5b99::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
