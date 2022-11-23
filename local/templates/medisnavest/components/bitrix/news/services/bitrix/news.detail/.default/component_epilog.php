<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/**
 * @var array $templateData
 * @var array $arParams
 * @var string $templateFolder
 * @global CMain $APPLICATION
 */

global $APPLICATION;

if (!$this->__template) {
    $this->InitComponentTemplate();
}

if (!empty($arResult['SUB_TITLE'])) {
    $this->__template->SetViewTarget('service_detail_text');
    ?>
    <span class="text"><?= $arResult['SUB_TITLE'] ?></span>
    <?php
    $this->__template->EndViewTarget();
}
