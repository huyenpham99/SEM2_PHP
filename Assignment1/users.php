<?php require_once "User.php"; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<h1 style="text-align: center; color: brown">USER LIST</h1>
<table class="table">
    <thead style="background-color: lavenderblush ">
    <tr>
        <th scope="col"> ID </th>
        <th scope="col"> User Name </th>
        <th scope="col"> Email </th>
        <th scope="col"> Password </th>
    </tr>
    </thead>
    <tbody>
    <?php
    $users = new \Assignment1\User();
    ?>
    <?php foreach ($users->getUsers() as $s): ?>
        <tr>
            <td><a href="edit.php?id=<?php echo $s["id"]; ?>"><?php echo $s["id"] ?></a></td>
            <td><?php echo $s["name"]?></td>
            <td><?php echo $s["email"]?></td>
            <td><?php echo $s["password"]?></td>
          <td><a href="delete.php?id=<?php echo $s["id"]; ?>">delete</a></td>
        </tr>
   <?php endforeach;?>
    </tbody>
</table>
</body>
</html>
