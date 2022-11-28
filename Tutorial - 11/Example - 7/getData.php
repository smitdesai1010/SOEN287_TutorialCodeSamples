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

    $query = "SELECT * FROM Marks";

    if ($_GET['name'] != "") {
        $name = $_GET['name'];
        $query .= " WHERE student_name = '$name'";
    }

    $result = $conn->query($query);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["student_name"]. "<br>" 
                            ." - Math Marks: " . $row["math_marks"]. "<br>" 
                            ." - Computer Marks: " . $row["computer_marks"]. "<br>" 
                            ." - Science Marks: " . $row["science_marks"]. "<br>";
        echo "<br>";
      }
    } 

    else {
      echo "No records found";
    }

    $conn->close();
?>