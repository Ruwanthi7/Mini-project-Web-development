<?php
        $link=mysqli_connect("localhost", "root", "");

        // Make my_db the current database
        $db_selected = mysqli_select_db($link,"travel");
    
        if (!$db_selected) {
        // If we couldn't, then it either doesn't exist, or we can't see it.
        $sql = 'CREATE DATABASE travel';
    
        if (mysqli_query($link,$sql)) {
            echo "Database my_db created successfully\n";
        } else {
            echo 'Error creating database: ' . mysql_error() . "\n";
        }
        }
    
        $mysqli = mysqli_connect("localhost","root","","travel");


    if(isset($_POST['submit'])){

        // CONNECT TO THE SPECIFIED DB, confirm connection
        $db = "travel";
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
                places   VARCHAR(100)  NOT NULL,
                required_date   VARCHAR(100)  NOT NULL,
                phone   VARCHAR(100)  NOT NULL
            )";


            $created=mysqli_query($mysqli,$query2 );
           
        }
        
      

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
            
            if($package!="Customize Places"){
            
                $places="-";
                echo $places;
                $res=mysqli_query($mysqli,"INSERT INTO bookings (id,date,name,email,vehical,package,required_date,phone,places) VALUES ('','$date', '$name', '$email', '$vehicle', '$package', '$required_date', '$phone','$places')");
                if($res){
                    header("location: ../Packages/packages.html");

                }
                
                else{
                    echo 'alert("return")';
                }
            }
            else if($package=="Customize Places"){

                $places=$_POST['places'];
                echo $places;
                $res=mysqli_query($mysqli,"INSERT INTO bookings (date,name,email,vehical,package,places,required_date,phone) values('$date','$name','$email','$vehicle','$package','$places','$required_date','$phone')");
                if($res){
                    header("location: ../Packages/packages.html");

                }
                
                else{
                    echo 'alert(" Failed")';
                }

            }

            else{
                echo 'alert("return aa")';
                return;
            }



            
        
    }
        

?>