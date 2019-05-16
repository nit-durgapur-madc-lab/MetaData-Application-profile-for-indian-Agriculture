<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
//session_start();

$_SESSION['cropName']=$_POST['cropName'];
$_SESSION['cropType']=$_POST['cropType'];
$_SESSION['startMonth']=$_POST['startMonth'];
$_SESSION['endMonth']=$_POST['endMonth'];
$_SESSION['tradition']=$_POST['tradition'];
?>

<html>
<head>
<title>seedSowing</title>
</head>


<body bgcolor="wheat" >
<form name="seedSowing" method="post" action="machineOfSeedSowing.php" >


<p>
<b>click the next button to submit the detail of machine reqired for seed sowing<b><br><br>
<input type="submit" value="next">
</p>




</form>

</body>

