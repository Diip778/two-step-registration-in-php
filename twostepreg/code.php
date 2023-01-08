<?php
$name=$_POST["name"];
$emailaddress=$_POST["emailaddress"];
$password=$_POST["password"];
$con=mysqli_connect("localhost","root","","custdb");
$query="insert into custinfo(name,emailaddress,password) values('$name','$emailaddress','$password')";
mysqli_query($con,$query);
echo "<script> alert('Registration is done');
window.location.href='index.php';
</script>";
?>