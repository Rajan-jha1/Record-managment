<?php
include_once('../db/db_config.php');
$id = $_POST['id'];
$query="delete from course where id='$id'";
$result=mysqli_query($link,$query);

$id1 = $_POST['id'];
$query="delete from subject where subid='$id1'";
$result=mysqli_query($link,$query);

$id2 = $_POST['id'];
$query="delete from registration where id='$id2'";
$result=mysqli_query($link,$query);

?>