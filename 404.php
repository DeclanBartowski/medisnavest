<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");

?>
    <div class="error-section">
        <div class="container">
            <div class="error-number"></div>
            <div class="error_large-text">К сожалению, этой страницы нет!</div>
            <p>Зато у нас есть много другого интересного.</p>
            <a href="/" class="main-btn">Перейти на главную</a>
        </div>
    </div>

<?php

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
