<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit041ee6e1520b8e171e2b5384773c2ec6
{
    public static $files = array (
        '94fbddc46e9d1c89134920155be29f2b' => __DIR__ . '/..' . '/devgeniem/dustpress/dustpress.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit041ee6e1520b8e171e2b5384773c2ec6::$classMap;

        }, null, ClassLoader::class);
    }
}
