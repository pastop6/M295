<?php

declare(strict_types=1);

define('DBSQLITE3', './../data/dbfile.sqlite3');

use src\Route;

class Autoloader
{
    public static function register()
    {
        spl_autoload_register(function ($class) {
            if (file_exists('../' . $class . '.php')) {
                require('../' . $class . '.php');
            } else {
                echo 'Datei für Klasse existiert nicht <br>';
            }
        });

    }
}
Autoloader::register();

Route::add('/', function () {
    echo 'http://m295.local/ <br>Home ......';
});

Route::add('/info', function () {
    phpinfo();
});

Route::add('/([a-zA-Z0-9]*)', function ($class) {
    //echo 'You are looking for ' . $class;
    $class = '\\src\\' . $class;
    if (class_exists($class)) {
        $app = new $class();
    } else {
        echo 'Class not found';
    }
});

Route::add('/([a-zA-Z0-9]*)/([a-zA-Z0-9]*)', function ($class, $method) {
    //echo 'You are looking for ' . $class;
    $class = '\\src\\' . $class;
    if (class_exists($class)) {
        $app = new $class($method);
    } else {
        echo 'Class not found';
    }
},['get','post']);

Route::add('/([a-zA-Z0-9]*)/([a-zA-Z0-9]*)/([a-zA-Z0-9]*)', function ($class, $method, $param) {
    //echo 'You are looking for ' . $class;
    $class = '\\src\\' . $class;
    if (class_exists($class)) {
        $app = new $class($method, $param);
    } else {
        echo 'Class not found';
    }
},['get','post']);


Route::run('/');