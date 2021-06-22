<?php
//session_unset();
// session_start();
// if(isset($_SESSION['usid']))
//  $uid=$_SESSION['usid'];
// echo $uid;
// if(!isset($_SESSION['logedin']) || $_SESSION['logedin']!=true){
//     header("location: login.php");
//     exit;  
   
// }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
    </style>
    <title>Welcome to iDiscuss - Coding Forums</title>
    <style>
     #left{
     margin-left:1200px;
     }
     .btn:hover
     {
      background-color:grey;
     }
    </style>
</head>
<body>
<?php

?>
<nav class="navbar navbar-dark bg-dark">
  <form class="form-inline" background-color="black">
    <button class="btn btn-outline-success" class="btn" type="button"><a href="login.php">LOGIN</a></button>
    <button class="btn btn-outline-success" class="btn" type="button"><a href="signup.php">SIGNUP</a></button>
    <button class="btn btn-outline-success" class="btn" type="button" id="left"><a href="profile.php">MY PROFILE</a></button>
  </form>
</nav>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="blood2.jpeg" class="d-block w-100" alt="..." height="600px">
            </div>
            <div class="carousel-item">
                <img src="donation2.jpg" class="d-block w-100" alt="..." height="600px">
            </div>
            <div class="carousel-item">
                <img src="bed2.jpg" class="d-block w-100" alt="..." height="600px">
            </div>
            <br>
            <br>
        
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container">
    <div class="row">
    <div class="col-md-4 my-2">
    <div class="card" style="width: 18rem;">
  <img src="blood1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">DONATE BLOOD</h5>
    <p class="card-text">Opportunities knock the door sometimes, so don't let it go and donate blood.</p>
    <a href="Blood.php" class="btn btn-primary">Post here for Blood Requirement</a>
  </div>
</div>
</div>
<div class="col-md-4 my-2">
<div class="card" style="width: 18rem;" mrgin="100px">
  <img src="donation1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">DONATE MONEY</h5>
    <p class="card-text">You get more joy out of giving joy to others, you should put a good deal of thought into the happiness that you are able to give.</p>
    <a href="Donation.php" class="btn btn-primary">Post here for Money Requirement</a>
  </div>
</div>
</div>
<div class="col-md-4 my-2">
<div class="card" style="width: 18rem;">
  <img src="bed1.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">PROVIDE BED</h5>
    <p class="card-text">Being rich is not neccesary to help the needy,just show them your rich heart by providing the priceless facilty they need.</p>
    <a href="Beds.php" class="btn btn-primary">Post hear for Bed requirement in hospital</a>
  </div>
</div>
</div>
</div>
<div>
   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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