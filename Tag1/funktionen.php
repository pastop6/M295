<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Funktionen

    $variable = "test123";

    function test(){
        echo "Hallo Welt";
        echo "<br>";
    }

    function test_wert(string $wert = ""){
        echo "Wert: $wert";
        echo "<br>";
    }

    function glogbale_variablen(){
        global $variable;
        echo $variable;
        echo "<br>";
        echo $GLOBALS['variable'];
        echo "<br>";
    }

    test();

    test_wert("Hallo");

    glogbale_variablen();

    ?>
</body>
</html>