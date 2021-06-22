<?php
session_start();
if(!isset($_SESSION['logedin']) || $_SESSION['logedin']!=true){
    $_SESSION['return_url1']="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    header("location: login.php");
    exit;  }

if(isset($_SESSION['usid']))
 $uid=$_SESSION['usid'];
 //echo $uid;
 $name=$_SESSION['name'];
 //echo $name;

?>
<html>
<head>
<style>
 body
{
background-image:url("donation2.jpg");
background-repeat: no-repeat;
background-size: cover;
}
.btn1,.btn2,.btn3 {
  
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color:black;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius:10px;
  font-size:20px;
  text-align: center;
  opacity:0.6;
  border: 4px solid white;
}
.btn1{
  position: absolute;
  top: 35%;
  left: 80%;
}
.btn2{
    position: absolute;
  top: 50%;
  left: 80%;
}
.btn3{
    position: absolute;
  top: 65%;
  left: 80%;
}
.btn1:hover,.btn2:hover,.btn3:hover {
  background-color:black;
  opacity:1;
}
.welcome{
    font-size: 100px;
    color:whitesmoke;
}
</style>
</head>
<body>
    <div class="welcome">Hi <?php echo $name ?> !</div>
<a href="userblood.php?userid=<?php echo $uid ?>"><button class="btn1">MY POSTS IN BLOOD DONATION PAGE</button></a>
<a href="usermoney.php?userid=<?php echo $uid ?>"><button class="btn2">MY POSTS IN MONEY DONATION PAGE</button></a>
<a href="userbed.php?userid=<?php echo $uid ?>"><button class="btn3">MY POSTS IN BED AVAILABILITY PAGE</button></a>
</body>
</html>