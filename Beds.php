
<!DOCTYPE html>
<html>
<head>
<link href="test.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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


<div style="float: left; width: 30%;height: 100%; background:darkred">
<br><center><a href="discussion.php?category=<?php echo 'Beds' ?>"><button class="btn"><i class="fa fa-plus-circle"></i> ADD NEW POST</button></a></center>
</div>
<div class="white" style="float: left; width: 40%;height:100%">
<?php
//$uid = $_GET['userid'];
$servername = "localhost";
$username="root";
$password="";
//echo 'data2';
$conn=mysqli_connect($servername,$username,$password,"MyDb");
$conn1=mysqli_connect($servername,$username,$password,"MyDb");
    //echo 'data3';

    $sql = "select * from Beds order by time DESC"; 
    $result = mysqli_query($conn, $sql);
    $noResult = true;
    $num=mysqli_num_rows($result);

    //echo $num;
    while($row = mysqli_fetch_assoc($result)){
        $noResult = false;
        //echo 'data5';
        $uid = $row['UserId'];
        $sql2 = "select * from UserInfo where UserId='$uid'";
        $result2=mysqli_query($conn,$sql2);
        $row2 = mysqli_fetch_assoc($result2);
        $name= $row2['name'];
        $title = $row['title'];
        $body = $row['body']; 
        $contact = $row['contact']; 
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
        </div>';
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

