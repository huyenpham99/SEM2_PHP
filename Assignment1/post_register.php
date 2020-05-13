<?php
if(count($_POST) > 0):
    require_once "User.php";

// nhan thong tin tu form
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // insert to table
    $user = new \Assignment1\User(null,$name,$email,$password);
    $user->save();

    header("Location: users.php");// dieu huong tro lai trang danh sach
endif;