<?php
session_start();

if( isset($_POST['farmercatagory']))
{
$_SESSION['farmercatagory']=$_POST['farmercatagory'];
}
if($_SESSION['farmercatagory']=='independent_Farmer')
{
	//session_destroy();
	include 'land.php';
}
else
{   
    echo" <b> next enter the depency person name</b><br><br>";
	include 'form1.php';
}
	

?>