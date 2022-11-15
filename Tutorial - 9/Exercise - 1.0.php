<?php
    $colors = array("white", "green", "red");

    $heading = "<h3>$colors[0], $colors[1], $colors[2]</h3>";

    $list = "
        <ul>
            <li>$colors[0]</li>
            <li>$colors[1]</li>
            <li>$colors[2]</li>
        </ul>
    ";

    echo $heading;
    echo $list;
?>