<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2bb83c92a66c5d22b930fcefa95e1748
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2bb83c92a66c5d22b930fcefa95e1748::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2bb83c92a66c5d22b930fcefa95e1748::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
