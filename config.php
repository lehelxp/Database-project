<?php
  $user='root';
  $pass='';
  $server='localhost:3306';
  $db='project';
   $db = mysqli_connect($server,$user,$pass,$db) or die('unable to connect');
?>