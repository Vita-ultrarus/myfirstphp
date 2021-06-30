<?php
session_start();
?>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
<title>Главная страница</title>
</head>
<body>
  <header>
    <section id="cd-intro">
      <div id="cd-intro-tagline">
        <img src="https://i.ibb.co/p4dKCt4/hat.png">
      </div>
    </section>
  </header>
<h2>Главная страница</h2>
<form width="300px" margin-right="50px" display="inline-block" action="testreg.php" method="post">

  <p>
    <label>Ваш логин:<br></label>
    <input name="login" type="text" size="15" maxlength="15">
  </p>
 
  <p>
    <label>Ваш пароль:<br></label>
    <input name="password" type="password" size="15" maxlength="15">
  </p>
  
<p>
<input type="submit" name="submit" value="Войти">

<br>
<br>

<a href="reg.php">Зарегистрироваться</a> </br>
<a href="admin.php">Я администратор</a> 
</p></form>
<img width="300px" src="https://i.ibb.co/sVv1q4C/pic.jpg">
<br>
<?php


if (empty($_SESSION['login']) or empty($_SESSION['id']))
{

echo " Вы вошли на сайт как гость<br>";
}
else
   {
     $login = $_SESSION['login'];
     $login = stripslashes($login);
     $login = htmlspecialchars($login);
     $login = trim($login);
     
     if ($login!='admin'){

      echo "Вы вошли на сайт как ".$_SESSION['login']."<br><a href='lk.php'>Личный кабинет</a>";

     }
   
    
   }



?>
</body>
</html>
