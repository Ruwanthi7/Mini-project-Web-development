<?php
include("bookings.php");


?>
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

        <div id="layoutSidenav_content">
            <main>
            <div class="card mb-4">
                        <div class="card-header">
                            <i class="fa fa-table mr-1"></i>
                            All Booking Details
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th scope="col">SELECT</th>    
                                            <th scope="col">ID</th>    
                                            <th scope="col">FIRST NAME</th>                                        
                                            <th scope="col">LAST NAME</th>
                                            <th scope="col">EMAIL</th>
                                            <th scope="col">DELETE</th>                                             
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>                                            
                                            <th scope="col">SELECT</th>   
                                            <th scope="col">ID</th>    
                                            <th scope="col">FIRST NAME</th>                                        
                                            <th scope="col">LAST NAME</th>
                                            <th scope="col">EMAIL</th>
                                            <th scope="col">DELETE</th>                                              
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            //$mysqli=mysqli_connect("localhost","root","","travel1");
                                            $result=mysqli_query($mysqli,"SELECT * FROM user ORDER by id ASC");
                                            while ($row=mysqli_fetch_array($result)) {
                                        ?>
                                            <tr>
                                            <form onload="loadForm()" action="./deleteBookings.php" method="POST">
                                                <td> <input type="checkbox" id="check" onClick="deleteRow()" name="keyToDeleteAdmin" value="<?php echo $row['id'];   ?>"> </td>
                                                <td> <?php echo $row['id']  ?></td>
                                                <td> <?php echo $row['first_name']  ?></td>
                                                <td> <?php echo $row['last_name']  ?></td>
                                                <td> <?php echo $row['email']  ?></td>
                                                <td > <div style="margin:auto">&nbsp &nbsp &nbsp &nbsp <button id="buttonDel" style="background-color: Transparent;background-repeat:no-repeat;border: none;cursor:pointer;overflow: hidden;outline:none;" name="deleteAdmin"> <i style="color:red" class="fa fa-trash-o" aria-hidden="true"></i></button> </div></td>
                                            </form>   
                                            </tr>

                                        <?php    }  ?>

                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div>

            </main>
        <div>


        <div style="margin-bottom: 900px;" class="container-fluid"></div>
     
    </div>

    <script type="text/javascript">

        function loadForm(){
            document.getElementById("buttonDel").disabled = true;
        }

        function deleteRow(){
            var checkBox = document.getElementById("check");

            if(checkBox==true){
                document.getElementById("buttonDel").disabled = false;
            }
        }                                       

    </script>

</body>



</html>