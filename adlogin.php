<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Patient</title>
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
	<body>

<div id="login"> <div id="lol4"><h2>Log in</h2></div>
<?php
function displayLogin(){
	echo <<< HTML
<div class="container mt-5 col-lg-4">
          <h2><center>Admin Login</center></h2>
  <form class="needs-validation" name="login" method ="Post" action ="$_SERVER[PHP_SELF]" novalidate>
  <div class="form-group justify-content-center">
    <label>Username</label>
    <input type="text" name="username" class="form-control" placeholder="Enter Username" required>
    <div class="valid-feedback"></div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group content-justify-center">
    <label>Password</label>
    <input type="password" name="password" class="form-control" placeholder="Enter Passsword" required>
    <div class="valid-feedback"></div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>

    <input type='hidden' name='check1' value='1'/>
            <center><button type="Submit" name="login" class="btn btn-primary btn-lg">Login</button></center>
    </form>
    </div>
HTML;
}

function validateLogin($username,$password){
	$user = array();
	$con = mysqli_connect("localhost","root","","register");
	
	if(!$con){
		die("Cannot connect to server ".mysqli_connect_error());
	}
	$query = mysqli_query($con,"select * from admin where (username='$username' and password='$password')");
	
	if(!$query){
		die("cannot perform query".mysqli_error($con));
	}
	while($row = mysqli_fetch_assoc($query)){
		$user = $row;
	}
	return $user;	
}	
						if(isset($_POST['check1'])){
				if($user = validateLogin($_POST['username'],$_POST['password'])){
					$_SESSION['user'] = $user;
					echo '<meta http-equiv="refresh" content="0;url=adashboard.php" />';
			}
				else{
					echo"<center><b>Invalid Username or password</b></center>";
					displayLogin();
				}
			}
			else{
				displayLogin();
			}
		?>
		</div>
    <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017-2019 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
<script>
// Disable form submissions if there are invalid fields
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
          event.stopPropagation();
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
