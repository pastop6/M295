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
    // variable
    $vorname = "Max";
    $nachname = "Mustermann";
    $alter = 20;
    $a5 = "test";
    // $12 = "test123"; !Geht nicht weil Variable darf nicht mit Zahl beginnen

    $ganzer_name = $vorname.$nachname;
    echo $ganzer_name;
    echo "<br>";
    $ganzer_name_abstand = $vorname." ".$nachname;
    echo $ganzer_name_abstand;
    echo "<br>";

    echo "Hallo $vorname $nachname, du bist $alter Jahre alt.";
    echo "<br>";
    echo "$a5";
    echo "<br>";
    echo "<br>";
    // echo "$a12";


    // Rechnen mit Variablen

    $zahl1 = 10;
    echo "In meiner Variable zahl1 ist der Wert: $zahl1";
    echo "<br>";

    $zahl2 = 5;
    $zahl3 = $zahl1 + $zahl2;
    echo "In meiner Variable zahl3 ist der Wert: $zahl3";

    // Dezimalzahlen
    $zahl4 = 10.5 * 1200;
    echo "<br>";
    echo "In meiner Variable zahl4 ist der Wert: $zahl4";

    // String und Zahlen
    $text1 = "Hallo";
    echo "<br>";
    echo $zahl1 + $text1;
    ?>
</body>
</html>