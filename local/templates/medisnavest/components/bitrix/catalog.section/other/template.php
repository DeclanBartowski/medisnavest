<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use \Bitrix\Main\Localization\Loc;

$this->setFrameMode(true);

if (!empty($arResult['ITEMS'])) {
    $areaIds = array();
    ?>
    <div class="product-other_section">
    <div class="container">
        <div class="product-other_section-header">
            <div class="section-title"><?= GetMessage('TITLE_SECTION') ?></div>
            <div class="product-other_pagination mobile-hidden">
                <span class="pagination-number"></span>
                <span class="divider">/</span>
                <span class="pagination-digit"></span>
            </div>
        </div>
        <div class="product-other_slider">

            <?php

            foreach ($arResult['ITEMS'] as $item) {
                ?>

                <div class="product-other_item">
                    <a href="<?= $item['DETAIL_PAGE_URL'] ?>">
                        <span class="product-other_item-title"><?= $item['NAME'] ?></span>
                        <p>
                            <?= $item['PREVIEW_TEXT'] ?>
                        </p>
                        <div class="product-other_item-footer">
                            <span class="item-arrow ico-arrow-2"></span>
                            <? if (!empty($item['PREVIEW_PICTURE']['SRC'])): ?>
                                <div class="product-other_item-img">
                                    <img data-src="<?=$item['PREVIEW_PICTURE']['SRC']?>" alt="<?=$item['PREVIEW_PICTURE']['ALT']?>">
                                </div>
                            <?endif; ?>
                        </div>
                    </a>
                </div>

                <?php
            }

            ?>
        </div>
        <div class="mobile-visible">
            <div class="product-other_pagination">
                <span class="pagination-number"></span>
                <span class="divider">/</span>
                <span class="pagination-digit"></span>
            </div>
        </div>
    </div>
    </div><?php
}
