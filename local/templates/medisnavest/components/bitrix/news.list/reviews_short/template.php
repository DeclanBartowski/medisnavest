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
<? if ($arResult['ITEMS']) { ?>
	<div class="reviews-section">
		<div class="container container-mod">
			<div class="reviews-section_header">
				<div class="section-title"><?= GetMessage('REVIEWS') ?></div>
                <? if ($arResult['ALL_ITEMS_URL']) { ?>
				<a href="<?= $arResult['ALL_ITEMS_URL'];?>" class="main-btn mobile-hidden"><?= GetMessage('ALL_REVIEWS') ?> <span
							class="ico-arrow"></span></a>
				<?}?>
			</div>
			<div class="row">
                <? foreach ($arResult["ITEMS"] as $arItem) { ?>
                    <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                        CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                        CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                        ["CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]);
                    ?>
					<div class="col-md-6" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
						<div class="review-item">
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
                                <?= $arItem['PREVIEW_TEXT']; ?>
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
					</div>
                <? } ?>
			</div>
            <? if ($arResult['ALL_ITEMS_URL']) { ?>
				<a href="<?= $arResult['ALL_ITEMS_URL']; ?>" class="main-btn unified_mobile-btn mobile-visible">
                    <?= GetMessage('ALL_REVIEWS'); ?> <span class="ico-arrow"></span>
				</a>
            <? } ?>
		</div>
	</div>
<? } ?>