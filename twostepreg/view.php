<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>View All Registration</h2>
    <?php
    $con=mysqli_connect("localhost", "root", "", "custdb");
    $sql="select * from custinfo";
    $res=mysqli_query($con,$sql);
    if(mysqli_num_rows($res)>0)
    {
        ?>
        <table border="1">
            <tr>
                <th>Name</th>
                <th>Emailaddress</th>
                <th>Address</th>
                <th>Contact Number</th>
                <th>Connect Date</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
        
        <?php
        while($row=mysqli_fetch_assoc($res))
        {
?>
<tr>
    <td><?php echo $row["name"];?></td>
    <td><?php echo $row["emailaddress"];?></td>
    <td><?php echo $row["address"];?></td>
    <td><?php echo $row["contactno"];?></td>
    <td><?php echo $row["connectdate"];?></td>
    <td><a href="delete.php?emailaddress=<?php echo $row["emailaddress"];?>">Delete</a></td>
    <td><a href="update.php?emailaddress=<?php echo $row["emailaddress"]; ?>">Update</a></td>
</tr>
<?php
        }
     ?>
        </table>
        <?php
    }
    else{
        echo "No row found";
    }
    ?>
</body>
</html>