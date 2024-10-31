<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8c0b7e753069b4563a554c72e9ba6f65
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Onixhelper\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Onixhelper\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8c0b7e753069b4563a554c72e9ba6f65::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8c0b7e753069b4563a554c72e9ba6f65::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8c0b7e753069b4563a554c72e9ba6f65::$classMap;

        }, null, ClassLoader::class);
    }
}
