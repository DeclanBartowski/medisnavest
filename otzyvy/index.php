<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Отзывы");
?>
<?$APPLICATION->IncludeComponent(
	"sp:wrap", 
	"reviews", 
	array(
		"AJAX_MODE" => "N",
		"COMPONENT_TEMPLATE" => "reviews"
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>