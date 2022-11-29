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
	<div class="news-section">
		<div class="container">
			<div class="unified-container news-section_header">
				<div class="section-title"><?= GetMessage('NEWS'); ?></div>
                <? if ($arResult['ALL_ITEMS_URL']) { ?>
					<a href="<?= $arResult['ALL_ITEMS_URL']; ?>"
					   class="main-btn mobile-hidden"><?= GetMessage('ALL_NEWS'); ?> <span class="ico-arrow"></span></a>
                <? } ?>
			</div>
			<div class="row news-row">
                <? foreach ($arResult["ITEMS"] as $arItem) { ?>
                    <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                        CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                        CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                        ["CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]);
                    if ($arItem['PREVIEW_PICTURE']['ID']) {
                    	$picture = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']['ID'],
                    	            ['width' => 553, 'height' => 409],
                    	            BX_RESIZE_IMAGE_PROPORTIONAL
                    	        )['src'];
                    }
                    ?>
					<div class="col-md-4 col-sm-6" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
						<div class="news-item">
							<?if ($picture) {?>
								<div class="news-item_img">
									<a href="<?= $arItem['DETAIL_PAGE_URL'];?>">
										<img data-src="<?= $picture;?>" alt="alt">
									</a>
								</div>
							<?}?>
							<span class="news-item_title">
								<a href="<?= $arItem['DETAIL_PAGE_URL'];?>"><?= $arItem['NAME'];?></a>
							</span>
							<span class="news-item_date"><?= $arItem['DISPLAY_ACTIVE_FROM'] ?></span>
						</div>
					</div>
                <? } ?>
			</div>
            <? if ($arResult['ALL_ITEMS_URL']) { ?>
				<div class="mobile-visible">
					<a href="<?= $arResult['ALL_ITEMS_URL']; ?>"
					   class="main-btn unified_mobile-btn"><?= GetMessage('ALL_NEWS'); ?> <span
								class="ico-arrow"></span></a>
				</div>
            <? } ?>
		</div>
	</div>
<? } ?>