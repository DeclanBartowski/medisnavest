<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

$cp = $this->__component; // объект компонента
if (is_object($cp)) {
    $cp->arResult['SUB_TITLE'] = $arResult['PROPERTIES']["DETAIL_TEXT_TITLE"]["VALUE"];
    $cp->SetResultCacheKeys(array('SUB_TITLE'));
}


