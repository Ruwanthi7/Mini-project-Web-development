<?php

$dbhost="localhost";
$dbname="Travel";
$dbusername="root";
$dbpass="";

$mysqli=mysqli_connect($dbhost,$dbusername,$dbpass,$dbname);


?>

<?php

if(isset($_POST['submit'])){
    $fname=$_POST['first_name'];
    $lname=$_POST['last_name'];
    $semail=$_POST['email_signin'];
    $password1=$_POST['password'];
    $package=$_POST['confirm_password'];




    $res=mysqli_query($mysqli,"INSERT INTO user(id,first_name,last_name,email,password) values('','$fname','$lname','$semail','$password1')");
    if($res){
        header("location: view.php");

    }
    else{
        echo 'alert("Failed")';
    }
    

}


?>