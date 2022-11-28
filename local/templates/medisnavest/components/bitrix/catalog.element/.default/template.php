<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */
$this->setFrameMode(true);
?>

<div class="row">
    <div class="col-md-6">
        <div class="tablet-small_visible">
            <? if (!empty($arResult['PROPERTIES']['STATUS'])): ?>
                <span class="product-card_status <?= $arResult['PROPERTIES']['STATUS']['VALUE_XML_ID'] ?>"><?= $arResult['PROPERTIES']['STATUS']['VALUE'] ?></span>
            <? endif; ?>
            <h1><?= $arResult['NAME'] ?></h1>
            <span class="product-card_price"><?= $arResult['PROPERTIES']['PRICE']['VALUE'] ?> <span
                        class="rouble">i</span></span>
        </div>

        <? if (!empty($arResult['PROPERTIES']['SLIDER']['VALUE'])): ?>
            <ul class="product-card_img-list">
                <? foreach ($arResult['PROPERTIES']['SLIDER']['VALUE'] as $slider): ?>
                    <li>
                        <a href="<?= CFile::GetPath($slider) ?>" class="fancybox" data-fancybox="group"><span
                                    class="loop-icon"></span><img data-src="<?= CFile::GetPath($slider) ?>"
                                                                  alt="alt"></a>
                    </li>
                <? endforeach; ?>
            </ul>
            <div class="progress-line">
                <div class="progress-bar"></div>
            </div>


        <? elseif (!empty($arResult['DETAIL_PICTURE']['SRC'])): ?>
            <div class="product-card_img">
                <a href="<?= $arResult['DETAIL_PICTURE']['SRC'] ?>" class="fancybox"><img
                            data-src="<?= $arResult['DETAIL_PICTURE']['SRC'] ?>"
                            alt="<?= $arResult['DETAIL_PICTURE']['ALT'] ?>"></a>
            </div>
        <? endif; ?>
    </div>
    <div class="col-md-6 product-card_desc">
        <div class="tablet-small_hidden">
            <? if (!empty($arResult['PROPERTIES']['STATUS'])): ?>
                <span class="product-card_status <?= $arResult['PROPERTIES']['STATUS']['VALUE_XML_ID'] ?>"><?= $arResult['PROPERTIES']['STATUS']['VALUE'] ?></span>
            <? endif; ?>
            <h1><?= $arResult['NAME'] ?></h1>
            <span class="product-card_price"><?= $arResult['PROPERTIES']['PRICE']['VALUE'] ?>  <span
                        class="rouble">i</span></span>
        </div>
        <a href="#order-product" data-toggle="modal" data-title="<?= $arResult['NAME'] ?>"
           class="main-btn product-card_btn"><?= GetMessage('CATALOG_ELEMENT') ?></a>
        <?= $arResult['DETAIL_TEXT'] ?>
    </div>
</div>


