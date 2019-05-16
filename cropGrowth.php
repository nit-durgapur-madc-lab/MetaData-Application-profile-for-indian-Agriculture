<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
//session_start();
/*
$_SESSION['machine_Of_Irrigation']=$_POST['machine_Of_Irrigation'];
$_SESSION['rentPricePerHour_Of_Irrigation_Machine']=$_POST['rentPricePerHour_Of_Irrigation_Machine'];

$_SESSION['owner_machine_Of_Irrigation_name']=$_POST['owner_machine_Of_Irrigation_name'];
$_SESSION['owner_machine_Of_Irrigation_age']=$_POST['owner_machine_Of_Irrigation_age'];
$_SESSION['owner_machine_Of_Irrigation_gender']=$_POST['owner_machine_Of_Irrigation_gender'];
$_SESSION['owner_machine_Of_Irrigation_MobileNumber']=$_POST['owner_machine_Of_Irrigation_MobileNumber'];
$_SESSION['owner_machine_Of_Irrigation_village_name']=$_POST['owner_machine_Of_Irrigation_village_name'];
$_SESSION['owner_machine_Of_Irrigation_postOffice_name']=$_POST['owner_machine_Of_Irrigation_postOffice_name'];
$_SESSION['owner_machine_Of_Irrigation_district']=$_POST['owner_machine_Of_Irrigation_district'];
$_SESSION['owner_machine_Of_Irrigation_state']=$_POST['owner_machine_Of_Irrigation_state'];
$_SESSION['owner_machine_Of_Irrigation_streetName']=$_POST['owner_machine_Of_Irrigation_streetName'];
$_SESSION['owner_machine_Of_Irrigation_buildingName']=$_POST['owner_machine_Of_Irrigation_buildingName'];
*/
if(isset($_POST['check_list_machine_Of_Irrigation']))
{
	$_SESSION['countOfMachineRequiredforIrrigation']=count($_POST['check_list_machine_Of_Irrigation']);
	$_SESSION['machine_Of_Irrigation']=array();
	foreach($_POST['check_list_machine_Of_Irrigation'] as $machinename)
	array_push($_SESSION['machine_Of_Irrigation'],$machinename);
	
}
?>
<html>
<head>
<title>cropGrowth</title>
</head>


<body bgcolor="wheat" >
<form name="cropGrowth" method="post" action="cropGrowthProduct.php" >


<p>
<b>click the next button to submit the detail of farming related product for crop growth<b><br><br>
<input type="submit" value="next">
</p>