<?php

declare(strict_types=1);

session_start();

use src\Route;

define('DBSQLITE3', './../data/dbfile.sqlite3');


// Autoloader vom Composer
require(__DIR__.'/../vendor/autoload.php');


// echo DBSQLITE3;

if (file_exists(DBSQLITE3)) {
    // echo "Datei existiert<br>";
}else{
    // echo "Datei existiert nicht<br>";
    $sqlstring = file_get_contents('./../data/db.sql');
    echo $sqlstring;
    $db = new SQLite3(DBSQLITE3);
    $db->exec($sqlstring);
}

Route::add('/', function(){
    echo "Home........";
});

Route::add('/artikel', function(){
    echo "Artikel........";
});

Route::add('/artikel', function(){
    echo "Artikel........"; 
});

Route::add("/([a-zA-Z0-9]*)", function ($class){
    // echo "Class: ".$class."<br>";
    $class = "\\src\\".$class;
    if (class_exists($class)) {
        $app = new $class();
    }else{
        // echo "Class: ".$class." nicht gefunden<br>";
        errorsite(404);
    }
});

Route::add("/([a-zA-Z0-9]*)/([a-zA-Z0-9]*)", function ($class, $method){
    // echo "Class: ".$class."<br>";
    $class = "\\src\\".$class;
    if (class_exists($class) && method_exists($class, $method)){
        $app = new $class($method);
    }else{
        // echo "Method: ".$method." nicht gefunden<br>";
        errorsite(404);
    }
},['get', 'post']);

Route::add("/([a-zA-Z0-9]*)/([a-zA-Z0-9]*)/([a-zA-Z0-9]*)", function ($class, $method, $param){
    // echo "Class: ".$class."<br>";
    $class = "\\src\\".$class;
    if (class_exists($class) && method_exists($class, $method) && $param != 0){
        $app = new $class($method, $param);
    }else{
        errorsite(404);
    }
});

Route::run("/");

function errorsite($code){
    http_response_code($code);
    header("HTTP/1.1 ".$code);
    header("access-control-allow-methods: GET, POST");
    header('Content-Type: text/html, charset=utf-8');
    header("Access-Control-Allow-Origin: *");
    header("Cache-Control: max-age=0, private, must-revalidate");
    header("expires: sat, 26 jul 2030 05:00:00 gmt");
    // echo json_encode(array("error" => $code));
    include("./../error/".$code.".html");
}

?>