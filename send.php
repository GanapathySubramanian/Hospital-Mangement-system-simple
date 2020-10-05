<?php

session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');

$name=$_POST['fullname'];
$email=$_POST['email'];
$mobileno=$_POST['mobileno'];
$comments=$_POST['comments'];
    $s = "select * from usertable where name='$name' && '$email' && '$mobileno' && '$comments'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num==1)
{
    echo"username already taken or message already sended";
}
else
{
    $reg="insert into contactus(fullname,email,mobileno,comments) value('$name','$email','$mobileno','$comments')";
    mysqli_query($con,$reg);
    echo ('Your information succesfully submitted');  
}


?>
