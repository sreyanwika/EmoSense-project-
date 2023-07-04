<html><?php
include("db_conn.php");
$name=$_POST['name'];
$email=$_REQUEST['email'];
$rating=$_POST['rating'];
$comment1=$_POST['comment1'];
$rel="INSERT INTO feed (name,email,number,comment) VALUES('$name','$email','$rating','$comment')";
$Frel=mysqli_query($conn,$rel)or
die("Error with querying the db");
echo"operation success,pls refresh your pagee...";?>
    <body bgcolor="black">
        <h1 style="color:white;">Successfully sent!!!!</h1>
<input type="button" value="music" onclick="window.location='chatt.html'"/>
</body>
</html>