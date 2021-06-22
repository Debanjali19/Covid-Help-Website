<!DOCTYPE html>
<html>
<head>
<link href="test.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<style>
.nopost{

font-size: 80px;
color: darkgrey;
    width: 80%;
    border: 1px solid darkgray;
   font-weight: lighter;
    margin-top: 20px;
    margin-bottom: 20px;
    margin-left: 70px;
    box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
    
    min-height: 570px;
    /* display: grid;
    grid-template-columns: 100px;  */
    display: flex;
    flex-direction: column;
    align-content: center;
    justify-content: center;
    
}
.namedate{
     display: flex;
     flex-direction: row;
   }
 .date{
     margin-left:70px;
     float: right;
     margin-top: 10px;
     color:darkgrey;
 }  
</style>
</head>
<body>


<div style="float: left; width: 30%;height: 100%; background:darkred"></div>
<div class="white" style="float: left; width: 40%;height:100%">
<?php
$uid=$_GET['userid'];



$servername = "localhost";
$username="root";
$password="";

if(isset($_GET['postid']))
{   $pid=$_GET['postid'];
    $conn1=mysqli_connect($servername,$username,$password,"MyDb");
    $sql2="delete from Beds where UserId='$uid'AND PostId='$pid'";
    $result2 = mysqli_query($conn1, $sql2);
    if($result2)
    {
        echo 'Delete successfull';
    }
}


$conn=mysqli_connect($servername,$username,$password,"MyDb");

$sql="select * from Beds where UserId ='$uid' order by time DESC";
$result = mysqli_query($conn, $sql);
$noResult = true;
while($row = mysqli_fetch_assoc($result)){
    $noResult = false;
    $uid = $row['UserId'];
    $sql2 = "select * from UserInfo where UserId='$uid'";
    $result2=mysqli_query($conn,$sql2);
    $row2 = mysqli_fetch_assoc($result2);
    $name= $row2['name'];
    $title = $row['title'];
    $body = $row['body']; 
    $contact = $row['contact']; 
    $pid = $row['PostId'];
    $dt=$row['time'];
        $dtob=new DateTime($dt);
        $date=$dtob->format('d');
        $month=$dtob->format('m');
        $year=$dtob->format('Y');
        $dtob2=DateTime::createFromFormat('!m', $month);
        $monthname=$dtob2->format('F');
        $time=$dtob->format('h:i A');
        $t=$date . " " . $monthname . " " . $year;

     echo'<div class="box">

    <div class="namedate"> 
    <div class="name">' .$name. '</div>
    <div class="date">' .$t. '<br>' .$time. '</div> 
    </div>
        <div class="title">' . nl2br($title). '</div>
       <div class="bodytext">' . nl2br($body). '</div>
       <div class="contact">' . nl2br($contact). '</div>
    </div>
        <a href="userblood.php?userid=' .$uid. '&postid=' .$pid. '"><center><button class="btn" style="background-color:red">Delete<button></center></a>';
        
}
if($noResult==true)
{
    echo '<div class="nopost">
    <center> NO POSTS TO SHOW</center>
 </div>';
}



?>

</div>
<div style="float: left; width: 30%;height:100%; background:darkred"></div>
</body>
</html>
