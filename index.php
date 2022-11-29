<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
?>
<?$APPLICATION->IncludeComponent(
    "bitrix:news.detail",
    "main_title_text",
    Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_ELEMENT_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "Y",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "BROWSER_TITLE" => "-",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "COMPONENT_TEMPLATE" => "main_title_text",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "ELEMENT_CODE" => "",
        "ELEMENT_ID" => "17",
        "FIELD_CODE" => array(0=>"",1=>"",),
        "IBLOCK_ID" => "6",
        "IBLOCK_TYPE" => "content",
        "IBLOCK_URL" => "",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "MESSAGE_404" => "",
        "META_DESCRIPTION" => "-",
        "META_KEYWORDS" => "-",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Страница",
        "PROPERTY_CODE" => array(0=>"TITLE_BTN",1=>"LINK_BTN",2=>"",),
        "SET_BROWSER_TITLE" => "N",
        "SET_CANONICAL_URL" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "STRICT_SECTION_CHECK" => "N",
        "USE_PERMISSIONS" => "N",
        "USE_SHARE" => "N"
    )
);?>
    <div class="about-section">
        <div class="container">
            <?$APPLICATION->IncludeComponent(
                "bitrix:news.detail",
                "main_about_text",
                Array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_ELEMENT_CHAIN" => "N",
                    "ADD_SECTIONS_CHAIN" => "Y",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "BROWSER_TITLE" => "-",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "COMPONENT_TEMPLATE" => "main_title_text",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "N",
                    "DISPLAY_DATE" => "N",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "ELEMENT_CODE" => "",
                    "ELEMENT_ID" => "18",
                    "FIELD_CODE" => array(0=>"",1=>"",),
                    "IBLOCK_ID" => "6",
                    "IBLOCK_TYPE" => "content",
                    "IBLOCK_URL" => "",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                    "MESSAGE_404" => "",
                    "META_DESCRIPTION" => "-",
                    "META_KEYWORDS" => "-",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "Страница",
                    "PROPERTY_CODE" => array(0=>"TITLE_BTN",1=>"LINK_BTN",2=>"",),
                    "SET_BROWSER_TITLE" => "N",
                    "SET_CANONICAL_URL" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "N",
                    "STRICT_SECTION_CHECK" => "N",
                    "USE_PERMISSIONS" => "N",
                    "USE_SHARE" => "N"
                )
            );?>

            <div class="row category-content">
                <div class="col-md-6">
                    <div class="category-item">
                        <a href="" class="first-item">
                            <div class="category-item_desc">
                                <div class="item-content">
												<span class="category-item_title">
													Настенные медицинские консоли для палат общей терапии, наркозных и реанимационных
												</span>
                                    <p>
                                        Предназначены для подачи медицинских газов, электропитания и слаботочных сигналов в рабочее пространство медперсонала
                                    </p>
                                </div>
                                <span class="item-arrow ico-arrow-2"></span>
                            </div>
                            <div class="category-item_img">
                                <img data-src="<?=SITE_TEMPLATE_PATH?>/img/static/category/01.png" alt="alt">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="category-item">
                        <a href="" class="second-item">
                            <div class="category-item_desc">
                                <div class="item-content">
												<span class="category-item_title">
													Потолочные консоли
												</span>
                                    <p>
                                        Применяются в операционных больниц и палатах интенсивной терапии для оперативной подачи медицинских газов,  электропитания и приема/передачи информационных сигналов, удаления анестезиологических газов в рабочем пространство медицинских работников и персонала
                                    </p>
                                </div>
                                <span class="item-arrow ico-arrow-2"></span>
                            </div>
                            <div class="category-item_img">
                                <img data-src="<?=SITE_TEMPLATE_PATH?>/img/static/category/02.png" alt="alt">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="category-item">
                        <a href="" class="third-item">
                            <div class="category-item_desc">
                                <div class="item-content">
												<span class="category-item_title">
													Принадлежности <span class="min">для консолей</span>
												</span>
                                    <p>
                                        Расширяют диапазон возможности применения медицинского оборудования , а также служат для удобства размещения различного навесного оборудования
                                    </p>
                                </div>
                                <span class="item-arrow ico-arrow-2"></span>
                            </div>
                            <div class="category-item_img">
                                <img data-src="<?=SITE_TEMPLATE_PATH?>/img/static/category/03.png" alt="alt">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="category-item">
                        <a href="">
                            <div class="category-item_desc">
                                <div class="item-content">
												<span class="category-item_title">
													Системы подачи медицинских газов
												</span>
                                    <p>
                                        Для ЛПУ различного профиля
                                    </p>
                                </div>
                                <span class="item-arrow ico-arrow-2"></span>
                            </div>
                            <div class="category-item_img">
                                <img data-src="<?=SITE_TEMPLATE_PATH?>/img/static/category/04.png" alt="alt">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="category-item">
                        <a href="" class="fifth-item">
                            <div class="category-item_desc">
                                <div class="item-content">
												<span class="category-item_title">
													Чистые помещения под ключ
												</span>
                                    <p>
                                        Оборудования отдельных кабинетов специалистов согласно Приказам оснащения Министерства здравоохранения РФ. До комплексного оснащения / переоснащения всего медицинского учреждения
                                    </p>
                                </div>
                                <span class="item-arrow ico-arrow-2"></span>
                            </div>
                            <div class="category-item_img">
                                <img data-src="<?=SITE_TEMPLATE_PATH?>/img/static/category/05.png" alt="alt">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="category-item">
                        <a href="" class="six-item">
                            <div class="category-item_desc">
                                <div class="item-content">
												<span class="category-item_title">
													Комплексное оснащение Медицинских учреждений
												</span>
                                    <p>
                                        Мы с удовольствием возьмем на себя задачу комплексного оснащения Вашей клиники. За более чем 20-летний опыт работы у нас более 1000 довольных клиентов с географией по всей нашей необъятной стране, от Калининграда до Владивостока
                                    </p>
                                </div>
                                <span class="item-arrow ico-arrow-2"></span>
                            </div>
                            <div class="category-item_img">
                                <img data-src="<?=SITE_TEMPLATE_PATH?>/img/static/category/06.png" alt="alt">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="action-section">
        <div class="container container-mod">
            <div class="action-section_header">
                <div class="left-cell">
                    <div class="section-title">Акции</div>
                    <a href="" class="main-btn mobile-hidden">Смотреть все <span class="ico-arrow"></span></a>
                </div>
                <div class="actions-arrow"></div>
            </div>
        </div>
        <div class="actions-slider">
            <div class="product-item">
                <a href="">
                    <div class="product-item_img">
                        <img data-src="<?=SITE_TEMPLATE_PATH?>/img/static/product/01.png" alt="alt">
                    </div>
                    <span class="product-item_title">Потолочные консоли</span>
                    <p>
                        Для современного мира базовый вектор развития говорит о возможностях системы обучения кадров, соответствующей насущным потребностям.
                    </p>
                </a>
            </div>
            <div class="product-item">
                <a href="">
                    <div class="product-item_img">
                        <img data-src="<?=SITE_TEMPLATE_PATH?>/img/static/product/02.png" alt="alt">
                    </div>
                    <span class="product-item_title">Потолочные консоли</span>
                    <p>
                        Для современного мира базовый вектор развития говорит о возможностях системы обучения кадров, соответствующей насущным потребностям.
                    </p>
                </a>
            </div>
            <div class="product-item">
                <a href="">
                    <div class="product-item_img">
                        <img data-src="<?=SITE_TEMPLATE_PATH?>/img/static/product/03.png" alt="alt">
                    </div>
                    <span class="product-item_title">Потолочные консоли</span>
                    <p>
                        Для современного мира базовый вектор развития говорит о возможностях системы обучения кадров, соответствующей насущным потребностям.
                    </p>
                </a>
            </div>
            <div class="product-item">
                <a href="">
                    <div class="product-item_img">
                        <img data-src="<?=SITE_TEMPLATE_PATH?>/img/static/product/01.png" alt="alt">
                    </div>
                    <span class="product-item_title">Потолочные консоли</span>
                    <p>
                        Для современного мира базовый вектор развития говорит о возможностях системы обучения кадров, соответствующей насущным потребностям.
                    </p>
                </a>
            </div>
            <div class="product-item">
                <a href="">
                    <div class="product-item_img">
                        <img data-src="<?=SITE_TEMPLATE_PATH?>/img/static/product/02.png" alt="alt">
                    </div>
                    <span class="product-item_title">Потолочные консоли</span>
                    <p>
                        Для современного мира базовый вектор развития говорит о возможностях системы обучения кадров, соответствующей насущным потребностям.
                    </p>
                </a>
            </div>
            <div class="product-item">
                <a href="">
                    <div class="product-item_img">
                        <img data-src="<?=SITE_TEMPLATE_PATH?>/img/static/product/03.png" alt="alt">
                    </div>
                    <span class="product-item_title">Потолочные консоли</span>
                    <p>
                        Для современного мира базовый вектор развития говорит о возможностях системы обучения кадров, соответствующей насущным потребностям.
                    </p>
                </a>
            </div>
        </div>
        <div class="container mobile-visible">
            <a href="" class="main-btn unified_mobile-btn">Смотреть все <span class="ico-arrow"></span></a>
        </div>
    </div>
	<?$APPLICATION->IncludeComponent(
	    "bitrix:news.list",
	    "services",
	    Array(
	    	"IS_INDEX" => 'Y',
	        "ACTIVE_DATE_FORMAT" => "d.m.Y",
	        "ADD_SECTIONS_CHAIN" => "N",
	        "AJAX_MODE" => "N",
	        "AJAX_OPTION_ADDITIONAL" => "",
	        "AJAX_OPTION_HISTORY" => "N",
	        "AJAX_OPTION_JUMP" => "N",
	        "AJAX_OPTION_STYLE" => "Y",
	        "CACHE_FILTER" => "N",
	        "CACHE_GROUPS" => "Y",
	        "CACHE_TIME" => "36000000",
	        "CACHE_TYPE" => "A",
	        "CHECK_DATES" => "Y",
	        "DETAIL_URL" => "",
	        "DISPLAY_BOTTOM_PAGER" => "N",
	        "DISPLAY_DATE" => "Y",
	        "DISPLAY_NAME" => "Y",
	        "DISPLAY_PICTURE" => "Y",
	        "DISPLAY_PREVIEW_TEXT" => "Y",
	        "DISPLAY_TOP_PAGER" => "N",
	        "FIELD_CODE" => array("", ""),
	        "FILTER_NAME" => "",
	        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
	        "IBLOCK_ID" => "3",
	        "IBLOCK_TYPE" => "content",
	        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
	        "INCLUDE_SUBSECTIONS" => "Y",
	        "MESSAGE_404" => "",
	        "NEWS_COUNT" => "20",
	        "PAGER_BASE_LINK_ENABLE" => "N",
	        "PAGER_DESC_NUMBERING" => "N",
	        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
	        "PAGER_SHOW_ALL" => "N",
	        "PAGER_SHOW_ALWAYS" => "N",
	        "PAGER_TEMPLATE" => ".default",
	        "PAGER_TITLE" => "Новости",
	        "PARENT_SECTION" => "",
	        "PARENT_SECTION_CODE" => "",
	        "PREVIEW_TRUNCATE_LEN" => "",
	        "PROPERTY_CODE" => array("", ""),
	        "SET_BROWSER_TITLE" => "N",
	        "SET_LAST_MODIFIED" => "N",
	        "SET_META_DESCRIPTION" => "N",
	        "SET_META_KEYWORDS" => "N",
	        "SET_STATUS_404" => "N",
	        "SET_TITLE" => "N",
	        "SHOW_404" => "N",
	        "SORT_BY1" => "SORT",
	        "SORT_BY2" => "NAME",
	        "SORT_ORDER1" => "ASC",
	        "SORT_ORDER2" => "ASC",
	        "STRICT_SECTION_CHECK" => "N"
	    )
	);?>

    <?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "main_works",
    Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array(0=>"",1=>"",),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "4",
        "IBLOCK_TYPE" => "content",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "N",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "9999",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array(0=>"",1=>"",),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "SORT",
        "SORT_BY2" => "ID",
        "SORT_ORDER1" => "ASC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N"
    )
);?>
    <?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "main_advantages",
    Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array(0=>"",1=>"",),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "5",
        "IBLOCK_TYPE" => "content",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "N",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "9999",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array(0=>"",1=>"",),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "SORT",
        "SORT_BY2" => "ID",
        "SORT_ORDER1" => "ASC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N"
    )
);?>
    <?$APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "main_brands",
        Array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "ADD_SECTIONS_CHAIN" => "N",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "DISPLAY_DATE" => "Y",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "DISPLAY_TOP_PAGER" => "N",
            "FIELD_CODE" => array(0=>"",1=>"",),
            "FILTER_NAME" => "",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "IBLOCK_ID" => "1",
            "IBLOCK_TYPE" => "content",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "INCLUDE_SUBSECTIONS" => "N",
            "MESSAGE_404" => "",
            "NEWS_COUNT" => "9999",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "N",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_TEMPLATE" => ".default",
            "PAGER_TITLE" => "Новости",
            "PARENT_SECTION" => "",
            "PARENT_SECTION_CODE" => "",
            "PREVIEW_TRUNCATE_LEN" => "",
            "PROPERTY_CODE" => array(0=>"",1=>"",),
            "SET_BROWSER_TITLE" => "N",
            "SET_LAST_MODIFIED" => "N",
            "SET_META_DESCRIPTION" => "N",
            "SET_META_KEYWORDS" => "N",
            "SET_STATUS_404" => "N",
            "SET_TITLE" => "N",
            "SHOW_404" => "N",
            "SORT_BY1" => "SORT",
            "SORT_BY2" => "ID",
            "SORT_ORDER1" => "ASC",
            "SORT_ORDER2" => "ASC",
            "STRICT_SECTION_CHECK" => "N"
        )
    );?>
	<?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "reviews_short",
    Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array("", ""),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "2",
        "IBLOCK_TYPE" => "content",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "2",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array("NAME", "CITY", "LAST_NAME"),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "SORT",
        "SORT_BY2" => "ACTIVE_FROM",
        "SORT_ORDER1" => "ASC",
        "SORT_ORDER2" => "DESC",
        "STRICT_SECTION_CHECK" => "N"
    )
);?>
<?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "news_short",
    Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array("", ""),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "7",
        "IBLOCK_TYPE" => "content",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "3",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array(),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "SORT",
        "SORT_BY2" => "ACTIVE_FROM",
        "SORT_ORDER1" => "ASC",
        "SORT_ORDER2" => "DESC",
        "STRICT_SECTION_CHECK" => "N"
    )
);?>

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>
