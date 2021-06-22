
 <?php
  session_start();
  if(!isset($_SESSION['logedin']) || $_SESSION['logedin']!=true){
    $_SESSION['return_url1']="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
      header("location: login.php");
      exit;  }
  
  if(isset($_SESSION['usid']))
   $uid=$_SESSION['usid'];

  $category=$_GET['category'];
  
  //echo $uid;
  //echo $category;
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $servername = "localhost";
        $username="root";
        $password="";

        $conn=mysqli_connect($servername,$username,$password,"MyDb");
        $title = $_POST['title'];
        $desc = $_POST['desc'];
        $contact=$_POST['contact'];
        $uid=$_GET['userid'];
     $category=$_GET['category'];
     //echo $uid;
     //echo $category;
        //echo $uid;
        $sql = "INSERT INTO `$category` (`UserId`,`title`,`body`,`contact`) VALUES ($uid,'$title','$desc','$contact')";
        //echo 'data2';
        $result = mysqli_query($conn, $sql);
        //echo 'data3';
        if($result)
        {
            header("location: $category.php");
        }
    }
    ?>
<!Doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <style>

body{
    background-image:url("discussion.jpeg");
background-repeat: no-repeat;
background-size: cover;
}
div.register{
background-color: (0,0,0,0.5);
width:100%;
font-size:18px;
border-radius:10px;
border:1px soid rgba(255,255,255,0.3);
box-shadow:2px 2px 15px rgba(0,0,0,0.3);
color:black;
width:800px;
height:625px;
margin:100px 520px 100px;
}
*{
margin:0;
padding:0;
}
form#register{
margin:40px;
}
label {
font-family:sans-serif;
font-size:18px;
font-style:italic;
}
h2{
text-shadow:1px 1px 5px rgba(0,0,0,0.3);
text-align:center;
padding:20px;
font-family:sans-serif;
}
textarea,input{
width:300px;
border:1px solid #ddd;
border-radius:3px;
outline:0;
padding:7px;
background-color:#fff;
box-shadow:inset 1px 1px 5px rgba(0,0,0,0.3)
}
#submit{
width:200px;
padding:7px;
font-size:16px;
font-family:sans-serif;
font-weight:600;
border:none;
border-radius:3px;
background-color:rgba(250,100,0,0.8);
color:#fff;
cursor:pointer;
border:1px solid rgba(255,255,255,0.3);
box-shadow:1px 1px 5px rgba(0,0,0,0.3);
margin-bottom:20px;
}
div.main{
width:400px;

}
 </style>
</head>

<body>
<div class="main">
<div class="register">
    <div class="container">
            <h1 class="py-2">Post about your requirement...</h1> 
            <form action="/covid_help_website/discussion.php?userid=<?php echo $uid ?>&category=<?php echo $category ?>" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" placeholder="Enter problem title">
                    <small id="title" class="form-text text-muted">Keep as short as
                        possible</small>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Problem Description</label>
                    <textarea class="form-control" id="desc" name="desc" rows="5" placeholder="Specify details like name,hospital,location,blood group, etc."></textarea>
                </div>
                <div class="form-group">
                    <label for="contact">Contact Details</label>
                    <textarea class="form-control" id="contact" name="contact" rows="4" placeholder="Mention phone number and email"></textarea>
                </div>
               <center> <button type="submit" class="btn btn-success">Submit</button></center>
            </form>
        </div>
</div>
</div>
    
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>