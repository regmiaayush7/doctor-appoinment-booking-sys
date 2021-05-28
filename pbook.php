<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css">
        h3{
            margin-top: 4rem;
            margin-bottom: 1rem;
            text-align: center;
          }
              .card-img-top {
                 width: 100%;
                height: 45vh;
                object-fit: cover;
          }
    </style>
    <title>Patient Booking </title>
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

<div class="container-fluid mt-3">
    <p><h3> Welcome to the Dashboard</h3></p>
</div>
<div class="container-fluid mt-3">
<div class="row ml-2">
<div class="card col-lg-3" style="width: 18rem;">
  <img src="./images/pic10.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Book Appointment</h5>
    <p class="card-text">Click the button below to book an appintment with a doctor</p>
    <a href="appointbook.php" class="btn btn-primary">Click Here</a>
  </div>
</div>
<div class="card col-lg-3" style="width: 18rem;">
  <img src="./images/pic11.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Appointment Details</h5>
    <p class="card-text">click the button below to view your appointment or cancel it.</p>
    <a href="modifyappoint.php" class="btn btn-primary">Click Here</a>
  </div>
</div>
<div class="card col-lg-3" style="width: 18rem;">
  <img src="./images/pic12.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Update Profile</h5>
    <p class="card-text">Click the button below to update your profile informations</p>
    <a href="pupdate.php" class="btn btn-primary">Click Here</a>
  </div>
</div>
<div class="list-group col-lg-3">
       <class ="list-group-item list-group-item-action"><center><h4>Navigation</h4></center>
        <a href="appointbook.php" class="list-group-item list-group-item-action list-group-item-primary"><center><h5>Book Appointment</h5></center></a>
          <a href="modifyappoint.php" class="list-group-item list-group-item-action list-group-item-success"><center><h5>Appointment Details</h5></center></a>
            <a href="pupdate.php" class="list-group-item list-group-item-action list-group-item-secondary"><center><h5>Update Profile</h5></center></a>
            <a href="plogout.php" class="list-group-item list-group-item-action list-group-item-warning"><center><h5>Logout</h5></center></a>
</div>
</nav>
</div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017-2019 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>