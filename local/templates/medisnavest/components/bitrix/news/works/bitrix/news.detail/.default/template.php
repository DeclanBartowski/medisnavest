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
<? if (!empty($arResult['PROPERTIES']['PHOTO']['VALUE'])): ?>
    <div class="work-slider js_work-slider">
        <? foreach ($arResult['PROPERTIES']['PHOTO']['VALUE'] as $photo): ?>
            <div class="work-slide">
                <a href="<?= CFile::GetPath($photo) ?>" class="fancybox" data-fancybox="gallery">
                    <img data-src="<?= CFile::GetPath($photo) ?>" alt="alt">
                </a>
            </div>
        <? endforeach; ?>
    </div>
    <div class="works-pagination">
        <span class="pagination-number"></span>
        <span class="divider">/</span>
        <span class="pagination-digit"></span>
    </div>
<? endif; ?>
<div class="container container-mod">
    <?= $arResult['DETAIL_TEXT'] ?>
</div>
