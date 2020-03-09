<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit77105b157402d499ddc00bf1cd86fb46
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'App\\ClassesTask1\\Car' => __DIR__ . '/../..' . '/App/ClassesTask1/Car.php',
        'App\\ClassesTask1\\Garage' => __DIR__ . '/../..' . '/App/ClassesTask1/Garage.php',
        'App\\ClassesTask2\\ExtraGarage' => __DIR__ . '/../..' . '/App/ClassesTask2/ExtraGarage.php',
        'App\\ClassesTask2\\ModernCar' => __DIR__ . '/../..' . '/App/ClassesTask2/ModernCar.php',
        'App\\ClassesTask2\\ObdScanner' => __DIR__ . '/../..' . '/App/ClassesTask2/ObdScanner.php',
        'App\\InterfacesTask1\\CarInterface' => __DIR__ . '/../..' . '/App/InterfacesTask1/CarInterface.php',
        'App\\InterfacesTask2\\ObdCompatibleVehicleInterface' => __DIR__ . '/../..' . '/App/InterfacesTask2/ObdCompatibleVehicleInterface.php',
        'App\\InterfacesTask2\\ObdDiagnosticToolInterface' => __DIR__ . '/../..' . '/App/InterfacesTask2/ObdDiagnosticToolInterface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit77105b157402d499ddc00bf1cd86fb46::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit77105b157402d499ddc00bf1cd86fb46::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit77105b157402d499ddc00bf1cd86fb46::$classMap;

        }, null, ClassLoader::class);
    }
}