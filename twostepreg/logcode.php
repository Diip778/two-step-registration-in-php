<?php
session_start();
$emailaddress=$_POST["emailaddress"];
$password=$_POST["password"];
$con=mysqli_connect("localhost", "root", "", "custdb");
$query="select password from custinfo where emailaddress='$emailaddress'";
$res=mysqli_query($con,$query);
if(mysqli_num_rows($res)>0)
{
if($row=mysqli_fetch_assoc($res))
{
    $respassword=$row["password"];
    if($password==$respassword)
    {
       $_SESSION["valid"]=$emailaddress;
       header("Location:finalreg.php");
    }
    else{
        echo "<script>alert('Invalid User');
        window.location.href='login.php';</script>";
    }
}
}
else{
    echo "<script>
    alert('User does not exist');
    window.location.href='login.php'; </script>";
}
?>