<?php
    $Registered = "no";

    if (isset($_GET["T&C"]) && $_GET["T&C"] == "on") {
        $Registered = "yes";
    }

    $URL = "index.html" . "?" . "registered=" . $Registered;
    header("location: $URL");
?>
