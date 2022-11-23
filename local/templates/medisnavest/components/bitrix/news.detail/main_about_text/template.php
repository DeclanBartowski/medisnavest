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
<div class="about-section_header">
    <div class="left-column">
        <h2><?= $arResult['NAME'] ?></h2>
    </div>
    <div class="right-column">
        <p><?= $arResult['PREVIEW_TEXT'] ?></p>
        <a href="<?=$arResult['PROPERTIES']['LINK_BTN']['VALUE']?>" class="main-btn"><?=$arResult['PROPERTIES']['TITLE_BTN']['VALUE']?><span class="ico-arrow"></span></a>
    </div>
</div>

