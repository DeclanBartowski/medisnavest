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

foreach ($arResult['ITEMS'] as &$arItem) {
    $str = '';
    if ($arItem['PROPERTIES']['NAME']['VALUE']) {
        $str .= '%s';
    }
    if ($arItem['PROPERTIES']['LAST_NAME']['VALUE']) {
        $str .= '.%s';
    }
    $arResult['INITIALS'][$arItem['ID']] = sprintf($str, mb_substr($arItem['PROPERTIES']['NAME']['VALUE'], 0, 1),
        mb_substr($arItem['PROPERTIES']['LAST_NAME']['VALUE'], 0, 1));

    if (strlen($arItem['PREVIEW_TEXT']) > 227) {
        $arItem['PREVIEW_TEXT_SECOND'] = mb_substr($arItem['PREVIEW_TEXT'], 227);
        $arItem['PREVIEW_TEXT'] = mb_substr($arItem['PREVIEW_TEXT'], 0, 227);

    }
}

unset($arItem);
?>