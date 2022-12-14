<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit183a07418874d2ec1419dffa8f6df2e8
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hybridauth\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hybridauth\\' => 
        array (
            0 => __DIR__ . '/..' . '/hybridauth/hybridauth/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit183a07418874d2ec1419dffa8f6df2e8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit183a07418874d2ec1419dffa8f6df2e8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit183a07418874d2ec1419dffa8f6df2e8::$classMap;

        }, null, ClassLoader::class);
    }
}
