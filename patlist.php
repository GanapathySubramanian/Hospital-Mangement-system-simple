
<html>
<head>

<link rel="stylesheet" type="text/css" href="home.css">
    
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Patient list</title>
<style>
    body{
        background-color: lightgreen;
    }
    table,th,td{
        border:1px solid black;
        width:1100px;
        background-color: lightblue;
    }
    .btn{
        width:20%;
        height:5%;
        font-weight: bold;
    }
        </style>
    </head>
<body>

    <div class="container">
    <a class="float-right" href="home.php"><h4><i class="fas fa-sign-in-alt"></i>HOME </h4></a>
        <h1> WELCOME</h1><br>

    <table>
    <center>
<div class="container">
    <form action="" method="POST">

        <tr>
        <th>FULL NAME</th>   
        <th>EMAIL ID</th>   
        <th>USERID</th>   
        </tr>
            <input type="submit" class="btn" name="search" value="SEARCH DATA"><br>
        </form>
 <?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
if(isset($_POST['search']))
{
$query= "SELECT * FROM usertable";
$query_run= mysqli_query($con, $query);   
while($row=mysqli_fetch_array($query_run))
{
?>
<tr>
   <td><?php echo $row['fullname'] ?></td>
   <td><?php echo $row['email'] ?></td>
   <td><?php echo $row['name'] ?></td>
    </tr>
<?php   
}
}

    ?>
        </div>
    </center>
    </table>

</div>
</body>
</html>
