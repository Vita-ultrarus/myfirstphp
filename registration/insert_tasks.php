<?php
session_start();
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
    body {
        display: block
    }
    h2 {
        display: block
    }
    form {
        display: block
    }
    </style>
</head>
<h2> Добавление задач <h2>
<body>
<form action="save_tasks.php" method="post">

    <p>
        <label>Класс<br></label>
        <input name="class" type="text" size="15" maxlength="100">
    </p>

    <p>
        <label>Раздел физики<br></label>
        <input name="type" type="text" size="15" maxlength="100">
    </p>

    <p>
        <label>Сложность задачи (1-3)<br></label>
        <input name="difficulty" type="text" size="15" maxlength="100">
    </p>

    <p>
        <label>Текст задания (ссылка на картинку)<br></label>
        <input name="task" type="text" size="15" maxlength="100">
    </p>

    <p>
        <label>Верное решение<br></label>
        <input name="solution" type="text" size="15" maxlength="100">
    </p>


    <p>
    <input type="submit" name="submit" value="Добавить">
    </p>
</form>

<form action="index.php" method="post">
	
	<input type="submit" value="Вернуться на главную страницу" name="button"/> </br></br>

</form>

</body>
</html>