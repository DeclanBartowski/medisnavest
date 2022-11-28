<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
} ?>
<? if (ERROR_404 != 'Y'): ?>
    <div class="form-section">
        <div class="container container-mod">
            <div class="row align-items-center">
                <div class="col-md-5 left-column">
                    <div class="section-title">У вас появились вопросы?</div>
                    <p>
                        Отправьте нам свои данные и мы с вами свяжемся в ближайшее время
                    </p>
                </div>
                <div class="col-md-7">
                    <form action="#" class="static-form">
                        <div class="form-group">
                            <input type="text" class="form-control requiredField callback-name" placeholder="Ваше имя">
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control requiredField callback-phone"
                                   placeholder="Номер телефона">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control form-textarea" placeholder="Ваш вопрос"></textarea>
                        </div>
                        <div class="static-form_footer">
										<span class="form-policy">
											<span class="min">Нажимая на кнопку “отправить” вы соглашаетесь</span>
											с <a href="">политикой конфиденциальности</a>
										</span>
                            <div class="wrapper_form-submit_btn main-btn">
                                Отправить <span class="ico-arrow"></span>
                                <input type="submit" class="form-submit_btn js_form-submit" value="">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<? endif; ?>
</main>
<? if (ERROR_404 != 'Y'): ?>

    <!-- end main-content -->
    <footer class="main-footer">
        <div class="container container-mod">
            <div class="row top-row">
                <div class="col-md-4">
                    <div class="footer-logo">
                        <a href="/"><img data-src="<?= SITE_TEMPLATE_PATH ?>/img/static/logo.svg" alt="alt"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer_phone-number">
                        <a href="tel:+74012522440">+7 (4012) 522-440</a>
                        <a href="tel:88004442740">8 (800) 444-27-40</a>
                    </div>
                </div>
                <div class="col-md-4 right-column right-column_top">
                    <a href="mailto:info@medisana-med.ru" class="footer-email">info@medisana-med.ru</a>
                    <a href="#callback" data-toggle="modal" class="callback-btn footer_callback-btn"><span
                                class="ico-phone"></span>Связаться с нами</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <span class="footer-title"><a href="">Услуги</a></span>
                    <ul class="footer-menu">
                        <li><a href="">Чистые помещения под ключ</a></li>
                        <li><a href="">Проектирование и монтаж медицинских газов</a></li>
                        <li><a href="">Установка консолей жизнеобеспечения</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <span class="footer-title"><a href="">Каталог товаров</a></span>
                    <ul class="footer-menu">
                        <li><a href="">Клапанные коробки</a></li>
                        <li><a href="">Консоли типа мост</a></li>
                        <li><a href="">Медицинская консоль собственного производства</a></li>
                        <li><a href="">Настенные консоли</a></li>
                        <li><a href="">Палатные и прикроватные консоли</a></li>
                        <li><a href="">Потолочные консоли</a></li>
                        <li><a href="">Флуометр</a></li>
                    </ul>
                </div>
                <div class="col-md-4 right-column">
                    <ul class="footer-mod_menu">
                        <li><a href="">Акции</a></li>
                        <li><a href="">Компания</a></li>
                        <li><a href="">Новости</a></li>
                        <li><a href="">Контакты</a></li>
                    </ul>
                </div>
            </div>
            <div class="main-footer_bottom">
                <div class="row">
                    <div class="col-md-4">
                        <div class="copyright">&#169; Компания ООО "Медисанавест"</div>
                    </div>
                    <div class="col-md-8 bottom_right-column">
                        <div class="main-footer_bottom-btns">
                            <a href="">Пользовательское соглашение</a>
                            <a href="">Политика конфиденциальности</a>
                        </div>
                        <a href="" class="footer-studio"><img data-src="<?= SITE_TEMPLATE_PATH ?>/img/static/studio.svg"
                                                              alt="alt"></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end main-footer -->
    <div class="scroll-to-top"></div>
    </div>
    <!-- END GLOBAL-WRAPPER -->
    <div aria-hidden="true" class="modal fade js-modal" id="callback" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button class="close" data-dismiss="modal" type="button"><span class="ico-close"></span></button>
                <div class="section-title popup-title">Заказать звонок</div>
                <span class="popup_top-text">Оставьте нам свои данные и наши специалисты свяжутся с вами в ближайшее время</span>
                <form action="#" class="callback-form">
                    <div class="form-group">
                        <input type="text" class="form-control requiredField callback-name" placeholder="Имя">
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control requiredField callback-phone" placeholder="Телефон">
                    </div>
                    <input type="submit" class="popup-form_submit main-btn js_form-submit" value="Отправить">
                    <div class="popup-policy">
                        Нажимая на кнопку “Отправить” вы даете согласие на обработку персональных данных.
                    </div>
                </form>
            </div>
        </div>
    </div>
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

</body>
</html>
