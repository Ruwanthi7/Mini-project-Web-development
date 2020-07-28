<?php
include("bookings.php");
?>

<?php session_start(); ?>

 <?php
// if(!isset($_SESSION['useremail'])){  
//         header("Location: ../travelguide.html");
//     } 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
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
                        <a class="nav-link collapsed" href="logout.php" data-toggle="collapse"  aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fa fa-sign-out" aria-hidden="true"></i></div>
                            &nbsp Logout
                            <div class="sb-sidenav-collapse-arrow"></div>
                        </a>
                        
                        
                        
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    <?php echo  $_SESSION['userLoggedin']  ?>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">Primary Card</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fa fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body">Warning Card</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fa fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">Success Card</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fa fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body">Danger Card</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fa fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        
                    </div>

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
                                            <th scope="col">DATE</th>                                        
                                            <th scope="col">NAME</th>
                                            <th scope="col">EMAIL</th>
                                            <th scope="col">VEHICLE</th>                                             
                                            <th scope="col">PACKAGE</th>
                                            <th scope="col">REQUIRED DATE</th>
                                            <th scope="col">PHONE</th>
                                            <th scope="col">Accept/Reject</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th scope="col">SELECT</th>
                                            <th scope="col">ID</th>    
                                            <th scope="col">DATE</th>                                        
                                            <th scope="col">NAME</th>
                                            <th scope="col">EMAIL</th>
                                            <th scope="col">VEHICLE</th>                                            
                                            <th scope="col">PACKAGE</th>
                                            <th scope="col">REQUIRED DATE</th>
                                            <th scope="col">PHONE</th>
                                            <th scope="col">Accept/Reject</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            $mysqli=mysqli_connect("localhost","root","","travel1");
                                            $result1=mysqli_query($mysqli,"SELECT * FROM bookings ORDER by id ASC");
                                            while ($row=mysqli_fetch_array($result1)) { 
                                        ?>
                                                <tr>
                                                <form onload="loadForm()" action="./deleteBookings.php" method="POST">
                                                    <td> <input id="check" onClick="deleteRow()" type="checkbox" name="keyToDelete" value="<?php echo $row['id'];   ?>"> </td>
                                                    <td> <?php echo $row['id'];    ?> </td>
                                                    <td> <?php echo $row['name'];    ?> </td>
                                                    <td> <?php echo $row['name'];    ?> </td>
                                                    <td> <?php echo $row['email'];    ?> </td>
                                                    <td> <?php echo $row['vehical'];    ?> </td>
                                                    <td> <?php echo $row['package'];    ?> </td>
                                                    <td> <?php echo $row['required_date'];    ?> </td>
                                                    <td> <?php echo $row['phone'];    ?> </td>
                                                    <td > <div style="margin:auto">&nbsp &nbsp <i style="color:blue" class="fa fa-check-circle" aria-hidden="true"></i> &nbsp &nbsp <button style="background-color: Transparent;background-repeat:no-repeat;border: none;cursor:pointer;overflow: hidden;outline:none;" id="buttonDel" name="delete" > <i style="color:red"  class="fa fa-trash-o" aria-hidden="true"></i></button> </div></td>
                                                </form>
                                                </tr>

                                    <?php   } ?>

                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </main>
                <div style="margin-bottom: 150px;" class="container-fluid">

                </div>
        </div>
    </div>

    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>

    <script type="text/javascript">
        AOS.init();

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