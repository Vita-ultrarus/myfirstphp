<?php

session_start();

echo<<<HTML
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>

  <form action="change_password.php" method="get">
  <p>
      <label>Введите старый пароль:<br></label>
      <input name="old_password" type="password" size="15" maxlength="60">
    </p>

    <p>
      <label>Введите новый пароль:<br></label>
      <input name="new_password" type="text" size="15" maxlength="60">
    </p>
    
    <p>
    <input type="submit" name="submit" value="Изменить">
    </p>
  
  </form>
  </body>
HTML;
if(!empty($_GET['old_password'])) {
  
  include ("bd.php");

  $result = mysqli_query ($db, "SELECT * FROM users WHERE login = '".$_SESSION['login']."'");
  $myrow = mysqli_fetch_array( $result);

  if ($_GET['old_password'] == $myrow['password']){
  
    if(!empty($_GET['new_password'])) {
  
      $new_password = $_GET["new_password"];
  
      include ("bd.php");
  
      mysqli_query ($db, "UPDATE users SET password = '".$new_password."' WHERE login = '".$_SESSION['login']."'");
    
      $result = mysqli_query ($db, "SELECT * FROM users WHERE login = '".$_SESSION['login']."'");
      $myrow = mysqli_fetch_array( $result);
    
      if ($myrow['password'] == $new_password){
        header("Location: cpassword_success.php");
  
      }
      /*echo "Пароль успешно изменён!<br> <a href='lk.php'>Вернуться в личный кабинет</a>";*/
  
      else{
      
        exit ("Извините, что-то пошло не так.<br><a href='lk.php'>Вернуться в личный кабинет</a>");
      }  
    }  
    }
  else{
    
    exit ("<br>Вы ввели не верный старый пароль.<br><a href='lk.php'>Вернуться в личный кабинет</a>");
  
  }


}




?>