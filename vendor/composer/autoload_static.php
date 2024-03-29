<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3785e0f3a37c055869874b6fc5e4a18e
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Workerman\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Workerman\\' => 
        array (
            0 => __DIR__ . '/..' . '/workerman/workerman',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3785e0f3a37c055869874b6fc5e4a18e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3785e0f3a37c055869874b6fc5e4a18e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
