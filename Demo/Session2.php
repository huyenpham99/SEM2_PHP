<?php
//array php: khong gioi han so luong phan tu - giong JS
//array php: kết hợp của aray JS và hashmap java
$ary = [];
$ary [0]=10;
$ary [1] ="T1907M";
$ary[] = 3.14; //tu dong nap vao vi tri index tiep theo
for ($i=0; $i<count($ary); $i++ ){
    echo $ary[$i];
}
foreach ($ary as $e){ //nguoc voi java , c# ==array as e
    echo $e;
}

$ary ["point"] = 100; //giong hashmap cua java
$ary []=11;
var_dump($ary); //console.log
$arr = [];
$arr[]=1;
$arr[] =$ary;
$arr[]  ="hello";
$student = [
    "name"=> "Hoang trong ha",
    "age" =>15,
    "id"=>1
]; //mang kieu hasmap => hay dung de dinh nghia 1 phan tu
 $student["point"] =10;
 var_dump($student);

 //dinh nghia 1 fuction ==giong het JS
function alert(){ //tham so co the nap gia tri mac dinh ban dau
    echo  "Thong bao khan cap";
}
sendMessage("Hello world");
alert();
function sendMessage($msg ="haha"){
    echo $msg;
}