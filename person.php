<?php
session_start();

?>
<html>
<head>
<title> form handlling</title>
</head>
<body bgcolor="wheat">
<form name="person" method="post" action="location.php" >
<b>Name</b><input type="text" name="name"><br><br>
<b>Age</b><input type="text" name="age"><br><br>
<b>Gender</b><input type="radio" id="gender" name="gender" value="male" male>male
       <input type="radio" id="gender" name="gender" value="female" female>female<br><br>
<b>MobileNumber</b><input type="text" name="MobileNumber"><br><br>
<p>how many machine/equipment you have??</p><br><br>
<input type="checkbox" name="check_list[]" value="Tractor"><label>Tractor</label>
PricePerHour:<input type="text" name="TractorPricePerHour">
<br><br>
<input type="checkbox" name="check_list[]" value="Cultipacker"><label>Cultipacker</label>
PricePerHour:<input type="text" name="CultipackerPricePerHour">
<br><br>
<input type="checkbox" name="check_list[]" value="Khurpi"><label>Khurpi</label>
PricePerHour:<input type="text" name="KhurpiPricePerHour">
<br><br>
<input type="checkbox" name="check_list[]" value="SprinklerSystem"><label>SprinklerSystem</label>
PricePerHour:<input type="text" name="SprinklerSystemPricePerHour">
<br><br>
<input type="checkbox" name="check_list[]" value="PumpandPipe"><label>PumpandPipe</label>
PricePerHour:<input type="text" name="PumpandPipePricePerHour">
<br><br>
<input type="checkbox" name="check_list[]" value="Sprayer"><label>Sprayer</label>
PricePerHour:<input type="text" name="SprayerPricePerHour">
<br><br>
<input type="checkbox" name="check_list[]" value="Roller"><label>Roller</label>
PricePerHour:<input type="text" name="RollerPricePerHour">
<br><br>
<input type="checkbox" name="check_list[]" value="PeanutSowingMachine"><label>Peanut Sowing Machine</label>
PricePerHour:<input type="text" name="PeanutSowingMachinePricePerHour">
<br><br>
<input type="checkbox" name="check_list[]" value="RiceSeedSowingMachine"><label>Rice Seed SowingMachine</label>
PricePerHour:<input type="text" name="RiceSeedSowingMachinePricePerHour">
<br><br>
<input type="checkbox" name="check_list[]" value="Grain_cart"><label>Grain cart</label>
PricePerHour:<input type="text" name="Grain_cartPricePerHour">
<br><br>
<input type="checkbox" name="check_list[]" value="Cotton_Picker"><label>Cotton Picker</label>
PricePerHour:<input type="text" name="Cotton_PickerPricePerHour">
<br><br>
<input type="checkbox" name="check_list[]" value="Potato_Harvester"><label>Potato_Harvester</label>
PricePerHour:<input type="text" name="Potato_HarvesterPricePerHour">
<br><br>
<input type="checkbox" name="check_list[]" value="fertilizer_spreader"><label>fertilizer_spreader</label>
PricePerHour:<input type="text" name="fertilizer_spreaderPricePerHour">
<input type="submit" value="next">


</form>

</body>

</html>
