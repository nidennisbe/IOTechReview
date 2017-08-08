<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitec8ff843220aeeb0c6dab546bd5c0139
{
    public static $files = array (
        'e40631d46120a9c38ea139981f8dab26' => __DIR__ . '/..' . '/ircmaxell/password-compat/lib/password.php',
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
        '848a06382c1c883893a9c9833ae2b551' => __DIR__ . '/..' . '/symfony/polyfill/src/Apcu/bootstrap.php',
        'd075ca29fdd460a76e9d730a9724dc20' => __DIR__ . '/..' . '/symfony/polyfill/src/Php54/bootstrap.php',
        '7d1c739f734e1193d0c090179eeb95aa' => __DIR__ . '/..' . '/symfony/polyfill/src/Php55/bootstrap.php',
        '974c792dde7e26133ce76c5ff3d097b1' => __DIR__ . '/..' . '/symfony/polyfill/src/Php56/bootstrap.php',
        '8ac57d99d5d58e71376ea5f919e28d23' => __DIR__ . '/..' . '/symfony/polyfill/src/Php70/bootstrap.php',
        '1f8375f522f51b04a337c2d88ac6167e' => __DIR__ . '/..' . '/symfony/polyfill/src/Php71/bootstrap.php',
        '80ec413cbe3b4f464cf1ff314e3ce344' => __DIR__ . '/..' . '/symfony/polyfill/src/Php72/bootstrap.php',
        '0782f09865a7e9f4ebd12e5f68b3135f' => __DIR__ . '/..' . '/symfony/polyfill/src/Iconv/bootstrap.php',
        'f38c346c3a1bb49bd02ba8e9177d7e56' => __DIR__ . '/..' . '/symfony/polyfill/src/Intl/Grapheme/bootstrap.php',
        '946db64f9a5c0688514fdcdafcabe7d2' => __DIR__ . '/..' . '/symfony/polyfill/src/Intl/Icu/bootstrap.php',
        '299b3c040b39cb03c6eceb9bb272ad1d' => __DIR__ . '/..' . '/symfony/polyfill/src/Intl/Normalizer/bootstrap.php',
        'e59f725579f9974327c76777296d6dcc' => __DIR__ . '/..' . '/symfony/polyfill/src/Mbstring/bootstrap.php',
        'b46ad4fe52f4d1899a2951c7e6ea56b0' => __DIR__ . '/..' . '/voku/portable-utf8/bootstrap.php',
        '8cd2fca4db21bffce1ad0612f7caeec4' => __DIR__ . '/..' . '/ramsey/array_column/src/array_column.php',
        '65380ab4d81167209b0a4fac46641984' => __DIR__ . '/..' . '/voku/arrayy/src/Create.php',
    );

    public static $prefixLengthsPsr4 = array (
        'v' => 
        array (
            'voku\\db\\' => 8,
            'voku\\cache\\' => 11,
            'voku\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\' => 17,
            'Symfony\\Component\\Intl\\' => 23,
        ),
        'A' => 
        array (
            'Arrayy\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'voku\\db\\' => 
        array (
            0 => __DIR__ . '/..' . '/voku/simple-mysqli/src/voku/db',
        ),
        'voku\\cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/voku/simple-cache/src/voku/cache',
        ),
        'voku\\' => 
        array (
            0 => __DIR__ . '/..' . '/voku/stop-words/src/voku',
            1 => __DIR__ . '/..' . '/voku/portable-utf8/src/voku',
            2 => __DIR__ . '/..' . '/voku/phonetic-algorithms/src/voku',
        ),
        'Symfony\\Polyfill\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill/src',
        ),
        'Symfony\\Component\\Intl\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/intl',
        ),
        'Arrayy\\' => 
        array (
            0 => __DIR__ . '/..' . '/voku/arrayy/src',
        ),
    );

    public static $classMap = array (
        'ArithmeticError' => __DIR__ . '/..' . '/symfony/polyfill/src/Php70/Resources/stubs/ArithmeticError.php',
        'AssertionError' => __DIR__ . '/..' . '/symfony/polyfill/src/Php70/Resources/stubs/AssertionError.php',
        'CallbackFilterIterator' => __DIR__ . '/..' . '/symfony/polyfill/src/Php54/Resources/stubs/CallbackFilterIterator.php',
        'Collator' => __DIR__ . '/..' . '/symfony/intl/Resources/stubs/Collator.php',
        'DivisionByZeroError' => __DIR__ . '/..' . '/symfony/polyfill/src/Php70/Resources/stubs/DivisionByZeroError.php',
        'Error' => __DIR__ . '/..' . '/symfony/polyfill/src/Php70/Resources/stubs/Error.php',
        'IntlDateFormatter' => __DIR__ . '/..' . '/symfony/intl/Resources/stubs/IntlDateFormatter.php',
        'Locale' => __DIR__ . '/..' . '/symfony/intl/Resources/stubs/Locale.php',
        'Normalizer' => __DIR__ . '/..' . '/symfony/polyfill/src/Intl/Normalizer/Resources/stubs/Normalizer.php',
        'NumberFormatter' => __DIR__ . '/..' . '/symfony/intl/Resources/stubs/NumberFormatter.php',
        'ParseError' => __DIR__ . '/..' . '/symfony/polyfill/src/Php70/Resources/stubs/ParseError.php',
        'RecursiveCallbackFilterIterator' => __DIR__ . '/..' . '/symfony/polyfill/src/Php54/Resources/stubs/RecursiveCallbackFilterIterator.php',
        'SessionHandlerInterface' => __DIR__ . '/..' . '/symfony/polyfill/src/Php54/Resources/stubs/SessionHandlerInterface.php',
        'TypeError' => __DIR__ . '/..' . '/symfony/polyfill/src/Php70/Resources/stubs/TypeError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitec8ff843220aeeb0c6dab546bd5c0139::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitec8ff843220aeeb0c6dab546bd5c0139::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitec8ff843220aeeb0c6dab546bd5c0139::$classMap;

        }, null, ClassLoader::class);
    }
}
