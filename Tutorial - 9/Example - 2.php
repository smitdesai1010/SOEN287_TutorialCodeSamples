<?php
    $cars = array("Volvo", "BMW", "Toyota");

    foreach ($cars as &$car) {
        $car .= " very fast";
    }

    print_r($cars);
?>