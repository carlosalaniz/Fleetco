<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafuelmaster_reports = array();
	$tdatafuelmaster_reports[".truncateText"] = true;
	$tdatafuelmaster_reports[".NumberOfChars"] = 80;
	$tdatafuelmaster_reports[".ShortName"] = "fuelmaster_reports";
	$tdatafuelmaster_reports[".OwnerID"] = "";
	$tdatafuelmaster_reports[".OriginalTable"] = "fuelmaster";

//	field labels
$fieldLabelsfuelmaster_reports = array();
$fieldToolTipsfuelmaster_reports = array();
$pageTitlesfuelmaster_reports = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfuelmaster_reports["English"] = array();
	$fieldToolTipsfuelmaster_reports["English"] = array();
	$pageTitlesfuelmaster_reports["English"] = array();
	$fieldLabelsfuelmaster_reports["English"]["Id"] = "ID";
	$fieldToolTipsfuelmaster_reports["English"]["Id"] = "";
	$fieldLabelsfuelmaster_reports["English"]["SystemDate"] = "Sys. Date";
	$fieldToolTipsfuelmaster_reports["English"]["SystemDate"] = "";
	$fieldLabelsfuelmaster_reports["English"]["FuelDate"] = "Fuel Date";
	$fieldToolTipsfuelmaster_reports["English"]["FuelDate"] = "";
	$fieldLabelsfuelmaster_reports["English"]["Vehicle"] = "Vehicle";
	$fieldToolTipsfuelmaster_reports["English"]["Vehicle"] = "";
	$fieldLabelsfuelmaster_reports["English"]["MeterReading"] = "Mtr.Reading";
	$fieldToolTipsfuelmaster_reports["English"]["MeterReading"] = "";
	$fieldLabelsfuelmaster_reports["English"]["LitersPumped"] = "Ltr.Pumped";
	$fieldToolTipsfuelmaster_reports["English"]["LitersPumped"] = "";
	$fieldLabelsfuelmaster_reports["English"]["PricePerLiter"] = "Ltr.Price";
	$fieldToolTipsfuelmaster_reports["English"]["PricePerLiter"] = "";
	$fieldLabelsfuelmaster_reports["English"]["FuelStation"] = "Fuel Stat.";
	$fieldToolTipsfuelmaster_reports["English"]["FuelStation"] = "";
	$fieldLabelsfuelmaster_reports["English"]["Fleet"] = "Fleet";
	$fieldToolTipsfuelmaster_reports["English"]["Fleet"] = "";
	$fieldLabelsfuelmaster_reports["English"]["Cost"] = "Cost";
	$fieldToolTipsfuelmaster_reports["English"]["Cost"] = "";
	$fieldLabelsfuelmaster_reports["English"]["LastMileage"] = "Last Mileage";
	$fieldToolTipsfuelmaster_reports["English"]["LastMileage"] = "";
	$fieldLabelsfuelmaster_reports["English"]["Economy"] = "Economy";
	$fieldToolTipsfuelmaster_reports["English"]["Economy"] = "";
	$fieldLabelsfuelmaster_reports["English"]["FillType"] = "Fill Type";
	$fieldToolTipsfuelmaster_reports["English"]["FillType"] = "";
	$fieldLabelsfuelmaster_reports["English"]["CouponNo"] = "Coupon No";
	$fieldToolTipsfuelmaster_reports["English"]["CouponNo"] = "";
	$fieldLabelsfuelmaster_reports["English"]["Driver"] = "Driver";
	$fieldToolTipsfuelmaster_reports["English"]["Driver"] = "";
	if (count($fieldToolTipsfuelmaster_reports["English"]))
		$tdatafuelmaster_reports[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfuelmaster_reports[""] = array();
	$fieldToolTipsfuelmaster_reports[""] = array();
	$pageTitlesfuelmaster_reports[""] = array();
	if (count($fieldToolTipsfuelmaster_reports[""]))
		$tdatafuelmaster_reports[".isUseToolTips"] = true;
}


	$tdatafuelmaster_reports[".NCSearch"] = true;



