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
	
	<input type="hidden" value="Кинематика" name="type"/>
	<input type="submit" value="Кинематика" name="button"/> </br></br>

</form>

<form action="TASK.php" method="post">
	
	<input type="hidden" value="Законы сохранения импульса и энергии" name="type"/>
	<input type="submit" value="Законы сохранения импульса и энергии" name="button"/> </br></br>

</form>

<form action="TASK.php" method="post">
	
	<input type="hidden" value="Термодинамика" name="type"/>
	<input type="submit" value="Термодинамика" name="button"/> </br></br>

</form>

<form action="TASK.php" method="post">
	
	<input type="hidden" value="Электричество и магнетизм" name="type"/>
	<input type="submit" value="Электричество и магнетизм" name="button"/> </br></br>

</form>

<form action="TASK.php" method="post">
	
	<input type="hidden" value="Оптика и волны" name="type"/>
	<input type="submit" value="Оптика и волны" name="button"/> </br></br>

</form>



<br>

<?php echo "<a href='lk.php'>Вернуться в личный кабинет</a>";?>	
	

</body>
</html>