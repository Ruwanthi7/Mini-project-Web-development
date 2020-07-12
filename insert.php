<?php
$username=$_POST['username'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];
if(!empty($username)||!empty($email)||!empty($phone)||!empty($message))
{
	$host="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname="contactus";

	$conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);
	if(mysqli_connect_error()){
		die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
	}
	else{
	
	$sql="INSERT INTO register(username,email,phone,message)
		values('$username','$email','$phone','$message')";

		if($conn->query($sql)){

			$message = "new message is send sucessfully";
            echo "<script type='text/javascript'>alert('$message');</script>";

		}
		else
		{
			echo "Error".$sql."<br>".$conn->error;
		}
		$conn->close();

}
	}
?>