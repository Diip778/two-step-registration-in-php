<?php
$emailaddress=$_POST["emailaddress"];
$name=$_POST["name"];

$address=$_POST["address"];
$contactno=$_POST["contactno"];
$connectdate=date('m/d/y');
$con=mysqli_connect("localhost", "root", "", "custdb");
$sql="update custinfo set name='$name', address='$address', contactno='$contactno', 
connectdate='$connectdate' where emailaddress='$emailaddress'";
mysqli_query($con,$sql);
header("location:view.php");
?>