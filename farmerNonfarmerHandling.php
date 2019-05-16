<?php
session_start();
$_SESSION['person_catagory']=$_POST['person_catagory'];
echo $_SESSION['person_catagory'];
if($_SESSION['person_catagory']=='Farmer')
{
	include 'dependency.php';
}
else
{
	
	include 'non-farmer.php';
}

?>