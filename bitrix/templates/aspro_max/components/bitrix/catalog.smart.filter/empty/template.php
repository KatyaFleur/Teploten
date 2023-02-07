<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
use \Bitrix\Main\Localization\Loc;

?><div class="tags tags_filter_inner">
              
	<?
	foreach($arResult["ITEMS"] as $key=>$arItem)
	{
		if(
			empty($arItem["VALUES"])
			|| isset($arItem["PRICE"])
		)
			continue;

		if (
			$arItem["DISPLAY_TYPE"] == "A"
			&& (
				$arItem["VALUES"]["MAX"]["VALUE"] - $arItem["VALUES"]["MIN"]["VALUE"] <= 0
			)
		)
			continue;
		?>
        	<?
			$goal = 0;
			foreach($arItem["VALUES"] as $val => $ar):?>
        	<? if($ar["CHECKED"]):  ?>
				<div class="tag <? echo $ar["CHECKED"]? 'active': '' ?> bx-link-filter" onclick="smartFilter.deleteLink(this);" data-id="<?=$ar["CONTROL_ID"]?>" id="link_delete_<?=$val?>">
        			<?=$ar["VALUE"];?><span class="cancel">+</span>
       		 	</div>
	         
			<? endif;?>
			<?endforeach;?>
	<? } ?>
</div>