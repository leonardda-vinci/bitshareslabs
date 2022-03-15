<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9ea84e12a557189748806221bf3d058e
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/src/Twilio',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9ea84e12a557189748806221bf3d058e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9ea84e12a557189748806221bf3d058e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9ea84e12a557189748806221bf3d058e::$classMap;

        }, null, ClassLoader::class);
    }
}