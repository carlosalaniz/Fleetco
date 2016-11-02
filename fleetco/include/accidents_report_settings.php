<?php
require_once(getabspath("classes/cipherer.php"));




$tdataaccidents_report = array();
	$tdataaccidents_report[".truncateText"] = true;
	$tdataaccidents_report[".NumberOfChars"] = 80;
	$tdataaccidents_report[".ShortName"] = "accidents_report";
	$tdataaccidents_report[".OwnerID"] = "";
	$tdataaccidents_report[".OriginalTable"] = "accidents";

//	field labels
$fieldLabelsaccidents_report = array();
$fieldToolTipsaccidents_report = array();
$pageTitlesaccidents_report = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsaccidents_report["English"] = array();
	$fieldToolTipsaccidents_report["English"] = array();
	$pageTitlesaccidents_report["English"] = array();
	$fieldLabelsaccidents_report["English"]["Id"] = "ID";
	$fieldToolTipsaccidents_report["English"]["Id"] = "";
	$fieldLabelsaccidents_report["English"]["SysDate"] = "System Date";
	$fieldToolTipsaccidents_report["English"]["SysDate"] = "";
	$fieldLabelsaccidents_report["English"]["Date"] = "Date";
	$fieldToolTipsaccidents_report["English"]["Date"] = "";
	$fieldLabelsaccidents_report["English"]["Fleet"] = "Fleet";
	$fieldToolTipsaccidents_report["English"]["Fleet"] = "";
	$fieldLabelsaccidents_report["English"]["Vehicle"] = "Vehicle";
	$fieldToolTipsaccidents_report["English"]["Vehicle"] = "";
	$fieldLabelsaccidents_report["English"]["Type"] = "Type";
	$fieldToolTipsaccidents_report["English"]["Type"] = "";
	$fieldLabelsaccidents_report["English"]["Details"] = "Nature";
	$fieldToolTipsaccidents_report["English"]["Details"] = "";
	$fieldLabelsaccidents_report["English"]["Driver"] = "Driver";
	$fieldToolTipsaccidents_report["English"]["Driver"] = "";
	$fieldLabelsaccidents_report["English"]["Images"] = "Image";
	$fieldToolTipsaccidents_report["English"]["Images"] = "";
	$fieldLabelsaccidents_report["English"]["EnteredBy"] = "Entered";
	$fieldToolTipsaccidents_report["English"]["EnteredBy"] = "";
	$fieldLabelsaccidents_report["English"]["DamageToVehicle"] = "Veh. Dam.";
	$fieldToolTipsaccidents_report["English"]["DamageToVehicle"] = "";
	$fieldLabelsaccidents_report["English"]["3rdPartyDamages"] = "3rd Pty Dam.";
	$fieldToolTipsaccidents_report["English"]["3rdPartyDamages"] = "";
	$fieldLabelsaccidents_report["English"]["Time"] = "Time";
	$fieldToolTipsaccidents_report["English"]["Time"] = "";
	$fieldLabelsaccidents_report["English"]["Deaths"] = "Deaths";
	$fieldToolTipsaccidents_report["English"]["Deaths"] = "";
	$fieldLabelsaccidents_report["English"]["Location"] = "Location";
	$fieldToolTipsaccidents_report["English"]["Location"] = "";
	$fieldLabelsaccidents_report["English"]["Injured"] = "Injured";
	$fieldToolTipsaccidents_report["English"]["Injured"] = "";
	$fieldLabelsaccidents_report["English"]["StatusInjured"] = "Injured-Status";
	$fieldToolTipsaccidents_report["English"]["StatusInjured"] = "";
	$fieldLabelsaccidents_report["English"]["Category"] = "Category";
	$fieldToolTipsaccidents_report["English"]["Category"] = "";
	if (count($fieldToolTipsaccidents_report["English"]))
		$tdataaccidents_report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsaccidents_report[""] = array();
	$fieldToolTipsaccidents_report[""] = array();
	$pageTitlesaccidents_report[""] = array();
	if (count($fieldToolTipsaccidents_report[""]))
		$tdataaccidents_report[".isUseToolTips"] = true;
}


	$tdataaccidents_report[".NCSearch"] = true;



