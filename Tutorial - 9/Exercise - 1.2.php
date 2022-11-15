<?php
    $colors = array("white", "green", "red");

    $heading = "<h3>";
    $heading .= implode(", ", $colors);
    $heading .= "</h3>";

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