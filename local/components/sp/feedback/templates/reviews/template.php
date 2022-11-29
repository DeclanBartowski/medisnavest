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
<div class="col-md-4 reviews-section_sidebar unified_right-column">
    <div class="js_scroll-box reviews-section_sidebar_content">
        <div class="h3">Напишите нам свой отзыв</div>
        <span class="review-sidebar_text">Оставьте нам свои данные и наши специалисты свяжутся с вами в ближайшее время</span>
        <form action="#" class="review-form" data-form-feedback>
            <div class="form-group">
                <input name="NAME" type="text" class="form-control requiredField callback-name" placeholder="Имя">
            </div>
            <div class="form-group">
                <input name="LAST_NAME" type="text" class="form-control requiredField callback-name"
                       placeholder="Фамилия">
            </div>
            <div class="form-group">
                <input name="CITY" type="text" class="form-control requiredField callback-text" placeholder="Город">
            </div>
            <div class="form-group">
                <textarea name="PREVIEW_TEXT" class="form-control form-textarea requiredField callback-text"
                          placeholder="Ваш отзыв"></textarea>
            </div>
            <? if ($arParams["USE_CAPTCHA"] == "Y"): ?>
                <div class="form-group">
                    <div class="mf-captcha">
                        <div class="mf-text"><?= Loc::getMessage("SP_F_CAPTCHA") ?></div>
                        <input type="hidden" name="captcha_sid" value="<?= $arResult["capCode"] ?>">
                        <img src="/bitrix/tools/captcha.php?captcha_sid=<?= $arResult["capCode"] ?>" width="180"
                             height="40" alt="CAPTCHA">
                        <div class="mf-text"><?= Loc::getMessage("SP_F_CAPTCHA_CODE") ?><span class="mf-req">*</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="captcha_word" size="30" maxlength="50" value="">
                </div>
            <? endif; ?>
            <div class="review-form_footer">
                <input type="submit" class="review-form-submit_btn main-btn js_form-submit" value="Отправить">
                <span class="form-policy">
												Нажимая на кнопку “Отправить” вы даете согласие на обработку персональных данных.
											</span>
            </div>
            <div class="notify"></div>
        </form>
    </div>
</div>
<script type="text/javascript">
    var defaultFeedbackParams =<?=\Bitrix\Main\Web\Json::encode(['signedParameters' => $this->getComponent()->getSignedParameters()])?>;
</script>