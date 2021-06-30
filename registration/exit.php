<?php
session_start()
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <style>
    form {
        display: block
    }
    </style>
<h3><?php echo "Вы авторизовались как " .$_SESSION['login'].". Вы действительно хотите выйти из аккаунта?" ?><h3>
<form action="lk.php" method="post">
    <p>
        <input type="submit" name="submit" value="Отмена">
    </p>
</form>
<form action="index.php" method="post">
    <p>
        <input type="submit" name="submit" value="Выйти">
    </p>
</form>
<img width="25%" src="https://i.ibb.co/7vhXG3Y/sad.png">
</body>

</html>
<?php
$_SESSION['login']=NULL;
$_SESSION['class']=NULL;
?>