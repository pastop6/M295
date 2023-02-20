<!DOCTYPE html>
<html lang="de-CH">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="post">
        <input type="text" name="name" id="name">
        <input type="submit" value="senden" id="senden">
    </form>

    <?php

    if (isset($_POST['name'])) {
        echo "<hr>";
        echo $_POST['name'];
    }

    ?>
    
</body>
</html>