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
<div class="partners-section">
    <div class="container">
        <div class="unified-container">
            <div class="section-title"><?= $arResult['NAME'] ?></div>
        </div>
        <ul class="partners-list">
            <? foreach ($arResult["ITEMS"] as $arItem): ?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                    CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                    CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                    array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <li id="<?= $this->GetEditAreaId($arItem['ID']); ?>"><img
                            data-src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>"
                            alt="<?= $arItem['PREVIEW_PICTURE']['ALT'] ?>"></li>
            <? endforeach; ?>
        </ul>
    </div>
</div>
