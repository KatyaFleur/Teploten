<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Авторизация");
if($_REQUEST['change_password'] == 'yes' && $USER->isAuthorized()){
	LocalRedirect(SITE_DIR.'personal/change-password/');
	exit();
}
?>
<?$APPLICATION->IncludeComponent("aspro:auth.max", "main", array(
	"SEF_MODE" => "Y",
	"SEF_FOLDER" => "/auth/",
	"SEF_URL_TEMPLATES" => array(
		"auth" => "",
		"registration" => "registration/",
		"forgot" => "forgot-password/",
		"change" => "change-password/",
		"confirm" => "confirm-password/",
		"confirm_registration" => "confirm-registration/",
	),
	"PERSONAL" => "/personal/"
	),
	false
);?>
	
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>