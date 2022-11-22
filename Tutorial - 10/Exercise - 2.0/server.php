<?php

    $studentRecords = array(
                            "Smit" => [87, 95, 95, 95, 97], 
                            "Daniel" => [100, 65, 0, 99], 
                            "John" => [10, 20, 30, 40, 50, 60, 70, 80]
                        );
                        
    function averageMarksOfStudent($data, $nameOfStudent) {
        foreach ($data as $name => $marks) {
            if ($name == $nameOfStudent) {
                
                $sum = 0;
                $count = count($marks);

                foreach ($marks as $mark) {
                    $sum += $mark;
                }
                
                echo "Average marks: ". $sum / $count;
                return; 
            }
        }   

        echo "Student name not found";
    }

    $student_name = $_GET['name'];
    averageMarksOfStudent($studentRecords, $student_name);
?>