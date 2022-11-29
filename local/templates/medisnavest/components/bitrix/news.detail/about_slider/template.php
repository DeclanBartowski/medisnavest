<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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

<div class="company-section_wrapper-slider">
	<div class="container">
		<div class="row">
			<?if ($arResult['PROPERTIES']['SLIDER']['VALUE']) {?>
			<div class="col-md-7">
				<div class="company-slider_img">
					<?foreach ($arResult['PROPERTIES']['SLIDER']['VALUE'] as $slide) {
						$picture = CFile::ResizeImageGet($slide,
						            ['width' => 1098, 'height' => 868],
						            BX_RESIZE_IMAGE_PROPORTIONAL
						        )['src'];
						?>
						<img data-src="<?= $picture;?>" alt="alt">
					<?}?>
				</div>
			</div>
			<?}?>
			<div class="col-md-5">
				<div class="company-slide_desc">
					<div class="section-title"><?= $arResult['NAME'];?> </div>
                    <?if ($arResult['PREVIEW_TEXT']) {?>
					<p>
						<?= $arResult['PREVIEW_TEXT'];?>
					</p>
					<?}?>
                    <?if ($arResult['PROPERTIES']['SLIDER']['VALUE']) {?>
					<div class="company-arrows"></div>
					<?}?>
				</div>
			</div>
		</div>
	</div>
</div>
