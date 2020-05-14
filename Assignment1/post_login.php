<?php

if(count($_POST) > 0):


// nhan thong tin tu form
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = new \Model\Book();
    $user = $user->attempt($email,$password);
    if(!is_null($user)){
        $_SESSION['user']= $user;
        header("Location: ?route=users");
    }else{
        header("Location: ?route=login");
    }

endif;
