<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
//session_start();
$_SESSION['productType']=$_POST['productType'];
$_SESSION['farmingRelatedProductName']=$_POST['farmingRelatedProductName'];
$_SESSION['enrichMineralOfProduct']=$_POST['enrichMineralOfProduct'];
$_SESSION['pricePerUnit']=$_POST['pricePerUnit'];
$_SESSION['unitType']=$_POST['unitType'];

?>
<html>
<head>
<title>agricultureMachinary</title>
</head>


<body bgcolor="wheat" >
<form name="agricultureMachinary" method="post" action="state.php" >



<input type="submit" value="next">

</form>

</body>
