<?php
session_start();

if (isset($_POST['solution'])) { $solution = $_POST['solution']; if ($solution == '') { unset($solution);} } 


$solution = stripslashes($solution);
$solution = htmlspecialchars($solution);


$solution = trim($solution);

if (!empty($solution)){

    if ($solution==$_SESSION['solution']) {
        echo "Верно!";
    }

    else {
        echo "К сожалению, вы ошиблись.";
    }
}

else {

    exit ("Вы не ввели ответ <a href='TASK.php>Вернуться</a>'");
}
          
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<br>
<br>
<form action="TASK.php" method="post">
    
	<input type="hidden" value="<?php echo $_SESSION['type']; ?>" name='type'/>
	<input type="submit" value="Продолжить решение задач из раздела: <?php echo $_SESSION['type']; ?> " name="button"/> <br><br>

</form>
</body>