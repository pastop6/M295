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
    // for Schleife

    for ($x = 0; $x <= 10; $x = $x + 1){
        $x_quadrant = $x * $x;

        echo "Der Quadrant von ".$x. "ist: ";
        echo $x_quadrant;
        echo "<br>";
    }

    echo "<br>";

    // while Schleife
    $x = 0;

    while ($x >= 0 and $x <= 10){
        echo "while schleife: ";
        echo $x. "<br>\n";
        $x++;
    }

    echo "<br>";

    // do while Schleife

    do{
        echo $x. "<br>\n";
        $x = $x + 1;
    }while($x > 0 and $x <= 10);

    echo "<br>";

    // foreach Schleife

    $arr = array("Max", "Moritz", "Hans", "Peter");
    foreach ($arr as $name){
        echo $name. "<br>\n";
    }

    echo "<br>";

    // try catch finally

    try{
        $x = 10;
        if($x > 5){
            throw new Exception("x ist größer als 5");
        }
    }catch(Exception $e){
        echo "Fehler: ".$e->getMessage();
    }finally{
        echo "Finally";
    }
    ?>
</body>
</html>