<?php


?>
<html>
<head>
<title>cropGrowthProduct</title>
</head>


<body bgcolor="wheat" >
<form name="cropGrowthProduct" method="post" action="harvesting.php" >
<b>ProductType:</b>
<select name="CropGrowthProductType" id="CropGrowthProductType">
<option>Fertilizer</option>
<option>Pesticide</option>
</select>
<br><br>
<b>ProductName:</b><input type="text" name="cropGrowthProductName"><br><br>
<b>EnrichMineralOfProduct:</b><input type="text" name="enrichMineralOfCropGrowthProduct"><br><br>
<b>PricePerUnit:</b><input type="text" name="pricePerUnitOfCropGrowthProduct"><br><br>
<b>UnitType:</b><input type="text" name="unitTypeOfCropGrowthProduct"><br><br>

<input type="submit" value="next">

</form>

</body>


</html>