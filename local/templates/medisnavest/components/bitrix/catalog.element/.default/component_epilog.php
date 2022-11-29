<? if (! defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/**@var $arResult */

use Bitrix\Main\Loader;

Loader::includeModule('sp.tools');
$productService = new \SP\Tools\ProductService();
$productService->setViewedProduct($arResult['ID']);