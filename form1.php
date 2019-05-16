<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
//variable for person class
$name=$_SESSION['name1'];
$age=$_SESSION['age1'];
$gender=$_SESSION['gender1'];
$MobileNumber=$_SESSION['MobileNumber1'];
//variable for countOfMachinePeraonHave
if(isset($_SESSION['countOfMachinePersonHave'])){
$countOfMachinePersonHave=$_SESSION['countOfMachinePersonHave'];
$countOfMachineforprice=$_SESSION['countOfMachinePersonHave'];
}
//variable for countOfMachinerequiredfor ploughing
if(isset($_SESSION['countOfMachineRequiredforPloughing'])){
$countOfMachineRequiredforPloughing=$_SESSION['countOfMachineRequiredforPloughing'];
}
//variable for count the machine required for seed sowing
if(isset($_SESSION['countOfMachineRequiredforSeedSowing'])){
$countOfMachineRequiredforSeedSowing=$_SESSION['countOfMachineRequiredforSeedSowing'];
}
//variable for the count of machine required for irrigation
if(isset($_SESSION['countOfMachineRequiredforIrrigation'])){
$countOfMachineRequiredforIrrigation=$_SESSION['countOfMachineRequiredforIrrigation'];
}
//variable for the count of machine required for harvesting
if(isset($_SESSION['countOfMachineRequiredforHarvesting'])){
$countOfMachineRequiredforHarvesting=$_SESSION['countOfMachineRequiredforHarvesting'];
}
//variable for location class
$village=$_SESSION['village_name'];
$postOffice=$_SESSION['postOffice_name'];
$district=$_SESSION['district'];
$state=$_SESSION['state'];
$streetName=$_SESSION['streetName'];
$buildingName=$_SESSION['buildingName'];

//variable define the type of person
$personType=$_SESSION['person_catagory'];

//variable define the catagory of farmer
if(isset($_SESSION['farmercatagory'])){
$farmerType=$_SESSION['farmercatagory'];
}

//variable for occupation of nonfarmer
if(isset($_SESSION['occupation'])){
$occupation=$_SESSION['occupation'];
}

//variable for land class
if(isset($_SESSION['landType'])){
$landType=$_SESSION['landType'];}
if(isset($_SESSION['area'])){
$area=$_SESSION['area'];
}

//variable for soil class
if(isset($_SESSION['soilType'])){
$soilType=$_SESSION['soilType'];}
if(isset($_SESSION['enrichMineral'])){
$enrichMineral=$_SESSION['enrichMineral'];}
if(isset($_SESSION['deficientMineral'])){
$deficientMineral=$_SESSION['deficientMineral'];}
if(isset($_SESSION['majorCropName'])){
$majorCropName=$_SESSION['majorCropName'];}

//variable for farming related product for soil
if(isset($_SESSION['productType'])){
$productType=$_SESSION['productType'];}
if(isset($_SESSION['farmingRelatedProductName'])){
$farmingRelatedProductName=$_SESSION['farmingRelatedProductName'];}
if(isset($_SESSION['enrichMineralOfProduct'])){
$enrichMineralOfProduct=$_SESSION['enrichMineralOfProduct'];}
if(isset($_SESSION['pricePerUnit'])){
$pricePerUnit=$_SESSION['pricePerUnit'];}
if(isset($_SESSION['unitType'])){
$unitType=$_SESSION['unitType'];}

//variable for  owner of the machine required to spread the farming related product.

//variable for state class
if(isset($_SESSION['stateName'])){
$stateName=$_SESSION['stateName'];}

//variable for crop class
if(isset($_SESSION['cropName'])){
$cropName=$_SESSION['cropName'];}
if(isset($_SESSION['cropType'])){
$cropType=$_SESSION['cropType'];}
if(isset($_SESSION['startMonth'])){
$startMonth=$_SESSION['startMonth'];}
if(isset($_SESSION['endMonth'])){
$endMonth=$_SESSION['endMonth'];}

//variable for the agriculture machine required for seed sowing

//variable for the owner the agriculture machine required for seed sowing

//variable for the agriculture machine required for irrigation

//variable for the owner for the agriculture machine required for irrigation


