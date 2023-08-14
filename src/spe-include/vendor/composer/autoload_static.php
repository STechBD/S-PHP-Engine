<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbeeba70a2dda4c120e0b97f375944596
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'STechBD\\SPE\\' => 12,
            'STechBD\\SDE\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'STechBD\\SPE\\' => 
        array (
            0 => __DIR__ . '/../../../..' . '/src/spe-include',
        ),
        'STechBD\\SDE\\' => 
        array (
            0 => __DIR__ . '/..' . '/stechbd/sde/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbeeba70a2dda4c120e0b97f375944596::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbeeba70a2dda4c120e0b97f375944596::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbeeba70a2dda4c120e0b97f375944596::$classMap;

        }, null, ClassLoader::class);
    }
}
