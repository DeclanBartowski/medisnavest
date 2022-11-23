<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
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
?>
<? if (!empty($arResult['DETAIL_PICTURE']['SRC'])): ?>
    <div class="services-detailed_banner"
         style="background-image: url(<?= $arResult['DETAIL_PICTURE']['SRC'] ?>)"></div>
<? endif; ?>
<div class="services-detailed_body">
    <div class="services-detailed_circles"></div>
    <div class="container container-mod">
        <div class="services-detailed_top-panel">
            <? if (!empty($arResult['PROPERTIES']["DETAIL_TITLE"]["VALUE"])): ?>
                <h2 class="text-left"><?= $arResult['PROPERTIES']["DETAIL_TITLE"]["VALUE"] ?></h2>
            <? endif; ?>
            <a href="#callback" data-title="<?=GetMessage('ORDER_SERVICE')?> <?=$arResult['NAME']?>" data-toggle="modal" class="main-btn"><?=GetMessage('ORDER_SERVICE')?></a>
        </div>
        <? if (!empty($arResult['PROPERTIES']["TEXT_DETAIL"]["~VALUE"]['TEXT'])): ?>
            <div class="services-detailed_top-text">
                <?= $arResult['PROPERTIES']["TEXT_DETAIL"]["~VALUE"]['TEXT'] ?>
            </div>
        <? endif; ?>
        <? if (!empty($arResult['DETAIL_TEXT'])): ?>
            <div class="services-detailed_text-item">
                <?= $arResult['DETAIL_TEXT'] ?>
            </div>
        <? endif; ?>
    </div>
</div>
