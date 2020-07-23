<?php

$dbhost="localhost";
$dbname="practice4";
$dbusername="root";
$dbpass="";

$mysqli=mysqli_connect($dbhost,$dbusername,$dbpass,$dbname);


?>

<?php
        if(isset($_POST['submit'])){
            $name=$_POST['name'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $date=$_POST['date'];
            $vehicle=$_POST['vehicle'];
            $package=$_POST['package'];

            if($vehicle==1){
                $vehicle="Van";
            }
            else if($vehicle==2){
                $vehicle="Car";
            }
            else{
                $vehicle="Bus";
            }
            

            $res=mysqli_query($mysqli,"INSERT INTO packages values('','$name','$email','$vehicle','$date','$phone','$package')");
            if($res){
                header("location: ../Packages/packages.html");

            }
            else{
                echo 'alert("Failed")';
            }

            // if(empty($res)){
            //     // ****if doesn't exists****//
            // $res=mysqli_query($mysqli,"CREATE TABLE IF NOT EXISTS `test_q` (
            //     `id` int(30) NOT NULL AUTO_INCREMENT,
            //     `name` varchar(255) NOT NULL,
            //     `email` varchar(255) NOT NULL,
            //     `vehicle` varchar(255) NOT NULL,
            //     `required_date` date NOT NULL,
            //     `phone` int(30) NOT NULL,
            //     PRIMARY KEY (`id`),
            //     ) ");
            // }
            // else{
                

            //}


            

        }

?>

<!-- CREATE TABLE IF NOT EXISTS `test_q` (
    `id` int(30) NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `vehicle` varchar(255) NOT NULL,
    `required_date` date NOT NULL,
    `phone` int(30) NOT NULL,
    PRIMARY KEY (`id`),
    )  -->