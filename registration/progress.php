<?php
session_start();


$class = stripslashes($_SESSION['class']);
$class = htmlspecialchars($class);
$class = trim($class);


if ($class==9) {
  $link = 'tasks9.php';
}
    
elseif ($class==11) {
  $link = 'tasks11.php';
}

if (empty($_SESSION['progress'])){
  $progress = ' ';
}
else{
  $progress = $_SESSION['progress'];
}


echo "<br><br><br>Вы полностью освоили разделы: ".$progress."<br>";
echo "Сейчас вы изучаете: ".$_SESSION['type']."<br>";
?>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<br>
<form action="lk.php" method="post">
	
	<input type="submit" value="Личный кабинет" name="button"/> </br></br>

</form>

<form action="<?php echo $link; ?>" method="post">
	
	<input type="submit" value="Приступить к решению задач" name="button"/> </br></br>

</form>
<br>
<img width="25%" src="https://i.ibb.co/my126sF/hz.webp">
<br>
<br>
</html>