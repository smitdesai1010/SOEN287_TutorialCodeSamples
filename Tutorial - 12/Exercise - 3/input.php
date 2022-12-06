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
        <form action="./input.php" method="get">
            <h3 class="my-3">Student Details</h3>

            <div class="form-group">
                <input class="form-control" name="name" placeholder="Enter Name">
            </div>

            <div class="form-group">
                <input class="form-control" name="age" placeholder="Enter Age">
            </div>
            
            <div class="form-check">
                <input class="form-check-input" type="radio" name="optionSelected" value="insertData">
                <label class="form-check-label">Insert Data</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="optionSelected" value="deleteData">
                <label class="form-check-label">Delete Data</label>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
    <?php
        echo "<br>";

        if (isset($_GET["optionSelected"])) {
            $studentName = $_GET["name"];
            $age = $_GET["age"];
            
            if ($_GET["optionSelected"] == "insertData") {
                $_SESSION[$studentName] = $age;
                echo "<h4 class='mx-5'>Data inserted successfully</h4>";
            }

            else {
                if (isset($_SESSION[$studentName])) {
                    unset($_SESSION[$studentName]);
                    echo "<h4 class='mx-5'>Data deleted successfully</h4>";
                }

                else {
                    echo "<h4 class='mx-5'>Data to be deleted not found</h4>";
                }
            }
        }
    ?>
</body>
</html>