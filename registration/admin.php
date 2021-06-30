<?php
session_start();
?>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
<title>Главная страница</title>
</head>
<body>
<form action="testreg.php" method="post">
 <p>
    <label>Логин администратора:<br></label>
    <input name="login" type="text"  value="admin" size="15" maxlength="15">
  </p>
 <p>
    <label>Пароль администратора:<br></label>
    <input name="password" type="password" size="15" maxlength="15">
  </p>
  <p>
<input type="submit" name="submit" value="Войти">


<br>