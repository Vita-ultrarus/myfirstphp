<?php
session_start();

if (isset($_POST['type'])) { $type = $_POST['type']; if ($type == '') { unset($type);} } 
if (isset($_POST['difficulty'])) { $difficulty=$_POST['difficulty']; if ($difficulty =='') { unset($difficulty);} }
if (isset($_POST['class'])) { $class=$_POST['class']; if ($class =='') { unset($class);} }
if (isset($_POST['task'])) { $task = $_POST['task']; if ($task == '') { unset($task);} } 
if (isset($_POST['solution'])) { $solution=$_POST['solution']; if ($solution =='') { unset($solution);} }


if (empty($type) or empty($difficulty) or empty($class) or (empty($task))or (empty($solution))) 
{
exit ("Вы ввели не всю информацию, <a href= 'insert_tasks.php'>вернитесь назад</a> и заполните все поля!");
}

$type = stripslashes($type);
$type = htmlspecialchars($type);

$difficulty = stripslashes($difficulty);
$difficulty = htmlspecialchars($difficulty);

$class = stripslashes($class);
$class = htmlspecialchars($class);

$task = stripslashes($task);
$task = htmlspecialchars($task);

$solution = stripslashes($solution);
$solution = htmlspecialchars($solution);


$type = trim($type);
$difficulty = trim($difficulty);
$class = trim($class);
$task = trim($task);
$solution = trim($solution);


if ($class==9) {$table = 'tasks9';}
    
elseif ($class==11) {$table = 'tasks11';}


include ("bd.php");


$result2 = mysqli_query ($db, "INSERT INTO $table (type,difficulty, task, solution) VALUES('$type','$difficulty', '$task','$solution')");

if ($result2=='TRUE')
{
echo "Вы успешно добавили задание! <br> <a href= 'insert_tasks.php'>Продолжить добавление задач</a><br><a href='index.php'>Главная страница</a>";
}

else {
echo "Ошибка! Задача не добавлена.<br> <a href= 'insert_tasks.php'>Вернуться</a>";
     }
?>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
</html>