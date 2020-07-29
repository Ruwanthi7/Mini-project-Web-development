
<?php
include("bookings.php");
?>

<?php

if(isset($_POST['delete']))
{
    $key=$_POST['keyToDelete'];

    
    header("location: dash.php");
    
    
    $result=mysqli_query($mysqli,"DELETE FROM bookings where id=$key");
    if(!$result){
        die("Query Failed" .mysqli_error($mysqli));

    }
    else{
        header("location: dash.php");
    }

    


    

}


if(isset($_POST['deleteAdmin']))
{
    $key2=$_POST['keyToDeleteAdmin'];

    
    header("location: view.php");

    
    $result=mysqli_query($mysqli,"DELETE FROM user where id=$key2");
    if(!$result){
        die("Query Failed" .mysqli_error($mysqli));

    }
    else{
        header("location: view.php");
    }
    

    

}

?>