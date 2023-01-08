<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h2>Update All Registration</h2>
    <form action="updatecode.php" method="post">
    <?php
    $emailaddress=$_GET["emailaddress"];
    $con=mysqli_connect("localhost", "root", "", "custdb");
    $sql="select * from custinfo where emailaddress='$emailaddress'";
    $res=mysqli_query($con,$sql);
    if(mysqli_num_rows($res)>0)
    {
        if($row=mysqli_fetch_assoc($res))
        {
            ?>
       Name : 
       <input type="text" name="name" value="<?php echo $row['name'];?>" />
       <br/><br/>
       Address :
       <textarea name="address" id="" cols="30" rows="3" value="<?php echo $row['address'];?>"></textarea><br/><br/>
       Contact Number:
       <input type="number" name="contactno" value="<?php echo $row["contactno"]; ?>" />
       <br/>
       <input type="hidden" name="emailaddress" value="<?php echo $row["emailaddress"]; ?>" />
       <input type="submit" value="Update" />
    
        
        
        <?php
        }
    }
    ?>   
    </form>
</body>
</html>