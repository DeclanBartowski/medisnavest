<?

use \Bitrix\Main\Page\Asset;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
$page = $APPLICATION->GetCurPage(false);
?>
    <!DOCTYPE html>
<html lang="<?= LANGUAGE_ID ?>" class="no-js">
    <head>
        <title><? $APPLICATION->ShowTitle() ?></title>
        <?
        Asset::getInstance()->addString('<meta content="' . SITE_TEMPLATE_PATH . '/browserconfig.xml" name="msapplication-config" />');
        Asset::getInstance()->addString('<meta http-equiv="X-UA-Compatible" content="IE=edge">');
        Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1">');
        Asset::getInstance()->addString('<link href="' . SITE_TEMPLATE_PATH . '/img/favicon.ico" rel="icon" type="image/png" />');
        Asset::getInstance()->addString('<link href="' . SITE_TEMPLATE_PATH . '/img/favicon.png" rel="icon" type="image/png" />');
        Asset::getInstance()->addString('<link rel="apple-touch-icon" sizes="110x96" href="' . SITE_TEMPLATE_PATH . '/img/apple-touch-icon.png" />');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/min.css");
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/main.css");
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/min.js");
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/main.js");
        ?>
        <style>body {
                opacity: 0;
            }</style>
        <? $APPLICATION->ShowHead(); ?>
    </head>

<body>
<? $APPLICATION->ShowPanel(); ?>
<!--[if lt IE 10]>
<p class="browsehappy"><br>Вы используете <strong>устаревший</strong> браузер.
    Пожалуйста, <a href="http://browsehappy.com/">обновите его</a> для корректного
    отображения сайтов.</p>
<![endif]-->
<div class="global-wrapper">
    <div class="wrapper-loader">
        <div class="logo-loader_content">
            <div class="logo-loader"></div>
        </div>
        <div class="wrapper_loader-text">
            <span class="loader-text">производство собственных медицинских консолей</span>
        </div>
    </div>
    <div class="bg-overlay"></div>
    <header class="ui-header">
        <div class="container">
            <div class="ui-header_content">
                <div class="head_left-column">
                    <div class="hamburger hamburger--spring">
                        <div class="hamburger-box">
                            <div class="hamburger-inner"></div>
                        </div>
                    </div>
                    <div class="head-logo">
                        <a href="/"><img data-src="<?= SITE_TEMPLATE_PATH ?>/img/static/logo.svg" alt="alt"></a>
                    </div>
                    <nav class="head-nav">
                        <span class="menu_close-btn ico-close"></span>
                        <ul class="head-menu">
                            <li><a href="">Каталог товаров</a></li>
                            <li><a href="">Услуги</a></li>
                            <li><a href="">Наши работы</a></li>
                            <li><a href="">Акции</a></li>
                            <li><a href="">Компания</a></li>
                            <li><a href="">Новости</a></li>
                            <li><a href="">Контакты</a></li>
                        </ul>
                        <div class="mobile_header-content">
                            <a href="tel:+74012522440" class="head_phone-number">+7 (4012) 522-440</a>
                            <a href="#callback" data-toggle="modal" class="callback-btn main-btn"><span
                                        class="ico-phone"></span>Связаться с нами</a>
                        </div>
                    </nav>
                    <form action="#" class="search-form">
                        <input type="text" class="search-form_input" placeholder="Поиск по сайту">
                        <div class="wrapper_search-form_submit ico-search"><input type="submit"
                                                                                  class="search-form_submit" value="">
                        </div>
                    </form>
                    <span class="head_search-icon ico-search"></span>
                </div>
                <div class="head_right-column">
                    <a href="tel:+74012522440" class="head_phone-number">+7 (4012) 522-440</a>
                    <a href="#callback" data-toggle="modal" class="callback-btn"><span class="ico-phone"></span>Связаться
                        с нами</a>
                </div>
            </div>
        </div>
    </header>
    <main class="main-content">
