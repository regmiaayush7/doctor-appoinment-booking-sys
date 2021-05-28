<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>View Appointment</title>
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary fixed-top py-0 ">
  <div class="container py-0">
    <a class="navbar-brand py-0" href="index.php">
         <img src="./images/logo.jpg" alt="">
        </a>
    <button class="navbar-toggler py-0" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon py-0"></span>
        </button>
    <div class="collapse navbar-collapse py-0" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active py-0">
          <a class="nav-link py-0" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item py-0">
          <a class="nav-link py-0" href="#">About
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item py-0">
          <a class="nav-link py-0" href="#">Services
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item py-0">
          <a class="nav-link py-0" href="#">Contact
          <span class="sr-only">(current)</span>
        </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-5">
            <h2><center>Appointment Details</center></h2>


<?php
$con = mysqli_connect("localhost","root","","register");
  
  if(!$con){
    die("Cannot connect to server ".mysqli_connect_error());
  }
  $sql = "select * from appointment order by id";
    $result = mysqli_query($con,$sql);

    if(!$result){
      die("cannot perform query ".mysqli_error());
    }
echo<<<__HTML__
<table class="table table-striped table-sm mt-4">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Doctor Specialization</th>
      <th scope="col">Doctor Name</th>
      <th scope="col">Appointment Date</th>
      <th scope="col">Time</th>  
      
  </thead>
  </tr>
__HTML__;
    while($row = mysqli_fetch_assoc($result)){
      echo "<td>$row[id]</td><td>$row[doctorspecialization]</td><td>$row[doctorname]</td><td>$row[date]</td><td>$row[time]</td>
            </table>";
    }
?>
</div>

<div class="list-group  mt-5">
            <center><h4>Navigation</h4></center>
            <ul class="list-group list-group-horizontal justify-content-center">
             <a href="dlogin.php"><li class="list-group-item list-group-item-action list-group-item-primary"><center><h5>Back to login</h5></center></li></a>
             <a href="plogout.php"><li class="list-group-item list-group-item-action list-group-item-warning "><center><h5>Logout</h5></center></li></a>
           </ul>
  </div> 


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