$tdatafuelmaster_reports[".shortTableName"] = "fuelmaster_reports";
$tdatafuelmaster_reports[".nSecOptions"] = 0;
$tdatafuelmaster_reports[".recsPerRowPrint"] = 1;
$tdatafuelmaster_reports[".mainTableOwnerID"] = "";
$tdatafuelmaster_reports[".moveNext"] = 1;
$tdatafuelmaster_reports[".entityType"] = 1;

$tdatafuelmaster_reports[".strOriginalTableName"] = "fuelmaster";

		 



$tdatafuelmaster_reports[".showAddInPopup"] = false;

$tdatafuelmaster_reports[".showEditInPopup"] = false;

$tdatafuelmaster_reports[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafuelmaster_reports[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafuelmaster_reports[".fieldsForRegister"] = array();

	$tdatafuelmaster_reports[".listAjax"] = true;

	$tdatafuelmaster_reports[".audit"] = false;

	$tdatafuelmaster_reports[".locking"] = false;



$tdatafuelmaster_reports[".list"] = true;

$tdatafuelmaster_reports[".view"] = true;


$tdatafuelmaster_reports[".exportTo"] = true;

$tdatafuelmaster_reports[".printFriendly"] = true;


$tdatafuelmaster_reports[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatafuelmaster_reports[".searchSaving"] = false;
//

$tdatafuelmaster_reports[".showSearchPanel"] = true;
		$tdatafuelmaster_reports[".flexibleSearch"] = true;

$tdatafuelmaster_reports[".isUseAjaxSuggest"] = true;

$tdatafuelmaster_reports[".rowHighlite"] = true;



$tdatafuelmaster_reports[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafuelmaster_reports[".isUseTimeForSearch"] = false;





$tdatafuelmaster_reports[".allSearchFields"] = array();
$tdatafuelmaster_reports[".filterFields"] = array();
$tdatafuelmaster_reports[".requiredSearchFields"] = array();

$tdatafuelmaster_reports[".allSearchFields"][] = "Id";
	$tdatafuelmaster_reports[".allSearchFields"][] = "SystemDate";
	$tdatafuelmaster_reports[".allSearchFields"][] = "FuelDate";
	$tdatafuelmaster_reports[".allSearchFields"][] = "Fleet";
	$tdatafuelmaster_reports[".allSearchFields"][] = "Vehicle";
	$tdatafuelmaster_reports[".allSearchFields"][] = "CouponNo";
	$tdatafuelmaster_reports[".allSearchFields"][] = "Driver";
	$tdatafuelmaster_reports[".allSearchFields"][] = "FuelStation";
	$tdatafuelmaster_reports[".allSearchFields"][] = "MeterReading";
	$tdatafuelmaster_reports[".allSearchFields"][] = "LitersPumped";
	$tdatafuelmaster_reports[".allSearchFields"][] = "PricePerLiter";
	$tdatafuelmaster_reports[".allSearchFields"][] = "Cost";
	$tdatafuelmaster_reports[".allSearchFields"][] = "LastMileage";
	$tdatafuelmaster_reports[".allSearchFields"][] = "FillType";
	$tdatafuelmaster_reports[".allSearchFields"][] = "Economy";
	

$tdatafuelmaster_reports[".googleLikeFields"] = array();
$tdatafuelmaster_reports[".googleLikeFields"][] = "Id";
$tdatafuelmaster_reports[".googleLikeFields"][] = "SystemDate";
$tdatafuelmaster_reports[".googleLikeFields"][] = "FuelDate";
$tdatafuelmaster_reports[".googleLikeFields"][] = "Vehicle";
$tdatafuelmaster_reports[".googleLikeFields"][] = "MeterReading";
$tdatafuelmaster_reports[".googleLikeFields"][] = "LitersPumped";
$tdatafuelmaster_reports[".googleLikeFields"][] = "PricePerLiter";
$tdatafuelmaster_reports[".googleLikeFields"][] = "FuelStation";
$tdatafuelmaster_reports[".googleLikeFields"][] = "Fleet";
$tdatafuelmaster_reports[".googleLikeFields"][] = "Cost";
$tdatafuelmaster_reports[".googleLikeFields"][] = "LastMileage";
$tdatafuelmaster_reports[".googleLikeFields"][] = "Economy";
$tdatafuelmaster_reports[".googleLikeFields"][] = "FillType";
$tdatafuelmaster_reports[".googleLikeFields"][] = "CouponNo";
$tdatafuelmaster_reports[".googleLikeFields"][] = "Driver";

$tdatafuelmaster_reports[".panelSearchFields"] = array();
$tdatafuelmaster_reports[".searchPanelOptions"] = array();
$tdatafuelmaster_reports[".panelSearchFields"][] = "FuelDate";
	$tdatafuelmaster_reports[".panelSearchFields"][] = "Vehicle";
	
$tdatafuelmaster_reports[".advSearchFields"] = array();
$tdatafuelmaster_reports[".advSearchFields"][] = "Id";
$tdatafuelmaster_reports[".advSearchFields"][] = "SystemDate";
$tdatafuelmaster_reports[".advSearchFields"][] = "FuelDate";
$tdatafuelmaster_reports[".advSearchFields"][] = "Fleet";
$tdatafuelmaster_reports[".advSearchFields"][] = "Vehicle";
$tdatafuelmaster_reports[".advSearchFields"][] = "CouponNo";
$tdatafuelmaster_reports[".advSearchFields"][] = "Driver";
$tdatafuelmaster_reports[".advSearchFields"][] = "FuelStation";
$tdatafuelmaster_reports[".advSearchFields"][] = "MeterReading";
$tdatafuelmaster_reports[".advSearchFields"][] = "LitersPumped";
$tdatafuelmaster_reports[".advSearchFields"][] = "PricePerLiter";
$tdatafuelmaster_reports[".advSearchFields"][] = "Cost";
$tdatafuelmaster_reports[".advSearchFields"][] = "LastMileage";
$tdatafuelmaster_reports[".advSearchFields"][] = "FillType";
$tdatafuelmaster_reports[".advSearchFields"][] = "Economy";

$tdatafuelmaster_reports[".tableType"] = "list";

$tdatafuelmaster_reports[".printerPageOrientation"] = 0;
$tdatafuelmaster_reports[".nPrinterPageScale"] = 100;

$tdatafuelmaster_reports[".nPrinterSplitRecords"] = 40;

$tdatafuelmaster_reports[".nPrinterPDFSplitRecords"] = 40;



$tdatafuelmaster_reports[".geocodingEnabled"] = false;





$tdatafuelmaster_reports[".listGridLayout"] = 3;





// view page pdf
$tdatafuelmaster_reports[".isViewPagePDF"] = true;
$tdatafuelmaster_reports[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatafuelmaster_reports[".isPrinterPagePDF"] = true;
$tdatafuelmaster_reports[".nPrinterPagePDFScale"] = 100;

$tdatafuelmaster_reports[".totalsFields"] = array();
$tdatafuelmaster_reports[".totalsFields"][] = array(
	"fName" => "LitersPumped",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatafuelmaster_reports[".totalsFields"][] = array(
	"fName" => "Cost",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatafuelmaster_reports[".totalsFields"][] = array(
	"fName" => "Economy",
	"numRows" => 0,
	"totalsType" => "AVERAGE",
	"viewFormat" => 'Number');

$tdatafuelmaster_reports[".pageSize"] = 20;

$tdatafuelmaster_reports[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafuelmaster_reports[".strOrderBy"] = $tstrOrderBy;

$tdatafuelmaster_reports[".orderindexes"] = array();

$tdatafuelmaster_reports[".sqlHead"] = "SELECT Id,  SystemDate,  FuelDate,  Vehicle,  MeterReading,  LitersPumped,  PricePerLiter,  FuelStation,  Fleet,  LitersPumped*PricePerLiter AS Cost,  LastMileage,  Economy,  FillType,  CouponNo,  Driver";
$tdatafuelmaster_reports[".sqlFrom"] = "FROM fuelmaster";
$tdatafuelmaster_reports[".sqlWhereExpr"] = "";
$tdatafuelmaster_reports[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatafuelmaster_reports[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafuelmaster_reports[".arrGroupsPerPage"] = $arrGPP;

$tdatafuelmaster_reports[".highlightSearchResults"] = true;

$tableKeysfuelmaster_reports = array();
$tableKeysfuelmaster_reports[] = "Id";
$tdatafuelmaster_reports[".Keys"] = $tableKeysfuelmaster_reports;

$tdatafuelmaster_reports[".listFields"] = array();
$tdatafuelmaster_reports[".listFields"][] = "Id";
$tdatafuelmaster_reports[".listFields"][] = "FuelDate";
$tdatafuelmaster_reports[".listFields"][] = "Fleet";
$tdatafuelmaster_reports[".listFields"][] = "Vehicle";
$tdatafuelmaster_reports[".listFields"][] = "CouponNo";
$tdatafuelmaster_reports[".listFields"][] = "Driver";
$tdatafuelmaster_reports[".listFields"][] = "FuelStation";
$tdatafuelmaster_reports[".listFields"][] = "MeterReading";
$tdatafuelmaster_reports[".listFields"][] = "LitersPumped";
$tdatafuelmaster_reports[".listFields"][] = "PricePerLiter";
$tdatafuelmaster_reports[".listFields"][] = "Cost";
$tdatafuelmaster_reports[".listFields"][] = "FillType";
$tdatafuelmaster_reports[".listFields"][] = "Economy";

$tdatafuelmaster_reports[".hideMobileList"] = array();


$tdatafuelmaster_reports[".viewFields"] = array();
$tdatafuelmaster_reports[".viewFields"][] = "Id";
$tdatafuelmaster_reports[".viewFields"][] = "SystemDate";
$tdatafuelmaster_reports[".viewFields"][] = "FuelDate";
$tdatafuelmaster_reports[".viewFields"][] = "Fleet";
$tdatafuelmaster_reports[".viewFields"][] = "Vehicle";
$tdatafuelmaster_reports[".viewFields"][] = "CouponNo";
$tdatafuelmaster_reports[".viewFields"][] = "Driver";
$tdatafuelmaster_reports[".viewFields"][] = "FuelStation";
$tdatafuelmaster_reports[".viewFields"][] = "MeterReading";
$tdatafuelmaster_reports[".viewFields"][] = "LitersPumped";
$tdatafuelmaster_reports[".viewFields"][] = "PricePerLiter";
$tdatafuelmaster_reports[".viewFields"][] = "Cost";
$tdatafuelmaster_reports[".viewFields"][] = "LastMileage";
$tdatafuelmaster_reports[".viewFields"][] = "FillType";
$tdatafuelmaster_reports[".viewFields"][] = "Economy";

$tdatafuelmaster_reports[".addFields"] = array();

$tdatafuelmaster_reports[".masterListFields"] = array();
$tdatafuelmaster_reports[".masterListFields"][] = "CouponNo";
$tdatafuelmaster_reports[".masterListFields"][] = "Driver";
$tdatafuelmaster_reports[".masterListFields"][] = "Id";
$tdatafuelmaster_reports[".masterListFields"][] = "SystemDate";
$tdatafuelmaster_reports[".masterListFields"][] = "FuelDate";
$tdatafuelmaster_reports[".masterListFields"][] = "Fleet";
$tdatafuelmaster_reports[".masterListFields"][] = "Vehicle";
$tdatafuelmaster_reports[".masterListFields"][] = "FuelStation";
$tdatafuelmaster_reports[".masterListFields"][] = "MeterReading";
$tdatafuelmaster_reports[".masterListFields"][] = "LitersPumped";
$tdatafuelmaster_reports[".masterListFields"][] = "PricePerLiter";
$tdatafuelmaster_reports[".masterListFields"][] = "Cost";
$tdatafuelmaster_reports[".masterListFields"][] = "LastMileage";
$tdatafuelmaster_reports[".masterListFields"][] = "FillType";
$tdatafuelmaster_reports[".masterListFields"][] = "Economy";

$tdatafuelmaster_reports[".inlineAddFields"] = array();

$tdatafuelmaster_reports[".editFields"] = array();

$tdatafuelmaster_reports[".inlineEditFields"] = array();

$tdatafuelmaster_reports[".exportFields"] = array();
$tdatafuelmaster_reports[".exportFields"][] = "Id";
$tdatafuelmaster_reports[".exportFields"][] = "SystemDate";
$tdatafuelmaster_reports[".exportFields"][] = "FuelDate";
$tdatafuelmaster_reports[".exportFields"][] = "Fleet";
$tdatafuelmaster_reports[".exportFields"][] = "Vehicle";
$tdatafuelmaster_reports[".exportFields"][] = "CouponNo";
$tdatafuelmaster_reports[".exportFields"][] = "Driver";
$tdatafuelmaster_reports[".exportFields"][] = "FuelStation";
$tdatafuelmaster_reports[".exportFields"][] = "MeterReading";
$tdatafuelmaster_reports[".exportFields"][] = "LitersPumped";
$tdatafuelmaster_reports[".exportFields"][] = "PricePerLiter";
$tdatafuelmaster_reports[".exportFields"][] = "Cost";
$tdatafuelmaster_reports[".exportFields"][] = "LastMileage";
$tdatafuelmaster_reports[".exportFields"][] = "FillType";
$tdatafuelmaster_reports[".exportFields"][] = "Economy";

$tdatafuelmaster_reports[".importFields"] = array();

$tdatafuelmaster_reports[".printFields"] = array();
$tdatafuelmaster_reports[".printFields"][] = "Id";
$tdatafuelmaster_reports[".printFields"][] = "SystemDate";
$tdatafuelmaster_reports[".printFields"][] = "FuelDate";
$tdatafuelmaster_reports[".printFields"][] = "Fleet";
$tdatafuelmaster_reports[".printFields"][] = "Vehicle";
$tdatafuelmaster_reports[".printFields"][] = "CouponNo";
$tdatafuelmaster_reports[".printFields"][] = "Driver";
$tdatafuelmaster_reports[".printFields"][] = "FuelStation";
$tdatafuelmaster_reports[".printFields"][] = "MeterReading";
$tdatafuelmaster_reports[".printFields"][] = "LitersPumped";
$tdatafuelmaster_reports[".printFields"][] = "PricePerLiter";
$tdatafuelmaster_reports[".printFields"][] = "Cost";
$tdatafuelmaster_reports[".printFields"][] = "LastMileage";
$tdatafuelmaster_reports[".printFields"][] = "FillType";
$tdatafuelmaster_reports[".printFields"][] = "Economy";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_reports","Id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Id";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster_reports["Id"] = $fdata;
//	SystemDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SystemDate";
	$fdata["GoodName"] = "SystemDate";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_reports","SystemDate");
	$fdata["FieldType"] = 200;

	
	
	
										
	
	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SystemDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SystemDate";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 50;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster_reports["SystemDate"] = $fdata;
//	FuelDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FuelDate";
	$fdata["GoodName"] = "FuelDate";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_reports","FuelDate");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "FuelDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FuelDate";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 75;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Between";
// the end of search options settings




	$tdatafuelmaster_reports["FuelDate"] = $fdata;
//	Vehicle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Vehicle";
	$fdata["GoodName"] = "Vehicle";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_reports","Vehicle");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Vehicle";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Vehicle";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "vehiclemaster";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"LastMileage", 'lookupF'=>"Last Mileage");
	$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "RegNo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "RegNo";

	
	$edata["LookupOrderBy"] = "RegNo";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "Fleet", "lookup" => "Fleet" );

	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 100;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
// the end of search options settings




	$tdatafuelmaster_reports["Vehicle"] = $fdata;
//	MeterReading
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "MeterReading";
	$fdata["GoodName"] = "MeterReading";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_reports","MeterReading");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "MeterReading";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MeterReading";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 50;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster_reports["MeterReading"] = $fdata;
//	LitersPumped
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "LitersPumped";
	$fdata["GoodName"] = "LitersPumped";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_reports","LitersPumped");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LitersPumped";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LitersPumped";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 50;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster_reports["LitersPumped"] = $fdata;
//	PricePerLiter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "PricePerLiter";
	$fdata["GoodName"] = "PricePerLiter";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_reports","PricePerLiter");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PricePerLiter";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PricePerLiter";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "fuelprices";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "PricePerLiter";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "PricePerLiter";

	
	$edata["LookupOrderBy"] = "PricePerLiter";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 50;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster_reports["PricePerLiter"] = $fdata;
//	FuelStation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "FuelStation";
	$fdata["GoodName"] = "FuelStation";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_reports","FuelStation");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "FuelStation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FuelStation";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "fuelstationmaster";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "FuelStation";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "FuelStation";

	
	$edata["LookupOrderBy"] = "FuelStation";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 100;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster_reports["FuelStation"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_reports","Fleet");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Fleet";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Fleet";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "fleettype";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "FleetType";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "FleetType";

	
	$edata["LookupOrderBy"] = "FleetType";

	
	
	
	
				//dependent dropdowns
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "Vehicle";

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 100;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster_reports["Fleet"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("fuelmaster_reports","Cost");
	$fdata["FieldType"] = 5;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Cost";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LitersPumped*PricePerLiter";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 50;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster_reports["Cost"] = $fdata;
//	LastMileage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "LastMileage";
	$fdata["GoodName"] = "LastMileage";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_reports","LastMileage");
	$fdata["FieldType"] = 200;

	
	
	
										
	
	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LastMileage";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LastMileage";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster_reports["LastMileage"] = $fdata;
//	Economy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Economy";
	$fdata["GoodName"] = "Economy";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_reports","Economy");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Economy";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Economy";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster_reports["Economy"] = $fdata;
//	FillType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "FillType";
	$fdata["GoodName"] = "FillType";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_reports","FillType");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "FillType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FillType";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster_reports["FillType"] = $fdata;
//	CouponNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "CouponNo";
	$fdata["GoodName"] = "CouponNo";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_reports","CouponNo");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "CouponNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CouponNo";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster_reports["CouponNo"] = $fdata;
//	Driver
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Driver";
	$fdata["GoodName"] = "Driver";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_reports","Driver");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Driver";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Driver";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster_reports["Driver"] = $fdata;


$tables_data["fuelmaster-reports"]=&$tdatafuelmaster_reports;
$field_labels["fuelmaster_reports"] = &$fieldLabelsfuelmaster_reports;
$fieldToolTips["fuelmaster_reports"] = &$fieldToolTipsfuelmaster_reports;
$page_titles["fuelmaster_reports"] = &$pageTitlesfuelmaster_reports;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["fuelmaster-reports"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["fuelmaster-reports"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_fuelmaster_reports()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id,  SystemDate,  FuelDate,  Vehicle,  MeterReading,  LitersPumped,  PricePerLiter,  FuelStation,  Fleet,  LitersPumped*PricePerLiter AS Cost,  LastMileage,  Economy,  FillType,  CouponNo,  Driver";
$proto0["m_strFrom"] = "FROM fuelmaster";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
					
;
						$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "Id",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-reports"
));

$proto6["m_sql"] = "Id";
$proto6["m_srcTableName"] = "fuelmaster-reports";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "SystemDate",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-reports"
));

$proto8["m_sql"] = "SystemDate";
$proto8["m_srcTableName"] = "fuelmaster-reports";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "FuelDate",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-reports"
));

$proto10["m_sql"] = "FuelDate";
$proto10["m_srcTableName"] = "fuelmaster-reports";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Vehicle",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-reports"
));

$proto12["m_sql"] = "Vehicle";
$proto12["m_srcTableName"] = "fuelmaster-reports";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "MeterReading",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-reports"
));

$proto14["m_sql"] = "MeterReading";
$proto14["m_srcTableName"] = "fuelmaster-reports";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "LitersPumped",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-reports"
));

$proto16["m_sql"] = "LitersPumped";
$proto16["m_srcTableName"] = "fuelmaster-reports";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "PricePerLiter",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-reports"
));

