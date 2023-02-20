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
    // Bedingungen

    $s=date("H");
    if ($s<10) echo "Guten Morgen";
    if ($s<10 and $s>20) echo "Guten Tag";
    if ($s>20) echo "Guten Abend";

    echo "<br>";

    $test = true;

    if($test == true){
        echo "Test ist wahr <br>";
    }else{
        echo "Test ist falsch <br>";
    }

    // Switch Case

    $tier = "Katze";

    switch($tier){
        case "Hund":
            echo "Hund";
            break;
        case "Katze":
            echo "Katze";
            break;
        default:
            echo "Kein Tier";
    }

    ?>
</body>
</html>