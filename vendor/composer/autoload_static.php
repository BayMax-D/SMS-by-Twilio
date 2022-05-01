<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit87a9d9d524facddff0711c1141e1d230
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit87a9d9d524facddff0711c1141e1d230::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit87a9d9d524facddff0711c1141e1d230::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit87a9d9d524facddff0711c1141e1d230::$classMap;

        }, null, ClassLoader::class);
    }
}
