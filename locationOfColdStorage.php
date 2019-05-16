<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
//session_start();
$_SESSION['coldStorageName']=$_POST['coldStorageName'];
$_SESSION['rentPricePerMonth']=$_POST['rentPricePerMonth'];
$_SESSION['mobileNumberOfcoldStorage']=$_POST['mobileNumberOfcoldStorage'];


?>
<html>
<head>
<title>locationOfColdStorage</title>
</head>


<body bgcolor="wheat">
<form name="locationOfColdStorage" method="post" action="Plough.php">
<p><b>enter the location of cold storage</b> </p><br><br>
<b>Village</b><input type="text" name="village_name_coldStorage"><br><br>
<b>PostOffice</b><input type="text" name="postOffice_name_coldStorage"><br><br>
<b>District</b><input type="text" name="district_coldStorage"><br><br>
<b>State</b><input type="text" name="state_coldStorage"><br><br>
<b>StreetName</b><input type="text" name="streetName_coldStorage"><br><br>
<b>BuildingName</b><input type="text" name="buildingName_coldStorage"><br><br>
<input type="submit" value="next">

</form>

</body>


</html>
