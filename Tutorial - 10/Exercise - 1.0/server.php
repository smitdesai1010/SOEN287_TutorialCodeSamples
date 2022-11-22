<?php
    if (isset($_GET["T&C"]) && $_GET["T&C"] == "on") {
        include "welcome.php";
    }
    else {
        include "termsNotAccepted.php";
    }
?>
