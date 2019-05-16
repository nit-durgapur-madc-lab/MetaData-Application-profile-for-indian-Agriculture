<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
//session_start();
$_SESSION['stateName']=$_POST['stateName'];
?>
<html>
<head>
<title>crop</title>
</head>


<body bgcolor="wheat" >
<form name="crop" method="post" action="seedSowing.php" >

<b>CropName:</b><input type="text" name="cropName"><br><br>
<b>CropType:</b>
<select name="cropType" id="cropType">
<option>Kharif Crops</option>
<option>Rabi Crops</option>
<option>Zaid Crops</option>
<option>Cash Crops</option>
<option>Plantation Crops</option>
</select>
<br><br>
<b>StartMonth:</b>
<select name="startMonth" id="startMonth">
<option>January</option>
<option>February</option>
<option>March</option>
<option>April</option>
<option>May</option>
<option>June</option>
<option>July</option>
<option>August</option>
<option>September</option>
<option>October</option>
<option>November</option>
<option>Ddecember</option>
</select>
<br><br>
<b>EndMonth:</b>
<select name="endMonth" id="endMonth">
<option>January</option>
<option>February</option>
<option>March</option>
<option>April</option>
<option>May</option>
<option>June</option>
<option>July</option>
<option>August</option>
<option>September</option>
<option>October</option>
<option>November</option>
<option>Ddecember</option>
</select>
<br><br>
Crop is:<input type="radio" name="tradition" value="traditional">traditional
          <input type="radio" name="tradition" value="non-traditional">non-traditional
<input type="submit" value="next">

</form>

</body>