$tdataaccidents_report[".shortTableName"] = "accidents_report";
$tdataaccidents_report[".nSecOptions"] = 0;
$tdataaccidents_report[".recsPerRowPrint"] = 1;
$tdataaccidents_report[".mainTableOwnerID"] = "";
$tdataaccidents_report[".moveNext"] = 1;
$tdataaccidents_report[".entityType"] = 1;

$tdataaccidents_report[".strOriginalTableName"] = "accidents";

		 



$tdataaccidents_report[".showAddInPopup"] = false;

$tdataaccidents_report[".showEditInPopup"] = false;

$tdataaccidents_report[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataaccidents_report[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataaccidents_report[".fieldsForRegister"] = array();

	$tdataaccidents_report[".listAjax"] = true;

	$tdataaccidents_report[".audit"] = false;

	$tdataaccidents_report[".locking"] = false;



$tdataaccidents_report[".list"] = true;

$tdataaccidents_report[".view"] = true;

$tdataaccidents_report[".import"] = true;

$tdataaccidents_report[".exportTo"] = true;

$tdataaccidents_report[".printFriendly"] = true;


$tdataaccidents_report[".showSimpleSearchOptions"] = true;

// search Saving settings
$tdataaccidents_report[".searchSaving"] = false;
//

$tdataaccidents_report[".showSearchPanel"] = true;
		$tdataaccidents_report[".flexibleSearch"] = true;

$tdataaccidents_report[".isUseAjaxSuggest"] = true;

$tdataaccidents_report[".rowHighlite"] = true;



$tdataaccidents_report[".addPageEvents"] = false;

// use timepicker for search panel
$tdataaccidents_report[".isUseTimeForSearch"] = true;




$tdataaccidents_report[".detailsLinksOnList"] = "2";

$tdataaccidents_report[".allSearchFields"] = array();
$tdataaccidents_report[".filterFields"] = array();
$tdataaccidents_report[".requiredSearchFields"] = array();

$tdataaccidents_report[".allSearchFields"][] = "Date";
	$tdataaccidents_report[".allSearchFields"][] = "Vehicle";
	$tdataaccidents_report[".allSearchFields"][] = "Fleet";
	$tdataaccidents_report[".allSearchFields"][] = "Type";
	$tdataaccidents_report[".allSearchFields"][] = "Time";
	$tdataaccidents_report[".allSearchFields"][] = "Location";
	$tdataaccidents_report[".allSearchFields"][] = "Driver";
	$tdataaccidents_report[".allSearchFields"][] = "Deaths";
	$tdataaccidents_report[".allSearchFields"][] = "Injured";
	$tdataaccidents_report[".allSearchFields"][] = "StatusInjured";
	$tdataaccidents_report[".allSearchFields"][] = "Details";
	$tdataaccidents_report[".allSearchFields"][] = "DamageToVehicle";
	$tdataaccidents_report[".allSearchFields"][] = "EnteredBy";
	$tdataaccidents_report[".allSearchFields"][] = "3rdPartyDamages";
	$tdataaccidents_report[".allSearchFields"][] = "Images";
	

$tdataaccidents_report[".googleLikeFields"] = array();
$tdataaccidents_report[".googleLikeFields"][] = "Date";
$tdataaccidents_report[".googleLikeFields"][] = "Fleet";
$tdataaccidents_report[".googleLikeFields"][] = "Vehicle";
$tdataaccidents_report[".googleLikeFields"][] = "Type";
$tdataaccidents_report[".googleLikeFields"][] = "Details";
$tdataaccidents_report[".googleLikeFields"][] = "Driver";
$tdataaccidents_report[".googleLikeFields"][] = "Injured";
$tdataaccidents_report[".googleLikeFields"][] = "Images";
$tdataaccidents_report[".googleLikeFields"][] = "EnteredBy";
$tdataaccidents_report[".googleLikeFields"][] = "DamageToVehicle";
$tdataaccidents_report[".googleLikeFields"][] = "3rdPartyDamages";
$tdataaccidents_report[".googleLikeFields"][] = "Time";
$tdataaccidents_report[".googleLikeFields"][] = "Deaths";
$tdataaccidents_report[".googleLikeFields"][] = "Location";
$tdataaccidents_report[".googleLikeFields"][] = "StatusInjured";
$tdataaccidents_report[".googleLikeFields"][] = "Category";

$tdataaccidents_report[".panelSearchFields"] = array();
$tdataaccidents_report[".searchPanelOptions"] = array();
$tdataaccidents_report[".panelSearchFields"][] = "Date";
	
$tdataaccidents_report[".advSearchFields"] = array();
$tdataaccidents_report[".advSearchFields"][] = "Date";
$tdataaccidents_report[".advSearchFields"][] = "Category";
$tdataaccidents_report[".advSearchFields"][] = "Vehicle";
$tdataaccidents_report[".advSearchFields"][] = "Fleet";
$tdataaccidents_report[".advSearchFields"][] = "Type";
$tdataaccidents_report[".advSearchFields"][] = "Time";
$tdataaccidents_report[".advSearchFields"][] = "Location";
$tdataaccidents_report[".advSearchFields"][] = "Driver";
$tdataaccidents_report[".advSearchFields"][] = "Deaths";
$tdataaccidents_report[".advSearchFields"][] = "Injured";
$tdataaccidents_report[".advSearchFields"][] = "StatusInjured";
$tdataaccidents_report[".advSearchFields"][] = "Details";
$tdataaccidents_report[".advSearchFields"][] = "DamageToVehicle";
$tdataaccidents_report[".advSearchFields"][] = "EnteredBy";
$tdataaccidents_report[".advSearchFields"][] = "3rdPartyDamages";
$tdataaccidents_report[".advSearchFields"][] = "Images";

$tdataaccidents_report[".tableType"] = "list";

$tdataaccidents_report[".printerPageOrientation"] = 0;
$tdataaccidents_report[".nPrinterPageScale"] = 100;

$tdataaccidents_report[".nPrinterSplitRecords"] = 40;

$tdataaccidents_report[".nPrinterPDFSplitRecords"] = 40;



$tdataaccidents_report[".geocodingEnabled"] = false;





$tdataaccidents_report[".listGridLayout"] = 3;





// view page pdf
$tdataaccidents_report[".isViewPagePDF"] = true;
$tdataaccidents_report[".nViewPagePDFScale"] = 100;

// print page pdf
$tdataaccidents_report[".isPrinterPagePDF"] = true;
$tdataaccidents_report[".nPrinterPagePDFScale"] = 100;

$tdataaccidents_report[".totalsFields"] = array();
$tdataaccidents_report[".totalsFields"][] = array(
	"fName" => "Deaths",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataaccidents_report[".totalsFields"][] = array(
	"fName" => "Injured",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdataaccidents_report[".pageSize"] = 20;

$tdataaccidents_report[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataaccidents_report[".strOrderBy"] = $tstrOrderBy;

$tdataaccidents_report[".orderindexes"] = array();

$tdataaccidents_report[".sqlHead"] = "SELECT Id,  	`SysDate`,  	`Date`,  	Fleet,  	Vehicle,  	`Type`,  	Details,  	Driver,  	Injured,  	Images,  	EnteredBy,  	DamageToVehicle,  	`3rdPartyDamages`,  	`Time`,  	Deaths,  	Location,  	StatusInjured,  	Category";
$tdataaccidents_report[".sqlFrom"] = "FROM accidents";
$tdataaccidents_report[".sqlWhereExpr"] = "";
$tdataaccidents_report[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdataaccidents_report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataaccidents_report[".arrGroupsPerPage"] = $arrGPP;

$tdataaccidents_report[".highlightSearchResults"] = true;

$tableKeysaccidents_report = array();
$tableKeysaccidents_report[] = "Id";
$tdataaccidents_report[".Keys"] = $tableKeysaccidents_report;

$tdataaccidents_report[".listFields"] = array();
$tdataaccidents_report[".listFields"][] = "Id";
$tdataaccidents_report[".listFields"][] = "Date";
$tdataaccidents_report[".listFields"][] = "Fleet";
$tdataaccidents_report[".listFields"][] = "Vehicle";
$tdataaccidents_report[".listFields"][] = "Type";
$tdataaccidents_report[".listFields"][] = "Time";
$tdataaccidents_report[".listFields"][] = "Location";
$tdataaccidents_report[".listFields"][] = "Driver";
$tdataaccidents_report[".listFields"][] = "Deaths";
$tdataaccidents_report[".listFields"][] = "Injured";
$tdataaccidents_report[".listFields"][] = "StatusInjured";
$tdataaccidents_report[".listFields"][] = "Details";
$tdataaccidents_report[".listFields"][] = "DamageToVehicle";
$tdataaccidents_report[".listFields"][] = "3rdPartyDamages";
$tdataaccidents_report[".listFields"][] = "Images";

$tdataaccidents_report[".hideMobileList"] = array();


$tdataaccidents_report[".viewFields"] = array();
$tdataaccidents_report[".viewFields"][] = "Id";
$tdataaccidents_report[".viewFields"][] = "Date";
$tdataaccidents_report[".viewFields"][] = "Vehicle";
$tdataaccidents_report[".viewFields"][] = "Fleet";
$tdataaccidents_report[".viewFields"][] = "Type";
$tdataaccidents_report[".viewFields"][] = "Time";
$tdataaccidents_report[".viewFields"][] = "Location";
$tdataaccidents_report[".viewFields"][] = "Driver";
$tdataaccidents_report[".viewFields"][] = "Deaths";
$tdataaccidents_report[".viewFields"][] = "Injured";
$tdataaccidents_report[".viewFields"][] = "StatusInjured";
$tdataaccidents_report[".viewFields"][] = "Details";
$tdataaccidents_report[".viewFields"][] = "DamageToVehicle";
$tdataaccidents_report[".viewFields"][] = "3rdPartyDamages";
$tdataaccidents_report[".viewFields"][] = "EnteredBy";
$tdataaccidents_report[".viewFields"][] = "Images";
$tdataaccidents_report[".viewFields"][] = "SysDate";

$tdataaccidents_report[".addFields"] = array();

$tdataaccidents_report[".masterListFields"] = array();
$tdataaccidents_report[".masterListFields"][] = "Id";
$tdataaccidents_report[".masterListFields"][] = "Date";
$tdataaccidents_report[".masterListFields"][] = "Category";
$tdataaccidents_report[".masterListFields"][] = "Vehicle";
$tdataaccidents_report[".masterListFields"][] = "Fleet";
$tdataaccidents_report[".masterListFields"][] = "Type";
$tdataaccidents_report[".masterListFields"][] = "Time";
$tdataaccidents_report[".masterListFields"][] = "Location";
$tdataaccidents_report[".masterListFields"][] = "Driver";
$tdataaccidents_report[".masterListFields"][] = "Deaths";
$tdataaccidents_report[".masterListFields"][] = "Injured";
$tdataaccidents_report[".masterListFields"][] = "StatusInjured";
$tdataaccidents_report[".masterListFields"][] = "Details";
$tdataaccidents_report[".masterListFields"][] = "DamageToVehicle";
$tdataaccidents_report[".masterListFields"][] = "3rdPartyDamages";
$tdataaccidents_report[".masterListFields"][] = "EnteredBy";
$tdataaccidents_report[".masterListFields"][] = "Images";
$tdataaccidents_report[".masterListFields"][] = "SysDate";

$tdataaccidents_report[".inlineAddFields"] = array();

$tdataaccidents_report[".editFields"] = array();

$tdataaccidents_report[".inlineEditFields"] = array();

$tdataaccidents_report[".exportFields"] = array();
$tdataaccidents_report[".exportFields"][] = "Id";
$tdataaccidents_report[".exportFields"][] = "Date";
$tdataaccidents_report[".exportFields"][] = "Vehicle";
$tdataaccidents_report[".exportFields"][] = "Fleet";
$tdataaccidents_report[".exportFields"][] = "Type";
$tdataaccidents_report[".exportFields"][] = "Time";
$tdataaccidents_report[".exportFields"][] = "Location";
$tdataaccidents_report[".exportFields"][] = "Driver";
$tdataaccidents_report[".exportFields"][] = "Deaths";
$tdataaccidents_report[".exportFields"][] = "Injured";
$tdataaccidents_report[".exportFields"][] = "StatusInjured";
$tdataaccidents_report[".exportFields"][] = "Details";
$tdataaccidents_report[".exportFields"][] = "DamageToVehicle";
$tdataaccidents_report[".exportFields"][] = "3rdPartyDamages";
$tdataaccidents_report[".exportFields"][] = "EnteredBy";
$tdataaccidents_report[".exportFields"][] = "Images";
$tdataaccidents_report[".exportFields"][] = "SysDate";

$tdataaccidents_report[".importFields"] = array();
$tdataaccidents_report[".importFields"][] = "Id";
$tdataaccidents_report[".importFields"][] = "SysDate";
$tdataaccidents_report[".importFields"][] = "Date";
$tdataaccidents_report[".importFields"][] = "Fleet";
$tdataaccidents_report[".importFields"][] = "Vehicle";
$tdataaccidents_report[".importFields"][] = "Type";
$tdataaccidents_report[".importFields"][] = "Details";
$tdataaccidents_report[".importFields"][] = "Driver";
$tdataaccidents_report[".importFields"][] = "Injured";
$tdataaccidents_report[".importFields"][] = "Images";
$tdataaccidents_report[".importFields"][] = "EnteredBy";
$tdataaccidents_report[".importFields"][] = "DamageToVehicle";
$tdataaccidents_report[".importFields"][] = "3rdPartyDamages";
$tdataaccidents_report[".importFields"][] = "Time";
$tdataaccidents_report[".importFields"][] = "Deaths";
$tdataaccidents_report[".importFields"][] = "Location";
$tdataaccidents_report[".importFields"][] = "StatusInjured";

$tdataaccidents_report[".printFields"] = array();
$tdataaccidents_report[".printFields"][] = "Id";
$tdataaccidents_report[".printFields"][] = "Date";
$tdataaccidents_report[".printFields"][] = "Vehicle";
$tdataaccidents_report[".printFields"][] = "Fleet";
$tdataaccidents_report[".printFields"][] = "Type";
$tdataaccidents_report[".printFields"][] = "Time";
$tdataaccidents_report[".printFields"][] = "Location";
$tdataaccidents_report[".printFields"][] = "Driver";
$tdataaccidents_report[".printFields"][] = "Deaths";
$tdataaccidents_report[".printFields"][] = "Injured";
$tdataaccidents_report[".printFields"][] = "StatusInjured";
$tdataaccidents_report[".printFields"][] = "Details";
$tdataaccidents_report[".printFields"][] = "DamageToVehicle";
$tdataaccidents_report[".printFields"][] = "3rdPartyDamages";
$tdataaccidents_report[".printFields"][] = "EnteredBy";
$tdataaccidents_report[".printFields"][] = "Images";
$tdataaccidents_report[".printFields"][] = "SysDate";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "accidents";
	$fdata["Label"] = GetFieldLabel("accidents_report","Id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

	
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








	$tdataaccidents_report["Id"] = $fdata;
//	SysDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SysDate";
	$fdata["GoodName"] = "SysDate";
	$fdata["ownerTable"] = "accidents";
	$fdata["Label"] = GetFieldLabel("accidents_report","SysDate");
	$fdata["FieldType"] = 200;

	
	
	
										
	
	
	
	
	
		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SysDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`SysDate`";

	
	
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

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataaccidents_report["SysDate"] = $fdata;
//	Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Date";
	$fdata["GoodName"] = "Date";
	$fdata["ownerTable"] = "accidents";
	$fdata["Label"] = GetFieldLabel("accidents_report","Date");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Date`";

	
	
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

	
	
	
		$edata["controlWidth"] = 200;

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
		$fdata["defaultSearchOption"] = "Between";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Between";
// the end of search options settings




	$tdataaccidents_report["Date"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "accidents";
	$fdata["Label"] = GetFieldLabel("accidents_report","Fleet");
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
	
			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
// the end of search options settings




	$tdataaccidents_report["Fleet"] = $fdata;
//	Vehicle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Vehicle";
	$fdata["GoodName"] = "Vehicle";
	$fdata["ownerTable"] = "accidents";
	$fdata["Label"] = GetFieldLabel("accidents_report","Vehicle");
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
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"Fleet", 'lookupF'=>"Fleet");
	$edata["autoCompleteFields"][] = array('masterF'=>"Type", 'lookupF'=>"Type");
	$edata["autoCompleteFields"][] = array('masterF'=>"Driver", 'lookupF'=>"DriverAsigned");
	$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "RegNo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "RegNo";

	
	$edata["LookupOrderBy"] = "RegNo";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

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




	$tdataaccidents_report["Vehicle"] = $fdata;
//	Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Type";
	$fdata["GoodName"] = "Type";
	$fdata["ownerTable"] = "accidents";
	$fdata["Label"] = GetFieldLabel("accidents_report","Type");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Type`";

	
	
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
	
	// the end of search options settings




	$tdataaccidents_report["Type"] = $fdata;
//	Details
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Details";
	$fdata["GoodName"] = "Details";
	$fdata["ownerTable"] = "accidents";
	$fdata["Label"] = GetFieldLabel("accidents_report","Details");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Details";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Details";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

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
	
	// the end of search options settings




	$tdataaccidents_report["Details"] = $fdata;
//	Driver
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Driver";
	$fdata["GoodName"] = "Driver";
	$fdata["ownerTable"] = "accidents";
	$fdata["Label"] = GetFieldLabel("accidents_report","Driver");
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
	
	// the end of search options settings




	$tdataaccidents_report["Driver"] = $fdata;
//	Injured
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Injured";
	$fdata["GoodName"] = "Injured";
	$fdata["ownerTable"] = "accidents";
	$fdata["Label"] = GetFieldLabel("accidents_report","Injured");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Injured";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Injured";

	
	
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
	
	// the end of search options settings




	$tdataaccidents_report["Injured"] = $fdata;
//	Images
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Images";
	$fdata["GoodName"] = "Images";
	$fdata["ownerTable"] = "accidents";
	$fdata["Label"] = GetFieldLabel("accidents_report","Images");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Images";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Images";

		$fdata["DeleteAssociatedFile"] = true;

		$fdata["CompatibilityMode"] = true;

				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 72;
	$vdata["ThumbHeight"] = 72;
			$vdata["ImageWidth"] = 457;
	$vdata["ImageHeight"] = 0;

	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
	



	
	
	
	
							$edata["acceptFileTypes"] = "gif";
						$edata["acceptFileTypes"] .= "|jpeg";
						$edata["acceptFileTypes"] .= "|jpg";
						$edata["acceptFileTypes"] .= "|png";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";

		$edata["maxNumberOfFiles"] = 3;

		$edata["maxFileSize"] = 750;

		$edata["maxTotalFilesSize"] = 1500;

	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 150;

				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 600;

	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;


	$fdata["Absolute"] = true;


// the field's search options settings
	
	// the end of search options settings




	$tdataaccidents_report["Images"] = $fdata;
//	EnteredBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "EnteredBy";
	$fdata["GoodName"] = "EnteredBy";
	$fdata["ownerTable"] = "accidents";
	$fdata["Label"] = GetFieldLabel("accidents_report","EnteredBy");
	$fdata["FieldType"] = 200;

	
	
	
										
	
	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "EnteredBy";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EnteredBy";

	
	
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
	
	// the end of search options settings




	$tdataaccidents_report["EnteredBy"] = $fdata;
//	DamageToVehicle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "DamageToVehicle";
	$fdata["GoodName"] = "DamageToVehicle";
	$fdata["ownerTable"] = "accidents";
	$fdata["Label"] = GetFieldLabel("accidents_report","DamageToVehicle");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DamageToVehicle";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DamageToVehicle";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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
	
	// the end of search options settings




	$tdataaccidents_report["DamageToVehicle"] = $fdata;
//	3rdPartyDamages
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "3rdPartyDamages";
	$fdata["GoodName"] = "3rdPartyDamages";
	$fdata["ownerTable"] = "accidents";
	$fdata["Label"] = GetFieldLabel("accidents_report","3rdPartyDamages");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "3rdPartyDamages";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`3rdPartyDamages`";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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
	
	// the end of search options settings




	$tdataaccidents_report["3rdPartyDamages"] = $fdata;
//	Time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Time";
	$fdata["GoodName"] = "Time";
	$fdata["ownerTable"] = "accidents";
	$fdata["Label"] = GetFieldLabel("accidents_report","Time");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Time";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Time`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
				$hours = 12;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
									  "hours" => $hours,
									  "minutes" => 30,
									  "showSeconds" => 0);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataaccidents_report["Time"] = $fdata;
//	Deaths
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Deaths";
	$fdata["GoodName"] = "Deaths";
	$fdata["ownerTable"] = "accidents";
	$fdata["Label"] = GetFieldLabel("accidents_report","Deaths");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Deaths";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Deaths";

	
	
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

		$edata["controlWidth"] = 100;

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
	
	// the end of search options settings




	$tdataaccidents_report["Deaths"] = $fdata;
//	Location
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Location";
	$fdata["GoodName"] = "Location";
	$fdata["ownerTable"] = "accidents";
	$fdata["Label"] = GetFieldLabel("accidents_report","Location");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Location";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Location";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

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
	
	// the end of search options settings




	$tdataaccidents_report["Location"] = $fdata;
//	StatusInjured
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "StatusInjured";
	$fdata["GoodName"] = "StatusInjured";
	$fdata["ownerTable"] = "accidents";
	$fdata["Label"] = GetFieldLabel("accidents_report","StatusInjured");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "StatusInjured";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "StatusInjured";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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
	
	// the end of search options settings




	$tdataaccidents_report["StatusInjured"] = $fdata;
//	Category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Category";
	$fdata["GoodName"] = "Category";
	$fdata["ownerTable"] = "accidents";
	$fdata["Label"] = GetFieldLabel("accidents_report","Category");
	$fdata["FieldType"] = 200;

	
	
	
										
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "Category";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Category";

	
	
			
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








	$tdataaccidents_report["Category"] = $fdata;


$tables_data["accidents-report"]=&$tdataaccidents_report;
$field_labels["accidents_report"] = &$fieldLabelsaccidents_report;
$fieldToolTips["accidents_report"] = &$fieldToolTipsaccidents_report;
$page_titles["accidents_report"] = &$pageTitlesaccidents_report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["accidents-report"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["accidents-report"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_accidents_report()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id,  	`SysDate`,  	`Date`,  	Fleet,  	Vehicle,  	`Type`,  	Details,  	Driver,  	Injured,  	Images,  	EnteredBy,  	DamageToVehicle,  	`3rdPartyDamages`,  	`Time`,  	Deaths,  	Location,  	StatusInjured,  	Category";
$proto0["m_strFrom"] = "FROM accidents";
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
	"m_strTable" => "accidents",
	"m_srcTableName" => "accidents-report"
));

$proto6["m_sql"] = "Id";
$proto6["m_srcTableName"] = "accidents-report";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "SysDate",
	"m_strTable" => "accidents",
	"m_srcTableName" => "accidents-report"
));

$proto8["m_sql"] = "`SysDate`";
$proto8["m_srcTableName"] = "accidents-report";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Date",
	"m_strTable" => "accidents",
	"m_srcTableName" => "accidents-report"
));

$proto10["m_sql"] = "`Date`";
$proto10["m_srcTableName"] = "accidents-report";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "accidents",
	"m_srcTableName" => "accidents-report"
));

