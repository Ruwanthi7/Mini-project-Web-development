<?php
include("bookings.php");
?>

<?php

    if(isset($_POST['submit'])){


        // Make my_db the current database
        $db_selected = mysqli_select_db($mysqli,"travel1");

        if (!$db_selected) {
        // If we couldn't, then it either doesn't exist, or we can't see it.
        $sql = 'CREATE DATABASE travel1';

        if (mysqli_query($mysqli,$sql)) {
            echo "Database my_db created successfully\n";
        } else {
            echo 'Error creating database: ' . mysql_error() . "\n";
        }
        }


        // 2. CONNECT TO THE SPECIFIED DB, confirm connection
        $db = "travel1";
        mysqli_select_db($mysqli,$db) or die(mysql_error());
        $db_connexn = mysqli_select_db($mysqli,$db)or die(mysql_error("can\'t connect to $db"));

        // 3. if table doesn't exist, create it
        $table = "user";
        $query = "SELECT id FROM " . $table;
        //$result = mysql_query($mysqli, $query);
        $result = mysqli_query($mysqli,$query );

        if(empty($result)) {
            echo "<p>" . $table . " table does not exist</p>";
            $query2 = "CREATE TABLE IF NOT EXISTS user (
                id INT NOT NULL AUTO_INCREMENT,
                PRIMARY KEY(id),
                first_name    VARCHAR(100) NOT NULL,
                last_name   VARCHAR(100)  NOT NULL,
                email   VARCHAR(100)  NOT NULL,
                password   VARCHAR(100)  NOT NULL
            )";


            $created=mysqli_query($mysqli,$query2 );
            echo "<p>" . $table . "table created</p>";
        }
        


        $fname=$_POST['first_name'];
        $lname=$_POST['last_name'];
        $semail=$_POST['email_signin'];
        $password1=$_POST['password'];
        $package=$_POST['confirm_password'];


        $query3 = "SELECT * FROM user where email='$semail'";
        $res2=mysqli_query($mysqli,$query3);

        if(!$res2){
            die("Query Failed".mysqli_error($mysqli));

        }

        
        while($row1=mysqli_fetch_array($res2))
        {
            $dbemail= $row1['email'];
        }

        $res3=null;
        if($dbemail != $semail){
            $res3=mysqli_query($mysqli,"INSERT INTO user(id,first_name,last_name,email,password) values('','$fname','$lname','$semail','$password1')");
        }


        if($res3){
            header("location: reg.php");

        }
        else{
            echo "Already Signin";         
        }
        
        
    }
        

?>



