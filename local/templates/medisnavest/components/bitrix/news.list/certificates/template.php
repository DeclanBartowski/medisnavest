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
<? if (!empty($arResult["ITEMS"])):
    $firstPart = array_slice($arResult['ITEMS'], 0, 2);
    $secondPart = array_slice($arResult['ITEMS'], 2);
    ?>
	<div class="row align-items-center">
		<div class="col-md-6">
			<div class="section-title"><?= $arResult['~DESCRIPTION'] ?></div>
		</div>
		<div class="col-md-6">
			<ul class="certificatest-list">
                <? foreach ($firstPart as $arItem) {
                    $small = CFile::ResizeImageGet($arItem['PROPERTIES']['FILE']['VALUE'],
                        ['width' => 324, 'height' => 433],
                        BX_RESIZE_IMAGE_PROPORTIONAL
                    )['src'];
                    $big = CFile::GetPath($arItem['PROPERTIES']['FILE']['VALUE']);
                    ?>
                    <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                        CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                        CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                        array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>
					<li id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
						<a href="<?= $big; ?>" class="fancybox" data-fancybox="group">
							<img data-src="<?= $small; ?>" alt="alt">
						</a>
					</li>
                <? } ?>
			</ul>
		</div>
	</div>
    <? if ($secondPart) { ?>
	<div class="certificates-slider">
        <? foreach ($secondPart as $arItem) {
            $small = CFile::ResizeImageGet($arItem['PROPERTIES']['FILE']['VALUE'],
                ['width' => 324, 'height' => 433],
                BX_RESIZE_IMAGE_PROPORTIONAL
            )['src'];
            $big = CFile::GetPath($arItem['PROPERTIES']['FILE']['VALUE']);
            ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
			<div class="certificate-slide" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
				<a href="<?= $big; ?>" class="fancybox" data-fancybox="group-2">
					<img data-src="<?= $small; ?>" alt="alt">
				</a>
			</div>
        <? } ?>
	</div>
	<div class="certificates-pagination">
		<span class="pagination-number"></span>
		<span class="divider">/</span>
		<span class="pagination-digit"></span>
	</div>
	<? } ?>
<? endif; ?>
