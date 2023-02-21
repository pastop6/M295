<?php
declare(strict_types=1);

//include("kalender.php");

// Namespace einbinden: so
/* use Tag1\Kalender\Kalender;
$cal = new Kalender();
// Oder so
$test2 = new Tag1\Kalender\Kalender(); */


class Autoloader{
    public static function register(){
        spl_autoload_register(function($class){
            echo $class;

            //require("src/db.php");
            if (file_exists($class.".php")) {
                echo "Lade: ".$class."<br>";
                require($class.".php");
            }else{
                echo $class.".php nicht gefunden<br>";
            }
        });
    }
}

Autoloader::register();

// include("src/db.php");
$db = new src\db('getData', 'Hallo Welt');
?>