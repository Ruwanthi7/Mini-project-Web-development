<?php
include("bookings.php");
?>
<?php session_start(); ?>



<?php

    if(isset($_POST['login']))
    {
        //****admin login for the first time ****//


        	// Make my_db the current database
            // $db_selected = mysqli_select_db($mysqli,"travel1");

            // if (!$db_selected) {
            // // If we couldn't, then it either doesn't exist, or we can't see it.
            // $sql = 'CREATE DATABASE travel1';

            // if (mysqli_query($mysqli,$sql)) {
            //     echo "Database my_db created successfully\n";
            // } else {
            //     echo 'Error creating database: ' . mysql_error() . "\n";
            // }
            // }


            // // 2. CONNECT TO THE SPECIFIED DB, confirm connection
            // $db = "travel1";
            // mysqli_select_db($mysqli,$db) or die(mysql_error());

            // $db_connexn = mysqli_select_db($mysqli,$db)or die(mysql_error("can\'t connect to $db"));

            // 3. if table doesn't exist, create it
            $table = "user";
            $query = "SELECT id FROM " . $table;
            //$result = mysql_query($mysqli, $query);
            $result = mysqli_query($mysqli,$query );

            if(empty($result)) {
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
            
            $query2 = "SELECT * FROM user where email='admin@gmail.com'";
            $res2=mysqli_query($mysqli,$query2);

            if(!$res2){
                die("Query Failed".mysqli_error($mysqli));
    
            }
    
            
            while($row1=mysqli_fetch_array($res2))
            {
                $dbemail= $row1['email'];
            }
    
    
            if($dbemail != "admin@gmail.com"){
                $fname1="admin";
                $lname1="admin";
                $semail1="admin@gmail.com";
                $password1="admin";

        
                $res=mysqli_query($mysqli,"INSERT INTO user(id,first_name,last_name,email,password) values('','$fname1','$lname1','$semail1','$password1')");
            }

            




        //****admin login first time end ****//


        //*****admin login******//
        $email=$_POST['email'];
        $password=$_POST['password'];

        $email= mysqli_real_escape_string($mysqli,$email);
        $password=mysqli_real_escape_string($mysqli,$password);


        
        $query="select * from user where email='$email'";

        $select_user_query=mysqli_query($mysqli,$query);

        if(!$select_user_query){
            die("Query Failed".mysqli_error($mysqli));

        }

        
        while($row=mysqli_fetch_array($select_user_query))
        {
            $db_id = $row['id'];
            $db_fname = $row['first_name'];
            $db_lname = $row['last_name'];
            $db_email= $row['email'];
            $db_password= $row['password'];

        }


        if($email== $db_email && $password==$db_password){
            $_SESSION['userLoggedin']=$db_fname;
            $_SESSION['useremail']=$db_email;
            $_SESSION['userpassword']=$db_password;

            header("Location: ./dash.php");
        }
        else{
            header("Location: ../travelguide.html");
        
        }

    }
    else
    {
        echo 'alert("Failed")';
    }   







?>