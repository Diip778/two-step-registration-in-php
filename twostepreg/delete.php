<?php
$emailaddress=$_GET["emailaddress"];
$con=mysqli_connect("localhost", "root", "", "custdb");
$query="delete from custinfo where emailaddress='$emailaddress'";
mysqli_query($con,$query);

header("location:view.php");
?>