<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
$_SESSION['village_name_coldStorage']=$_POST['village_name_coldStorage'];
$_SESSION['postOffice_name_coldStorage']=$_POST['postOffice_name_coldStorage'];
$_SESSION['district_coldStorage']=$_POST['district_coldStorage'];
$_SESSION['state_coldStorage']=$_POST['state_coldStorage'];
$_SESSION['streetName_coldStorage']=$_POST['streetName_coldStorage'];
$_SESSION['buildingName_coldStorage']=$_POST['buildingName_coldStorage'];
?>
<html>
<head>
<title>Plough</title>
</head>


<body bgcolor="wheat">
<form name="plough" method="post" action="bank.php">
<p><b>enter the agriculture machine required for ploughing</b> </p><br><br>

<input type="checkbox" name="check_list_machine_Of_Ploughing[]" value="Tractor"><label>Tractor</label><br><br>
<input type="checkbox" name="check_list_machine_Of_Ploughing[]" value="Khurpi"><label>Khurpi</label><br><br>
<input type="checkbox" name="check_list_machine_Of_Ploughing[]" value="Cultipacker"><label>Cultipacker</label><br><br>
<input type="submit" value="next">



</form>

</body>


</html>