$proto12["m_sql"] = "Fleet";
$proto12["m_srcTableName"] = "accidents-report";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Vehicle",
	"m_strTable" => "accidents",
	"m_srcTableName" => "accidents-report"
));

$proto14["m_sql"] = "Vehicle";
$proto14["m_srcTableName"] = "accidents-report";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Type",
	"m_strTable" => "accidents",
	"m_srcTableName" => "accidents-report"
));

$proto16["m_sql"] = "`Type`";
$proto16["m_srcTableName"] = "accidents-report";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Details",
	"m_strTable" => "accidents",
	"m_srcTableName" => "accidents-report"
));

$proto18["m_sql"] = "Details";
$proto18["m_srcTableName"] = "accidents-report";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Driver",
	"m_strTable" => "accidents",
	"m_srcTableName" => "accidents-report"
));

$proto20["m_sql"] = "Driver";
$proto20["m_srcTableName"] = "accidents-report";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Injured",
	"m_strTable" => "accidents",
	"m_srcTableName" => "accidents-report"
));

$proto22["m_sql"] = "Injured";
$proto22["m_srcTableName"] = "accidents-report";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Images",
	"m_strTable" => "accidents",
	"m_srcTableName" => "accidents-report"
));

$proto24["m_sql"] = "Images";
$proto24["m_srcTableName"] = "accidents-report";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "EnteredBy",
	"m_strTable" => "accidents",
	"m_srcTableName" => "accidents-report"
));

