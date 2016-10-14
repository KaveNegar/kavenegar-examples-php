<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit97a38eb2a8cfc2837ab0fc9222c71cef
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kavenegar\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kavenegar\\' => 
        array (
            0 => __DIR__ . '/..' . '/kavenegar/php/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit97a38eb2a8cfc2837ab0fc9222c71cef::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit97a38eb2a8cfc2837ab0fc9222c71cef::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