//variable for the farming related product required for crop growth
if(isset($_SESSION['CropGrowthProductType'])){
$CropGrowthProductType=$_SESSION['CropGrowthProductType'];}
if(isset($_SESSION['cropGrowthProductName'])){
$cropGrowthProductName=$_SESSION['cropGrowthProductName'];}
if(isset($_SESSION['enrichMineralOfCropGrowthProduct'])){
$enrichMineralOfCropGrowthProduct=$_SESSION['enrichMineralOfCropGrowthProduct'];}
if(isset($_SESSION['pricePerUnitOfCropGrowthProduct'])){
$pricePerUnitOfCropGrowthProduct=$_SESSION['pricePerUnitOfCropGrowthProduct'];}
if(isset($_SESSION['unitTypeOfCropGrowthProduct'])){
$unitTypeOfCropGrowthProduct=$_SESSION['unitTypeOfCropGrowthProduct'];}

//variable for the agriculture machine 


//variable for coldstorage class
if(isset($_SESSION['coldStorageName'])){
$coldStorageName=$_SESSION['coldStorageName'];}
if(isset($_SESSION['rentPricePerMonth'])){
$rentPricePerMonth=$_SESSION['rentPricePerMonth'];}
if(isset($_SESSION['mobileNumberOfcoldStorage'])){
$mobileNumberOfcoldStorage=$_SESSION['mobileNumberOfcoldStorage'];}

//variable for the location of the cold storage
if(isset($_SESSION['village_name_coldStorage'])){
$village_name_coldStorage=$_SESSION['village_name_coldStorage'];}
if(isset($_SESSION['postOffice_name_coldStorage'])){
$postOffice_name_coldStorage=$_SESSION['postOffice_name_coldStorage'];}
if(isset($_SESSION['district_coldStorage'])){
$district_coldStorage=$_SESSION['district_coldStorage'];}
if(isset($_SESSION['state_coldStorage'])){
$state_coldStorage=$_SESSION['state_coldStorage'];}
if(isset($_SESSION['streetName_coldStorage'])){
$streetName_coldStorage=$_SESSION['streetName_coldStorage'];}
if(isset($_SESSION['buildingName_coldStorage'])){
$buildingName_coldStorage=$_SESSION['buildingName_coldStorage'];}

//variable for the agriculture machine required for ploughing

//variable for the bank class
if(isset($_POST['bankName'])){
$bankName=$_POST['bankName'];}

// define the header of the csv file
$headerPerson=array("PersonCount","Name","Age","Gender","MobileNumber","locationcount","farmercount","nonfarmercount","agriculturemachinerycount");
$headerLocation=array("locationcount","Village","PostOffice","District","State","StreetName","BuildingName");
$headerFarmer=array("farmercount","independentfarmercount","dependentfarmercount","cropcount");
$headerNonFarmer=array("nonfarmercount","occupation","landcount");
$headerIndependentFarmer=array("independentfarmercount","landcount");
$headerDependentFarmer=array("dependentfarmercount","nonfarmercount");
$headerLand=array("landcount","landtype","area","soilcount","statecount","agriculturemachinerycount");
$headerSoil=array("soilcount","soiltype","enrichmineral","deficientmineral","majorcropname","farmingrelatedproductcount");
$headerFarmingRelatedProduct=array("farmingrelatedproductcount","producttype","name","enrichmineral","pricePerUnit","unitType","agriculturemachinerycount");
$headerColdStorage=array("coldstoragecount","locationcount","name","rentPricePerMonth","MobileNumber");
$headerState=array("statecount","name","coldstoragecount","traditionalcropcount","nontraditionalcropcount");
$headerCrop=array("cropcount","coldstoragecount","seedsowingcount","irrigationcount","cropgrowthcount","harvestingcount","name",
                "croptype","startmonth","endmonth");
$headerSeedSowing=array("seedsowingcount","agriculturemachinerycount");
$headerIrrigation=array("irrigationcount","agriculturemachinerycount");
$headerCropGrowth=array("cropgrowthcount","farmingrelatedproductcount");
$headerHarvesting=array("harvestingcount","agriculturemachinerycount");
$headerAgricultureMachinery=array("PersonCount","agriculturemachinerycount","Name","rentPricePerHour");
$headerBank=array("bankcount","Name","farmercount");

