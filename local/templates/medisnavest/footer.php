<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
} ?>
<? if (ERROR_404 != 'Y'): ?>
    <?$APPLICATION->IncludeComponent(
        "sp:feedback",
        "questions",
        array(
            "AJAX_MODE" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "EVENT_MESSAGE_ID" => "11",
            "IBLOCK_ADD" => "Y",
            'OK_MESSAGE' => 'Ваше сообщение отправлено.',
            "IBLOCK_ID" => "13",
            "POLICY_URL" => "/politika-konfidentsialnosti/",
            "USE_CAPTCHA" => "Y",
            "COMPONENT_TEMPLATE" => "questions",
        ),
        false
    );?>
<? endif; ?>
</main>
<? if (ERROR_404 != 'Y'): ?>

    <!-- end main-content -->
    <footer class="main-footer">
        <div class="container container-mod">
            <div class="row top-row">
                <div class="col-md-4">
                    <div class="footer-logo">
                        <a <?if ($page !== SITE_DIR) {?>href="<?= SITE_DIR;?>"<?}?>><img data-src="<?= SITE_TEMPLATE_PATH ?>/img/static/logo.svg" alt="alt"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer_phone-number">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_RECURSIVE" => "Y",
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/footer/phone.php"
                            )
                        ); ?>
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_RECURSIVE" => "Y",
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/footer/phone2.php"
                            )
                        ); ?>
                    </div>
                </div>
                <div class="col-md-4 right-column right-column_top">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_RECURSIVE" => "Y",
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/footer/email.php"
                        )
                    ); ?>

                    <a href="#callback" data-toggle="modal" class="callback-btn footer_callback-btn">
	                    <span class="ico-phone"></span>
	                    <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_RECURSIVE" => "Y",
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/footer/contact_us.php"
                            )
                        ); ?>
                    </a>
                </div>
            </div>
            <div class="row">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "footer_menu",
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
                    "bitrix:catalog.section.list",
                    "footer_menu",
                    Array(
                        "ADD_SECTIONS_CHAIN" => "N",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "Y",
                        "CACHE_TIME" => "36000000",
                        "CACHE_TYPE" => "A",
                        "COUNT_ELEMENTS" => "Y",
                        "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
                        "FILTER_NAME" => "sectionsFilter",
                        "IBLOCK_ID" => "8",
                        "IBLOCK_TYPE" => "content",
                        "SECTION_CODE" => "",
                        "SECTION_FIELDS" => array("NAME", ""),
                        "SECTION_ID" => "",
                        "SECTION_URL" => "",
                        "SECTION_USER_FIELDS" => array("", ""),
                        "TOP_DEPTH" => "1"
                    )
                );?>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "footer_menu",
                    Array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "left",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => array(""),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "footer",
                        "USE_EXT" => "N"
                    )
                );?>

            </div>
            <div class="main-footer_bottom">
                <div class="row">
                    <div class="col-md-4">
                        <div class="copyright"><? $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_RECURSIVE" => "Y",
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/include/footer/copyright.php"
                                )
                            ); ?>
                        </div>
                    </div>
                    <div class="col-md-8 bottom_right-column">
                        <div class="main-footer_bottom-btns">
                            <a href="/polzovatelskoe-soglashenie/">Пользовательское соглашение</a>
                            <a href="/politika-konfidentsialnosti/">Политика конфиденциальности</a>
                        </div>
                        <a href="https://webmedia.by/" class="footer-studio" target="_blank" rel="nofollow">
	                        <img data-src="<?= SITE_TEMPLATE_PATH ?>/img/static/studio.svg" alt="alt">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end main-footer -->
    <div class="scroll-to-top"></div>
    </div>
    <!-- END GLOBAL-WRAPPER -->
    <?$APPLICATION->IncludeComponent(
        "sp:feedback",
        "callback",
        array(
            "AJAX_MODE" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "EVENT_MESSAGE_ID" => "12",
            "IBLOCK_ADD" => "Y",
            'OK_MESSAGE' => 'Ваше сообщение отправлено.',
            "IBLOCK_ID" => "14",
            "POLICY_URL" => "/politika-konfidentsialnosti/",
            "USE_CAPTCHA" => "Y",
            "COMPONENT_TEMPLATE" => "callback",
        ),
        false
    );?>
    <!-- end callback -->
    <div aria-hidden="true" class="modal fade js-modal" role="dialog" id="sent-successfully">
        <div class="modal-dialog modal-dialog_mod modal-dialog-centered" role="document">
            <div class="modal-content">
                <button class="close" data-dismiss="modal" type="button"><span class="ico-close"></span></button>
                <div class="popup-icon"><img data-src="<?= SITE_TEMPLATE_PATH ?>/img/icons/ico-check.svg" alt=""></div>
                <div class="popup-title section-title">
                    Благодарим! <br>
                    Ваша заявка отправлена
                </div>
            </div>
        </div>
    </div>
    <!-- end sent-successfully -->
<? endif; ?>

<div aria-hidden="true" class="modal fade js-modal" role="dialog" id="hidenContent">

</div>

</body>
</html>
