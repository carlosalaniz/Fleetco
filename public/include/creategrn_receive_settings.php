<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacreategrn_receive = array();
	$tdatacreategrn_receive[".truncateText"] = true;
	$tdatacreategrn_receive[".NumberOfChars"] = 80;
	$tdatacreategrn_receive[".ShortName"] = "creategrn_receive";
	$tdatacreategrn_receive[".OwnerID"] = "";
	$tdatacreategrn_receive[".OriginalTable"] = "creategrn";

//	field labels
$fieldLabelscreategrn_receive = array();
$fieldToolTipscreategrn_receive = array();
$pageTitlescreategrn_receive = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscreategrn_receive["English"] = array();
	$fieldToolTipscreategrn_receive["English"] = array();
	$pageTitlescreategrn_receive["English"] = array();
	$fieldLabelscreategrn_receive["English"]["ItemCode"] = "Item Code";
	$fieldToolTipscreategrn_receive["English"]["ItemCode"] = "";
	$fieldLabelscreategrn_receive["English"]["Brand"] = "Brand";
	$fieldToolTipscreategrn_receive["English"]["Brand"] = "";
	$fieldLabelscreategrn_receive["English"]["Description"] = "Descr.";
	$fieldToolTipscreategrn_receive["English"]["Description"] = "";
	$fieldLabelscreategrn_receive["English"]["Supplier"] = "Supplier";
	$fieldToolTipscreategrn_receive["English"]["Supplier"] = "";
	$fieldLabelscreategrn_receive["English"]["Quantity"] = "Qty";
	$fieldToolTipscreategrn_receive["English"]["Quantity"] = "";
	$fieldLabelscreategrn_receive["English"]["RemovedFrom"] = "Removed From";
	$fieldToolTipscreategrn_receive["English"]["RemovedFrom"] = "";
	$fieldLabelscreategrn_receive["English"]["SystemDate"] = "System Date";
	$fieldToolTipscreategrn_receive["English"]["SystemDate"] = "";
	$fieldLabelscreategrn_receive["English"]["GRNDate"] = "Date";
	$fieldToolTipscreategrn_receive["English"]["GRNDate"] = "";
	$fieldLabelscreategrn_receive["English"]["EnteredBy"] = "Entered";
	$fieldToolTipscreategrn_receive["English"]["EnteredBy"] = "";
	$fieldLabelscreategrn_receive["English"]["ApprovedBy"] = "Edited By";
	$fieldToolTipscreategrn_receive["English"]["ApprovedBy"] = "";
	$fieldLabelscreategrn_receive["English"]["Status"] = "Type";
	$fieldToolTipscreategrn_receive["English"]["Status"] = "";
	$fieldLabelscreategrn_receive["English"]["ID"] = "ID";
	$fieldToolTipscreategrn_receive["English"]["ID"] = "";
	$fieldLabelscreategrn_receive["English"]["UnitPrice"] = "Unit Cost";
	$fieldToolTipscreategrn_receive["English"]["UnitPrice"] = "Cost without Tax";
	$fieldLabelscreategrn_receive["English"]["RefNumber"] = "PO Ref.";
	$fieldToolTipscreategrn_receive["English"]["RefNumber"] = "Purchase Order (PO) Number";
	$fieldLabelscreategrn_receive["English"]["Cost"] = "Cost";
	$fieldToolTipscreategrn_receive["English"]["Cost"] = "Cost without Tax";
	$fieldLabelscreategrn_receive["English"]["CurrentStock"] = "In-Stock";
	$fieldToolTipscreategrn_receive["English"]["CurrentStock"] = "";
	$fieldLabelscreategrn_receive["English"]["Fleet"] = "Fleet";
	$fieldToolTipscreategrn_receive["English"]["Fleet"] = "";
	if (count($fieldToolTipscreategrn_receive["English"]))
		$tdatacreategrn_receive[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscreategrn_receive[""] = array();
	$fieldToolTipscreategrn_receive[""] = array();
	$pageTitlescreategrn_receive[""] = array();
	if (count($fieldToolTipscreategrn_receive[""]))
		$tdatacreategrn_receive[".isUseToolTips"] = true;
}


	$tdatacreategrn_receive[".NCSearch"] = true;



