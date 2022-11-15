<?php
    $colors = array("white", "green", "red");
    
    $heading = "<h3>";
    $list = "<ul>";

    foreach ($colors as $key => $color) {
        $heading .= $color . ", ";
        $list .= "<li>$color</li>";
    }

    $heading .= "</h3>";
    $list .= "</ul>";

    echo $heading;
    echo $list;
?>