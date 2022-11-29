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
$bxajaxid = CAjax::GetComponentID($component->__name, $component->__template->__name, $component->arParams['AJAX_OPTION_ADDITIONAL']);
?>
<div class="row news-row" data-paginate-content>
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
            CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
            CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
            array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="col-md-4 col-sm-6" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <div class="news-item">
                <? if (!empty($arItem['PREVIEW_PICTURE']['SRC'])): ?>
                    <div class="news-item_img">
                        <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>">
                            <img data-src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>"
                                 alt="<?= $arItem['PREVIEW_PICTURE']['ALT'] ?>">
                        </a>
                    </div>
                <? endif; ?>
                <span class="news-item_title">
                    <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>"><?= $arItem['NAME'] ?></a>
                </span>
                <span class="news-item_date"><?= $arItem['DISPLAY_ACTIVE_FROM'] ?></span>
            </div>
        </div>

    <? endforeach; ?>
</div>
<div class="pagination-footer" data-paginate-nav>
    <?= $arResult['NAV_STRING'] ?>

    <?if($arResult["NAV_RESULT"]->nEndPage > 1 && $arResult["NAV_RESULT"]->NavPageNomer<$arResult["NAV_RESULT"]->nEndPage):?>
        <div id="btn_<?=$bxajaxid?>">
            <a data-ajax-id="<?=$bxajaxid?>" href="javascript:void(0)" data-show-more="<?=$arResult["NAV_RESULT"]->NavNum?>" data-next-page="<?=($arResult["NAV_RESULT"]->NavPageNomer + 1)?>" data-max-page="<?=$arResult["NAV_RESULT"]->nEndPage?>" class="main-btn show-more_btn"><span class="ico-load"></span> Показать еще</a>
        </div>
    <?endif?>
</div>
