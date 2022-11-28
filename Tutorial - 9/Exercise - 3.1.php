<?php
    function averageMarksOfStudent($data, $nameOfStudent) {      
        
        if (!isset($data[$nameOfStudent])) {
            echo "Student record not found";
            return;
        }
        
        $studentMarks = $data[$nameOfStudent];
        $sum = 0;
        $count = count($studentMarks);

        foreach ($studentMarks as $mark) {
            $sum += $mark;
        }

        echo "Average marks: " . $sum / $count;
    }
    

    $studentRecords = array("Smit" => [87, 95, 95, 95, 97], 
                            "Daniel" => [100, 65, 0, 99], 
                            "John" => [10, 20, 30, 40, 50, 60, 70, 80]);

    
    $my_marks = $studentRecords["Smit"];

    averageMarksOfStudent($studentRecords, "John");
?>