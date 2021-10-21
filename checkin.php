<?php 
    include 'dn_int.php';

    $sql = "INSERT INTO check_in_time (login_time)
    VALUES ()";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }