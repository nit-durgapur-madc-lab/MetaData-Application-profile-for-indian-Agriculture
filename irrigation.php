<?php

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
//session_start();
/*
$_SESSION['machine_Of_Seed_Sowing']=$_POST['machine_Of_Seed_Sowing'];
$_SESSION['rentPricePerHour_Of_Seed_Sowing_Machine']=$_POST['rentPricePerHour_Of_Seed_Sowing_Machine'];
$_SESSION['owner_machine_Of_Seed_Sowing_name']=$_POST['owner_machine_Of_Seed_Sowing_name'];
$_SESSION['owner_machine_Of_Seed_Sowing_age']=$_POST['owner_machine_Of_Seed_Sowing_age'];
$_SESSION['owner_machine_Of_Seed_Sowing_gender']=$_POST['owner_machine_Of_Seed_Sowing_gender'];
$_SESSION['owner_machine_Of_Seed_Sowing_MobileNumber']=$_POST['owner_machine_Of_Seed_Sowing_MobileNumber'];
$_SESSION['owner_machine_Of_Seed_Sowing_village_name']=$_POST['owner_machine_Of_Seed_Sowing_village_name'];
$_SESSION['owner_machine_Of_Seed_Sowing_postOffice_name']=$_POST['owner_machine_Of_Seed_Sowing_postOffice_name'];
$_SESSION['owner_machine_Of_Seed_Sowing_district']=$_POST['owner_machine_Of_Seed_Sowing_district'];
$_SESSION['owner_machine_Of_Seed_Sowing_state']=$_POST['owner_machine_Of_Seed_Sowing_state'];
$_SESSION['owner_machine_Of_Seed_Sowing_streetName']=$_POST['owner_machine_Of_Seed_Sowing_streetName'];
$_SESSION['owner_machine_Of_Seed_Sowing_buildingName']=$_POST['owner_machine_Of_Seed_Sowing_buildingName'];
*/if(isset($_POST['check_list_machine_Of_Seed_Sowing']))
{
	$_SESSION['countOfMachineRequiredforSeedSowing']=count($_POST['check_list_machine_Of_Seed_Sowing']);
	$_SESSION['machine_Of_Seed_Sowing']=array();
	foreach($_POST['check_list_machine_Of_Seed_Sowing'] as $machinename)
	array_push($_SESSION['machine_Of_Seed_Sowing'],$machinename);
	
}

?>
<html>
<head>
<title>irrigation</title>
</head>


<body bgcolor="wheat" >
<form name="irrigation" method="post" action="machineOfIrrigation.php" >


<p>
<b>click the next button to submit the detail of machine reqired for irrigation<b><br><br>
<input type="submit" value="next">
</p>




</form>

</body>
