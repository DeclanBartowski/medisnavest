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
$points = explode(',', $arResult['PROPERTIES']['MAP']['VALUE']);
?>

<div class="container contact-container">
    <div class="row">
        <div class="col-xl-4 col-lg-5 col-md-6 left-column">
            <div class="contact-desc">
                <ul class="contact-list">
                    <li>
                        <span class="ico-adress"></span>
                        <span class="text"><?=$arResult['PROPERTIES']['ADRESS']['VALUE']?><span class="min"><?=$arResult['PROPERTIES']['ADRESS_TEXT']['VALUE']?></span></span>
                    </li>
                    <?if(!empty($arResult['PROPERTIES']['MAIL']['VALUE'])):?>
                    <li><a href="mailto:<?=$arResult['PROPERTIES']['MAIL']['VALUE']?>" class="contact-email"><span class="ico-email"></span><?=$arResult['PROPERTIES']['MAIL']['VALUE']?></a></li>
                    <?endif;?>
                    <?if(!empty($arResult['PROPERTIES']['PHONE']['VALUE'])):?>
                    <li><a href="tel:<?=$arResult['PROPERTIES']['PHONE']['DESCRIPTION']?>" class="contact_phone-number"><span class="ico-phone"></span><?=$arResult['PROPERTIES']['PHONE']['VALUE']?></a></li>
                    <?endif;?>

                </ul>
                <div class="contact-section_btns">
                    <a href="#callback" data-toggle="modal" class="main-btn contact_callback-btn"><?=GetMessage('BTN_CONTACTS')?></a>
                    <ul class="social-network">
                        <?if(!empty($arResult['PROPERTIES']['TG']['VALUE'])):?>
                        <li><a href="<?=$arResult['PROPERTIES']['TG']['VALUE']?>" target="_blank"><img data-src="<?=SITE_TEMPLATE_PATH?>/img/icons/telegram.svg" alt="alt"></a></li>
                        <?endif;?>
                        <?if(!empty($arResult['PROPERTIES']['WA']['VALUE'])):?>
                        <li><a href="<?=$arResult['PROPERTIES']['WA']['VALUE']?>" target="_blank"><img data-src="<?=SITE_TEMPLATE_PATH?>/img/icons/whatsapp.svg" alt="alt"></a></li>
                        <?endif;?>
                    </ul>
                </div>
            </div>
        </div>
        <?if(!empty($points)):?>
        <div class="col-xl-8 col-lg-7 col-md-6">
            <div id="map"></div>
        </div>
            <script>

                $(document).ready(function (){
                    if ($('#map').length) {

                        function showYaMaps() {
                            var script = document.createElement("script");
                            script.type = "text/javascript";
                            script.src = "https://api-maps.yandex.ru/2.1/?lang=ru_RU";
                            document.getElementById("map").appendChild(script);
                            script.onload = function() {
                                ymaps.ready(init);
                                var myMap,
                                    myPlacemark;

                                function init() {
                                    myMap = new ymaps.Map("map", {
                                        center: [<?=floatval($points[0])?>,<?=floatval($points[1])?>],
                                        zoom: 13,
                                        behaviors: ['default', 'scrollZoom']
                                    });
                                    myMap.behaviors.disable('scrollZoom');
                                    myMap.controls.remove('geolocationControl');
                                    myMap.controls.remove('searchControl');
                                    myMap.controls.remove('trafficControl');
                                    myMap.controls.remove('typeSelector');
                                    myMap.controls.remove('fullscreenControl');
                                    myMap.controls.remove('rulerControl');
                                    myMap.behaviors.disable('scrollZoom');
                                    myMap.geoObjects.add(new ymaps.Placemark([<?=floatval($points[0])?>,<?=floatval($points[1])?>], {
                                        iconCaption: '<?=$arResult['NAME']?>',
                                    }, {
                                        preset: 'islands#redCircleDotIcon',
                                    }));
                                }
                            }
                        } showYaMaps();
                    }
                })
            </script>
        <?endif;?>
    </div>
</div>