$proto18["m_sql"] = "PricePerLiter";
$proto18["m_srcTableName"] = "fuelmaster-reports";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "FuelStation",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-reports"
));

$proto20["m_sql"] = "FuelStation";
$proto20["m_srcTableName"] = "fuelmaster-reports";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-reports"
));

$proto22["m_sql"] = "Fleet";
$proto22["m_srcTableName"] = "fuelmaster-reports";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "LitersPumped*PricePerLiter"
));

$proto24["m_sql"] = "LitersPumped*PricePerLiter";
$proto24["m_srcTableName"] = "fuelmaster-reports";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "Cost";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "LastMileage",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-reports"
));

$proto26["m_sql"] = "LastMileage";
$proto26["m_srcTableName"] = "fuelmaster-reports";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Economy",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-reports"
));

$proto28["m_sql"] = "Economy";
$proto28["m_srcTableName"] = "fuelmaster-reports";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "FillType",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-reports"
));

$proto30["m_sql"] = "FillType";
$proto30["m_srcTableName"] = "fuelmaster-reports";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "CouponNo",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-reports"
));

$proto32["m_sql"] = "CouponNo";
$proto32["m_srcTableName"] = "fuelmaster-reports";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Driver",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-reports"
));

$proto34["m_sql"] = "Driver";
$proto34["m_srcTableName"] = "fuelmaster-reports";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto36=array();
$proto36["m_link"] = "SQLL_MAIN";
			$proto37=array();
