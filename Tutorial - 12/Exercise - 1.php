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
        <form action="./Exercise - 1.php" method="get">
            <h3 class="my-3">Student Details</h3>

            <div class="form-group">
                <input class="form-control" name="name" placeholder="Enter Name">
            </div>

            <div class="form-group">
                <input class="form-control" name="age" placeholder="Enter Age">
            </div>
            
            <div class="form-check">
                <input class="form-check-input" type="radio" name="optionSelected" value="setCookie">
                <label class="form-check-label">Set Cookie</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="optionSelected" value="cookieExists">
                <label class="form-check-label">Check if Cookie Exists</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="optionSelected" value="removeCookie">
                <label class="form-check-label">Remove Cookie</label>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
    <?php
        echo "<br>";

        if (isset($_GET["optionSelected"])) {

            $studentName = $_GET["name"];
            $studentAge = $_GET["age"];

            // As cookies key cannot contain white space
            $studentName = str_replace(' ', '', $studentName);
            
            if ($_GET["optionSelected"] == "setCookie") {
                setcookie($studentName, $studentAge, time() + 3600);
                echo "<h4 class='mx-5'>Cookie set successfully</h4>";
            }

            else if ($_GET["optionSelected"] == "cookieExists") {
                $cookieExists = isset($_COOKIE[$studentName]) == 1 ? "True" : "False";
                echo "<h4 class='mx-5'>Cookie exists => $studentName : $_COOKIE[$studentName]</h4>";
            }

            else {
                setcookie($studentName, "", time() - 10);
                echo "<h4 class='mx-5'>Cookie removed successfully</h4>";
            }
        }
?>
</body>
</html>