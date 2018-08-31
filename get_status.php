<?php
    $db_name = "shit";
    $mysql_username = "root";
    $mysql_password = "";
    $server_name = "localhost";
    $conn = mysqli_connect($server_name, $mysql_username, $mysql_password, $db_name);
    $device_name    =   $_GET['device_name'];
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql        =   "SELECT device_status FROM devices_status WHERE device_name='$device_name' LIMIT 1";
    $result     =   $conn->query($sql);

    if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc())
    {
        echo $row['device_status'];
    }

    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>