//define the location of each csv file
$fhLocation=fopen("C:\\xampp\\htdocs\\tutorial\\ProjectFolder\\output\\location.csv","a");
$fhPerson=fopen("C:\\xampp\\htdocs\\tutorial\\ProjectFolder\\output\\person.csv","a");
$fhFarmer=fopen("C:\\xampp\\htdocs\\tutorial\\ProjectFolder\\output\\farmer.csv","a");
$fhNonFarmer=fopen("C:\\xampp\\htdocs\\tutorial\\ProjectFolder\\output\\nonfarmer.csv","a");
$fhIndependentFarmer=fopen("C:\\xampp\\htdocs\\tutorial\\ProjectFolder\\output\\independentfarmer.csv","a");
$fhDependentFarmer=fopen("C:\\xampp\\htdocs\\tutorial\\ProjectFolder\\output\\dependentfarmer.csv","a");
$fhLand=fopen("C:\\xampp\\htdocs\\tutorial\\ProjectFolder\\output\\land.csv","a");
$fhSoil=fopen("C:\\xampp\\htdocs\\tutorial\\ProjectFolder\\output\\soil.csv","a");
$fhFarmingRelatedProduct=fopen("C:\\xampp\\htdocs\\tutorial\\ProjectFolder\\output\\farmingrelatedproduct.csv","a");
$fhColdStorage=fopen("C:\\xampp\\htdocs\\tutorial\\ProjectFolder\\output\\coldstorage.csv","a");
$fhState=fopen("C:\\xampp\\htdocs\\tutorial\\ProjectFolder\\output\\state.csv","a");
$fhCrop=fopen("C:\\xampp\\htdocs\\tutorial\\ProjectFolder\\output\\crop.csv","a");
$fhSeedSowing=fopen("C:\\xampp\\htdocs\\tutorial\\ProjectFolder\\output\\seedsowing.csv","a");
$fhIrrigation=fopen("C:\\xampp\\htdocs\\tutorial\\ProjectFolder\\output\\irrigation.csv","a");
$fhCropGrowth=fopen("C:\\xampp\\htdocs\\tutorial\\ProjectFolder\\output\\cropgrowth.csv","a");
$fhHarvesting=fopen("C:\\xampp\\htdocs\\tutorial\\ProjectFolder\\output\\harvesting.csv","a");
$fhAgricultureMachinery=fopen("C:\\xampp\\htdocs\\tutorial\\ProjectFolder\\output\\agriculturemachinery.csv","a");
$fhBank=fopen("C:\\xampp\\htdocs\\tutorial\\ProjectFolder\\output\\bank.csv","a");

//function call for count
$no_rows_person = count(file("C:\\xampp\\htdocs\\tutorial\\ProjectFolder\\output\\person.csv"));
$pc=personcount($no_rows_person);
$lc=locationcount($no_rows_person);
$fc=farmercount($no_rows_person);
$nfc=nonfarmercount($no_rows_person);
$ifc=independentfarmercount($no_rows_person);
$dfc=dependentfarmercount($no_rows_person);
$lac=landcount($no_rows_person);
$cc=cropcount($no_rows_person);
$nextcc=nextcropcount($no_rows_person);
$nextnfc=nextcount($no_rows_person);
$sc=soilcount($no_rows_person);
$stc=statecount($no_rows_person);
$frpc=farmingrelatedproductcount($no_rows_person);
$csc=coldstoragecount($no_rows_person);
$cslc=coldstoragelocationcount($no_rows_person);
$ssc=seedsowingcount($no_rows_person);
$ic=irrigationcount($no_rows_person);
$cgc=cropgrowthcount($no_rows_person);
$hc=harvestingcount($no_rows_person);
$frpcgc=farmingrelatedproductforcropgrowthcount($no_rows_person);
$bc=bankcount($no_rows_person);
//set the heading of the all csv file
if($no_rows_person==0){
fputcsv($fhPerson,$headerPerson);
fputcsv($fhLocation,$headerLocation);
fputcsv($fhFarmer,$headerFarmer);
fputcsv($fhNonFarmer,$headerNonFarmer);
fputcsv($fhIndependentFarmer,$headerIndependentFarmer);
fputcsv($fhDependentFarmer,$headerDependentFarmer);
fputcsv($fhLand,$headerLand);
fputcsv($fhSoil,$headerSoil);
fputcsv($fhFarmingRelatedProduct,$headerFarmingRelatedProduct);
fputcsv($fhColdStorage,$headerColdStorage);
fputcsv($fhState,$headerState);
fputcsv($fhCrop,$headerCrop);
fputcsv($fhSeedSowing,$headerSeedSowing);
fputcsv($fhIrrigation,$headerIrrigation);
fputcsv($fhCropGrowth,$headerCropGrowth);
fputcsv($fhHarvesting,$headerHarvesting);
fputcsv($fhAgricultureMachinery,$headerAgricultureMachinery);
fputcsv($fhBank,$headerBank);
}

