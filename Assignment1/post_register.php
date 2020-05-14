<?php
if(count($_POST) > 0):

// nhan thong tin tu form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $user = new \Model\Book(null, $name, $email, $password);

    $user->save();

    header("Location: ?route=users");// dieu huong tro lai trang danh sach
endif;