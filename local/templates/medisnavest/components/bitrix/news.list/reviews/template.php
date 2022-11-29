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
<? if ($arResult['ITEMS']) { ?>
    <div class="col-md-8 unified_left-column">
        <div data-paginate-content>
            <? foreach ($arResult["ITEMS"] as $arItem) { ?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                    CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                    CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                    ["CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]);
                ?>
                <div class="review-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                    <div class="review-item_header">
                        <span class="review-item_initials"><?= $arResult['INITIALS'][$arItem['ID']] ?></span>
                        <div class="right-cell">
                            <? if ($arItem['PROPERTIES']['NAME']['VALUE'] && $arItem['PROPERTIES']['LAST_NAME']['VALUE']) { ?>
                                <span class="review-item_name"><?= sprintf('%s %s',
                                        $arItem['PROPERTIES']['NAME']['VALUE'],
                                        $arItem['PROPERTIES']['LAST_NAME']['VALUE']) ?></span>
                            <? } ?>
                            <? if ($arItem['PROPERTIES']['CITY']['VALUE']) { ?>
                                <span class="review-item_city"><?= $arItem['PROPERTIES']['CITY']['VALUE'] ?></span>
                            <? } ?>
                        </div>
                    </div>
                    <p>
                        <?= $arItem['PREVIEW_TEXT'] ?>
                    </p>
                    <? if ($arItem['PREVIEW_TEXT_SECOND']) { ?>
                        <div class="hidden-text">
                            <p>
                                <?= $arItem['PREVIEW_TEXT_SECOND']; ?>
                            </p>
                        </div>
                        <span class="review-item_btn"><?= GetMessage('READ_MORE'); ?></span>
                    <? } ?>
                    <span class="review-item_date"><?= $arItem['DISPLAY_ACTIVE_FROM'] ?></span>
                </div>
            <? } ?>
        </div>

        <div class="pagination-footer" data-paginate-nav>
            <?= $arResult['NAV_STRING'] ?>

            <? if ($arResult["NAV_RESULT"]->nEndPage > 1 && $arResult["NAV_RESULT"]->NavPageNomer < $arResult["NAV_RESULT"]->nEndPage): ?>
                <div id="btn_<?= $bxajaxid ?>">
                    <a data-ajax-id="<?= $bxajaxid ?>" href="javascript:void(0)"
                       data-show-more="<?= $arResult["NAV_RESULT"]->NavNum ?>"
                       data-next-page="<?= ($arResult["NAV_RESULT"]->NavPageNomer + 1) ?>"
                       data-max-page="<?= $arResult["NAV_RESULT"]->nEndPage ?>" class="main-btn show-more_btn"><span
                                class="ico-load"></span> Показать еще</a>
                </div>
            <? endif ?>
        </div>
    </div>
<? } ?>