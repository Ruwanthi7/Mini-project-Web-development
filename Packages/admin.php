<?php
include("server.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Admin</title>
</head>
<body>
    <div style="width:50%;margin: auto;margin-top: 100px;">
        <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">NAME</th>
            <th scope="col">EMAIL</th>
            <th scope="col">VEHICLE</th>
            <th scope="col">REQUIRED DATE</th>
            <th scope="col">PHONE</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $result=mysqli_query($mysqli,"SELECT * FROM packages ORDER by id ASC");
            while ($row=mysqli_fetch_array($result)) {
                echo '<tr>';
                echo '<td>' .$row['id']. '</td>';
                echo '<td>' .$row['name']. '</td>';
                echo '<td>' .$row['email']. '</td>';
                echo '<td>' .$row['vehicle']. '</td>';
                echo '<td>' .$row['required_date']. '</td>';
                echo '<td>' .$row['phone']. '</td>';
                echo '</tr>';
            }


        ?>
        </tbody>
        </table>
    </div>
</body>
</html>