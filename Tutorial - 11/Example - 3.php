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

    $query = "CREATE TABLE Marks (
        student_name VARCHAR(30) NOT NULL,
        math_marks INT,
        computer_marks INT,
        science_marks INT
    )";
        
    if ($conn->query($query) === TRUE) {
        echo "Table Marks created successfully";
    } 
    
    else {
        echo "Error creating table: " . $conn->error;
    }
        
    $conn->close();
?>