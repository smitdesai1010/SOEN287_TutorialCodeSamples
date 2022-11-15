<?php
    function uppercaseFirst(&$str) {
        $words = explode(" ", $str);

        foreach ($words as &$word) {
            $word[0] = strtoupper($word[0]);
        }

        $str = implode(" ", $words);
    }

    $lowerCaseString = "my name is smit desai";
    uppercaseFirst($lowerCaseString);

    echo $lowerCaseString
?>