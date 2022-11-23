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
<div class="services-mod_bg"></div>
<div class="container container-mod">
    <div class="wrapper_service-item">
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="service-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>">
									<span class="service-item_title">
										<?= $arItem['NAME'] ?>
									</span>
                    <div class="service-item_desc">
                        <p>
                            <?= $arItem['PREVIEW_TEXT'] ?>
                        </p>
                        <span class="ico-arrow-3"></span>
                    </div>
                </a>
            </div>
        <? endforeach; ?>
    </div>
</div>