$proto37["m_strName"] = "fuelmaster";
$proto37["m_srcTableName"] = "fuelmaster-reports";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "Id";
$proto37["m_columns"][] = "SystemDate";
$proto37["m_columns"][] = "FuelDate";
$proto37["m_columns"][] = "Vehicle";
$proto37["m_columns"][] = "MeterReading";
$proto37["m_columns"][] = "LitersPumped";
$proto37["m_columns"][] = "PricePerLiter";
$proto37["m_columns"][] = "FuelStation";
$proto37["m_columns"][] = "Fleet";
$proto37["m_columns"][] = "LastMileage";
$proto37["m_columns"][] = "Economy";
$proto37["m_columns"][] = "FillType";
$proto37["m_columns"][] = "CouponNo";
$proto37["m_columns"][] = "Driver";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "fuelmaster";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "fuelmaster-reports";
$proto38=array();
$proto38["m_sql"] = "";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="fuelmaster-reports";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_fuelmaster_reports = createSqlQuery_fuelmaster_reports();


	
					
;

															

$tdatafuelmaster_reports[".sqlquery"] = $queryData_fuelmaster_reports;

include_once(getabspath("include/fuelmaster_reports_events.php"));
$tableEvents["fuelmaster-reports"] = new eventclass_fuelmaster_reports;
$tdatafuelmaster_reports[".hasEvents"] = true;

?>