<?php
include_once('../db/db_config.php');
if(!empty($_POST["cid"])) 
{
$cval=$_POST['cid'];
$query="select * from  subject where csname='$cval'";
$result=mysqli_query($link,$query);
while($row=mysqli_fetch_assoc($result))
{
	echo strtoupper($row['sub1'].",".$row['sub2'].", ".$row['sub3']);
}
}
if(!empty($_POST["cfid"])) 
{
$cval=$_POST['cfid'];
$query="select * from  course where c_sname='$cval'";
$result=mysqli_query($link,$query);
while($row=mysqli_fetch_assoc($result))
{
	echo strtoupper($row['c_fname']);
}
}
if(!empty($_POST['sid']))
{
	$sid=$_POST['sid'];
	
	$query="select * from states where country_id ='$sid'";
	$result=mysqli_query($link,$query);
	$output='<option value="">Select state</option>';
	while($row=mysqli_fetch_assoc($result))
	{
		$output.='<option value="'.$row['state_id'].'">'.$row["state_name"].'</option>';
	}
	echo $output;
	
}
if(!empty($_POST['tid']))
{
	$tid=$_POST['tid'];
	
	$query="select * from cities where state_id ='$tid'";
	$result=mysqli_query($link,$query);
	$output='<option value="">Select City</option>';
	while($row=mysqli_fetch_assoc($result))
	{
		$output.='<option value="'.$row['city_id'].'">'.$row["city_name"].'</option>';
	}
	echo $output;
	
}

