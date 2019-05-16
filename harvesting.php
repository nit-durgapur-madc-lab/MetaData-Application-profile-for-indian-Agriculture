<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
//session_start();
$_SESSION['CropGrowthProductType']=$_POST['CropGrowthProductType'];
$_SESSION['cropGrowthProductName']=$_POST['cropGrowthProductName'];
$_SESSION['enrichMineralOfCropGrowthProduct']=$_POST['enrichMineralOfCropGrowthProduct'];
$_SESSION['pricePerUnitOfCropGrowthProduct']=$_POST['pricePerUnitOfCropGrowthProduct'];
$_SESSION['unitTypeOfCropGrowthProduct']=$_POST['unitTypeOfCropGrowthProduct'];

?>

<html>
<head>
<title>harvesting</title>
</head>


<body bgcolor="wheat" >
<form name="harvesting" method="post" action="machineOfHarvesting.php" >


<p>
<b>click the next button to submit the detail of machine reqired for harvesting<b><br><br>
<input type="submit" value="next">
</p>




</form>

</body>
