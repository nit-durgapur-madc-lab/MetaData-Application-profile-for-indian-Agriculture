<?php
session_start();
$_SESSION['name1']=$_POST['name'];
$_SESSION['age1']=$_POST['age'];
$_SESSION['gender1']=$_POST['gender'];
$_SESSION['MobileNumber1']=$_POST['MobileNumber'];
if(isset($_POST['check_list']))
{
	$_SESSION['countOfMachinePersonHave']=count($_POST['check_list']);
	//echo $_SESSION['countOfMachinePersonHave'];
	$_SESSION['machine']=array();
	foreach($_POST['check_list'] as $machinename)
	array_push($_SESSION['machine'],$machinename);
	$key=0;
	//echo $_SESSION['machine'][$key];
}

//while ((list ($key,$value) = each ($_SESSION['machine']))and($key==0)) { 

//echo $value; 
//}
//echo $_POST['TractorPricePerHour'] ;
if(isset($_POST['TractorPricePerHour'])){
$_SESSION['TractorPricePerHour']=$_POST['TractorPricePerHour'];

}
if(isset($_POST['CultipackerPricePerHour'])){
$_SESSION['CultipackerPricePerHour']=$_POST['CultipackerPricePerHour'];
}
if(isset($_POST['KhurpiPricePerHour'])){
$_SESSION['KhurpiPricePerHour']=$_POST['KhurpiPricePerHour'];
}
if(isset($_POST['SprinklerSystemPricePerHour'])){
$_SESSION['SprinklerSystemPricePerHour']=$_POST['SprinklerSystemPricePerHour'];
}
if(isset($_POST['PumpandPipePricePerHour'])){
$_SESSION['PumpandPipePricePerHour']=$_POST['PumpandPipePricePerHour'];
}
if(isset($_POST['SprayerPricePerHour'])){
$_SESSION['SprayerPricePerHour']=$_POST['SprayerPricePerHour'];
}
if(isset($_POST['RollerPricePerHour'])){
$_SESSION['RollerPricePerHour']=$_POST['RollerPricePerHour'];
}
if(isset($_POST['PeanutSowingMachinePricePerHour'])){
$_SESSION['PeanutSowingMachinePricePerHour']=$_POST['PeanutSowingMachinePricePerHour'];
}
if(isset($_POST['RiceSeedSowingMachinePricePerHour'])){
$_SESSION['RiceSeedSowingMachinePricePerHour']=$_POST['RiceSeedSowingMachinePricePerHour'];
}
if(isset($_POST['Grain_cartPricePerHour'])){
$_SESSION['Grain_cartPricePerHour']=$_POST['Grain_cartPricePerHour'];
}
if(isset($_POST['Cotton_PickerPricePerHour'])){
$_SESSION['Cotton_PickerPricePerHour']=$_POST['Cotton_PickerPricePerHour'];
}
if(isset($_POST['Potato_HarvesterPricePerHour'])){
$_SESSION['Potato_HarvesterPricePerHour']=$_POST['Potato_HarvesterPricePerHour'];
}
if(isset($_POST['fertilizer_spreaderPricePerHour'])){
$_SESSION['fertilizer_spreaderPricePerHour']=$_POST['fertilizer_spreaderPricePerHour'];
}





?>
<html>
<head>
<title>location</title>
</head>


<body bgcolor="wheat">
<form name="location" method="POST" action="farmer.php">
<b>Village</b><input type="text" name="village_name"><br><br>
<b>PostOffice</b><input type="text" name="postOffice_name"><br><br>
<b>District</b><input type="text" name="district"><br><br>
<b>State</b><input type="text" name="state"><br><br>
<b>StreetName</b><input type="text" name="streetName"><br><br>
<b>BuildingName</b><input type="text" name="buildingName"><br><br>
  <input type="button" value="Go back!" onclick="history.back()">
<input type="submit" value="next">

</form>

</body>


</html>
