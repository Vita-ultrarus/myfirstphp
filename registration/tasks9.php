<?php
session_start();
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
<title>Вы приступаете к решению задач 9 класса</title>
</head>
<body>
<h2>Выберете раздел физики</h2>
 
<form action="TASK.php" method="post">
	
	<input type="hidden" value="Физические величины" name="type"/>
	<input type="submit" value="Физические величины" name="button"/> </br></br>

</form>


<form action="TASK.php" method="post">
	
	<input type="hidden" value="Электричество" name="type"/>
	<input type="submit" value="Электричество" name="button"/> </br></br>

</form>

<form action="TASK.php" method="post">
	
	<input type="hidden" value="Волны и оптика" name="type"/>
	<input type="submit" value="Волны и оптика" name="button"/> </br></br>

</form>

<form action="TASK.php" method="post">
	
	<input type="hidden" value="Термодинамика" name="type"/>
	<input type="submit" value="Термодинамика" name="button"/> </br></br>

</form>

<br>

<?php echo "<a href='lk.php'>Вернуться в личный кабинет</a>";?>	
	

</body>
</html>