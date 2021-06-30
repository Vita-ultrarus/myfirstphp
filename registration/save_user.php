<?php
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
if (isset($_POST['class'])) { $class=$_POST['class']; if ($class =='') { unset($class);} }


if (empty($login) or empty($password) or empty($class)) 
{
exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
}

$login = stripslashes($login);
$login = htmlspecialchars($login);

$password = stripslashes($password);
$password = htmlspecialchars($password);

$class = stripslashes($class);
$class = htmlspecialchars($class);


$login = trim($login);
$password = trim($password);
$class = trim($class);



include ("bd.php");

$result = mysqli_query($db, "SELECT id FROM users WHERE login='$login'");
$myrow = mysqli_fetch_array( $result);
if (!empty($myrow['id'])) {
exit ("Извините, введённый вами логин уже зарегистрирован, введите другой логин.");
}

$result2 = mysqli_query ($db, "INSERT INTO users (login,password, class) VALUES('$login','$password', '$class')");

if ($result2=='TRUE')
{
echo "Вы успешно зарегистрированы!<br><br>Теперь вы можете зайти на сайт и начать решать задачи.<br><br>";
            {
  
              echo <<<HTML
                
              <form action="index.php" method="post">
                
              <input type="submit" value="Главная страница" name="button"/> 
              
              </form>
              <br>
              HTML;
              }
}

else {
echo "Ошибка! Вы не зарегистрированы.";
     }
?>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
</html>