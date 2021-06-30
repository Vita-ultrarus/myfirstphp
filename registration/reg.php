<?php
session_start();
?>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
<title>Регистрация</title>
</head>
<body>
<h2>Регистрация</h2>
<form action="save_user.php" method="post">

  <p>
    <label>Login:*<br></label>
    <input name="login" type="text" size="15" maxlength="15">
  </p>

  <p>
    <label>Password:<br></label>
    <input name="password" type="password" size="15" maxlength="15">
  </p>

  <p>
    <label>Class:<br></label>
    <input name="class" type="class" size="15" maxlength="15">
  </p>

<p>
<input type="submit" name="submit" value="Зарегистрироваться">

</p></form>
</body>
</html>