// fill the data of person in csv file
if($personType=='Farmer')
{
	while($countOfMachinePersonHave>0)
	{
		$amc=machinecountforperson($countOfMachinePersonHave);
$dataPerson=array($pc,$name,$age,$gender,$MobileNumber,$lc,$fc,"",$amc);

fputcsv($fhPerson,$dataPerson);


$countOfMachinePersonHave=$countOfMachinePersonHave-1;
   
}

}
else
{
	while($countOfMachinePersonHave>0)
	{
		$amc=machinecountforperson($countOfMachinePersonHave);
	$dataPerson=array($pc,$name,$age,$gender,$MobileNumber,$lc,"",$nfc,$amc);

    fputcsv($fhPerson,$dataPerson);

	$countOfMachinePersonHave=$countOfMachinePersonHave-1;
	}
}
//fill the data of location in csv file
$dataLocation=array($lc,$village,$postOffice,$district,$state,$streetName,$buildingName);
	fputcsv($fhLocation,$dataLocation);

//fill the farmer data in csv file

if($personType=='Farmer'and $farmerType=='independent_Farmer')
{
	$dataFarmer=array($fc,$ifc,"",$cc);
 fputcsv($fhFarmer,$dataFarmer);
	
}
else
{
	if($personType!='Non-Farmer')
	{
	$dataFarmer=array($fc,"",$dfc,$nextcc);
	 fputcsv($fhFarmer,$dataFarmer);
}
}
//fill the non farmer data in csv file
if($personType=='Non-Farmer'or $farmerType=='dependent_Farmer'){
	//echo isset($occupation);
	if(isset($_SESSION['occupation'])){
		echo $_SESSION['occupation'];
$dataNonFarmer=array($nfc,$occupation,$lac);
if($personType=='Non-Farmer'or $farmerType=='dependent_Farmer' ){
	if(isset($_SESSION['occupation'])){
fputcsv($fhNonFarmer,$dataNonFarmer);
}}
}
}
//fill the independent farmer data in csv file
$dataIndependentFarmer=array($ifc,$lc);
if(isset($farmerType)and $farmerType=='independent_Farmer'){
fputcsv($fhIndependentFarmer,$dataIndependentFarmer);
}
//fill the dependent farmer data in csv file
$dataDependentFarmer=array($dfc,$nextnfc);
if(isset($farmerType)and $farmerType=='dependent_Farmer'){
fputcsv($fhDependentFarmer,$dataDependentFarmer);
}

