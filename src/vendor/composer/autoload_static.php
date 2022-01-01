<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit07a63a569ccd4fc4238e095f2956748a
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit07a63a569ccd4fc4238e095f2956748a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit07a63a569ccd4fc4238e095f2956748a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit07a63a569ccd4fc4238e095f2956748a::$classMap;

        }, null, ClassLoader::class);
    }
}