$proto26["m_sql"] = "EnteredBy";
$proto26["m_srcTableName"] = "accidents-report";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "DamageToVehicle",
	"m_strTable" => "accidents",
	"m_srcTableName" => "accidents-report"
));

$proto28["m_sql"] = "DamageToVehicle";
$proto28["m_srcTableName"] = "accidents-report";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "3rdPartyDamages",
	"m_strTable" => "accidents",
	"m_srcTableName" => "accidents-report"
));

$proto30["m_sql"] = "`3rdPartyDamages`";
$proto30["m_srcTableName"] = "accidents-report";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Time",
	"m_strTable" => "accidents",
	"m_srcTableName" => "accidents-report"
));

$proto32["m_sql"] = "`Time`";
$proto32["m_srcTableName"] = "accidents-report";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Deaths",
	"m_strTable" => "accidents",
	"m_srcTableName" => "accidents-report"
));

$proto34["m_sql"] = "Deaths";
$proto34["m_srcTableName"] = "accidents-report";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Location",
	"m_strTable" => "accidents",
	"m_srcTableName" => "accidents-report"
));

$proto36["m_sql"] = "Location";
$proto36["m_srcTableName"] = "accidents-report";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "StatusInjured",
	"m_strTable" => "accidents",
	"m_srcTableName" => "accidents-report"
));

