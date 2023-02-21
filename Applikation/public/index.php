<?php

declare(strict_types=1);

use src\Route;

define('DBSQLITE3', './../data/dbfile.sqlite3');


// echo DBSQLITE3;
echo "<br> <br>";

if (file_exists(DBSQLITE3)) {
    // echo "Datei existiert<br>";
}else{
    // echo "Datei existiert nicht<br>";
    $sqlstring = file_get_contents('./../data/db.sql');
    echo $sqlstring;
    $db = new SQLite3(DBSQLITE3);
    $db->exec($sqlstring);
}


class Autoloader{
    public static function register(){
        spl_autoload_register(function($class){
            if (file_exists("..\\".$class.".php")) {
                # echo "Lade: ".$class."<br>";
                require("..\\".$class.".php");
            }else{
                echo $class.".php nicht gefunden<br>";
            }});
        }
}

Autoloader::register();

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
    echo "Class: ".$class."<br>";
    $class = "\\src\\".$class;
    if (class_exists($class)) {
        $app = new $class();
    }else{
        echo "Class: ".$class." nicht gefunden<br>";
    }
});

Route::add("/([a-zA-Z0-9]*)/([a-zA-Z0-9]*)", function ($class, $method){
    echo "Class: ".$class."<br>";
    $class = "\\src\\".$class;
    if (class_exists($class) && method_exists($method)){
        $app = new $class($method);
    }else{
        echo "Method: ".$method." nicht gefunden<br>";
    }
});

Route::add("/([a-zA-Z0-9]*)/([a-zA-Z0-9]*)/([a-zA-Z0-9]*)", function ($class, $method, $param){
    echo "Class: ".$class."<br>";
    $class = "\\src\\".$class;
    if (class_exists($class) && method_exists($method) && $param != 0){
        $app = new $class($method, $param);
    }else{
        echo "Param: ".$param." nicht gefunden<br>";
    }
});

Route::run("/");

?>