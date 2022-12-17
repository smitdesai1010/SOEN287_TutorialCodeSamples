<?php
    include './env.php';
    /*
        Your env.php should contain the following:
        <?php
            putenv("serverName=server_name");
            putenv("userName=user_name");
            putenv("password=password");
        ?>

        Replace the values with the actual credentials
    */
    $servername = getenv("serverName");
    $username = getenv("userName");
    $password = getenv("password");

    print_r(phpinfo());

    // Create connection
    $conn = mysqli_connect($servername, $username, $password);

    // Check connection
    if (!$conn) {
        die("Connection failed: " .
        mysqli_connect_error());
    }
    
    echo "Connected successfully";
?>