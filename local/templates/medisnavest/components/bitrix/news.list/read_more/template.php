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
	<div class="news-other_section">
		<div class="container">
			<div class="news-other_header">
				<div class="section-title text-left"><?= GetMessage('READ_MORE');?></div>
				<div class="news-pagination mobile-hidden">
					<span class="pagination-number"></span>
					<span class="divider">/</span>
					<span class="pagination-digit"></span>
				</div>
			</div>
			<div class="news-slider">
            <? foreach ($arResult["ITEMS"] as $arItem) { ?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                    CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                    CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                    ["CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]);
                if ($arItem['PREVIEW_PICTURE']['ID']) {
                	$picture = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']['ID'],
                	            ['width' => 554, 'height' => 409],
                	            BX_RESIZE_IMAGE_PROPORTIONAL
                	        )['src'];
                }
                ?>
	            <div class="news-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
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
		            <span class="news-item_date"><?= $arItem["DISPLAY_ACTIVE_FROM"];?></span>
	            </div>
            <? } ?>
			</div>
			<div class="mobile-visible">
				<div class="news-pagination">
					<span class="pagination-number"></span>
					<span class="divider">/</span>
					<span class="pagination-digit"></span>
				</div>
			</div>
		</div>
	</div>
<? } ?>