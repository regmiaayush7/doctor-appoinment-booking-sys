<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css">
      
      img{
          width: 100%;
          height: 100%;
      }
      .jumbotron{
        background-image: url("./images/pic1.jpg");
        background-size: cover;
        margin-top: 4rem;
        margin-bottom: 1rem;
      }
      .card-img-top {
    width: 100%;
    height: 45vh;
    object-fit: cover;
}
#carousel{
  width: 100%;
  height: 80vh;
  object-fit: cover;
  margin-bottom: 0px; 
}
.carousel-item{
  width: 100%;
  height: 80vh;
    object-fit: cover;
}

    </style>

    <title>Appointment</title>
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary fixed-top py-0 ">
  <div class="container py-0">
    <a class="navbar-brand py-0" href="index.php">
          <img class="img-fluid" src="./images/logo.jpg" alt="">
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

<div class="container-fluid">
<div class="jumbotron">
  <h1 class="display-4">Appointment Booking System</h1>
  <p class="lead">Create Your Account Today </p>
  <hr class="my-4">
  <p>Click The Button below to Proceed</p>
  <a class="btn btn-lg btn btn-outline-success" href="pregister.php" role="button"><b>Create Account</a></b>
</div>
</div>

  <div class="container-fluid">
    <div class="row">
      <div class="card col-lg-4" style="width: 18rem;">
       <img src="./images/pic3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
    <h5 class="card-title">Patient</h5>
    <p class="card-text">Click the button to book appointment with Doctors</p></br></br></br></br></br></br></br>
    <a href="plogin.php" class="btn btn-primary">Sign In</a>
  </div>
</div>
    <div class="card card col-lg-4" style="width: 18rem">
  <img class="img-fluid" src="./images/pic2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Doctor</h5>
    <p class="card-text">Sing in for docotrs to keep patient records</p>
    <a href="dlogin.php" class="btn btn-primary">Sign In</a>
  </div>
</div>
<div class="card card col-lg-4" style="width: 18rem;">
  <img class="img-fluid" src="./images/pic4.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Admin SignIn</h5>
    <p class="card-text">For administrative use Only.</p>
    <a href="adlogin.php" class="btn btn-primary">Sign In</a>
  </div>
</div>   
  </div>
</div>
     <div class="container-fluid mt-3">
      <div class="bd-example">
  <div id="carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carousel" data-slide-to="0" class="active"></li>
      <li data-target="#carousel" data-slide-to="1"></li>
      <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="img-fluid" src="./images/pic7.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide</h5>
          <p>Book your Appointment according to your Date </p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="img-fluid" src="./images/pic8.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide </h5>
          <p>We have anytime service</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="img-fluid" src="./images/pic9.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide</h5>
          <p> Please share your experience with others</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>

  <div class="container-fluid mt-3">
  <div class="card" style="max-width: 100%;">
  <div class="row no-gutters">
    <div class="col-md-7">
      <img class="img-fluid" src="./images/pic5.jpg" class="card-img" alt="...">
    </div>
    <div class="col-md-5">
      <div class="card-body">
        <h3 class="card-title">24/7 Reservation And Many More</h3>
        <p class="card-text">
          <ul>
              <li><h5>SAVE MONEY AND TIME</h5>No more double bookings or scribbled notes. Reduce costly no-shows.</li>
               <li><h5>ANYWHERE, ANYTIME RESERVATIONS</h5>Accept online bookings from your website, from any device, with online scheduling software.</li>
                <li><h5>MAXIMIZE PROFIT</h5></li>
          </ul>
        </p>
      </div>
    </div>
  </div>
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