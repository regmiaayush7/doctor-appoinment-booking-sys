<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>update or delete</title>
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

<?php

  function deleteRow($id){
    //1. create connection
    $con = mysqli_connect("localhost","root","","register");
    if(!$con){
      die("Cannot connect to the database ".mysqli_error());
    }
    $sql = "delete from doctor where id=$id";
    $result = mysqli_query($con,$sql);
    
    //4. Use returned data
    if(!$result){
      die("cannot perform query ".mysqli_error());
    }
    echo "Data Deleted successfully !!!";
  }
  function getUpdateRow($id){
    //1. create 
    $con = mysqli_connect("localhost","root","","register");
    if(!$con){
      die("Cannot connect to the database ".mysqli_error());
    }
    //3. Perform query
    $sql = "select * from doctor where id=$id";
    $result = mysqli_query($con,$sql);
    
    //4. Use returned data
    if(!$result){
      die("cannot perform query ".mysqli_error());
    }
    $info = array();
    while($row = mysqli_fetch_assoc($result)){
      $info['specialization'] = $row['specialization'];
      $info['doctorname'] = $row['doctorname'];
      $info['gender'] = $row['gender'];
      $info['address'] = $row['address'];
      $info['username'] = $row['username'];
      $info['password'] = $row['password'];
    }
    return $info;
  }
  function showUpdateForm($defaults){
    echo<<<__HTML__
    <div class="container col-lg-5 mt-5">
      <h2><center>Doctor Registration Form</center></h2>
      <form class="needs-validation" name="f1" method='Post' action="$_SERVER[PHP_SELF]" novalidate>
         <div class="form-group justify-content-center">
    <label for="specialization">Doctor Specialization</label>
    <select class="form-control" name="specialization" value="$defaults[specialization]" id="specialization" required>
      <option>$defaults[specialization]</option>
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
    <label for="doctorname">Doctorname</label>
    <input type="text" name="doctorname" value="$defaults[doctorname]" class="form-control" id="doctorname" placeholder="doctorname" required>
    <div class="valid-feedback"></div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group justify-content-center">
    <label for="gendersel">Gender</label>
    <select class="form-control" name="gender" value="$defaults[gender]" id="gendersel" required>
      <option>Male</option>
      <option>Female</option>
      <option>Others</option>
      <div class="valid-feedback"></div>
    <div class="invalid-feedback">Please fill out this field.</div>
    </select>
  </div>
  <div class="form-group justify-content-center">
    <label for="addr">Address</label>
    <input type="text" name="address" value="$defaults[address]" class="form-control" id="addr" placeholder="Current Address" required>
    <div class="valid-feedback"></div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
       <h3><center>Create Doctor Account</center></h3>
   <div class="form-group justify-content-center">
    <label for="Username">Username</label>
    <input type="text" name="username" value="$defaults[username]" class="form-control" id="Username" placeholder="Create Username" required>
    <div class="valid-feedback"></div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
   <div class="form-group justify-content-center">
    <label for="Password">Password</label>
    <input type="password" name="password" value="$defaults[password]" class="form-control" id="Password" placeholder="Create Password" required>
    <div class="valid-feedback"></div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
     <input type='hidden' name='check' value='1' />
     <input type='hidden' name='id' value='$_GET[id]' />

  <center><button type="Submit" name="save"class="btn btn-primary btn-lg">Submit</button></center>
</form>
</div>
__HTML__;
  }
  function updateData($id,$specialization,$doctorname,$gender,$address,$username,$password){
    //1. create connection
    $con = mysqli_connect("localhost","root","","register");
    if(!$con){
      die("Cannot connect to the database ".mysqli_error());
    }
    //2. Select database
    
    //3. Perform query
    $sql = "update doctor set specialization='$specialization', doctorname='$doctorname', gender='$gender', address='$address', username='$username', password='$password' where id=$id";
    $result = mysqli_query($con,$sql);
    
    //4. Use returned data
    if(!$result){
      die("cannot perform query ".mysqli_error());
    }
    echo "Data Updated successfully !!!";
  }
?>  
<?php
  if(isset($_GET['action'])&&$_GET['action']=='update'){
    $row = getUpdateRow($_GET['id']);
    showUpdateForm($row);
  }elseif(isset($_GET['action'])&&$_GET['action']=='delete'){
    deleteRow($_GET['id']);
  }elseif(isset($_POST['check'])){
    updateData($_POST['id'],$_POST['specialization'],$_POST['doctorname'],$_POST['gender'],$_POST['address'],$_POST['username'],$_POST['password']);
  }
?>

<div class="container mt-5">
            <h2><center>Doctor Details</center></h2>
<?php
$con = mysqli_connect("localhost","root","","register");
  
  if(!$con){
    die("Cannot connect to server ".mysqli_connect_error());
  }
  $sql = "select * from doctor order by id";
    $result = mysqli_query($con,$sql);

    if(!$result){
      die("cannot perform query ".mysqli_error());
    }
echo<<<__HTML__
<table class="table table-striped table-sm mt-2">
      <th scope="col">ID</th>
      <th scope="col">Doctor Specialization</th>
      <th scope="col">Doctor Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Address</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>  
      <th scope="col">Modify Information</th>

__HTML__;
    while($row = mysqli_fetch_assoc($result)){
      echo "<tr><td>$row[id]</td><td>$row[specialization]</td><td>$row[doctorname]</td><td>$row[gender]</td><td>$row[address]</td><td>$row[username]</td><td>$row[password]</td>
          <td>
            <a href='$_SERVER[PHP_SELF]?action=update&id=$row[id]'>Update</a>
            <a href='$_SERVER[PHP_SELF]?action=delete&id=$row[id]'>Delete</a>
          </td></tr>   
           </table>";
    }
?>
          <div class="list-group  mt-5 mb-4">
            <center><h4>Navigation</h4></center>
            <ul class="list-group list-group-horizontal justify-content-center">
             <a href="amodify.php"><li class="list-group-item list-group-item-action list-group-item-primary"><center><h5>Remove Patient</h5></center></li></a>
             <a href="eappoint.php"><li class="list-group-item list-group-item-action list-group-item-success"><center><h5>Edit Appointment</h5></center></li></a>
             <a href="docadd.php"><li class="list-group-item list-group-item-action list-group-item-secondary"><center><h5>Add Doctors</h5></center></li></a>
             <a href="docmodify.php"><li class="list-group-item list-group-item-action list-group-item-secondary"><center><h5>Modify Doctor Info</h5></center></li></a>
             <a href="adashboard.php"><li class="list-group-item list-group-item-action list-group-item-warning "><center><h5>Dash Board</h5></center></li></a>
           </ul>
         </div> 
</div> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>



 
              

  




      
