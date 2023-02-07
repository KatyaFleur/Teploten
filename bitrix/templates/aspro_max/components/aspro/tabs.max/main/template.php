<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<?use \Bitrix\Main\Localization\Loc;?>
<?$frame = $this->createFrame()->begin('');?>
	<div class="content_wrapper_block"><div class="maxwidth-theme wide"></div></div>
<?$frame->end();?>
<?\Aspro\Max\Functions\Extensions::init('top_tabs');?>

<script>
var elements = document.getElementsByClassName('sticker_vygodnaya_tsena font_sxs rounded2');
        for(var i = 0; i < elements.length; i++) {
            var element = elements[i];
            element.onclick = function() {window.location.href = '/vygodnaya_tscena/';}
        }


var elementsLider = document.getElementsByClassName('sticker_lider_prodazh font_sxs rounded2');
        for(var lider = 0; lider < elementsLider.length; lider++) {
            var elementLider = elementsLider[lider];
            elementLider.onclick = function() {window.location.href = '/lider_prodazh/';}
        }
</script>

