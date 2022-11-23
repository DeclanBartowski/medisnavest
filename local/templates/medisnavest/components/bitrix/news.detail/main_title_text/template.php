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
<section class="main-section">
    <div class="container container-mod">
        <h1><?= $arResult['NAME'] ?></h1>
        <p><?= $arResult['PREVIEW_TEXT'] ?></p>
        <? if (!empty($arResult['PROPERTIES']['TITLE_BTN']['VALUE']) && !empty($arResult['PROPERTIES']['LINK_BTN']['VALUE'])): ?>
            <a href="<?=$arResult['PROPERTIES']['LINK_BTN']['VALUE']?>" class="main-btn"><?=$arResult['PROPERTIES']['TITLE_BTN']['VALUE']?> <span class="ico-arrow"></span></a>
        <? endif; ?>
    </div>
</section>
