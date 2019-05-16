<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
//session_start();
/*
$_SESSION['machine_Of_Harvesting']=$_POST['machine_Of_Harvesting'];
$_SESSION['rentPricePerHour_Of_Harvesting_Machine']=$_POST['rentPricePerHour_Of_Harvesting_Machine'];
*/
if(isset($_POST['check_list_machine_Of_Harvesting']))
{
	$_SESSION['countOfMachineRequiredforHarvesting']=count($_POST['check_list_machine_Of_Harvesting']);
	$_SESSION['machine_Of_Harvesting']=array();
	foreach($_POST['check_list_machine_Of_Harvesting'] as $machinename)
	array_push($_SESSION['machine_Of_Harvesting'],$machinename);
	
}

?>

<html>
<head>
<title>coldStorage</title>
</head>


<body bgcolor="wheat" >
<form name="coldStorage" method="post" action="locationOfColdStorage.php" >

<b>ColdStorage Name:</b><input type="text" name="coldStorageName"><br><br>
<b>RentPricePerMonth:</b><input type="text" name="rentPricePerMonth"><br><br>
<b>MobileNumber:</b><input type="text" name="mobileNumberOfcoldStorage"><br><br>


<input type="submit" value="next">

</form>

</body>


