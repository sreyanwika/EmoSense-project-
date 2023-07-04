<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
     <style type="text/css">
          *{
               margin:0;
               padding:0;
          }
          body{
               background-image: url('pce.jpg');
               background-repeat: no-repeat;
               background-size: 1800px 900px;
          }
          .banner-text{
               width:100%;
               position:absolute;

          }
          .banner-text ul{
               height:50px;
               float:right;
               vertical-align: top;
          }
          .banner-text ul li{
               display:inline-block;
               padding:40px 15px;
               text-transform:uppercase;
               color:black;
               font-size:20px;
               vertical-align: top;
          }
          </style>
</head>
<body>
     <div class="banner-text">
          <ul>
               <li><a href="chatt.html">Music</a></li>
               <li><a href="chatface.html">chat</a></li>
               <li><a href="web.html" alt="doc meeting page">Doc Meet</a></li>
          </ul>
     </div> 
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <h1>Welcome to Emosense</h1>
     <a href="logout.php">Logout</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>