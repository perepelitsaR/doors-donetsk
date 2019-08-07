<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit08c7715fb2832a31159b3bd96b8c516a
{
    public static $prefixLengthsPsr4 = array (
        'i' => 
        array (
            'ishop\\' => 6,
        ),
        'a' => 
        array (
            'app\\' => 4,
            'admin_functions\\' => 16,
        ),
        'R' => 
        array (
            'RedBeanPHP\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ishop\\' => 
        array (
            0 => __DIR__ . '/..' . '/ishop/core',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'admin_functions\\' => 
        array (
            0 => __DIR__ . '/../..' . '/admin_functions',
        ),
        'RedBeanPHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit08c7715fb2832a31159b3bd96b8c516a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit08c7715fb2832a31159b3bd96b8c516a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
