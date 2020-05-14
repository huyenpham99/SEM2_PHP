<?php

class Controller{

    public function book(){
        require_once "View/login.php";
    }

    public function postLogin(){

        $email = $_POST['email'];
        $pwd = $_POST['password'];
        $user = new \Model\Book();
        $user = $user->attempt($email,$pwd);
        if(!is_null($user)){
            $_SESSION['user']= $user;
            header("Location: ?route=users");
        }else{
            header("Location: ?route=login");
        }
    }

    public function register(){
        require_once "View/register.php";
    }

    public function postRegister(){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pwd = $_POST['password'];

        // insert to table
        $user = new \Model\Book(null,$name,$email,$pwd);
        $user->save();

        header("Location: ?route=users");// dieu huong tro lai trang danh sach
    }
    public function edit(){
        require_once "View/edit.php";
    }
    public function postEdit(){
        //nhan thong tin tu form
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        //insert to table
        $user = new \Model\Book($id, $name, $email, $password);
        $user->save();
        header("Location: ?route=users");
    }
    public function users(){
        require_once "View/users.php";
    }
    public function delete(){
        $user = new \Model\Book();
        $user = $user->find($_GET["id"]);
        $user->delete();
        header("Location: ?route=users");
    }
}
