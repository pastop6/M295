<?php
declare(strict_types=1);
use src\Route;
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
        //echo 'Class not found';
        src\error::show(404);
    }
});

Route::add('/([a-zA-Z0-9]*)/([a-zA-Z0-9]*)', function ($class, $method) {
    //echo 'You are looking for ' . $class;
    $class = '\\src\\' . $class;
    if (class_exists($class)) {
        $app = new $class($method);
    } else {
        //echo 'Class not found';
        src\error::show(404);
    }
}, ['get', 'post']);

Route::add('/([a-zA-Z0-9]*)/([a-zA-Z0-9]*)/([a-zA-Z0-9]*)', function ($class, $method, $param) {
    //echo 'You are looking for ' . $class;
    $class = '\\src\\' . $class;
    if (class_exists($class)) {
        $app = new $class($method, $param);
    } else {
        //echo 'Class not found';
        src\error::show(404);
    }
}, ['get', 'post']);
