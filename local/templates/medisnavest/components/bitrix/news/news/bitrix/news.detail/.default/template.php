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
<div class="news-detailed_banner" style="background-image: url('<?= $arResult['DETAIL_PICTURE']['SRC']; ?>');">
	<div class="container container-mod">
		<div class="news-detailed_banner-content">
            <? if ($arResult['PROPERTIES']['TITLE_DETAIL']['VALUE']) { ?>
				<div class="section-title"><?= $arResult['PROPERTIES']['TITLE_DETAIL']['VALUE']; ?></div>
            <? } ?>
            <? if ($arResult['PROPERTIES']['TEXT_DETAIL']['~VALUE']['TEXT']) { ?>
				<p>
                    <?= $arResult['PROPERTIES']['TEXT_DETAIL']['~VALUE']['TEXT']; ?>
				</p>
            <? } ?>
		</div>
	</div>
</div>
<? if ($arResult['~DETAIL_TEXT']) { ?>
	<div class="container container-mod">
		<div class="news-detailed_item">
            <?= $arResult['~DETAIL_TEXT']; ?>
		</div>
	</div>
<? } ?>
<div class="news-detailed_body">
    <? if ($arResult['PROPERTIES']['TITLE_PIC_BLOCK']['VALUE']) { ?>
		<div class="container container-large">
            <? foreach ($arResult['PROPERTIES']['TITLE_PIC_BLOCK']['VALUE'] as $block) {
                if ($block['picture']) {
                    $picture = CFile::ResizeImageGet($block['picture'],
                        ['width' => 1110, 'height' => 666],
                        BX_RESIZE_IMAGE_PROPORTIONAL
                    )['src'];
                }
                $divImgClass = 'order-md-2';
                $figureClass = 'right-img';
                $divTextClass = 'left-column';

                if ($block['text_position']) {
                    $divImgClass = '';
                    $figureClass = '';
                    $divTextClass = 'right-column';
                }
                ?>
				<div class="row row-item align-items-center">
                    <? if ($picture) { ?>
						<div class="img-column <?= $divImgClass; ?>">
							<figure class="news-detailed_img <?= $figureClass; ?>">
								<img data-src="<?= $picture; ?>" alt="alt">
							</figure>
						</div>
                    <? } ?>
					<div class="desc-column <?= $divTextClass; ?>">
						<div class="news-detailed-desc">
                            <? if ($block['title']) { ?>
								<div class="section-title"><?= $block['title']; ?></div>
                            <? } ?>
                            <? if ($block['text']) { ?>
								<p><?= $block['text']; ?></p>
                            <? } ?>
						</div>
					</div>
				</div>
            <? } ?>
		</div>
    <? } ?>
	<div class="container container-mod">
		<div class="news-detailed_item">
            <? if ($arResult['PROPERTIES']['FOOTER_TITLE']['VALUE']) { ?>
				<div class="section-title"><?= $arResult['PROPERTIES']['FOOTER_TITLE']['VALUE']; ?></div>
            <? } ?>
            <? if ($arResult['PROPERTIES']['FOOTER_TEXT']['~VALUE']['TEXT']) { ?>
				<p><?= $arResult['PROPERTIES']['FOOTER_TEXT']['~VALUE']['TEXT']; ?></p>
            <? } ?>
		</div>
		<span class="news-detailed_date"><?= $arResult['DISPLAY_ACTIVE_FROM']; ?></span>
		<a href="<?= $arParams['SEF_FOLDER']; ?>" class="main-btn back-page_btn">
			<span class="ico-arrow"></span><?= GetMessage('BACK'); ?>
		</a>
	</div>
</div>

