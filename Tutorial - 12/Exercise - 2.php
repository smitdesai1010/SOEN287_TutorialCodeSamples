<?php
    session_start();
    if (isset($_SESSION['view'])) {
        $_SESSION['view'] = $_SESSION['view'] + 1;
    }
    else {
        $_SESSION['view'] = 0;
    }

    if ($_SESSION['view'] == 10) {
        session_destroy();
    }
?>
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
        echo "<h1>You have visited this page: " . $_SESSION['view'] . " times</h1>";
    ?>
    
</body>
</html>
