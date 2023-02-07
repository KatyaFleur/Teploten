<?
	require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
	$APPLICATION->SetTitle("000");
?><?
	echo '</div>';
	function my_dump($arg) {
		global $USER;
		if ($USER->IsAdmin()) {
			//if ($USER->GetID() === '83') {
			echo '<pre style="background-color: black; color: white; font-size: 12px; z-index: 9;">';
			var_dump($arg);
			//print_r($arg);
			echo '</pre>';
		}
	}
?> <? //my_dump( array( $GLOBALS['arElements'], $GLOBALS['searchParams'] ) ); ?><br>
 <style>	
	div.sidebar:nth-child(1) {
	display: none;
	}
	/*div.sidebar_type_filter {
	display:block !important;
	}*/
</style> <br>
 55<br>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"category_index_spros",
	Array(
		"ADD_SECTIONS_CHAIN" => "Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COUNT_ELEMENTS" => "Y",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "catalogs",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array("ID","NAME","PICTURE",""),
		"SECTION_ID" => "",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array("UF_SECTION_SPROS",""),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "5",
		"VIEW_MODE" => "LINE"
	)
);?><? require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php'); ?>