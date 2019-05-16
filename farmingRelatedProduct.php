<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
//session_start();
$_SESSION['soilType']=$_POST['soilType'];
$_SESSION['enrichMineral']=$_POST['enrichMineral'];
$_SESSION['deficientMineral']=$_POST['deficientMineral'];
$_SESSION['majorCropName']=$_POST['majorCropName'];
?>
<html>
<head>
<title>farmingRelatedProduct</title>
</head>


<body bgcolor="wheat" >
<form name="farmingRelatedProduct" method="post" action="agricultureMachinary.php" >
<b>ProductType:</b>
<select name="productType" id="productType">
<option>Fertilizer</option>
<option>Pesticide</option>
</select>
<br><br>
<b>ProductName:</b><input type="text" name="farmingRelatedProductName"><br><br>
<b>EnrichMineralOfProduct:</b><input type="text" name="enrichMineralOfProduct"><br><br>
<b>PricePerUnit:</b><input type="text" name="pricePerUnit"><br><br>
<b>UnitType:</b><input type="text" name="unitType"><br><br>

<input type="submit" value="next">

</form>

</body>


</html>