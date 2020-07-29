<?php session_start(); ?>

 
<?php
if(!isset($_SESSION['useremail'])){  
        header("Location: ../travelguide.html");
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Logged in as: <?php echo  $_SESSION['userLoggedin']  ?></div>
                        <a class="nav-link" href="dash.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-tachometer" aria-hidden="true"></i></div>
                            &nbsp Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed" href="dash.php" data-toggle="collapse" data aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fa fa-area-chart"></i></div>
                            &nbsp Bookings
                            <div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                        </a>
                        <a class="nav-link collapsed" href="reg.php" data-toggle="collapse"  aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fa fa-user-plus"></i></div>
                            &nbsp Admin Registration
                            <div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                        </a>
                        <a class="nav-link collapsed" href="view.php" data-toggle="collapse"  aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fa fa-eye" aria-hidden="true"></i></div>
                            &nbsp View Users
                            <div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                        </a>
                        <a class="nav-link collapsed" href="../travelguide.html" data-toggle="collapse"  aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fa fa-sign-out" aria-hidden="true"></i></div>
                            &nbsp Back to Menu
                            <div class="sb-sidenav-collapse-arrow"></div>
                        </a>
                        <a class="nav-link collapsed" href="logout.php" data-toggle="collapse"  aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fa fa-sign-out" aria-hidden="true"></i></div>
                            &nbsp Logout
                            <div class="sb-sidenav-collapse-arrow"></div>
                        </a>

                    </div>
                </div>
            </nav>
        </div>

        <!-- registration form -->

        <div id="layoutSidenav_content">
            <div style="margin-top: 100px;"></div>
            <div style="margin: auto;">
                <div class="signup-form">
                <form action="./user.php" method="POST">
                    <h2>Sign Up</h2>
                    <p>Add New Admin Registration Form</p>
                    <hr>
                    <div class="form-group">
                        <div class="row">
                            <div class="col"><input type="text" class="form-control" name="first_name" placeholder="First Name" required="required"></div>
                            <div class="col"><input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required"></div>
                        </div>        	
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email_signin" placeholder="Email" required="required">
                    </div>
                    <div class="form-group">
                        <input type="password" id="pass" class="form-control" name="password" placeholder="Password" required="required">
                    </div>
                    <div class="form-group">
                        <input type="password" id="cPass" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
                    </div>        
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary btn-lg" value="Sign Up">
                    </div>
                </form>
            </div>
        </div>
        <!-- end of registration form -->   

        <div style="margin-bottom: 300px;" class="container-fluid"></div>
     
    </div>

    <script type="text/javascript">
    function matchPassword(){
        password1=document.getElementById('pass').value;
        cpassword1=document.getElementById('cPass').value;
        

        if(password1===cpassword1){
            return;
        }
        else{
            alert ("Passwords do not match!");
        }

    }

    </script>
</body>
</html>