//fill the land data in csv file
if((isset($_SESSION['farmercatagory'])and $farmerType=='independent_Farmer')or($personType=='Non-Farmer')){
if(isset($_SESSION['landType'])and isset($_SESSION['landType'])){
	while($countOfMachineRequiredforPloughing>0){
		$amcl=machinecountforPloughing($countOfMachineRequiredforPloughing);
$dataLand=array($lac,$landType,$area,$sc,$stc,$amcl);
fputcsv($fhLand,$dataLand);

$countOfMachineRequiredforPloughing=$countOfMachineRequiredforPloughing-1;

}
}
}
//fill the soil data in csv file
if((isset($_SESSION['farmercatagory'])and $farmerType=='independent_Farmer')or($personType=='Non-Farmer')){
$dataSoil=array($sc,$soilType,$enrichMineral,$deficientMineral,$majorCropName,$frpc);
fputcsv($fhSoil,$dataSoil);
}
//fill the FarmingRelatedProduct data in csv file
if((isset($_SESSION['farmercatagory'])and $farmerType=='independent_Farmer')or($personType=='Non-Farmer')){
if($productType=='Pesticide'){
$dataFarmingRelatedProduct=array($frpc,$productType,$farmingRelatedProductName,$enrichMineralOfProduct,$pricePerUnit,$unitType,"amc5");
fputcsv($fhFarmingRelatedProduct,$dataFarmingRelatedProduct);
}
else
{
	$dataFarmingRelatedProduct=array($frpc,$productType,$farmingRelatedProductName,$enrichMineralOfProduct,$pricePerUnit,$unitType,"amc12");
fputcsv($fhFarmingRelatedProduct,$dataFarmingRelatedProduct);
	}
}
//fill the data for the cold storage in csv file
if((isset($_SESSION['farmercatagory'])and $farmerType=='independent_Farmer')or($personType=='Non-Farmer')){
$dataColdStorage=array($csc,$cslc,$coldStorageName,$rentPricePerMonth,$mobileNumberOfcoldStorage);
fputcsv($fhColdStorage,$dataColdStorage);
$dataColdStorageLocation=array($cslc,$village_name_coldStorage,$postOffice_name_coldStorage,$district_coldStorage,$state_coldStorage,$streetName_coldStorage,$buildingName_coldStorage);
fputcsv($fhLocation,$dataColdStorageLocation);
}
//fill the data for state in csv file
if((isset($_SESSION['farmercatagory'])and $farmerType=='independent_Farmer')or($personType=='Non-Farmer')){
if($_SESSION['tradition']=='traditional'){
$dataState=array($stc,$stateName,$csc,$cc,"");
fputcsv($fhState,$dataState);
}
else
{
$dataState=array($stc,$stateName,$csc,"",$cc);	
fputcsv($fhState,$dataState);
}
}
//fill the data for crop in csv file
if((isset($_SESSION['farmercatagory'])and $farmerType=='independent_Farmer')or($personType=='Non-Farmer')){
$dataCrop=array($cc,$csc,$ssc,$ic,$cgc,$hc,$cropName,$cropType,$startMonth,$endMonth);

	fputcsv($fhCrop,$dataCrop);
}	
//fill the data for seed sowing in csv file
if((isset($_SESSION['farmercatagory'])and $farmerType=='independent_Farmer')or($personType=='Non-Farmer')){
while($countOfMachineRequiredforSeedSowing>0)
{
$amc=machinecountforseedsowing($countOfMachineRequiredforSeedSowing);
$dataSeedSowing=array($ssc,$amc);

fputcsv($fhSeedSowing,$dataSeedSowing);

$countOfMachineRequiredforSeedSowing=$countOfMachineRequiredforSeedSowing-1;
}
}
//fill the data for irrigation in csv file
if((isset($_SESSION['farmercatagory'])and $farmerType=='independent_Farmer')or($personType=='Non-Farmer')){
while($countOfMachineRequiredforIrrigation>0)
{
	$amc=machinecountforirrigation($countOfMachineRequiredforIrrigation);
	$dataIrrigation=array($ic,$amc);
	fputcsv($fhIrrigation,$dataIrrigation);
	$countOfMachineRequiredforIrrigation=$countOfMachineRequiredforIrrigation-1;
}
}
//fill the data for crop growth in csv file
if((isset($_SESSION['farmercatagory'])and $farmerType=='independent_Farmer')or($personType=='Non-Farmer')){
if($CropGrowthProductType=='Pesticide'){
$dataFarmingRelatedProductForCropGrowth=array($frpcgc,$CropGrowthProductType,$cropGrowthProductName,$enrichMineralOfCropGrowthProduct,$pricePerUnitOfCropGrowthProduct,$unitTypeOfCropGrowthProduct,"amc5");
fputcsv($fhFarmingRelatedProduct,$dataFarmingRelatedProductForCropGrowth);
}
else
{
	$dataFarmingRelatedProductForCropGrowth=array($frpcgc,$CropGrowthProductType,$cropGrowthProductName,$enrichMineralOfCropGrowthProduct,$pricePerUnitOfCropGrowthProduct,$unitTypeOfCropGrowthProduct,"amc12");
fputcsv($fhFarmingRelatedProduct,$dataFarmingRelatedProductForCropGrowth);
	
}

$dataCropGrowth=array($cgc,$frpcgc);
fputcsv($fhCropGrowth,$dataCropGrowth);
}

//fill the data for harvesting in csv file
if((isset($_SESSION['farmercatagory'])and $farmerType=='independent_Farmer')or($personType=='Non-Farmer')){
while($countOfMachineRequiredforHarvesting>0)
{
	$amch=machinecountforharvesting($countOfMachineRequiredforHarvesting);
$dataHarvesting=array($hc,$amch);
fputcsv($fhHarvesting,$dataHarvesting);
$countOfMachineRequiredforHarvesting=$countOfMachineRequiredforHarvesting-1;
}
}
//fill the data for agriculture machinary in csv file

while($countOfMachineforprice>0)
{
	$amcx=machinecountforperson($countOfMachineforprice);
	$priceperhour=returnPrice($countOfMachineforprice);
	$mname=returnmname($amcx);
	$dataAgricultureMachinery=array($pc,$amcx,$mname,$priceperhour);
	fputcsv($fhAgricultureMachinery,$dataAgricultureMachinery);
	$countOfMachineforprice=$countOfMachineforprice-1;
}

//fill the data for bank in csv file
if((isset($_SESSION['farmercatagory'])and $farmerType=='independent_Farmer')or($personType=='Non-Farmer')){
if($_SESSION['tradition']=='traditional')
{
	$dataBank=array($bc,$bankName,"");
	fputcsv($fhBank,$dataBank);

}
else
{
	
		$dataBank=array($bc,$bankName,$fc);
		fputcsv($fhBank,$dataBank);
	
	
}
}