$tdatacreategrn_receive[".shortTableName"] = "creategrn_receive";
$tdatacreategrn_receive[".nSecOptions"] = 0;
$tdatacreategrn_receive[".recsPerRowPrint"] = 1;
$tdatacreategrn_receive[".mainTableOwnerID"] = "";
$tdatacreategrn_receive[".moveNext"] = 1;
$tdatacreategrn_receive[".entityType"] = 1;

$tdatacreategrn_receive[".strOriginalTableName"] = "creategrn";

		 



$tdatacreategrn_receive[".showAddInPopup"] = false;

$tdatacreategrn_receive[".showEditInPopup"] = false;

$tdatacreategrn_receive[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacreategrn_receive[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacreategrn_receive[".fieldsForRegister"] = array();

	$tdatacreategrn_receive[".listAjax"] = true;

	$tdatacreategrn_receive[".audit"] = false;

	$tdatacreategrn_receive[".locking"] = false;

$tdatacreategrn_receive[".edit"] = true;
$tdatacreategrn_receive[".afterEditAction"] = 1;
$tdatacreategrn_receive[".closePopupAfterEdit"] = 1;
$tdatacreategrn_receive[".afterEditActionDetTable"] = "";

$tdatacreategrn_receive[".add"] = true;
$tdatacreategrn_receive[".afterAddAction"] = 1;
$tdatacreategrn_receive[".closePopupAfterAdd"] = 1;
$tdatacreategrn_receive[".afterAddActionDetTable"] = "Detail tables not found!";

$tdatacreategrn_receive[".list"] = true;

$tdatacreategrn_receive[".view"] = true;

$tdatacreategrn_receive[".import"] = true;

$tdatacreategrn_receive[".exportTo"] = true;

$tdatacreategrn_receive[".printFriendly"] = true;

$tdatacreategrn_receive[".delete"] = true;

$tdatacreategrn_receive[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacreategrn_receive[".searchSaving"] = false;
//

$tdatacreategrn_receive[".showSearchPanel"] = true;
		$tdatacreategrn_receive[".flexibleSearch"] = true;

$tdatacreategrn_receive[".isUseAjaxSuggest"] = true;

$tdatacreategrn_receive[".rowHighlite"] = true;



$tdatacreategrn_receive[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacreategrn_receive[".isUseTimeForSearch"] = false;





$tdatacreategrn_receive[".allSearchFields"] = array();
$tdatacreategrn_receive[".filterFields"] = array();
$tdatacreategrn_receive[".requiredSearchFields"] = array();

$tdatacreategrn_receive[".allSearchFields"][] = "Status";
	$tdatacreategrn_receive[".allSearchFields"][] = "Fleet";
	$tdatacreategrn_receive[".allSearchFields"][] = "GRNDate";
	$tdatacreategrn_receive[".allSearchFields"][] = "ItemCode";
	$tdatacreategrn_receive[".allSearchFields"][] = "Brand";
	$tdatacreategrn_receive[".allSearchFields"][] = "Description";
	$tdatacreategrn_receive[".allSearchFields"][] = "Supplier";
	$tdatacreategrn_receive[".allSearchFields"][] = "UnitPrice";
	$tdatacreategrn_receive[".allSearchFields"][] = "Quantity";
	$tdatacreategrn_receive[".allSearchFields"][] = "RefNumber";
	$tdatacreategrn_receive[".allSearchFields"][] = "SystemDate";
	$tdatacreategrn_receive[".allSearchFields"][] = "Cost";
	$tdatacreategrn_receive[".allSearchFields"][] = "EnteredBy";
	

$tdatacreategrn_receive[".googleLikeFields"] = array();
$tdatacreategrn_receive[".googleLikeFields"][] = "ID";
$tdatacreategrn_receive[".googleLikeFields"][] = "ItemCode";
$tdatacreategrn_receive[".googleLikeFields"][] = "Brand";
$tdatacreategrn_receive[".googleLikeFields"][] = "Description";
$tdatacreategrn_receive[".googleLikeFields"][] = "Supplier";
$tdatacreategrn_receive[".googleLikeFields"][] = "Quantity";
$tdatacreategrn_receive[".googleLikeFields"][] = "RemovedFrom";
$tdatacreategrn_receive[".googleLikeFields"][] = "SystemDate";
$tdatacreategrn_receive[".googleLikeFields"][] = "GRNDate";
$tdatacreategrn_receive[".googleLikeFields"][] = "EnteredBy";
$tdatacreategrn_receive[".googleLikeFields"][] = "ApprovedBy";
$tdatacreategrn_receive[".googleLikeFields"][] = "UnitPrice";
$tdatacreategrn_receive[".googleLikeFields"][] = "Status";
$tdatacreategrn_receive[".googleLikeFields"][] = "RefNumber";
$tdatacreategrn_receive[".googleLikeFields"][] = "CurrentStock";
$tdatacreategrn_receive[".googleLikeFields"][] = "Fleet";
$tdatacreategrn_receive[".googleLikeFields"][] = "Cost";


$tdatacreategrn_receive[".advSearchFields"] = array();
$tdatacreategrn_receive[".advSearchFields"][] = "Status";
$tdatacreategrn_receive[".advSearchFields"][] = "Fleet";
$tdatacreategrn_receive[".advSearchFields"][] = "GRNDate";
$tdatacreategrn_receive[".advSearchFields"][] = "ItemCode";
$tdatacreategrn_receive[".advSearchFields"][] = "Brand";
$tdatacreategrn_receive[".advSearchFields"][] = "Description";
$tdatacreategrn_receive[".advSearchFields"][] = "Supplier";
$tdatacreategrn_receive[".advSearchFields"][] = "UnitPrice";
$tdatacreategrn_receive[".advSearchFields"][] = "Quantity";
$tdatacreategrn_receive[".advSearchFields"][] = "RefNumber";
$tdatacreategrn_receive[".advSearchFields"][] = "SystemDate";
$tdatacreategrn_receive[".advSearchFields"][] = "Cost";
$tdatacreategrn_receive[".advSearchFields"][] = "EnteredBy";

$tdatacreategrn_receive[".tableType"] = "list";

$tdatacreategrn_receive[".printerPageOrientation"] = 0;
$tdatacreategrn_receive[".nPrinterPageScale"] = 100;

$tdatacreategrn_receive[".nPrinterSplitRecords"] = 40;

$tdatacreategrn_receive[".nPrinterPDFSplitRecords"] = 40;



$tdatacreategrn_receive[".geocodingEnabled"] = false;





$tdatacreategrn_receive[".listGridLayout"] = 3;





// view page pdf
$tdatacreategrn_receive[".isViewPagePDF"] = true;
$tdatacreategrn_receive[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatacreategrn_receive[".isPrinterPagePDF"] = true;
$tdatacreategrn_receive[".nPrinterPagePDFScale"] = 100;

$tdatacreategrn_receive[".totalsFields"] = array();
$tdatacreategrn_receive[".totalsFields"][] = array(
	"fName" => "Cost",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatacreategrn_receive[".pageSize"] = 20;

$tdatacreategrn_receive[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacreategrn_receive[".strOrderBy"] = $tstrOrderBy;

$tdatacreategrn_receive[".orderindexes"] = array();

$tdatacreategrn_receive[".sqlHead"] = "SELECT ID,  ItemCode,  Brand,  Description,  Supplier,  Quantity,  RemovedFrom,  SystemDate,  GRNDate,  EnteredBy,  ApprovedBy,  UnitPrice,  Status,  RefNumber,  CurrentStock,  Fleet,  Quantity*UnitPrice AS Cost";
$tdatacreategrn_receive[".sqlFrom"] = "FROM creategrn";
$tdatacreategrn_receive[".sqlWhereExpr"] = "(Status =\"Purchase\")";
$tdatacreategrn_receive[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatacreategrn_receive[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacreategrn_receive[".arrGroupsPerPage"] = $arrGPP;

$tdatacreategrn_receive[".highlightSearchResults"] = true;

$tableKeyscreategrn_receive = array();
$tableKeyscreategrn_receive[] = "ID";
$tdatacreategrn_receive[".Keys"] = $tableKeyscreategrn_receive;

$tdatacreategrn_receive[".listFields"] = array();
$tdatacreategrn_receive[".listFields"][] = "ID";
$tdatacreategrn_receive[".listFields"][] = "Status";
$tdatacreategrn_receive[".listFields"][] = "Fleet";
$tdatacreategrn_receive[".listFields"][] = "GRNDate";
$tdatacreategrn_receive[".listFields"][] = "ItemCode";
$tdatacreategrn_receive[".listFields"][] = "Brand";
$tdatacreategrn_receive[".listFields"][] = "Description";
$tdatacreategrn_receive[".listFields"][] = "Supplier";
$tdatacreategrn_receive[".listFields"][] = "UnitPrice";
$tdatacreategrn_receive[".listFields"][] = "Quantity";
$tdatacreategrn_receive[".listFields"][] = "RefNumber";
$tdatacreategrn_receive[".listFields"][] = "Cost";
$tdatacreategrn_receive[".listFields"][] = "EnteredBy";

$tdatacreategrn_receive[".hideMobileList"] = array();


$tdatacreategrn_receive[".viewFields"] = array();
$tdatacreategrn_receive[".viewFields"][] = "ID";
$tdatacreategrn_receive[".viewFields"][] = "Status";
$tdatacreategrn_receive[".viewFields"][] = "Fleet";
$tdatacreategrn_receive[".viewFields"][] = "GRNDate";
$tdatacreategrn_receive[".viewFields"][] = "ItemCode";
$tdatacreategrn_receive[".viewFields"][] = "Brand";
$tdatacreategrn_receive[".viewFields"][] = "Description";
$tdatacreategrn_receive[".viewFields"][] = "Supplier";
$tdatacreategrn_receive[".viewFields"][] = "UnitPrice";
$tdatacreategrn_receive[".viewFields"][] = "Quantity";
$tdatacreategrn_receive[".viewFields"][] = "RefNumber";
$tdatacreategrn_receive[".viewFields"][] = "SystemDate";
$tdatacreategrn_receive[".viewFields"][] = "Cost";
$tdatacreategrn_receive[".viewFields"][] = "EnteredBy";
$tdatacreategrn_receive[".viewFields"][] = "ApprovedBy";

$tdatacreategrn_receive[".addFields"] = array();
$tdatacreategrn_receive[".addFields"][] = "Status";
$tdatacreategrn_receive[".addFields"][] = "Fleet";
$tdatacreategrn_receive[".addFields"][] = "GRNDate";
$tdatacreategrn_receive[".addFields"][] = "ItemCode";
$tdatacreategrn_receive[".addFields"][] = "UnitPrice";
$tdatacreategrn_receive[".addFields"][] = "Quantity";
$tdatacreategrn_receive[".addFields"][] = "RefNumber";
$tdatacreategrn_receive[".addFields"][] = "Brand";
$tdatacreategrn_receive[".addFields"][] = "Description";
$tdatacreategrn_receive[".addFields"][] = "Supplier";
$tdatacreategrn_receive[".addFields"][] = "SystemDate";
$tdatacreategrn_receive[".addFields"][] = "Cost";
$tdatacreategrn_receive[".addFields"][] = "EnteredBy";

$tdatacreategrn_receive[".masterListFields"] = array();
$tdatacreategrn_receive[".masterListFields"][] = "Status";
$tdatacreategrn_receive[".masterListFields"][] = "ID";
$tdatacreategrn_receive[".masterListFields"][] = "Fleet";
$tdatacreategrn_receive[".masterListFields"][] = "GRNDate";
$tdatacreategrn_receive[".masterListFields"][] = "RemovedFrom";
$tdatacreategrn_receive[".masterListFields"][] = "ItemCode";
$tdatacreategrn_receive[".masterListFields"][] = "Brand";
$tdatacreategrn_receive[".masterListFields"][] = "Description";
$tdatacreategrn_receive[".masterListFields"][] = "Supplier";
$tdatacreategrn_receive[".masterListFields"][] = "UnitPrice";
$tdatacreategrn_receive[".masterListFields"][] = "Quantity";
$tdatacreategrn_receive[".masterListFields"][] = "RefNumber";
$tdatacreategrn_receive[".masterListFields"][] = "SystemDate";
$tdatacreategrn_receive[".masterListFields"][] = "Cost";
$tdatacreategrn_receive[".masterListFields"][] = "CurrentStock";
$tdatacreategrn_receive[".masterListFields"][] = "EnteredBy";
$tdatacreategrn_receive[".masterListFields"][] = "ApprovedBy";

$tdatacreategrn_receive[".inlineAddFields"] = array();

$tdatacreategrn_receive[".editFields"] = array();
$tdatacreategrn_receive[".editFields"][] = "Status";
$tdatacreategrn_receive[".editFields"][] = "Fleet";
$tdatacreategrn_receive[".editFields"][] = "GRNDate";
$tdatacreategrn_receive[".editFields"][] = "ItemCode";
$tdatacreategrn_receive[".editFields"][] = "Brand";
$tdatacreategrn_receive[".editFields"][] = "Description";
$tdatacreategrn_receive[".editFields"][] = "Supplier";
$tdatacreategrn_receive[".editFields"][] = "UnitPrice";
$tdatacreategrn_receive[".editFields"][] = "Quantity";
$tdatacreategrn_receive[".editFields"][] = "RefNumber";
$tdatacreategrn_receive[".editFields"][] = "SystemDate";
$tdatacreategrn_receive[".editFields"][] = "Cost";
$tdatacreategrn_receive[".editFields"][] = "EnteredBy";
$tdatacreategrn_receive[".editFields"][] = "ApprovedBy";

$tdatacreategrn_receive[".inlineEditFields"] = array();

$tdatacreategrn_receive[".exportFields"] = array();
$tdatacreategrn_receive[".exportFields"][] = "Status";
$tdatacreategrn_receive[".exportFields"][] = "ID";
$tdatacreategrn_receive[".exportFields"][] = "Fleet";
$tdatacreategrn_receive[".exportFields"][] = "GRNDate";
$tdatacreategrn_receive[".exportFields"][] = "ItemCode";
$tdatacreategrn_receive[".exportFields"][] = "Brand";
$tdatacreategrn_receive[".exportFields"][] = "Description";
$tdatacreategrn_receive[".exportFields"][] = "Supplier";
$tdatacreategrn_receive[".exportFields"][] = "UnitPrice";
$tdatacreategrn_receive[".exportFields"][] = "Quantity";
$tdatacreategrn_receive[".exportFields"][] = "RefNumber";
$tdatacreategrn_receive[".exportFields"][] = "SystemDate";
$tdatacreategrn_receive[".exportFields"][] = "Cost";
$tdatacreategrn_receive[".exportFields"][] = "EnteredBy";
$tdatacreategrn_receive[".exportFields"][] = "ApprovedBy";

$tdatacreategrn_receive[".importFields"] = array();
$tdatacreategrn_receive[".importFields"][] = "ID";
$tdatacreategrn_receive[".importFields"][] = "ItemCode";
$tdatacreategrn_receive[".importFields"][] = "Brand";
$tdatacreategrn_receive[".importFields"][] = "Description";
$tdatacreategrn_receive[".importFields"][] = "Supplier";
$tdatacreategrn_receive[".importFields"][] = "Quantity";
$tdatacreategrn_receive[".importFields"][] = "SystemDate";
$tdatacreategrn_receive[".importFields"][] = "GRNDate";
$tdatacreategrn_receive[".importFields"][] = "EnteredBy";
$tdatacreategrn_receive[".importFields"][] = "ApprovedBy";
$tdatacreategrn_receive[".importFields"][] = "UnitPrice";
$tdatacreategrn_receive[".importFields"][] = "Status";
$tdatacreategrn_receive[".importFields"][] = "RefNumber";
$tdatacreategrn_receive[".importFields"][] = "Fleet";
$tdatacreategrn_receive[".importFields"][] = "Cost";

$tdatacreategrn_receive[".printFields"] = array();
$tdatacreategrn_receive[".printFields"][] = "ID";
$tdatacreategrn_receive[".printFields"][] = "Status";
$tdatacreategrn_receive[".printFields"][] = "Fleet";
$tdatacreategrn_receive[".printFields"][] = "GRNDate";
$tdatacreategrn_receive[".printFields"][] = "ItemCode";
$tdatacreategrn_receive[".printFields"][] = "Brand";
$tdatacreategrn_receive[".printFields"][] = "Description";
$tdatacreategrn_receive[".printFields"][] = "Supplier";
$tdatacreategrn_receive[".printFields"][] = "UnitPrice";
$tdatacreategrn_receive[".printFields"][] = "Quantity";
$tdatacreategrn_receive[".printFields"][] = "RefNumber";
$tdatacreategrn_receive[".printFields"][] = "SystemDate";
$tdatacreategrn_receive[".printFields"][] = "Cost";
$tdatacreategrn_receive[".printFields"][] = "EnteredBy";
$tdatacreategrn_receive[".printFields"][] = "ApprovedBy";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receive","ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
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








	$tdatacreategrn_receive["ID"] = $fdata;
//	ItemCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ItemCode";
	$fdata["GoodName"] = "ItemCode";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receive","ItemCode");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ItemCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ItemCode";

	
	
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
	$edata["LookupTable"] = "inventorymaster";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"Brand", 'lookupF'=>"Brand");
	$edata["autoCompleteFields"][] = array('masterF'=>"Description", 'lookupF'=>"Description");
	$edata["autoCompleteFields"][] = array('masterF'=>"Supplier", 'lookupF'=>"Supplier");
	$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "ItemID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ItemID";

	
	$edata["LookupOrderBy"] = "ItemID";

	
	
	
	

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_receive["ItemCode"] = $fdata;
//	Brand
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Brand";
	$fdata["GoodName"] = "Brand";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receive","Brand");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Brand";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Brand";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_receive["Brand"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receive","Description");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Description";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_receive["Description"] = $fdata;
//	Supplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Supplier";
	$fdata["GoodName"] = "Supplier";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receive","Supplier");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Supplier";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Supplier";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_receive["Supplier"] = $fdata;
//	Quantity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Quantity";
	$fdata["GoodName"] = "Quantity";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receive","Quantity");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Quantity";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Quantity";

	
	
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




	$tdatacreategrn_receive["Quantity"] = $fdata;
//	RemovedFrom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "RemovedFrom";
	$fdata["GoodName"] = "RemovedFrom";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receive","RemovedFrom");
	$fdata["FieldType"] = 200;

	
	
	
										
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "RemovedFrom";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RemovedFrom";

	
	
			
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








	$tdatacreategrn_receive["RemovedFrom"] = $fdata;
//	SystemDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "SystemDate";
	$fdata["GoodName"] = "SystemDate";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receive","SystemDate");
	$fdata["FieldType"] = 200;

	
	
	
										
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdatacreategrn_receive["SystemDate"] = $fdata;
//	GRNDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "GRNDate";
	$fdata["GoodName"] = "GRNDate";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receive","GRNDate");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "GRNDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GRNDate";

	
	
				$fdata["FieldPermissions"] = true;

			
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_receive["GRNDate"] = $fdata;
//	EnteredBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "EnteredBy";
	$fdata["GoodName"] = "EnteredBy";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receive","EnteredBy");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_receive["EnteredBy"] = $fdata;
//	ApprovedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ApprovedBy";
	$fdata["GoodName"] = "ApprovedBy";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receive","ApprovedBy");
	$fdata["FieldType"] = 200;

	
	
	
										
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ApprovedBy";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ApprovedBy";

	
	
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
	
		$edata["autoUpdatable"] = true;

	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatacreategrn_receive["ApprovedBy"] = $fdata;
//	UnitPrice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "UnitPrice";
	$fdata["GoodName"] = "UnitPrice";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receive","UnitPrice");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "UnitPrice";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UnitPrice";

	
	
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




	$tdatacreategrn_receive["UnitPrice"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receive","Status");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Status";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_receive["Status"] = $fdata;
//	RefNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "RefNumber";
	$fdata["GoodName"] = "RefNumber";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receive","RefNumber");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RefNumber";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RefNumber";

	
	
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




	$tdatacreategrn_receive["RefNumber"] = $fdata;
//	CurrentStock
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "CurrentStock";
	$fdata["GoodName"] = "CurrentStock";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receive","CurrentStock");
	$fdata["FieldType"] = 200;

	
	
	
										
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "CurrentStock";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CurrentStock";

	
	
			
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








	$tdatacreategrn_receive["CurrentStock"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receive","Fleet");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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
	$edata["DependentLookups"][] = "RemovedFrom";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_receive["Fleet"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("creategrn_receive","Cost");
	$fdata["FieldType"] = 5;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Cost";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Quantity*UnitPrice";

	
	
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




	$tdatacreategrn_receive["Cost"] = $fdata;


$tables_data["creategrn-receive"]=&$tdatacreategrn_receive;
$field_labels["creategrn_receive"] = &$fieldLabelscreategrn_receive;
$fieldToolTips["creategrn_receive"] = &$fieldToolTipscreategrn_receive;
$page_titles["creategrn_receive"] = &$pageTitlescreategrn_receive;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["creategrn-receive"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["creategrn-receive"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_creategrn_receive()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  ItemCode,  Brand,  Description,  Supplier,  Quantity,  RemovedFrom,  SystemDate,  GRNDate,  EnteredBy,  ApprovedBy,  UnitPrice,  Status,  RefNumber,  CurrentStock,  Fleet,  Quantity*UnitPrice AS Cost";
$proto0["m_strFrom"] = "FROM creategrn";
$proto0["m_strWhere"] = "(Status =\"Purchase\")";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
					
;
						$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "Status =\"Purchase\"";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receive"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=\"Purchase\"";
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
	"m_strName" => "ID",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receive"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "creategrn-receive";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ItemCode",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receive"
));

$proto8["m_sql"] = "ItemCode";
$proto8["m_srcTableName"] = "creategrn-receive";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receive"
));

$proto10["m_sql"] = "Brand";
$proto10["m_srcTableName"] = "creategrn-receive";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receive"
));

$proto12["m_sql"] = "Description";
$proto12["m_srcTableName"] = "creategrn-receive";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receive"
));

$proto14["m_sql"] = "Supplier";
$proto14["m_srcTableName"] = "creategrn-receive";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Quantity",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receive"
));

$proto16["m_sql"] = "Quantity";
$proto16["m_srcTableName"] = "creategrn-receive";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "RemovedFrom",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receive"
));

