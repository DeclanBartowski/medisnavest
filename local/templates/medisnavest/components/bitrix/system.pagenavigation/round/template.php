<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arParams */
/** @var array $arResult */
/** @var CBitrixComponentTemplate $this */

$this->setFrameMode(true);

if (!$arResult["NavShowAlways"]) {
    if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false)) {
        return;
    }
}

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"] . "&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?" . $arResult["NavQueryString"] : "");

$colorSchemes = array(
    "green" => "bx-green",
    "yellow" => "bx-yellow",
    "red" => "bx-red",
    "blue" => "bx-blue",
);
if (isset($colorSchemes[$arParams["TEMPLATE_THEME"]])) {
    $colorScheme = $colorSchemes[$arParams["TEMPLATE_THEME"]];
} else {
    $colorScheme = "";
}
?>

<ul class="main-pagination mobile-hidden">
    <? if ($arResult["bDescPageNumbering"] === true): ?>

        <? if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]): ?>
            <? if ($arResult["bSavePage"]): ?>
                <li>
                    <a onclick=""
                       href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] + 1) ?>"
                       class="prev-page"></a></li>
                <li class=""><a onclick=""
                                href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] + 1) ?>">1</a>
                </li>
            <? else: ?>
                <? if (($arResult["NavPageNomer"] + 1) == $arResult["NavPageCount"]): ?>
                    <li><a onclick="" class="prev-page"
                           href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull ?>"></a></li>
                <? else: ?>
                    <li><a onclick="" class="prev-page"
                           href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] + 1) ?>"></a>
                    </li>
                <? endif ?>
                <li class=""><a onclick="" href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull ?>">1</a></li>
            <? endif ?>
        <? else: ?>
            <li class="disabled"><a onclick="" href="" class="prev-page"></a></li>
            <li class="active"><a onclick="" href="javascript:void(0)">1</a></li>
        <? endif ?>

        <?
        $arResult["nStartPage"]--;
        while ($arResult["nStartPage"] >= $arResult["nEndPage"] + 1):
            ?>
            <? $NavRecordGroupPrint = $arResult["NavPageCount"] - $arResult["nStartPage"] + 1; ?>

            <? if ($arResult["nStartPage"] == $arResult["NavPageNomer"]): ?>
            <li class="active"><a onclick="" href="javascript:void(0)"><?= $NavRecordGroupPrint ?></a></li>
        <? else: ?>
            <li class=""><a onclick=""
                            href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= $arResult["nStartPage"] ?>"><?= $NavRecordGroupPrint ?></a>
            </li>
        <? endif ?>

            <? $arResult["nStartPage"]-- ?>
        <? endwhile ?>

        <? if ($arResult["NavPageNomer"] > 1): ?>
            <? if ($arResult["NavPageCount"] > 1): ?>
                <li class=""><a onclick=""
                                href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=1"><?= $arResult["NavPageCount"] ?></a>
                </li>
            <? endif ?>
            <li>
                <a onclick=""
                   href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] - 1) ?>"
                   class="next-page"></a></li>
        <? else: ?>
            <? if ($arResult["NavPageCount"] > 1): ?>
                <li class="active"><a onclick="" href="javascript:void(0)"><?= $arResult["NavPageCount"] ?></a></li>
            <? endif ?>
            <li class="disabled"><a onclick="" href="javascript:void(0)" class="next-page"></a></li>
        <? endif ?>

    <? else: ?>

        <? if ($arResult["NavPageNomer"] > 1): ?>
            <? if ($arResult["bSavePage"]): ?>
                <li>
                    <a onclick=""
                       href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] - 1) ?>"
                       class="prev-page"></a></li>
                <li class=""><a onclick=""
                                href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=1">1</a>
                </li>
            <? else: ?>
                <? if ($arResult["NavPageNomer"] > 2): ?>
                    <li>
                        <a onclick=""
                           href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] - 1) ?>"
                           class="prev-page"></a></li>
                <? else: ?>
                    <li><a onclick="" href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull ?>"
                           class="prev-page"></a></li>
                <? endif ?>
                <li class=""><a onclick="" href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull ?>">1</a></li>
            <? endif ?>
        <? else: ?>
            <li class="disabled"><a onclick="" href="javascript:void(0)" class="prev-page"></a></li>
            <li class="active"><a onclick="" href="javascript:void(0)">1</a></li>
        <? endif ?>

        <?
        $arResult["nStartPage"]++;
        while ($arResult["nStartPage"] <= $arResult["nEndPage"] - 1):
            ?>
            <? if ($arResult["nStartPage"] == $arResult["NavPageNomer"]): ?>
            <li class="active"><a onclick="" href="javascript:void(0)"><?= $arResult["nStartPage"] ?></a></li>
        <? else: ?>
            <li>
                <a onclick=""
                   href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= $arResult["nStartPage"] ?>"><?= $arResult["nStartPage"] ?></a>
            </li>
        <? endif ?>
            <? $arResult["nStartPage"]++ ?>
        <? endwhile ?>

        <? if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]): ?>
            <? if ($arResult["NavPageCount"] > 1): ?>
                <li>
                    <a onclick=""
                       href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= $arResult["NavPageCount"] ?>"><?= $arResult["NavPageCount"] ?></a>
                </li>
            <? endif ?>
            <li>
                <a onclick=""
                   href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] + 1) ?>"
                   class="next-page"></a></li>
        <? else: ?>
            <? if ($arResult["NavPageCount"] > 1): ?>
                <li class="active"><a onclick="" href="javascript:void(0)"><?= $arResult["NavPageCount"] ?></a></li>
            <? endif ?>
            <li><a onclick="" href="javascript:void(0)" class="next-page"></a></li>
        <? endif ?>
    <? endif ?>
</ul>