fclose($fhLocation);
fclose($fhPerson);
fclose($fhFarmer);
fclose($fhNonFarmer);
fclose($fhIndependentFarmer);
fclose($fhDependentFarmer);
fclose($fhLand);
fclose($fhSoil);
fclose($fhFarmingRelatedProduct);
fclose($fhColdStorage);
fclose($fhState);
fclose($fhCrop);
fclose($fhSeedSowing);
fclose($fhIrrigation);
fclose($fhCropGrowth);
fclose($fhHarvesting);
fclose($fhAgricultureMachinery);
fclose($fhBank);
//if(isset($_SESSION['farmercatagory'])and $farmerType=='independent_Farmer'){
echo"thanku for submit the form proceed with next entry";

session_destroy();

include 'person.php';

//defining the function used 
function personcount($no_rows_person)
{
	$pc='pc'.$no_rows_person;
	return $pc;
}
function locationcount($no_rows_person)
{
	$lc='lc'.$no_rows_person;
	return $lc;
}
function farmercount($no_rows_person)
{
	$fc='fc'.$no_rows_person;
	return $fc;
}
function nonfarmercount($no_rows_person)
{
	$nfc='nfc'.$no_rows_person;
	return $nfc;
}
function independentfarmercount($no_rows_person)
{
	$ifc='ifc'.$no_rows_person;
	return $ifc;
}
function dependentfarmercount($no_rows_person)
{
	$dfc='dfc'.$no_rows_person;
	return $dfc;
}
function landcount($no_rows_person)
{
	$lac='lac'.$no_rows_person;
	return $lac;
}
function nextcount($no_rows_person)
{
	if($no_rows_person==0){
		if(isset($GLOBALS['countOfMachinePersonHave'])){
	$next_row=$no_rows_person+$GLOBALS['countOfMachinePersonHave']+1;
	}}
	else
	{
		if(isset($GLOBALS['countOfMachinePersonHave'])){
	$next_row=$no_rows_person+$GLOBALS['countOfMachinePersonHave'];
		}
	}
	$nextnfc='nfc'.$next_row;
	return $nextnfc;
}
function nextcropcount($no_rows_person){
	
	//$next_row=$no_rows_person+$GLOBALS['countOfMachinePersonHave']+1;
	
	
	$next_row=$no_rows_person+$GLOBALS['countOfMachinePersonHave']+1;
	
	$nextcc='cc'.$next_row;
	return $nextcc;
	
	
}
function cropcount($no_rows_person)
{
	$cc='cc'.$no_rows_person;
	return $cc;
}
function soilcount($no_rows_person)
{
	$sc='sc'.$no_rows_person;
	return $sc;
}
function statecount($no_rows_person)
{
	$stc='stc'.$no_rows_person;
	return $stc;
}
function farmingrelatedproductcount($no_rows_person)
{
	$frpc='frpc'.$no_rows_person;
	return $frpc;
}
function coldstoragecount($no_rows_person)
{
$csc='cscc'.$no_rows_person;
	return $csc;
}
function coldstoragelocationcount($no_rows_person)
{
	$x=$no_rows_person+1;
	$lc='lc'.$x;
	return $lc;
	
}
function seedsowingcount($no_rows_person)
{
	$ssc='ssc'.$no_rows_person;
	return $ssc;
	
}
function irrigationcount($no_rows_person)
{
	$ic='ic'.$no_rows_person;
	return $ic;
	
}
function cropgrowthcount($no_rows_person)
{
	$cgc='cgc'.$no_rows_person;
	return $cgc;
}
function harvestingcount($no_rows_person)
{
	$hc='hc'.$no_rows_person;
	return $hc;
	
}
function farmingrelatedproductforcropgrowthcount($no_rows_person)
{
	$x=$no_rows_person+1;
	$frpc='frpc'.$x;
	return $frpc;
	
}
function bankcount($no_rows_person)
{
	$bc='bc'.$no_rows_person;
	return $bc;
	
}


