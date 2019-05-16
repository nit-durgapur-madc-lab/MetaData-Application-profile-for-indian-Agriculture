<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
//session_start();
$_SESSION['landType']=$_POST['landType'];
$_SESSION['area']=$_POST['area'];


?>
<html>
<head>
<title>soil</title>
</head>


<body bgcolor="wheat" >
<form name="soil" method="post" action="farmingRelatedProduct.php" >
<b>SoilType:</b>
<select name="soilType" id="soilType">
<option>Alluvial soil</option>
<option>Black soil</option>
<option>Red and yellow soil</option>
<option>Laterite soil</option>
<option>Arid soil</option>
</select>


<br><br>
<b>EnrichMineral</b><input type="text" name="enrichMineral"><br><br>
<b>DeficientMineral</b><input type="text" name="deficientMineral"><br><br>
<b>MajorCropName</b><input type="text" name="majorCropName"><br><br>

<input type="submit" value="next">

</form>

</body>


</html>