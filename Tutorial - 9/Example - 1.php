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
        echo "<h1>Rendered using PHP</h1>";

        $x = 10;
        $y = 7;

        echo $x+$y;

        $fistName = "Smit";
        $lastName = "Desai";

        $fullName = $fistName . " " . $lastName;

        echo "<h3>$fullName</h3>";          // PHP Style
        echo "<h3>" . $fullName . "</h3>"; // Java Style
    ?>

    <h1>Rendered using HTML</h1>

</body>
</html>