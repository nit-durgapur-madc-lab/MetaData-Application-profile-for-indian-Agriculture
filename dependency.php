<?php

$_SESSION['person_catagory'];
?>

<html>
<head>
<title>dependency</title>
</head>


<body bgcolor="wheat">
<form name="location" method="post" action="dependencyHandling.php">
Person is:<input type="radio" name="farmercatagory" value="independent_Farmer">IndependentFarmer
          <input type="radio" name="farmercatagory" value="dependent_Farmer">DependentFarmer
		  <input type="button" value="Go back!" onclick="history.back()">
<input type="submit" value="next">

</form>

</body>


</html>