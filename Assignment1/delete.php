<?php
if(!empty($_GET["id"])):
    $user = new \Model\Book();
    $user = $user->find($_GET["id"]);
    $user->delete();
    header("Location: ?route=users");// dieu huong tro lai trang danh sach
endif;