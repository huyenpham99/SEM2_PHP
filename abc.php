<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/examples/actions/confirmation.php" method="post">
    <h2>Register</h2>
    <p class="hint-text">Create your account. It's free and only takes a minute.</p>
    <div class="form-group">
        <div class="row">
            <div class="col-xs-6"><input type="text" class="form-control" name="first_name" placeholder="First Name" required="required"></div>
            <div class="col-xs-6"><input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required"></div>
        </div>
    </div>
    <div class="form-group">
        <input type="email" class="form-control" name="email" placeholder="Email" required="required">
    </div>
    <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="Password" required="required">
    </div>
    <div class="form-group">
        <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
    </div>
    <div class="form-group">
        <label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success btn-lg btn-block">Register Now</button>
    </div>
</form>
</body>
</html>
