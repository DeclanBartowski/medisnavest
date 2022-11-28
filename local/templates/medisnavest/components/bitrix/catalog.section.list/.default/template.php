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
<div class="row category-content">
    <? foreach ($arResult['SECTIONS'] as $section): ?>
        <div class="col-md-6">
            <div class="category-item">
                <a href="<?= $section['SECTION_PAGE_URL'] ?>" class="first-item">
                    <div class="category-item_desc">
                        <div class="item-content">
                            <span class="category-item_title"><?= $section['NAME'] ?></span>
                            <p>
                                <?= $section['DESCRIPTION'] ?>
                            </p>
                        </div>
                        <span class="item-arrow ico-arrow-2"></span>
                    </div>
                    <? if (!empty($section['PICTURE']["SRC"])): ?>
                        <div class="category-item_img">
                            <img data-src="<?= $section['PICTURE']["SRC"] ?>" alt="<?= $section['PICTURE']["ALT"] ?>">
                        </div>
                    <? endif; ?>
                </a>
            </div>
        </div>
    <? endforeach; ?>
</div>
