<?php 
include_once('../db/db_config.php');
if(!empty($_POST["uname"])) 
{
$username=$_POST['uname'];
$query="select * from tbl_admin where username='$username'";
$result=mysqli_query($link,$query);
$row=mysqli_fetch_assoc($result);
if($username!= $row['username'])
{
	echo "<span style='color:red'> username Name Does Not Exist .</span>";
}
}
if(!empty($_POST["password"])) 
{
$passpword=$_POST['password'];
$query="select * from tbl_admin where password='$passpword'";
$result=mysqli_query($link,$query);
$row=mysqli_fetch_assoc($result);
if($passpword!= $row['password'])
{
	echo "<span style='color:red'> Old Password Does Not Match .</span>";
}
}

?>
