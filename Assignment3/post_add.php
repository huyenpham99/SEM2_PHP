<?php
if(count($_POST) > 0):

// nhan thong tin tu form
    $name = $_POST['name'];
    $category = $_POST['category'];
    $book = new \Model\Book(null, $name, $category);
    $book->save();

    header("Location: ?route=books");// dieu huong tro lai trang danh sach
endif;