<? if (! defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $item
 * @var array $actualItem
 * @var array $minOffer
 * @var array $itemIds
 * @var array $price
 * @var array $measureRatio
 * @var bool $haveOffers
 * @var bool $showSubscribe
 * @var array $morePhoto
 * @var bool $showSlider
 * @var bool $itemHasDetailUrl
 * @var string $imgTitle
 * @var string $productTitle
 * @var string $buttonSizeClass
 * @var string $discountPositionClass
 * @var string $labelPositionClass
 * @var string $previewPicture
 * @var CatalogSectionComponent $component
 */
?>
<div class="viewed-product_item-img">
    <a href="<?= ($itemHasDetailUrl) ? $item['DETAIL_PAGE_URL'] : 'javascript:void(0)' ?>"><img
                alt="<?= ($imgTitle) ?: $productTitle ?>" src="<?= $previewPicture ?>"></a>
</div>
<div class="viewed-product_item-desc">
    <? if ($item['PROPERTIES']['STATUS']['VALUE']) { ?>
        <span class="product-item_status <?= $item['PROPERTIES']['STATUS']['VALUE_XML_ID'] ?>"><?= $item['PROPERTIES']['STATUS']['VALUE'] ?></span>
    <? } ?>
    <span class="product-item_title"><a
                href="<?= ($itemHasDetailUrl) ? $item['DETAIL_PAGE_URL'] : 'javascript:void(0)' ?>"><?= $productTitle ?></a></span>
    <? if ($item['PROPERTIES']['PRICE']['VALUE']) { ?>
        <span class="product-item_price"><?= $item['PROPERTIES']['PRICE']['VALUE'] ?>	<span
                    class="rouble">i</span></span>
    <? } ?>
</div>