<?php
require_once "Student.php";
if(!empty($_GET["id"])):
    $user = new \Assignment2\Student();
    $user = $user->find($_GET["id"]);
    $user->delete();
    header("Location: students.php");// dieu huong tro lai trang danh sach
endif;