<?php
session_start();

$class = stripslashes($_SESSION['class']);
$class = htmlspecialchars($class);
$class = trim($class);

if ($class==9) {$table = 'tasks9.php';}
    
elseif ($class==11) {$table = 'tasks11.php';}

?>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
<title>Личный кабинет</title>
</head>
<body>

</h2><?php echo "Здравствуйте, " .$_SESSION['login']."!"?></h2><br>
</h3> Что вы хотите сделать? </h3>
<br><br>

<form action="index.php" method="post">
	
	<input type="submit" value="Главная страница" name="button"/> </br></br>

</form>

<form action="change_password.php" method="post">
	
	<input type="submit" value="Поменять пароль" name="button"/> </br></br>

</form>

<form action="change_class.php" method="post">
	
	<input type="submit" value="Изменить класс" name="button"/> </br></br>

</form>
<br>
<form action="exit.php" method="post">
	
	<input type="submit" value="Выйти из аккаунта" name="button"/> </br></br>

</form>

<form action="progress.php" method="post">
	
	<input type="submit" value="Мой прогресс" name="button"/> </br></br>

</form>

<form action="<?php echo $table; ?>" method="post">
	
	<input type="submit" value="Приступить к решению задач" name="button"/> </br></br>

</form>
<br>
<br>


<img width="25%" src="https://i.ibb.co/QPjqP90/comp.webp">
</body>
</html>



