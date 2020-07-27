<?php session_start(); ?>



<?php

  
$_SESSION['userLoggedin']=null;
$_SESSION['useremail']=null;
$_SESSION['userpassword']=null;

header("Location: ../travelguide.html")


?>