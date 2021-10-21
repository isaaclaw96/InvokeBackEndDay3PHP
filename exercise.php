<html>
    <body>
        
        <form action="login.php" method='post'>
        <label>Employee ID: </label>
        <input type='text' name='name'>
        <input type='submit' name='submit' value='Submit'>
        </form>
        <form action='admin.php' method='post'>
        <label>Admin Login</label>
        <button name='admin'>ADMIN</button>
        </form>
        

           

            <!-- //Insert Data into SQL
            // $NameInput = $_POST['name'];

            // if ($NameInput !== ""){
            //     $sql = "INSERT INTO employee(name) VALUES ('$NameInput')";

            //     if ($conn->query($sql) === TRUE){
            //         echo "New Record Recorded!";
            //     }else {
            //         echo "Record Unsuccessful: ".$sql."<br>".$conn->error;
            // }  
            // }
            

            // $sql = "SELECT id, name, date_created FROM employee";
            // $result = $conn->query($sql);

            // if($result->num_rows > 0){

            // } -->



    </body>
</html>