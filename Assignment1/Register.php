<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="Login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Register.php  ">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<form style="margin-left: 400px " action="/examples/actions/confirmation.php" method="post" >
    <h2 style="margin-left: 200px">Register</h2>
    <div class="form-group">
        <div class="row">
            <div class="col-xs-6"><input type="text"  class="form-control" style="margin-left: 17px" name="first_name" placeholder="First Name" required="required"></div>
            <div class="col-xs-6"><input type="text"  style="margin-left: 40px" class="form-control" name="last_name" placeholder="Last Name" required="required"></div>
        </div>
    </div>
    <div class="form-group">
        <input type="email" class="form-control col-6" name="email" placeholder="Email" required="required">
    </div>
    <div class="form-group">
        <input type="password" class="form-control col-6" name="password" placeholder="Password" required="required">
    </div>
    <div class="form-group">
        <input type="password" class="form-control col-6" name="confirm_password" placeholder="Confirm Password" required="required">
    </div>
    <div class="form-group" style="margin-left: 100px">
        <label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
    </div>
    <div class="form-group">
        <label style="margin-left: 100px">You have an account? <a href="Login.php">Login Now</a> </label>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success btn-lg btn-block col-2" style="text-align: center; margin-left: 150px">Register Now</button>
    </div>
</form>
</body>
</html>
