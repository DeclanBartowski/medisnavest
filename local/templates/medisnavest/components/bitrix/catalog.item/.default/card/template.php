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
<div class="product-item">
    <a href="<?= ($itemHasDetailUrl) ? $item['DETAIL_PAGE_URL'] : 'javascript:void(0)' ?>">
        <? if ($item['PROPERTIES']['LABEL']['VALUE']) { ?>
            <span class="product-item_label <?= $item['PROPERTIES']['LABEL']['VALUE_XML_ID'] ?>"><?= $item['PROPERTIES']['LABEL']['VALUE'] ?></span>
        <? } ?>
        <div class="product-item_img">
            <img data-src="<?= $previewPicture ?>" alt="<?= ($imgTitle) ?: $productTitle ?>">
        </div>
        <? if ($item['PROPERTIES']['STATUS']['VALUE']) { ?>
            <span class="product-item_status <?= $item['PROPERTIES']['STATUS']['VALUE_XML_ID'] ?>"><?= $item['PROPERTIES']['STATUS']['VALUE'] ?></span>
        <? } ?>
        <span class="product-item_title"><?= $productTitle ?></span>
        <p>
            <?= $item['~PREVIEW_TEXT'] ?>
        </p>
    </a>
</div>