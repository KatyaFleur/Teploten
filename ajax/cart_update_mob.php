<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?> 
<?$APPLICATION->IncludeComponent(
	"bitrix:sale.basket.basket.line", 
	"basketCount", 
	array(
	"HIDE_ON_BASKET_PAGES" => "N",
	"PATH_TO_AUTHORIZE" => "",
	"PATH_TO_BASKET" => "/personal/basket/",
	"PATH_TO_ORDER" => "/personal/order/",
	"PATH_TO_PERSONAL" => SITE_DIR."personal/",
	"PATH_TO_PROFILE" => SITE_DIR."personal/",
	"PATH_TO_REGISTER" => SITE_DIR."login/",
	"POSITION_FIXED" => "N",
	"SHOW_AUTHOR" => "N",
	"SHOW_EMPTY_VALUES" => "Y",
	"SHOW_NUM_PRODUCTS" => "Y",
	"SHOW_PERSONAL_LINK" => "N",
	"SHOW_PRODUCTS" => "N",
	"SHOW_TOTAL_PRICE" => "Y",
	"COMPONENT_TEMPLATE" => "headerBasketLine"
	),
	false
);?>