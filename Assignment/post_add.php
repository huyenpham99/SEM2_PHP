<?php
if(count($_POST) > 0):
    require_once "Student.php";

// nhan thong tin tu form
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $mark = $_POST['mark'];
    $addess = $_POST['address'];
    // insert to table
    $students = new \Assignment2\Student(null,$name,$email,$age, $mark, $addess);
    $students->save();

    header("Location: students.php");// dieu huong tro lai trang danh sach
endif;