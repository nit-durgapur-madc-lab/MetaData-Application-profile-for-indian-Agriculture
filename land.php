<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

if(isset($_POST['occupation'])){
$_SESSION['occupation']=$_POST['occupation'];
}
//echo $_SESSION['farmercatagory'];
?>


<html>
<head>
<title>land</title>
</head>


<body bgcolor="wheat" >
<form name="location" method="post" action="soil.php" >
<b>LandType:</b><select name="landType" id="landType">
<option>Mountains</option>
<option>Plateau</option>
<option>Plain</option>
<option>Desert</option>
<option>CoastalPlains</option>
</select>



<br><br>
<b>Area:</b><input type="text" name="area"><br><br>

<input type="submit" value="next">

</form>

</body>


</html>