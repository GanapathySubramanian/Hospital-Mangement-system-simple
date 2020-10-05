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

<link rel="stylesheet" type="text/css" href="about.css"> 
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
      
  body {

        background:url(mountain.jpg);
    background-size: cover;
    background-position: center;
  }
  .container {
    padding: 80px 120px;
  }

 
  </style>
    </head>
<body> 
<div class="container">
    <a class="float-right" href="home.php"><h4><i class="fas fa-sign-in-alt"></i>HOME</h4></a>
        <font type="monotypecorsiva" color="white"><h1>WELCOME TO WE CARE HOSPITAL</h1></font>
</div>

    
<font color="blue"> <h1>Contact</h1></font>
  <div class="row">
    <div class="col-md-4">
      <p> Drop a note</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: mail@mail.com</p>
    </div>
      <form action="send.php" method="post">
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control"  name="fullname" placeholder="Name" type="text" required>
        </div>
           <div class="col-sm-6 form-group">
          <input class="form-control"  name="email" placeholder="Email" type="email" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control"  name="mobileno" placeholder="mobileno" type="text" required>
        </div>
       
      </div>
      <textarea class="form-control" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class"btn btn-primary" type="submit" value="send">Send</button>
             
        </div>
      </div>
    </div>
      </form>
  </div>
  <br>
    </body>
</html>