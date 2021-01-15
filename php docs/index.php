<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $name = "Mike";
        $age = "20";
        echo "Hello!!! I am $name <br>";
        echo "I am $age years old";
        echo "<br>";

        $phrase = "Hello World";

        echo strtoupper($phrase);
        echo "<br>";
        echo strtolower($phrase);
        echo "<br>";
        echo strlen($phrase);
        echo "<br>";
        echo $phrase[6];
        echo "<br>";
    ?>
    
</body>
</html>