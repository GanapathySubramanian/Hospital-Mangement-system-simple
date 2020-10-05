<html>
<head>
    <title> user login and registration</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel"stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <marquee><h1>HOSPITAL MANAGEMENT SYSTEM</h1></marquee>
    <div class="container">
        <div class="login-box">
        <div class="row">
        <div class="col-md-6 login-left">
            <h2>Login Here</h2>
            <form action="validation.php" method="post">
            <div class="form-group">
                <label>username</label>
                <input type="text" name="user" class="form-control"  required>
                </div><br>
             <div class="form-group">
                <label>password</label>
                <input type="password" name="password" class="form-control"  required>
                </div><br>
                <button type="submit" class"btn btn-primary">Login</button>
            </form>
            </div>
            <div class="col-md-6 login-right">
            <h2>Register Here</h2>
            <form action="registration.php" method="post">
            <div class="form-group">
                <div class="form-group">
                <label>Fullname</label>
                <input type="text" name="fullname" class="form-control"  required>
                </div><br>
                <label>username</label>
                <input type="text" name="user" class="form-control"  required>
                </div><br>
                <div class="form-group">
                <label>email id</label>
                <input type="email" name="emailid" class="form-control"  required>
                </div><br>
                <div class="form-group">
                <label>password</label>
                <input type="password" name="password" class="form-control"  required>
                </div><br>
                <button type="Register" class"btn btn-primary">Register</button>
            </form>
            </div>
         
        </div>
        </div>
    </div>
    
    </body>
</html>