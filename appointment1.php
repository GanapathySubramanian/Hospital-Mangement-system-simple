<?php

session_start();

if(!isset($_SESSION['username']))
{
    header('location:login.php');
}
?>
<html>
<head>
<title>home</title>
<link rel="stylesheet" type="text/css" href="appointment1.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    </head>
<body>
    <div class="container">
    <a class="float-right" href="home.php"><h4><i class="fas fa-sign-in-alt"></i>HOME</h4></a>
        <font color="#fff" ><center><h1>BOOK APPOINTMENT</h1></center></font>
    </div>
    <center>
     <div class="container1">
        <div class="login-box1">
        <div class="row1">
        <div class="col-md-6 login-left1">
            <h2>Book Appointment here</h2>
            <form action="appointment.php" method="post">
            <div class="form-group">
                <label>patient name</label>
                <input type="text" name="patname" class="form-control"  required>
                </div><br>
             <div class="form-group">
                <label>email id</label>
                <input type="email" name="email" class="form-control"  required>
                </div><br> 
                <div class="form-group">
                    <label>gender</label><br>
                    <input type="radio" id="male" name="gender" value="male">
                     <label for="male">Male</label><br>
                     <input type="radio" id="female" name="gender" value="female">
                     <label for="female">Female</label><br>
                      <input type="radio" id="other" name="gender" value="other">
                     <label for="other">Other</label>
                </div><br> 
                <div class="form-group">
                <label>contact no</label>
                <input type="number" name="contactno" class="form-control"  required>
                </div><br> 
                <div class="form-group">
                <label>date of birth</label>
                <input type="date" name="dob" class="form-control"  required>
                </div><br> 
                <div class="form-group">
                <label>preferred date for apointment</label>
                <input type="date" name="preferreddate" class="form-control"  required>
                </div><br> 
                <div class="form-group">
                <label>preferred time</label>
                <input type="time" name="preferredtime" class="form-control"  required>
                </div><br> 
                <div class="form-group">
                <label>department</label>
                <input type="text" name="department" class="form-control" required>
                </div><br> 
                <button type="submit" class"btn btn-primary">submit</button>
                 <button type="reset" class"btn btn-primary">reset</button>
            </form>
            </div>
            </div>
        </div>
    </div>
    </center>
    </body>
</html>