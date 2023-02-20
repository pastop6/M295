<?php

// Session

declare(strict_types=1);

// mit @ davor wird der Fehler unterdrückt
// oder so
ini_set("display_startup_errors", "0");
error_reporting(0);
echo @$variable_die_nicht_existiert;

// fehlermeldungen ausgeben
ini_set("display_startup_errors", "1");
error_reporting(E_ALL);


session_start();

define("DBname", "myDatabase");
define("DBtable", "myTable");
define("DBuser", "root");
define("DBpassword", "myPassword");
define("DBhost", "localhost");
define("DBport", "3306");
define("DBcharset", "utf8");


define("SESSION_NAME", "WertDerSession");
echo SESSION_NAME;

// // Für Formulare
// include("database.php");
// // Wird nur ein mal gemacht
// include_once("database.php");
// // Ist zwingend nötig
// require("database.php");

echo "<hr>";

$FileName = "test.txt";
$FileContent = file_get_contents($FileName);
// Ganzes File ausgeben
// echo $FileContent;

// Zeile für Zeile ausgeben
$FileContent = file($FileName);
echo "<pre>";
print_r($FileContent);
echo "</pre>";

echo "<hr>";

// File bearbeiten
$handle = fopen($FileName, "a");
fwrite($handle, "Hallo Welt" . chr(10));
fclose($handle);

echo "<pre>";
print_r($FileContent);
echo "</pre>";

echo "<hr>";


// Echo mit Spezialzeichen

// mit \ wird das Zeichen ausgegeben

echo "Test123\$as";

echo htmlspecialchars("<hr>");






$_SESSION['name'] = "Max";

echo $_SESSION['name'];

// Session löschen

// Einzelne Session löschen
$_SESSION['name'] = null;

// Alle Session löschen
$_SESSION = array();

// Session ganz löschen
session_destroy();

// Überprüfen ob Session-name Variable gesetzt ist
if (isset($_SESSION['name'])){
    echo "Hallo ".$_SESSION['name'];
}else{
    echo "Hallo Unbekannt";
}
?>