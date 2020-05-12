<?php //lay du lieu tu mysql dua vao php
function connect(){
$host = "localhost";
$userDB = "root";
$passDB ="";
$dbName ="productmanager";
$conn = new mysqli($host,$userDB,$passDB,$dbName);//khong can port

if($conn->connect_error){
    die("connect fail");//die la ham dung luong dang chay , php la ngon ngu don luong (single threat)
}
return $conn;
}
function getAll($table){
    $conn =connect();
    $sql_text = "SELECT * FROM ".$table;
    $data =[];
    $rs =$conn->query($sql_text);
    if ($rs->num_rows >0){
        while ($row = $rs->fetch_assoc()){
            $data [] =$row;
        }
    }
    return $data;
}