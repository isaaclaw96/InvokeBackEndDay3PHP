<html>
    <body>

        <?php
            include_once 'db_int.php';

            

            if(isset($_POST['submit'])){
                $NameInput = $_POST['name'];
                $sql = "SELECT login_time FROM check_in_time WHERE employee_id = '$NameInput'";
                $result = $conn->query($sql);

                $sqlTwo = "SELECT name FROM employee WHERE employee_id = '$NameInput'";
                $resultTwo = $conn->query($sqlTwo);

                if($resultTwo->num_rows>0){
                    while($row = $resultTwo->fetch_assoc()){
                        echo "Name: " .$row['name']."<br>";
                    }
                }else {
                    echo "No results found";
                }


                if($result->num_rows>0){
                    while($row = $result->fetch_assoc()){
                        echo $row['login_time']."<br>";
                    }
                }else {
                    echo "No results found";
                }
            }
            
        ?>
        
    </body>
</html>