<?

if (! defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */

use Bitrix\Main\Localization\Loc;

?>
<div class="notify"></div>
<form action="" data-form-feedback>
    <input type="text" name="NAME">
    <textarea name="TEXT" cols="30" rows="10"></textarea>
    <input type="file" multiple name="FILES[]">
    <input type="file" name="FILE">
    <input type="submit" value="Submit">
</form>
<script type="text/javascript">
    var defaultFeedbackParams =<?=\Bitrix\Main\Web\Json::encode(['signedParameters' => $this->getComponent()->getSignedParameters()])?>;
</script>