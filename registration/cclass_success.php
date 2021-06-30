<?php
session_start();
?>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <style>
    form {
        display: block
    }
    </style>
<h3>Вы успешно сменили класс!<h3>
<form action="lk.php" method="post">
    <p>
        <input type="submit" name="submit" value="Вернуться в личный кабинет">
    </p>
</form>
<img width="25%" src="https://i.ibb.co/mvCkbCn/flower.png">
</body>
</html>