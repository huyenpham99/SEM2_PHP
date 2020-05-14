<?php
$route = $_GET["route"];
$controller = new Controller();

switch ($route){
   // case "login": $controller->login();break;
   // case "post_login": $controller->postLogin();break;
    case "add": $controller->addBook();break;
    case "post_add": $controller->postAdd();break;
    case "books": $controller->books();break;
    case "edit": require __DIR__ . "/View/editBook.php";break;
    case "post_edit": require __DIR__."/Assignment3/post_edit.php";break;
    case "delete": require __DIR__."/Assignment3/delete.php";break;

    default: require __DIR__ . "/View/home.php";
}