
<?php
include("bookings.php");
?>

<?php

if(isset($_POST['select']))
{
    $key=$_POST['keyToSelect'];
    $dbemail= $row['email'];
        $dbname= "";
        $dbpackage= "";
        $dbvehicle= "";
        $dbrdate= "";

    $query2 = "SELECT * FROM bookings where id=$key";
    $res2=mysqli_query($mysqli,$query2);

    if(!$res2){
        die("Query Failed".mysqli_error($mysqli));

    }

    
    while($row=mysqli_fetch_array($res2))
    {
        $dbemail= $row['email'];
        $dbname= $row['name'];
        $dbpackage= $row['package'];
        $dbvehicle= $row['vehical'];
        $dbrdate= $row['required_date'];

    }

    // echo $dbemail;
    // echo $dbname;
    // echo $dbpackage;
    // echo $dbvehicle;
    // echo $dbrdate;

    // $dbemail="hello";



    $to = $dbemail;
    $subject = "Travel Sri Lanka Package Confirmation";

    $message = '<html><body>';
    $message .= '<h1 style="color:#0065b3;">Travel Sri Lanka</h1>';
    $message .= '<p style="color:   #000000;font-size:18px;">Thank you for choosing Travel Sri Lanka packages.</p>';
    $message .= '<table>
    <tr>
        <th>Name</th>
        <th>Package</th>
        <th>Required Date</th>
        <th>Vehicle</th>
    </tr>
    <tr>
        <td>' .$dbname . '</td>
        <td>'    .$dbpackage .   '</td>
        <td>' .$dbrdate . '</td>
        <td>' .$dbvehicle . '</td>
    </tr>     
    </table><br/>';
    $message .= '</body></html>';

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";



    mail($to,$subject,$message,$headers);
    header("location: dash.php");

    

}



if(isset($_POST['delete']))
{
    $key=$_POST['keyToSelect'];

    
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