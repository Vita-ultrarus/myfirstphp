<?php

session_start();

echo<<<HTML
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>

  <form action="change_class.php" method="get">
    
    <p>
      <label>Введите новый номер класса (9 или 11):<br></label>
      <input name="new_class" type="text" size="15" maxlength="2">
    </p>
    
    <p>
    <input type="submit" name="submit" value="Изменить класс">
    </p>
  
  </form>
  </body>
HTML;

if(!empty($_GET['new_class'])) {
  
  $new_class = $_GET["new_class"];

  include ("bd.php");

  mysqli_query ($db, "UPDATE users SET class = '".$new_class."' WHERE login = '".$_SESSION['login']."'");
  
  $result = mysqli_query ($db, "SELECT * FROM users WHERE login = '".$_SESSION['login']."'");
  $myrow = mysqli_fetch_array( $result);
  
  if ($myrow['class'] == $new_class){
    $_SESSION['type'] = NULL;
    $_SESSION['progress'] = NULL;
    $_SESSION['class'] = $new_class;
    header("Location: cclass_success.php");}
  
    /*echo "Класс успешно изменён!<br> <a href='lk.php'>Вернуться в личный кабинет</a>";*/

  else{
    
    exit ("Извините, что-то пошло не так.<br><a href='lk.php'>Вернуться в личный кабинет</a>");  
}
}


?>