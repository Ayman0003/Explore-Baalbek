<?php
    $con = mysqli_connect("localhost", "root","");
    if(!$con)
     die("Could not connect to the server - "
    .mysqli_connect_error());
    echo "<b> Connected to the server</b>";
    mysqli_select_db($con, 'BaalbekDB')
    or die("<br> Could not connect to the DB - "
    .mysqli_error($con));
    echo "<br>  <b> Connected to the DB </b> ";
   
?>

