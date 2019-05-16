<?php
session_start();
$_SESSION['village_name']=$_POST['village_name'];
$_SESSION['postOffice_name']=$_POST['postOffice_name'];
$_SESSION['district']=$_POST['district'];
$_SESSION['state']=$_POST['state'];
$_SESSION['streetName']=$_POST['streetName'];
$_SESSION['buildingName']=$_POST['buildingName'];

?>
<html>
<head>
<title>farmer</title>
</head>


<body bgcolor="wheat">
<form name="location" method="post" action="farmerNonfarmerHandling.php">
Person is:<input type="radio" name="person_catagory" value="Farmer">Farmer
          <input type="radio" name="person_catagory" value="Non-Farmer">Non-Farmer
		    <input type="button" value="Go back!" onclick="history.back()">
<input type="submit" value="next">

</form>

</body>


</html>