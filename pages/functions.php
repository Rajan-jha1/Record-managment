<?php
//include_once('../db/db_config.php');
function load_Cshort_name()
{
	$link=mysqli_connect("localhost","root","","my-project");
	$output='';
	$query="select c_sname from course order by c_sname";
	$result=mysqli_query($link,$query);
	while($row=mysqli_fetch_assoc($result))
	{
		$output.='<option value="'.$row['c_sname'].'">'.strtoupper($row["c_sname"]).'</option>';
	}
	return $output;
}
function load_Cfull_name()
{
	$link=mysqli_connect("localhost","root","","my-project");
	$output='';
	$query="select c_fname from course order by c_fname";
	$result=mysqli_query($link,$query);
	while($row=mysqli_fetch_assoc($result))
	{
		$output.='<option value="'.$row['c_fname'].'">'.strtoupper($row["c_fname"]).'</option>';
	}
	return $output;
}
function load_country()
{
	$link=mysqli_connect("localhost","root","","my-project");
	$output='';
	$query="select * from countries order by country_name";
	$result=mysqli_query($link,$query);
	while($row=mysqli_fetch_assoc($result))
	{
		$output.='<option value="'.$row['country_id'].'">'.$row["country_name"].'</option>';
	}
	return $output;
}
?>