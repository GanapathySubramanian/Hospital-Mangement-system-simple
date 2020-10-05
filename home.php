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
<link rel="stylesheet" type="text/css" href="home.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <style>*{
	margin:0;
	padding:0;
	
}

.jumbotron h1{
	text-align: center;
	font-family:'Times New Roman';
	font-size: 50px;
}
.start button:focus{
	width: 280px;
	border-color: #2ecc71
}
.start button{
	border: 0;
	background: #3498db;
	display: block;
	margin: 20px auto;
	text-align: center;
	border: 2px solid #3498db;
	padding: 14px 10px;
	width: 200px;
	outline: none;
	color: #145619;
	border-radius: 24px;
	transition: 0.25s;
	cursor: pointer;
	font-size: 20px;
	font-weight: bold;
	margin-top:300px;
	text-shadow:2px 2px 8px #25344d;
}
.start button:hover
{
	background: #2ecc71;
}</style>

    </head>


<body>

<nav class="navbar navbar-expand-smbg-dark navbar-dark">
<a class="float-right" href="login.php"><h4><i class="fas fa-sign-in-alt"></i>LOGOUT</h4></a>
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" href="about.php">ABOUT US</a>
</li>


<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">DEPARTMENTS</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="d1.php">Dermatology</a>
<a class="dropdown-item" href="d2.php">Orthopedic</a>
<a class="dropdown-item" href="d3.php">Neurology</a>
<a class="dropdown-item" href="d4.php">Physiotheraphy</a>
<a class="dropdown-item" href="d5.php">Cardiology</a>
<a class="dropdown-item" href="d6.php">Emergency</a>
</div>
</li>


    

<li class="nav-item">
<a class="nav-link" href="appointment1.php">BOOK APPOINTMENT</a>
</li>


<li class="nav-item">
<a class="nav-link" href="patientdetails.php">APPOINTMENT DETAILS</a>
</li>

<li class="nav-item">
<a class="nav-link" href="patlist.php">PATIENT LIST</a>
</li>

<li class="nav-item">
<a class="nav-link" href="contact.php">CONTACT US</a>
</li>
    
</ul>
</nav>



    
<div class="container1">

    <center><h1><i class="far fa-hospital"></i>  Welcome to WE  CARE HOSPITAL</h1></center>

<h2>latest updates</h2>   
         
<h2> <marquee><B>CORONA VIRUS</B></marquee></h2>
      <img src="image10.jpg" width=40% height=40%>
    <h2>Person-To-Person Spread</h2>
        <ul><li>The virus is thought to spread mainly from person-to-person.</li>
            <li>Between people who are in close contact with one another (within about 6 feet).</li>
            <li>Through respiratory droplets produced when an infected person coughs or sneezes.</li>
            <li>These droplets can land in the mouths or noses of people who are nearby or possibly be inhaled into the lungs.</li></ul>

<h2>Can someone spread the virus without being sick?</h2>
       <ul><li>People are thought to be most contagious when they are most symptomatic (the sickest).
    Some spread might be possible before people show symptoms; there have been reports of this occurring with this new coronavirus, but this is not thought to be the main way the virus spreads.</li>
            <li>Spread from contact with infected surfaces or objects
    It may be possible that a person can get COVID-19 by touching a surface or object that has the virus on it and then touching their own mouth, nose, or possibly their eyes, but this is not thought to be the main way the virus spreads.</li>
    </ul>
<h2>How easily the virus spreads</h2>
    <ul><li>How easily a virus spreads from person-to-person can vary. Some viruses are highly contagious (spread easily), like      measles, while other viruses do not spread as easily. Another factor is whether the spread is sustained, spreading continually without stopping.</li>
      <li>The virus that causes COVID-19 seems to be spreading easily and sustainably in the community (“community spread”) in some affected geographic areas.</li>
      <li> Community spread means people have been infected with the virus in an area, including some who are not sure how or where they became infected.</li>
    </ul>
   
    <img src="corona2.jpg" width=40% heigh=40%>
<h2>Situation in U.S.</h2>
    <ul><li>Imported cases of COVID-19 in travelers have been detected in the U.S.</li>
        <li>Person-to-person spread of COVID-19 was first reported among close contacts of returned travelers from Wuhan.</li>
        <li> During the week of February 23, CDC reported community spread of the virus that causes COVID-19 in California (in two places)</li> 
        <li>Oregon and Washington. Community spread in Washington resulted in the first death in the United States from COVID-19</li> 
       <li>as well as the first reported case of COVID-19 in a health care worker, and the first potential outbreak in a long-term care facility.</li>
    </ul>
<h2>symptoms</h2>
       Reported illnesses have ranged from mild symptoms to severe illness and death for confirmed coronavirus disease 2019 (COVID-19) cases.
       The following symptoms may appear 2-14 days after exposure.
    <ul>
        <li>Fever</li>
        <li> Cough</li>
        <li>Shortness of breath</li>
    </ul>
         
    <img src="corona.jpg" width=40% heigh=40%>
    
<h2>Prevention</h2>
    There is currently no vaccine to prevent coronavirus disease 2019 (COVID-19). The best way to prevent illness is to avoid being exposed to this virus. However, as a reminder, CDC always recommends everyday preventive actions to help prevent the spread of respiratory diseases, including:

    <ul><li>Avoid close contact with people who are sick.</li>
        <li>Avoid touching your eyes, nose, and mouth.</li>
         <li> Stay home when you are sick.</li>
        <li>Cover your cough or sneeze with a tissue, then throw the tissue in the trash.</li>
        <li>Clean and disinfect frequently touched objects and surfaces using a regular household cleaning spray or wipe.</li>
    </ul>

Follow CDC’s recommendations for using a facemask.
    <ol><li>CDC does not recommend that people who are well wear a facemask to protect themselves from respiratory diseases, including COVID-19.</li>
       <li> Facemasks should be used by people who show symptoms of COVID-19 to help prevent the spread of the disease to  others. The use of facemasks is also crucial for health workers and people who are taking care of someone in close settings (at home or in a health care facility).</li>
    </ol>
Wash your hands often with soap and water for at least 20 seconds, especially after going to the bathroom; before eating; and after blowing your nose, coughing, or sneezing.
    <ul><li>If soap and water are not readily available, use an alcohol-based hand sanitizer with at least 60% alcohol. Always wash hands with soap and water if hands are visibly dirty.</li></ul>
   
    </div>

    </body>
</html>