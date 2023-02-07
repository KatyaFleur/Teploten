<?
	require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
	$APPLICATION->SetTitle("000");
?></div><?
if (CModule::IncludeModule("iblock") && CModule::IncludeModule("catalog")):
   $res = CIBlockElement::GetByID(17061);
   
   if($ar_res = $res->GetNext()){

	  echo $ar_res['NAME'];
	  //var_export($ar_res);
	  /*$db_props = CIBlockElement::GetProperty($ar_res['IBLOCK_ID'], $ar_res['ITEM_ID'], "sort", "asc"); 
	  while($ar_props = $db_props->Fetch()){
	  	echo "<pre>".print_r($ar_props, true)."</pre>";
	  }*/
	  var_export($ar_res);
	  echo '<br>';
	  echo '<br>';
	  $pr = CPrice::GetBasePrice($ar_res['ID']);
	  var_export($pr);
	  echo '<br>';
	  echo '<br>';
	  $i = CCatalogProduct::GetByID($ar_res['ID']);
	  var_export($i);
   }
endif;	
?>
<script type="text/javascript">
	$(document).ready(function(){
		//window.dataLayer = window.dataLayer || {};
		/*window.dataLayer.push({
			"event":"purchase",
			"ecommerce":{
				"currencyCode":"RUB",
				"purchase":{
					"actionField":{
						"id":"4237",
						"revenue":"2070",
						"tax":0,"shipping":0
					},"products":[
					{
						"id":"22870",
						"name":"Радиатор бимет. BIMETAL FOSTER 500/80 SB20 (6 сек) (желтый квадрат) (SB.20.BI.500/80)",
						"price":2070,
						"variant":"",
						"quantity":1,
						"brand":""
					}]
				}	
			}
		});
		gtag('event', 'purchase', {
	      "transaction_id": 4239,
	      "value": 2070,
	      "currency": "RUB",
	      "tax": 0,
	      "shipping": 0,
	      "items": [{
	            "id":"22870",
				"name":"Радиатор бимет. BIMETAL FOSTER 500/80 SB20 (6 сек) (желтый квадрат) (SB.20.BI.500/80)",
				"price":2070,
				"variant":"",
				"quantity":1,
				"brand":""
	        }]
	    });*/
	});
	
</script>
<?
?>
<? require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php'); ?>