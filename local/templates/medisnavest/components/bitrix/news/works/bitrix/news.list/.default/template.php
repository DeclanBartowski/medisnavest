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
<div class="row works-row">
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
            CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
            CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
            array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="col-md-6" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <div class="work-mod_item">
                <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>">
                    <img data-src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>"
                         alt="<?= $arItem['PREVIEW_PICTURE']['ALT'] ?>">
                    <span class="loop-icon ico-plus"></span>
                    <div class="work-item_content">
                        <span class="work-item_title"><?= $arItem['NAME'] ?></span>
                        <p><?= $arItem['PREVIEW_TEXT'] ?></p>
                    </div>
                </a>
            </div>
        </div>

    <? endforeach; ?>
</div>
