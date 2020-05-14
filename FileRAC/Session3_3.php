
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sach sinh vien tu csdl</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<h1>Thông tin sinh viên</h1>
<?php
include_once("Students.php"); //nap file php vao 1 file khac
?>
<?php foreach ($student as $s): ?>
    <table class="table">
        <tr>
            <td><a  href="#" ><?php echo  $s->name ?></a> </td>
            <td><?php echo  $s->age ?></td>
            <td><?php echo  $s->point ?></td>
            <td><?php echo  $s->address ?> </td>
            <td><?php echo  $s->tel ?></td>
        </tr>
    </table>
<?php endforeach; //lam the nay de khoi lan voi dau {} cua bo khac nhu if else ?>
</body>
</html>


