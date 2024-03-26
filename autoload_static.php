<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7af407148d189889754692f81f94c335
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Php\\Primeiroprojeto\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Php\\Primeiroprojeto\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7af407148d189889754692f81f94c335::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7af407148d189889754692f81f94c335::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7af407148d189889754692f81f94c335::$classMap;

        }, null, ClassLoader::class);
    }
}
