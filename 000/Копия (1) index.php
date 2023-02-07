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
	/*div.sidebar:nth-child(1) {
	display: none;
	}*/
	/*div.sidebar_type_filter {
	display:block !important;
	}*/
</style> 
 <?$APPLICATION->IncludeComponent(
	"api:reviews.form",
	"",
	Array(
		"ADD_REVIEW_ERROR" => "Внимание! Ошибка добавления отзыва",
		"ADD_REVIEW_HIDDEN" => "Спасибо! Ваш отзыв не будет опубликован, но мы его обязательно прочтем",
		"ADD_REVIEW_MODERATION" => "Спасибо! Ваш отзыв отправлен на модерацию",
		"ADD_REVIEW_VIZIBLE" => "Спасибо! Ваш отзыв опубликован",
		"CACHE_TIME" => "86400",
		"CACHE_TYPE" => "A",
		"CITY_VIEW" => "N",
		"DELIVERY" => array(),
		"DISPLAY_FIELDS" => array("TITLE","ANNOTATION"),
		"ELEMENT_ID" => "1",
		"EMAIL_TO" => "",
		"FORM_TITLE" => "Отзыв о товаре",
		"IBLOCK_ID" => "1",
		"INCLUDE_CSS" => "Y",
		"INCLUDE_JQUERY" => "N",
		"MESS_ADD_REVIEW_EVENT_TEXT" => "Добавлен новый отзыв, для просмотра перейдите по ссылке",
		"MESS_ADD_REVIEW_EVENT_THEME" => "Отзыв о товаре CB93074.TMWEB.RU",
		"MESS_STAR_RATING_1" => "Ужасный магазин",
		"MESS_STAR_RATING_2" => "Плохой магазин",
		"MESS_STAR_RATING_3" => "Обычный магазин",
		"MESS_STAR_RATING_4" => "Хороший магазин",
		"MESS_STAR_RATING_5" => "Отличный магазин",
		"ORDER_ID" => "",
		"PREMODERATION" => "Y",
		"REQUIRED_FIELDS" => array("TITLE","ANNOTATION"),
		"RULES_LINK" => "http://cb93074.tmweb.ru/rules/",
		"RULES_TEXT" => "Правила публикации отзывов",
		"SECTION_ID" => "",
		"SHOP_BTN_TEXT" => "Добавить отзыв",
		"SHOP_NAME" => "CB93074.TMWEB.RU",
		"SHOP_TEXT" => "Оставьте свой отзыв о товаре",
		"THEME" => "black",
		"URL" => "",
		"USE_PLACEHOLDER" => "N"
	)
);?><? require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php'); ?>