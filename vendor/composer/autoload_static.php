<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8970979d91b7812dc71ed5da924a322e
{
    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HelloWorld' => 
            array (
                0 => __DIR__ . '/..' . '/ehime/hello-world/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit8970979d91b7812dc71ed5da924a322e::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
