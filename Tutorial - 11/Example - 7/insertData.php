<?php
    include '../env.php';
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

    $name = $_POST['name'];
    $math = $_POST['math'];
    $computer = $_POST['computer'];
    $science = $_POST['science'];

    $query = "INSERT INTO Marks (student_name, math_marks, computer_marks, science_marks)
                         VALUES ('$name', '$math', '$computer', '$science');";
        
    if ($conn->query($query) === TRUE) {
        echo "Inserted Data Successfully";
    } 
    
    else {
        echo "Error creating table: " . $conn->error;
    }
        
    $conn->close();
?>