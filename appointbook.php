<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style type="text/css">

  </style>
  <title>BookAp </title>
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
            <a class="nav-link py-0" href="#">Home
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

  <?php 
  session_start();?>
  <?php
  function insertData($doctorspecialization,$doctorname,$date,$time){
    $con = mysqli_connect("localhost","root","","register");
    if(!$con){
      die("Cannot connect to the database ".mysqli_error($con));
    }
    $sql = "insert into appointment (doctorspecialization,doctorname,date,time) values ('$doctorspecialization','$doctorname','$date','$time')";
    $result = mysqli_query($con,$sql);
    if(!$result){
      die("Cannot perform the query ".mysqli_error($con));
    }
    echo "<center><b>You Appointment is Booked.</b></center>";
  }
  function showForm(){

    echo<<<__HTML__
    <div class="container-fluid col-lg-5 mt-5">
        <h2><center>Appointment Booking Form</center></h2>
      <form class="needs-validation" name="f2" method='Post' action="$_SERVER[PHP_SELF]" novalidate>
      <div class="form-group justify-content-center">
    <label for="doctorspecialization">Doctor Specialization</label>
    <select class="form-control" name="doctorspecialization"  id="doctorspecialization" required>
      <option></option>
      <option>General Physician</option>
      <option>Dermatologist</option>
      <option>Homeopath</option>
      <option>Ayurveda</option>
      <option>Dentist</option>
      <option>Ear-Nose-throat(ent) Specialist</option>
      <option>Orthopaedic</option>
      <option>Body Checkup</option>
      <div class="valid-feedback"></div>
    <div class="invalid-feedback">Please fill out this field.</div>
    </select>
  </div>
        <div class="form-group justify-content-center">
        <label for="doctorname">Choose Doctor And Date</label>
          <select class="form-control" name="doctorname"  id="doctorname" required>    
                  

__HTML__;

 $con = mysqli_connect("localhost","root","","register");
    if(!$con){
      die("Cannot connect to the database ".mysqli_error($con));
    }
            $res=mysqli_query($con,"select* from doctor");
            while($row=mysqli_fetch_array($res))
            {
              echo " <option>$row[doctorname]</option>";
            }
           
   echo<<<__HTML__
          <div class="form-group justify-content-center">
            <label for="date">Date</label>
            <input type='date' name='date' class="form-control" id="date" placeholder="Enter Date" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>

          <div class="form-group justify-content-center">
            <label class="control-label" for="date">Time</label>
            <input type='time' name='time' class="form-control" id="time" placeholder="Enter Time" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <input type='hidden' name='check' value='1' />
          <center><button type="Submit" name="save"class="btn btn-primary btn-lg">Submit</button></center>

          <div class="list-group  mt-5 ">
            <center><h4>Navigation</h4></center>
            <ul class="list-group list-group-horizontal">
             <a href="appointbook.php"><li class="list-group-item list-group-item-action list-group-item-primary"><center><h5>Book Appointment</h5></center></li></a>
             <a href="modifyappoint.php"><li class="list-group-item list-group-item-action list-group-item-success"><center><h5>Appointment Details</h5></center></li></a>
             <a href="pupdate.php"><li class="list-group-item list-group-item-action list-group-item-secondary"><center><h5>Update Profile</h5></center></li></a>
             <a href="pbook.php"><li class="list-group-item list-group-item-action list-group-item-warning "><center><h5>Dash Board</h5></center></li></a>
           </ul>
         </div>
        
        
       </form>
       </div>

__HTML__;

   }
   ?>

   <?php
   if(isset($_POST['check']))
   {
    insertData($_POST['doctorspecialization'],$_POST['doctorname'],$_POST['date'],$_POST['time']);
    showForm();
  }else
  {
    showForm();
  }

  ?>
  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017-2019 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
  <script>
    (function() {
      'use strict';
      window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
        var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();0
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>