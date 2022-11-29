<? if (! defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
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
<? if ($arResult['SECTIONS']) { ?>
    <ul class="catalog-menu">
        <? foreach ($arResult["SECTIONS"] as $arSection) {
            $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'],
                CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_EDIT"));
            $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'],
                CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_DELETE"),
                ["CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM')]);

            if ($arSection['ELEMENT_CNT'] == 0) {
                continue;
            }
            ?>
            <li id="<?= $this->GetEditAreaId($arSection['ID']); ?>" <?/*class="active"*/?>><a
                        href="<?= $arSection['SECTION_PAGE_URL'] ?>"><?= $arSection['NAME'] ?><span
                            class="number"><?= $arSection['ELEMENT_CNT'] ?></span></a></li>
        <? } ?>
    </ul>
<? } ?>
