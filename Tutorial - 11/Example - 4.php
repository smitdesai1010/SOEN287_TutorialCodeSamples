<?php
    include './env.php';
    $servername = getenv("serverName");
    $username = getenv("userName");
    $password = getenv("password");
    $dbname = "studentRecords";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query = "INSERT INTO Marks (student_name, math_marks, computer_marks, science_marks)
                         VALUES ('Smit Desai', '95', '97', '95');";
    
    $query .= "INSERT INTO Marks (student_name, math_marks, computer_marks, science_marks)
                          VALUES ('John Snow', '100', '90', '55');";
    
    $query .= "INSERT INTO Marks (student_name, math_marks, computer_marks, science_marks)
                          VALUES ('Pat Johnson', '75', '80', '95');";
        
    if ($conn->multi_query($query) === TRUE) {
        echo "Inserted Data Successfully";
    } 
    
    else {
        echo "Error creating table: " . $conn->error;
    }
        
    $conn->close();
?>