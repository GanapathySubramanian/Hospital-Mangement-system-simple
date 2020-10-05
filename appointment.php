<?php

session_start();

    
$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'userregistration');

$fullname = $_POST['patname'];
$email= $_POST['email'];
$dob=$_POST['dob'];
$preferreddate= $_POST['preferreddate'];
$preferredtime = $_POST['preferredtime'];
$department= $_POST['department'];

$s = "select * from appointment where fullname='$fullname' && email='$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num==1)
{
    echo"username or email address is already taken";
}
else
{
    $reg="insert into appointment(fullname , email , dob , preferreddate , preferredtime , department) values ('$fullname' , '$email' , '$dob' , '$preferreddate' , '$preferredtime' , '$department')";
    mysqli_query($con,$reg);
    echo"Appointment successfull";    
}

?>