<?php

    $studentRecords = array(
                            "Smit" => [87, 95, 95, 95, 97], 
                            "Daniel" => [100, 65, 0, 99], 
                            "John" => [10, 20, 30, 40, 50, 60, 70, 80]
                        );
    
    function averageMarksOfStudent($data, $nameOfStudent) {

        $response = array(
            "SUCCESS" => false,
            "MESSAGE" => "Student name not found"
        );
        

        foreach ($data as $name => $marks) {
            if ($name == $nameOfStudent) {
                
                $sum = 0;
                $count = count($marks);

                foreach ($marks as $mark) {
                    $sum += $mark;
                }

                $response["SUCCESS"] = true;
                $response["MESSAGE"] = "Average marks: ". $sum / $count;
            }
        }   

        $QUERY_PARAM = http_build_query($response);
        $URL = "index.html" . "?" . $QUERY_PARAM;

        header("location: $URL");
    }

    $student_name = $_GET['name'];
    averageMarksOfStudent($studentRecords, $student_name);
?>