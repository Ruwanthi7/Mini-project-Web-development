<?php
$dbhost="localhost";
$dbname="Travel";
$dbusername="root";
$dbpass="";

$mysqli=mysqli_connect($dbhost,$dbusername,$dbpass,$dbname);
?>
<?php session_start(); ?>



<?php

    if(isset($_POST['login']))
    {
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

        if($email!== $db_email && $password!==$db_password){
            header("Location: ../travelguide.html");
        }
        else if($email== $db_email && $password==$db_password){
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