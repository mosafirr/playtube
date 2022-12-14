<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit41afb17d3856325dd0d83f83d2518369
{
    public static $prefixesPsr0 = array (
        'F' => 
        array (
            'FtpClient' => 
            array (
                0 => __DIR__ . '/..' . '/nicolab/php-ftp-client/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit41afb17d3856325dd0d83f83d2518369::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit41afb17d3856325dd0d83f83d2518369::$classMap;

        }, null, ClassLoader::class);
    }
}
