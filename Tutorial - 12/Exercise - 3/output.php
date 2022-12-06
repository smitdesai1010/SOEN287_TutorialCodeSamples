<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
    <title>Document</title>
</head>
<body>
    <div class="mx-5 w-25">
        <form action="./output.php" method="get">
            <h3 class="my-3">Student Details</h3>

            <div class="form-group">
                <input class="form-control" name="name" placeholder="Enter Name">
            </div>

            <button type="submit" class="btn btn-primary mt-3">View Data</button>
        </form>
    </div>
    <?php
        echo "<br>";

        if (isset($_GET["name"])) {
            $studentName = $_GET["name"];

            if (isset($_SESSION[$studentName])) {
                echo "<h4 class='mx-5'>$studentName : $_SESSION[$studentName] </h4>";
            }
    
            else {
                echo "<h4 class='mx-5'>Data not found</h4>";
            }   
        } 
    ?>
</body>
</html>