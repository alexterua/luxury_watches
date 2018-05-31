<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0eed5a6758fceaab110f8cad6087dc3a
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'shop\\' => 5,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
        'R' => 
        array (
            'RedBeanPHP\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'shop\\' => 
        array (
            0 => __DIR__ . '/..' . '/shop/core',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'RedBeanPHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0eed5a6758fceaab110f8cad6087dc3a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0eed5a6758fceaab110f8cad6087dc3a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
