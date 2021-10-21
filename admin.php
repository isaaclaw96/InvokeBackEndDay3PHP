<html>
    <body>

        <?php
            include_once 'db_int.php';

            

            if(isset($_POST['admin'])){
                // $NameInput = $_POST['name'];
                $sql = "SELECT * FROM employee";
                $result = $conn->query($sql);

                if($result->num_rows>0){
                    while($row = $result->fetch_assoc()){
                        echo "Employee ID: ".$row['employee_id']." - "."Name: ".$row['name'];
                        echo "<br>"."<br>";
                    }
                }else {
                    echo "No results found";
                }
            }
        ?>

                <form action="timesheet.php" method='post'>
                <label>Choose Employee ID: </label>
                <input type='text' name='name'>
                <input type='submit' name='submit' value='Submit'>
                </form>
    </body>
</html>