<?php
session_start();


$class = stripslashes($_SESSION['class']);
$class = htmlspecialchars($class);
$class = trim($class);

$progress = stripslashes($_SESSION['type']);
$progress = htmlspecialchars($progress);
$progress = trim($progress);
$_SESSION['progress'] = $progress;

if ($class==9) {
  $link = 'tasks9.php';
  $table = 'progress9';
}
    
elseif ($class==11) {
  $link = 'tasks11.php';
  $table = 'progress11';
}




?>

    
    
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<h3><?php echo "Молодец! Вы решили все задачи по данному разделу, можете приступить к <a href= $link > новому</a>";?><h3>

<form action="progress.php" method="post">
	
    <input type="hidden" value= <?php $progress ?> name="progress"/>
    <input type="submit" value="Мой прогресс" name="button"/> 

</form>
</html>