<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5c94c26ddfbd2b69a87e50c1af78e9ff
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'ZTE\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ZTE\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5c94c26ddfbd2b69a87e50c1af78e9ff::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5c94c26ddfbd2b69a87e50c1af78e9ff::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
