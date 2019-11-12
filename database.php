<?php
$mysqli = new mysqli('localhost', 'root', '', 'quizzer');

if($mysqli->connect_error){
  printf("Connect failed %s¥n", $mysqli->error);
  exit();
}


?>