$proto18["m_sql"] = "RemovedFrom";
$proto18["m_srcTableName"] = "creategrn-receive";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "SystemDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receive"
));

$proto20["m_sql"] = "SystemDate";
$proto20["m_srcTableName"] = "creategrn-receive";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "GRNDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receive"
));

$proto22["m_sql"] = "GRNDate";
$proto22["m_srcTableName"] = "creategrn-receive";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "EnteredBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receive"
));

$proto24["m_sql"] = "EnteredBy";
$proto24["m_srcTableName"] = "creategrn-receive";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receive"
));

$proto26["m_sql"] = "ApprovedBy";
$proto26["m_srcTableName"] = "creategrn-receive";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receive"
));

$proto28["m_sql"] = "UnitPrice";
$proto28["m_srcTableName"] = "creategrn-receive";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receive"
));

$proto30["m_sql"] = "Status";
$proto30["m_srcTableName"] = "creategrn-receive";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "RefNumber",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receive"
));

$proto32["m_sql"] = "RefNumber";
$proto32["m_srcTableName"] = "creategrn-receive";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "CurrentStock",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receive"
));

$proto34["m_sql"] = "CurrentStock";
$proto34["m_srcTableName"] = "creategrn-receive";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receive"
));

$proto36["m_sql"] = "Fleet";
$proto36["m_srcTableName"] = "creategrn-receive";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "Quantity*UnitPrice"
));

