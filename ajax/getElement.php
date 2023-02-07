<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

	if(isset($_POST["item_id"]))
	{
		$item = intval($_POST["item_id"]);
		if (CModule::IncludeModule("iblock") && CModule::IncludeModule("catalog")):
		   $res = CIBlockElement::GetByID($item);
		   
		   if($ar_res = $res->GetNext()){

			  $pr = CPrice::GetBasePrice($ar_res['ID']);
			  
			  exit(json_encode(array('ID'=>$ar_res['ID'],'PRICE'=>$pr['PRICE'],'NAME'=>$ar_res['NAME'])));
		   }
		endif;	
		exit(false);
	}
}
?>
