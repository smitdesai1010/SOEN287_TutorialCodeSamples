<?php
    function averageMarksOfStudent($data, $nameOfStudent) {
        foreach ($data as $name => $marks) {
            if ($name == $nameOfStudent) {
                
                $sum = 0;
                $count = count($marks);

                foreach ($marks as $mark) {
                    $sum += $mark;
                }

                return $sum / $count;
            }
        }   
    }

    $studentRecords = array("Smit" => [87, 95, 95, 95, 97], 
                            "Daniel" => [100, 65, 0, 99], 
                            "John" => [10, 20, 30, 40, 50, 60, 70, 80]);

    
    echo "Average marks: " . averageMarksOfStudent($studentRecords, "John");
?>