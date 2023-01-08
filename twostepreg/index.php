<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two Step Registration</title>
</head>
<body>
    <h2>Customer Registration</h2>
    <form action="code.php" method="post">
Enter Name :
<input type="text" name="name" required="true" />
<br/><br/>
Enter Email Address :
<input type="email" name="emailaddress" required="true" /><br/><br/>
Enter Password :
<input type="password" name="password" required="true" />
<input type="submit" value="Register" />
<br/><br/>
    </form>
    <a href="login.php">Click here to complete registration</a><br/><br/>
    <a href="view.php">View All Registration</a>
</body>
</html>