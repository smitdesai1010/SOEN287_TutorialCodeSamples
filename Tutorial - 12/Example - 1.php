<?php
    $cookie_name = "Name";
    $cookie_value = "Smit Desai";
    setcookie($cookie_name, $cookie_value, time() + 3600);
?>
<html>
<body>
    <?php
        if(!isset($_COOKIE[$cookie_name])) {
            echo "Cookie named '" . $cookie_name . "' is not set!";
        } 
        else {
            echo "Cookie '" . $cookie_name . "' is set!<br>";
            echo "Value is: " . $_COOKIE[$cookie_name];
        }
    ?>
</body>
</html>