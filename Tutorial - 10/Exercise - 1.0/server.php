<?php
    if (isset($_GET["T&C"]) && $_GET["T&C"] == "on") {
        $name = "Smit";
        include "welcome.php";
    }
    else {
        include "termsNotAccepted.php";
    }
?>
