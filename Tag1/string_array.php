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

    // String zeugs

    $var1 = 5;

    $text1 = "Hallo Welt Var = $var1";
    $text2 = 'Hallo Welt Var = '.$var1;

    $text = "Es war einmal ein kleiner Junge, der hieß Hans. Er war sehr schlau und hatte viele Freunde.";

    $sub = substr($text, 0, 10);

    echo $sub;

    echo "<br>";

    $name = "Test";

    echo"Select * FROM Table WHERE Name = '$name' AND status = 1";
    echo "<br>";
    echo"Select * FROM Table WHERE Name = '".$name."' AND status = 1";

    echo "<br>";

    // Array zeugs

    $arr_name = array("Max", "Moritz", "Hans", "Peter");

    $arr_zahl = array();
    $arr_zahl[] = "1";
    $arr_zahl[] = "2";
    $arr_zahl[] = "3";
    $arr_zahl[2] = "4";

    $arr_bsp['werte'][1]['id'] = 88;
    $arr_bsp['werte'][1]['name'] = "Paul";

    $arr_bsp['werte'][2]['id'] = 12;
    $arr_bsp['werte'][2]['name'] = "Hans";

    echo "<pre>";
    print_r($arr_bsp);
    echo "</pre>";

    echo "<br>";
    echo "<br>";

    // Array Tupel für Tupel ausgeben

    foreach ($arr_bsp['werte'] as $key => $value){
        echo $key. " => ". $value['name']. "<br>\n";
    }

    echo "<br>";
    echo "<br>";

    // Array als JSON ausgeben

    echo json_encode($arr_bsp);

    ?>
</body>
</html>