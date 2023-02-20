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
    // Aufgabe 1

    for ($x = 0; $x <= 255; $x++){
        echo "Zeichen $x: "." ".chr($x);
        echo "<br>";
    }

    echo "<br>";

    echo "Ungerade Zahlen: ";

    // Aufgabe 2

    for ($i=0; $i<=100; $i++) {
        if($i % 2 !== 0) {
            echo $i." ";
        }
    }

    echo "<br>";
    echo "<br>";

    echo "Primzahlen: ";

    // Aufgabe 3

    // Ausgabe aller Primzahlen von 0 bis 1000 
    for($i = 0; $i <= 1000; $i++) { 
        $flag = 1; 
        for($j = 2; $j < $i; $j++) {
            if($i % $j == 0) {	 
                $flag = 0; 
                break; 
            } 
        } 
        if($flag == 1) 
            echo $i, " "; 
    } 
    
    ?>
</body>
</html>