function machinecountforperson($countOfMachinePersonHave)
{
/*  0. Tractor
	1. Cultipacker
	2. Khurpi
	3. SprinklerSystem
	4. PumpandPipe
	5. Sprayer
	6. Roller
	7. PeanutSowingMachine
	8. RiceSeedSowingMachine
	9. Grain_cart
	10. Cotton_Picker
	11. Potato_Harvester
	12.fertilizer_spreader
*/
//while ((list ($key,$value) = each ($_SESSION['machine'])) )
	
//{
	$key=$countOfMachinePersonHave-1;
   $value=$_SESSION['machine'][$key];
	if(($key==$countOfMachinePersonHave-1)and ($value=='Tractor')){
		return 'amc0';
	}
	if(($key==$countOfMachinePersonHave-1)and ($value=='Cultipacker')){
		return 'amc1';
	}
	if(($key==$countOfMachinePersonHave-1)and ($value=='Khurpi')){
		return 'amc2';
	}
	if(($key==$countOfMachinePersonHave-1)and ($value=='SprinklerSystem')){
		return 'amc3';
	}
	if($value=='PumpandPipe'){
		return 'amc4';
	}
	if(($key==$countOfMachinePersonHave-1)and ($value=='Sprayer')){
		return 'amc5';
	}
	if(($key==$countOfMachinePersonHave-1)and($value=='Roller')){
	return 'amc6';	
	}
	if(($key==$countOfMachinePersonHave-1)and($value=='PeanutSowingMachine')){
		return 'amc7';
	}
	if(($key==$countOfMachinePersonHave-1)and($value=='RiceSeedSowingMachine')){
		return 'amc8';
	}
	if(($key==$countOfMachinePersonHave-1)and($value=='Grain_cart')){
		return 'amc9';
	}
	if(($key==$countOfMachinePersonHave-1)and($value=='Cotton_Picker')){
		return 'amc10';
	}
	if(($key==$countOfMachinePersonHave-1)and($value=='Potato_Harvester')){
		return 'amc11';
	}
	if(($key==$countOfMachinePersonHave-1)and($value=='fertilizer_spreader')){
		return 'amc12';
	}
//}
}
function machinecountforPloughing($countOfMachineRequiredforPloughing)
{
		$key=$countOfMachineRequiredforPloughing-1;
$value=$_SESSION['machine_Of_Ploughing'][$key];

	if($value=='Tractor'){
		return 'amc0';
	}
	if($value=='Cultipacker'){
		return 'amc1';
	}
	if($value=='Khurpi'){
		return 'amc2';
	}
	if($value=='SprinklerSystem'){
		return 'amc3';
	}
	if($value=='PumpandPipe'){
		return 'amc4';
	}
	if($value=='Sprayer'){
		return 'amc5';
	}
	if($value=='Roller'){
	return 'amc6';	
	}
	if($value=='PeanutSowingMachine'){
		return 'amc7';
	}
	if($value=='RiceSeedSowingMachine'){
		return 'amc8';
	}
	if($value=='Grain_cart'){
		return 'amc9';
	}
	if($value=='Cotton_Picker'){
		return 'amc10';
	}
	if($value=='Potato_Harvester'){
		return 'amc11';
	}
	if($value=='fertilizer_spreader'){
		return 'amc12';
	}

}	
function machinecountforseedsowing($countOfMachineRequiredforSeedSowing)
{
	$key=$countOfMachineRequiredforSeedSowing-1;
$value=$_SESSION['machine_Of_Seed_Sowing'][$key];
	
	if($value=='Tractor'){
		return 'amc0';
	}
	if($value=='Cultipacker'){
		return 'amc1';
	}
	if($value=='Khurpi'){
		return 'amc2';
	}
	if($value=='SprinklerSystem'){
		return 'amc3';
	}
	if($value=='PumpandPipe'){
		return 'amc4';
	}
	if($value=='Sprayer'){
		return 'amc5';
	}
	if($value=='Roller'){
	return 'amc6';	
	}
	if($value=='PeanutSowingMachine'){
		return 'amc7';
	}
	if($value=='RiceSeedSowingMachine'){
		return 'amc8';
	}
	if($value=='Grain_cart'){
		return 'amc9';
	}
	if($value=='Cotton_Picker'){
		return 'amc10';
	}
	if($value=='Potato_Harvester'){
		return 'amc11';
	}
	if($value=='fertilizer_spreader'){
		return 'amc12';
	}

}	
function machinecountforirrigation($countOfMachineRequiredforIrrigation)
{
	$key=$countOfMachineRequiredforIrrigation-1;
$value=$_SESSION['machine_Of_Irrigation'][$key];
	
	

	if($value=='Tractor'){
		return 'amc0';
	}
	if($value=='Cultipacker'){
		return 'amc1';
	}
	if($value=='Khurpi'){
		return 'amc2';
	}
	if($value=='SprinklerSystem'){
		return 'amc3';
	}
	if($value=='PumpandPipe'){
		return 'amc4';
	}
	if($value=='Sprayer'){
		return 'amc5';
	}
	if($value=='Roller'){
	return 'amc6';	
	}
	if($value=='PeanutSowingMachine'){
		return 'amc7';
	}
	if($value=='RiceSeedSowingMachine'){
		return 'amc8';
	}
	if($value=='Grain_cart'){
		return 'amc9';
	}
	if($value=='Cotton_Picker'){
		return 'amc10';
	}
	if($value=='Potato_Harvester'){
		return 'amc11';
	}
	if($value=='fertilizer_spreader'){
		return 'amc12';
	}

}	
function machinecountforharvesting($countOfMachineRequiredforHarvesting)
{
	$key=$countOfMachineRequiredforHarvesting-1;
$value=$_SESSION['machine_Of_Harvesting'][$key];
	

	if($value=='Tractor'){
		return 'amc0';
	}
	if($value=='Cultipacker'){
		return 'amc1';
	}
	if($value=='Khurpi'){
		return 'amc2';
	}
	if($value=='SprinklerSystem'){
		return 'amc3';
	}
	if($value=='PumpandPipe'){
		return 'amc4';
	}
	if($value=='Sprayer'){
		return 'amc5';
	}
	if($value=='Roller'){
	return 'amc6';	
	}
	if($value=='PeanutSowingMachine'){
		return 'amc7';
	}
	if($value=='RiceSeedSowingMachine'){
		return 'amc8';
	}
	if($value=='Grain_cart'){
		return 'amc9';
	}
	if($value=='Cotton_Picker'){
		return 'amc10';
	}
	if($value=='Potato_Harvester'){
		return 'amc11';
	}
	if($value=='fertilizer_spreader'){
		return 'amc12';
	}

}	
function returnPrice($countOfMachineforprice)
{
$key=$countOfMachineforprice-1;
$value=$_SESSION['machine'][$key];
	
		if($value=='Tractor'){
		return $_SESSION['TractorPricePerHour'];
	}
	if($value=='Cultipacker'){
		return $_SESSION['CultipackerPricePerHour'];
	}
	if($value=='Khurpi'){
		return $_SESSION['KhurpiPricePerHour'];
	}
	if($value=='SprinklerSystem'){
		return $_SESSION['SprinklerSystemPricePerHour'];
	}
	if($value=='PumpandPipe'){
		return $_SESSION['PumpandPipePricePerHour'];
	}
	if($value=='Sprayer'){
		return $_SESSION['SprayerPricePerHour'];
	}
	if($value=='Roller'){
	return $_SESSION['RollerPricePerHour'];
	}
	if($value=='PeanutSowingMachine'){
		return $_SESSION['PeanutSowingMachinePricePerHour'];
	}
	if($value=='RiceSeedSowingMachine'){
		return $_SESSION['RiceSeedSowingMachinePricePerHour'];
	}
	if($value=='Grain_cart'){
		return $_SESSION['Grain_cartPricePerHour'];
	}
	if($value=='Cotton_Picker'){
		return $_SESSION['Cotton_PickerPricePerHour'];
	}
	if($value=='Potato_Harvester'){
		return $_SESSION['Potato_HarvesterPricePerHour'];
	}
	if($value=='fertilizer_spreader'){
		return $_SESSION['fertilizer_spreaderPricePerHour'];

	}
	
	

}
function returnmname($amcx)
{
	if($amcx=='amc0')
	{
		return 'Tractor';
	}
	if($amcx=='amc1')
	{
		return 'Cultipacker';
	}
	if($amcx=='amc2')
	{
		return 'Khurpi';
	}
	if($amcx=='amc3')
	{
		return 'SprinklerSystem';
	}
	if($amcx=='amc4')
	{
		return 'PumpandPipe';
	}
	if($amcx=='amc5')
	{
		return 'Sprayer';
	}
	if($amcx=='amc6')
	{
		return 'Roller';
	}
	if($amcx=='amc7')
	{
		return 'PeanutSowingMachine';
	}
	if($amcx=='amc8')
	{
		return 'RiceSeedSowingMachine';
	}
	if($amcx=='amc9')
	{
		return 'Grain_cart';
	}
	if($amcx=='amc10')
	{
		return 'Cotton_Picker';
	}
	if($amcx=='amc11')
	{
		return 'Potato_Harvester';
	}
	if($amcx=='amc12')
	{
		return 'fertilizer_spreader';
	}
	
	
	
}
?>