$proto38["m_sql"] = "Quantity*UnitPrice";
$proto38["m_srcTableName"] = "creategrn-receive";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "Cost";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
			$proto41=array();
$proto41["m_strName"] = "creategrn";
$proto41["m_srcTableName"] = "creategrn-receive";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "ID";
$proto41["m_columns"][] = "ItemCode";
$proto41["m_columns"][] = "Brand";
$proto41["m_columns"][] = "Description";
$proto41["m_columns"][] = "Supplier";
$proto41["m_columns"][] = "Quantity";
$proto41["m_columns"][] = "RemovedFrom";
$proto41["m_columns"][] = "SystemDate";
$proto41["m_columns"][] = "GRNDate";
$proto41["m_columns"][] = "EnteredBy";
$proto41["m_columns"][] = "ApprovedBy";
$proto41["m_columns"][] = "UnitPrice";
$proto41["m_columns"][] = "Status";
$proto41["m_columns"][] = "RefNumber";
$proto41["m_columns"][] = "CurrentStock";
$proto41["m_columns"][] = "Fleet";
$proto41["m_columns"][] = "PriceLink";
$proto41["m_columns"][] = "Cost";
$proto41["m_columns"][] = "Remarks";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "creategrn";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "creategrn-receive";
$proto42=array();
$proto42["m_sql"] = "";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="creategrn-receive";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_creategrn_receive = createSqlQuery_creategrn_receive();


	
					
;

																	

$tdatacreategrn_receive[".sqlquery"] = $queryData_creategrn_receive;

include_once(getabspath("include/creategrn_receive_events.php"));
$tableEvents["creategrn-receive"] = new eventclass_creategrn_receive;
$tdatacreategrn_receive[".hasEvents"] = true;

?>