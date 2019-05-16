<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
//session_start();
/*
$_SESSION['machineName']=$_POST['machineName'];
$_SESSION['rentPricePerHour']=$_POST['rentPricePerHour'];

$_SESSION['ownername']=$_POST['ownername'];
$_SESSION['ownerage']=$_POST['ownerage'];
$_SESSION['ownergender']=$_POST['ownergender'];
$_SESSION['ownerMobileNumber']=$_POST['ownerMobileNumber'];
$_SESSION['ownervillage_name']=$_POST['ownervillage_name'];
$_SESSION['ownerpostOffice_name']=$_POST['ownerpostOffice_name'];
$_SESSION['ownerdistrict']=$_POST['ownerdistrict'];
$_SESSION['ownerstate']=$_POST['ownerstate'];
$_SESSION['ownerstreetName']=$_POST['ownerstreetName'];
$_SESSION['ownerbuildingName']=$_POST['ownerbuildingName'];
*/
?>
<html>
<head>
<title>state</title>
</head>


<body bgcolor="wheat" >
<form name="state" method="post" action="crop.php" >

<b>Name:</b><input type="text" name="stateName"><br><br>


<input type="submit" value="next">

</form>

</body>



