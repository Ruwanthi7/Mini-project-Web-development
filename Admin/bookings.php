<?php

    if(isset($_POST['submit'])){
        // CONNECT TO THE DB SERVER, confirm connection
        //mysqli_connect("localhost", "root", "") or die(mysql_error());
        $mysqli = mysqli_connect("localhost", "root", ""); // redundant ?


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


        // CONNECT TO THE SPECIFIED DB, confirm connection
        $db = "travel1";
        mysqli_select_db($mysqli,$db) or die(mysql_error());
        $db_connexn = mysqli_select_db($mysqli,$db)or die(mysql_error("can\'t connect to $db"));

        // if table doesn't exist, create it
        $table = "bookings";
        $query = "SELECT id FROM " . $table;
        //$result = mysql_query($mysqli, $query);
        $result = mysqli_query($mysqli,$query );

        if(empty($result)) {
            $query2 = "CREATE TABLE IF NOT EXISTS bookings (
                id INT NOT NULL AUTO_INCREMENT,
                PRIMARY KEY(id),
                date    VARCHAR(100) NOT NULL,
                name   VARCHAR(100)  NOT NULL,
                email   VARCHAR(100)  NOT NULL,
                vehical   VARCHAR(100)  NOT NULL,
                package   VARCHAR(100)  NOT NULL,
                required_date   VARCHAR(100)  NOT NULL,
                phone   VARCHAR(100)  NOT NULL
            )";


            $created=mysqli_query($mysqli,$query2 );
            echo "<p>" . $table . "table created</p>";
        }
        
        echo "<p>" . $table . "table exists</p>";

        $name=$_POST['name'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $date= date("j-n-y") ;
            $vehicle=$_POST['vehicle'];
            $package=$_POST['pname'];
            $required_date=$_POST['date'];;

            if($vehicle==1){
                $vehicle="Van";
            }
            else if($vehicle==2){
                $vehicle="Car";
            }
            else{
                $vehicle="Bus";
            }
            

            $res=mysqli_query($mysqli,"INSERT INTO bookings values('','$date','$name','$email','$vehicle','$package','$required_date','$phone')");
            if($res){
                header("location: ../Packages/packages.html");

            }
            else{
                echo 'alert("Failed")';
            }
        
    }
        

?>