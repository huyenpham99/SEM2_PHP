<?php
//lay du lieu tu mysql đưa vào giao diện
$host="localhost";
$userDB="root";
$passDB="";
$dbName="t1907m";
$conn=new mysqli($host,$userDB,$passDB,$dbName); //khong can port
if($conn->connect_error){
    die("Connect fail");//die la ham dung luong dang chay, php la ngon ngu don luong(single throw)

}
//ra day duoc no la ket noi thanh cong
echo "connect  succesfully";
$sql_text="SELECT * FROM student";
$rs=$conn->query($sql_text);
if($rs->num_rows>0){
    while($row = $rs->fetch_assoc()){
        $students[] =$row;
        //moi row la motj bang co cac key la cac collum
    }
}
//student mang chua sinh vien
?>
<<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
include_once("lib/connect.php")
?>
<?php
foreach ($students as $s):?>
    <ul>
        <li><?php echo $s["id"]?></li>
        <li><?php echo $s["name"]?></li>
        <li><?php echo $s["mark"]?></li>
    </ul>
<?php endforeach;?>
</body>
</html>