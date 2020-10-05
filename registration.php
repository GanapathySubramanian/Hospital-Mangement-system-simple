<?php

session_start();

header('locaion:login.php');
    
$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'userregistration');

$fullname = $_POST['fullname'];
$name = $_POST['user'];
$email = $_POST['emailid'];
$pass = $_POST['password'];

$s = "select * from usertable where name='$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num==1)
{
    echo"username already taken";
}
else
{
    $reg="insert into usertable(fullname,name,email, password) values ('$fullname','$name','$email','$pass')";
    mysqli_query($con,$reg);
    echo"registration successfull";    
}

?>