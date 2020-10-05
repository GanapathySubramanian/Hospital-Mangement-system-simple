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
p{
    color: white;
}
  .container {
    padding: 80px 120px;
  }
  .person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 80%;
    height: 80%;
    opacity: 0.7;
  }
  .person:hover {
    border-color: #f1f1f1;
  }
  </style>
    </head>
<body>
    <div class="container">
    <a class="float-right" href="home.php"><h4><i class="fas fa-sign-in-alt"></i>HOME</h4></a>
        <font type="monotypecorsiva" color="white"><h1>WELCOME TO WE CARE HOSPITAL</h1></font>
    </div>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="hospital.jpg" alt="New York" width="1200" height="700">
        <div class="carousel-caption">
         <p>We have all fecility in  the hospital</p>
        </div>      
      </div>

    <div class="item">
        <img src="hospital1.jpg" width="1200" height="700">
        <div class="carousel-caption">
     <p>dont stop when you tired stop when you done</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="hospital2.jpg" width="1200" height="700">
        <div class="carousel-caption">
          <p>we have here to help you in many ways</p>
        </div>      
       </div>
       </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

    
<div id="contact" class="container">
    
<!contact>
 
<!-- Image of location/map -->
<img src="image3.jpg" class="img-responsive" style="width:100%">

<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    </a>
    </footer>
    <font color="white"> <div class="hi"><h4>
<ol>
    <li>WeCare Nursing Home & Diagnostic Centre has been setting standards since its inception in and regarded as one of the best hospitals out of Kolkata, West Bengal.</li>

    <li>WE CARE NURSING HOME & DIAGNOSTIC CENTRE is a 54 bedded multi-speciality nursing home & integrated medical centre based out of Kolkata serving the communities across Howrah and Hooghly district. It is a multi-speciality nursing home with experience in quality healthcare practices that integrate clinical and health care services through constant innovation and education.</li>
   <br>
    <li> Why you should practice preventive health care
Preventive health care must be planned and executed ahead of time, even when illness is absent.

       You must build healthy habits even when it's not convenient. You must believe that maintaining a health lifestyle is important enough to make a few sacrifices. Eating right, getting exercise and avoiding destructive substances like tobacco, alcohol and excessive amounts of sugar and salt are crucial, as is getting enough sleep each night. Healthy habits are an "automatic" defense against most illnesses and can provide us a long, healthy – and thus happy – life.</li>
<br>
<li>Hypertension is the mother of all diseases
    High blood pressure (hypertension) can quietly damage your body by damaging the muscles, blood vessales, heart and kidney, for years before symptoms develop. Left uncontrolled, you may wind up with a disability, a poor quality of life or even a fatal heart attack. Fortunately, with treatment and lifestyle changes, you can control your high blood pressure to reduce your risk of life-threatening complications.</li></ol>
<br>
<ul><li>Fight against Diabetes
    Diabetes is a common disease, yet every individual needs unique care. We encourage people with diabetes and their families to learn as much as possible about the latest medical therapies and approaches, as well as healthy lifestyle choices.</li>

A variety of different factors have a role to play in treating diabetes, but the importance of balanced, co-ordinated diabetes treatment for all diabetics cannot be underestimated. Regular and successful treatment decreases the risk of each patient developing diabetes complications.

    <li>>Blood Glucose Testing: Learn how to test your blood glucose (blood sugar) with the latest tools.</li>

     <li>  Medication: Get more information about types of medications and how they work.</li>

     <li>  Doctors, Nurses & More: Work with your doctors to create the best treatment plan for you.</li>
    </ul></h4></div>
    </font>
    <script>
$(document).ready(function(){

  $('[data-toggle="tooltip"]').tooltip(); 

  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

   
    if (this.hash !== "") {

      event.preventDefault();

      // Store hash
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        
        window.location.hash = hash;
      });
    } 
  });
})
</script>

        
    </div>
</body>

</html>