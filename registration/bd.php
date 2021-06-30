<?php
$db = mysqli_connect ("localhost","admin","12345");
mysqli_select_db ($db, "users");
mysqli_query($db,"SET NAMES utf8");

?>