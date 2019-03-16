<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6a37d5bc3be225540a0d5b8a9e7fc131
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6a37d5bc3be225540a0d5b8a9e7fc131::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6a37d5bc3be225540a0d5b8a9e7fc131::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}