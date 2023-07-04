<html><?php
include("db_conn.php");
$name=$_POST['name'];
$Uname=$_REQUEST['Uname'];
$password=$_POST['password'];
$rel="INSERT INTO users (name,user_name,password) VALUES('$name','$Uname','$password')";
$Frel=mysqli_query($conn,$rel)or
die("Error with querying the db");
echo"operation success,pls refresh your pagee...";?>
    <body bgcolor="black">
        <h1 style="color:white;">Successfully registered!!!!</h1>
<input type="button" value="login" onclick="window.location='index.php'"/>
</body>
</html>