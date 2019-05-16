<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
//session_start();
/*
$_SESSION['machine_Of_ploughing']=$_POST['machine_Of_ploughing'];
$_SESSION['rentPricePerHour_Of_ploughing_Machine']=$_POST['rentPricePerHour_Of_ploughing_Machine'];
*/
if(isset($_POST['check_list_machine_Of_Ploughing']))
{
	$_SESSION['countOfMachineRequiredforPloughing']=count($_POST['check_list_machine_Of_Ploughing']);
	$_SESSION['machine_Of_Ploughing']=array();
	foreach($_POST['check_list_machine_Of_Ploughing'] as $machinename)
	array_push($_SESSION['machine_Of_Ploughing'],$machinename);
	
}


?>
<html>
<head>
<title>bank</title>
</head>


<body bgcolor="wheat">
<form name="bank" method="post" action="form1.php">
<p><b>enter the bank name </b> </p><br><br>

<b>BankName:</b><input type="text" name="bankName"> <br><br>


<input type="submit" value="submit">



</form>

</body>


</html>
