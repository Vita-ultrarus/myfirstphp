<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
session_start();

if (empty($_SESSION['type'])){
  $type = $_POST['type'];
}
else{
  $type = $_SESSION['type'];
} 

if (empty($_SESSION['id'])){
  $_SESSION['id'] = 1;
}


$type = stripslashes($type);
$type = htmlspecialchars($type);

$type = trim($type);


include ("bd.php");

$class = stripslashes($_SESSION['class']);
$class = htmlspecialchars($class);
$class = trim($class);

if ($class==9) {$table = 'tasks9';}
    
elseif ($class==11) {$table = 'tasks11';}

if (empty($_SESSION['difficulty'])){
  $difficulty = 1;
}
else{
  $difficulty = $_SESSION['difficulty'];
}

$result = mysqli_query($db, "SELECT MAX(id) FROM $table WHERE type='$type' and difficulty = 3"); 
$myrow = mysqli_fetch_array($result);
$id = array_shift($myrow);

$result = mysqli_query($db, "SELECT MAX(id) FROM $table WHERE type='$type' and difficulty = '$difficulty'"); 
$myrow = mysqli_fetch_array($result);
$idd = array_shift($myrow); 


if ($_SESSION['id']==$id){
  header("HTTP/1.1 301 Moved Permanently");
  header("Location: http://localhost/registration/solved.php");
  exit();
}

else{

  if (empty($_SESSION['id'])) {
  
    $result = mysqli_query($db, "SELECT * FROM $table WHERE type='$type' and difficulty = '$difficulty'"); 
    $myrow = mysqli_fetch_array($result);

  }

  elseif ($_SESSION['id']==$idd){
    $difficulty = $difficulty + 1;
    $id = 1;
    $result = mysqli_query($db, "SELECT * FROM $table WHERE type='$type' AND id >'$id' AND difficulty = '$difficulty'"); 
    $myrow = mysqli_fetch_array($result);
  }

  else{
    $id=$_SESSION['id'];
    $result = mysqli_query($db, "SELECT * FROM $table WHERE type='$type' AND id >'$id' AND difficulty = '$difficulty'"); 
    $myrow = mysqli_fetch_array($result);
  }


  $_SESSION['id'] = $myrow['id'];
  
  $_SESSION['solution'] = $myrow['solution'];
  
  $_SESSION['type'] = $myrow['type'];

  $_SESSION['difficulty'] = $myrow['difficulty'];

  $_SESSION['task'] = $myrow['task'];
  
}

?>

<br><img src="<?php echo $_SESSION['task']; ?>"/>

<form action="check.php" method="post">

  <p>
    <label>Ваш ответ:<br></label>
    <input name="solution" type="text" size="15" maxlength="60">
  </p>
  <p>
    <input type="submit" name="submit" value="Отправить ответ">
  </p>
</form>

<form action="lk.php" method="post">

  <p>
    <input type="submit" name="submit" value="Личный кабинет">
  </p>
 
</form>

</body>
</html>