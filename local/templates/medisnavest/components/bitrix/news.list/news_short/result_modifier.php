<? if (! defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
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

$res = CIBlock::GetList(
    Array(),
    Array(
        'ID'=>$arParams['IBLOCK_ID'],
    )
);
if ($ar_res = $res->Fetch())
{
    $arResult['ALL_ITEMS_URL'] = $ar_res['LIST_PAGE_URL'];
}
?>