$proto38["m_sql"] = "StatusInjured";
$proto38["m_srcTableName"] = "accidents-report";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Category",
	"m_strTable" => "accidents",
	"m_srcTableName" => "accidents-report"
));

$proto40["m_sql"] = "Category";
$proto40["m_srcTableName"] = "accidents-report";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "accidents";
$proto43["m_srcTableName"] = "accidents-report";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "Id";
$proto43["m_columns"][] = "SysDate";
$proto43["m_columns"][] = "Date";
$proto43["m_columns"][] = "Fleet";
$proto43["m_columns"][] = "Vehicle";
$proto43["m_columns"][] = "Type";
$proto43["m_columns"][] = "Details";
$proto43["m_columns"][] = "Driver";
$proto43["m_columns"][] = "Injured";
$proto43["m_columns"][] = "Images";
$proto43["m_columns"][] = "EnteredBy";
$proto43["m_columns"][] = "DamageToVehicle";
$proto43["m_columns"][] = "3rdPartyDamages";
$proto43["m_columns"][] = "Time";
$proto43["m_columns"][] = "Deaths";
$proto43["m_columns"][] = "Location";
$proto43["m_columns"][] = "StatusInjured";
$proto43["m_columns"][] = "Category";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "accidents";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "accidents-report";
$proto44=array();
$proto44["m_sql"] = "";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="accidents-report";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_accidents_report = createSqlQuery_accidents_report();


	
					
;

																		

$tdataaccidents_report[".sqlquery"] = $queryData_accidents_report;

$tableEvents["accidents-report"] = new eventsBase;
$tdataaccidents_report[".hasEvents"] = false;

?>