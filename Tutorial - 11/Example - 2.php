<?php
    include './env.php';

    $servername = getenv("serverName");
    $username = getenv("userName");
    $password = getenv("password");

    // Create connection
    $conn = new mysqli($servername, $username, $password);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Create database
    $query = "CREATE DATABASE studentRecords";

    if ($conn->query($query) === TRUE) {
        echo "Database created successfully";
    } 
    else {
        echo "Error creating database: " . $conn->error;
    }

    $conn->close();
?>