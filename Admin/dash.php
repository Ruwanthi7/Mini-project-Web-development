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
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
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
                <div class="container-fluid" >
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="row" >
                        <div style="cursor: pointer;" onclick="fliter('Package Down South')" class="col-xl-2 col-md-3" style="margin:auto">
                            <div class="card bg-primary text-white mb-5">
                                <div class="card-body">Down South</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" >Available Bookings</a>
                                    <div class="small text-white"><i class="fa fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div style="cursor: pointer;" onclick="fliter('Package Kandy')" class="col-xl-2 col-md-4" style="margin:auto">
                            <div class="card bg-warning text-white mb-5">
                                <div class="card-body">Kandy</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" >Available Bookings</a>
                                    <div class="small text-white"><i class="fa fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div style="cursor: pointer;" onclick="fliter('Package Uva')" class="col-xl-2 col-md-4" style="margin:auto">
                            <div class="card bg-success text-white mb-5">
                                <div class="card-body">Uva</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" >Available Bookings</a>
                                    <div class="small text-white"><i class="fa fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div style="cursor: pointer;" onclick="fliter('Package North Central')" class="col-xl-2 col-md-4" style="margin:auto">
                            <div class="card bg-danger text-white mb-5">
                                <div class="card-body">North Central</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" >Available Bookings</a>
                                    <div class="small text-white"><i class="fa fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div style="cursor: pointer;" onclick="fliter('Package North West')" class="col-xl-2 col-md-4" style="margin:auto">
                            <div class="card bg-danger text-white mb-5">
                                <div class="card-body">North West</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" >Available Bookings</a>
                                    <div class="small text-white"><i class="fa fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>    
                                         
                    </div>

                    <div class="row" >
                        <div style="cursor: pointer;" onclick="fliter('Package Eastern')" class="col-xl-2 col-md-3" style="margin:auto">
                            <div class="card bg-primary text-white mb-5">
                                <div class="card-body">Eastern</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" >Available Bookings</a>
                                    <div class="small text-white"><i class="fa fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div style="cursor: pointer;" onclick="fliter('North')" class="col-xl-2 col-md-4" style="margin:auto">
                            <div class="card bg-warning text-white mb-5">
                                <div class="card-body">North</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" >Available Bookings</a>
                                    <div class="small text-white"><i class="fa fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div style="cursor: pointer;" onclick="fliter('Package Central Platinum')" class="col-xl-2 col-md-4" style="margin:auto">
                            <div class="card bg-success text-white mb-5">
                                <div class="card-body">Central Platinum</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" >Available Bookings</a>
                                    <div class="small text-white"><i class="fa fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div style="cursor: pointer;" onclick="fliter('Package North Platinum')" class="col-xl-2 col-md-4" style="margin:auto">
                            <div class="card bg-danger text-white mb-5">
                                <div class="card-body">North Platinum</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" >Available Bookings</a>
                                    <div class="small text-white"><i class="fa fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div style="cursor: pointer;" onclick="fliter('Customize Places')" class="col-xl-2 col-md-4" style="margin:auto">
                            <div class="card bg-danger text-white mb-5">
                                <div class="card-body">Customize Places</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" >Available Bookings</a>
                                    <div class="small text-white"><i class="fa fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>    
                                         
                    </div>



                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fa fa-table mr-1"></i>
                            <span id="topic">All Booking Details</span>
                        </div>





                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th scope="col">SELECT</th>   
                                            <th scope="col">DATE</th>                                        
                                            <th scope="col">NAME</th>
                                            <th scope="col">EMAIL</th>
                                            <th scope="col">VEHICLE</th>                                             
                                            <th scope="col">PACKAGE</th>
                                            <th scope="col">PLACES</th>
                                            <th scope="col">REQ DATE</th>
                                            <th scope="col">PHONE</th>
                                            <th scope="col">Approvement</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th scope="col">SELECT</th>   
                                            <th scope="col">DATE</th>                                        
                                            <th scope="col">NAME</th>
                                            <th scope="col">EMAIL</th>
                                            <th scope="col">VEHICLE</th>                                            
                                            <th scope="col">PACKAGE</th>
                                            <th scope="col">PLACES</th>
                                            <th scope="col">REQ DATE</th>
                                            <th scope="col">PHONE</th>
                                            <th scope="col">Approvement</th>
                                        </tr>
                                    </tfoot>
                                    <tbody id="tableBody">
                                        <?php
                                            
                                            $result1=mysqli_query($mysqli,"SELECT * FROM bookings ORDER by id ASC");
                                            while ($row=mysqli_fetch_array($result1)) { 
                                        ?>
                                                <tr>
                                                <form onload="loadForm()" action="./approvement.php" method="POST">
                                                    <td> <input id="check" onClick="selectRow()" type="checkbox" name="keyToSelect" value="<?php echo $row['id'];   ?>"> </td>
                                                    <td> <?php echo $row['date'];    ?> </td>
                                                    <td> <?php echo $row['name'];    ?> </td>
                                                    <td> <?php echo $row['email'];    ?> </td>
                                                    <td> <?php echo $row['vehical'];    ?> </td>
                                                    <td> <?php echo $row['package'];    ?> </td>
                                                    <td> <?php echo $row['places'];    ?> </td>
                                                    <td> <?php echo $row['required_date'];    ?> </td>
                                                    <td> <?php echo $row['phone'];    ?> </td>
                                                    <td > <div style="margin:auto">&nbsp &nbsp 
                                                    </i> &nbsp &nbsp 
                                                    <button style="background-color: Transparent;background-repeat:no-repeat;border: 
                                                    none;cursor:pointer;overflow: hidden;outline:none;" id="buttonSel" name="select" > 
                                                        <i style="color:blue" class="fa fa-check-circle" aria-hidden="true"></i>
                                                    </button> 

                                                    <button style="background-color: Transparent;background-repeat:no-repeat;border: 
                                                    none;cursor:pointer;overflow: hidden;outline:none;" id="buttonDel" name="delete" > 
                                                        <i style="color:red"  class="fa fa-trash-o" aria-hidden="true"></i>
                                                    </button> </div></td>
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

        function selectRow(){
            var checkBox = document.getElementById("check");

            if(checkBox==true){
                document.getElementById("buttonDel").disabled = false;
                document.getElementById("buttonSel").disabled = false;
            }
        }  

        function fliter(packageName) {
            topicChange(packageName);
            var input, filter, table, tr, td, i, txtValue;
            input = packageName;
            filter = input.toUpperCase();
            table = document.getElementById("dataTable");
            tr = table.getElementsByTagName("tr");
            console.log(tr.length);
            for (i = 0; i < tr.length; i++) {
                
                td = tr[i].getElementsByTagName("td")[5];
                console.log(td);
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } 
                    else {
                        tr[i].style.display = "none";
                    }
                }       
            }
        }          

        function topicChange(packageName){
            document.getElementById("topic").innerHTML = packageName;
        }                    

    </script>
</body>
</html>