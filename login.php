<?php
        include_once 'db_int.php';

            

                if(isset($_POST['submit'])){
                    $NameInput = $_POST['name'];
                    $sql = "SELECT employee_id, name FROM employee WHERE employee_id = '$NameInput'";
                    $result = $conn->query($sql);

                    if($result->num_rows>0){
                        while($row = $result->fetch_assoc()){
                            echo "Hello " . $row['name']. ". Your id number is " .$row['employee_id']."<br>";
                        }
                    }else {
                        echo "No results found";
                    }
                    $time_log = "INSERT INTO check_in_time (employee_id) SELECT employee_id FROM employee WHERE employee_id =  '$NameInput'";
                    if ($conn->query($time_log) === TRUE) {
                        echo "Logged In";
                        } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                }


        // header("Location: login.php?signup=success");
?>
<html>
    <body>
        <br>
        <!-- <form action='checkin.php' method='post'>
            <label>Check In</label>
            <button name='button'>I'm Here!</button>
        </form> -->
        <br>
        <form action='exercise.php' method='post'>
            <label>Return</label>
            <button name='button'>Return</button>
        </form>
    </body>
</html>