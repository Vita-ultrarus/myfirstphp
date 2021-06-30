<?php
session_start();

if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }


if (empty($login) or empty($password)) 
{
exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
}

$login = stripslashes($login);
$login = htmlspecialchars($login);


$password = stripslashes($password);
$password = htmlspecialchars($password);


$login = trim($login);
$password = trim($password);




include ("bd.php");



$result = mysqli_query($db, "SELECT * FROM users WHERE login='$login'"); 
$myrow = mysqli_fetch_array( $result);


if (empty($myrow['password']))
{

exit ("Извините, введённый вами логин и пароль неверны.<br><a href='index.php'>Вернуться на главную страницу</a>");
}
else {

          
          if (($myrow['login']=="admin") and ($myrow['password']==$password)) {
          
            $_SESSION['login']=$myrow['login']; 
            echo "<br><br>Вы успешно вошли на сайт! <br><br>";
            {
  
              echo <<<HTML
                
              <form action="insert_tasks.php" method="post">
                
              <input type="submit" value="Приступить к добавлению задач" name="button"/> 
              
              </form>
              HTML;
              }
          }
          elseif (($myrow['password']==$password)and ($myrow['class']==9))  {
          
            $_SESSION['login']=$myrow['login']; 
            $_SESSION['class']=$myrow['class'];
            echo "Вы успешно вошли на сайт!<br><br>";
            {
  
              echo <<<HTML
                
              <form action="lk.php" method="post">
                
              <input type="submit" value="Личный кабинет" name="button"/> 
              
              </form>
              <br>
              HTML;
              }
              
            {
  
              echo <<<HTML
                
              <form action="tasks9.php" method="post">
                
              <input type="submit" value="Приступить к решению задач за 9 класс" name="button"/> 
              
              </form>
              HTML;
              }
            }
         elseif (($myrow['password']==$password)and ($myrow['class']==11))  {
          
            $_SESSION['login']=$myrow['login']; 
            $_SESSION['class']=$myrow['class'];
            echo "Вы успешно вошли на сайт!<br><br>";
            {
  
              echo <<<HTML
                
              <form action="lk.php" method="post">
                
              <input type="submit" value="Личный кабинет" name="button"/> 
              
              </form>
              <br>
              HTML;
              }
              
            {
  
              echo <<<HTML
                
              <form action="tasks11.php" method="post">
                
              <input type="submit" value="Приступить к решению задач за 11 класс" name="button"/> 
              
              </form>
              HTML;
              }
            }
      else {
       
      exit ("Извините, введённые вами логин или пароль неверны.<br><a href='index.php'>Вернуться на главную страницу</a>");
	   }
}
?>

<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<br>
<br>
<img width="25%" src="https://i.ibb.co/B4tqPYr/tr.webp">
</html>