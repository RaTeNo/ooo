<?php if (is_front_page()): ?>
    </div> <!-- ast-container -->
    </div>
<?php endif ?>
<div id="status"></div>
<footer class="footer">
    <div class="footer__wrapper">
        <div class="footer-top">
            <div class="_container footer__container">
                <div class="footer-top__wrapper">
                    <div class="footer-top__columns">
                        <div class="footer-top__column">
                            <div class="logo">
                                <a href="/" aria-label="home">
                                    <span class="bgimage"
                                          style="background-image: url('<?= get_template_directory_uri() ?>/static/images/icons/logo-ft.svg')"></span>
                                </a>
                            </div>
                            <div class="box box--rating">
                                <div class="name">Рейтинг организации:</div>
                                <ul>
                                    <?php foreach (get_field('rating', 'option') as $item): ?>
                                        <li>
                                            <i style="background-image: url('<?= $item['icon'] ?>')"></i>
                                            <span><?= $item['rating'] ?></span>
                                            <i class="star"
                                               style="background-image: url('<?= get_template_directory_uri() ?>/static/images/icons/ic_star.svg')"></i>
                                        </li>
                                    <?php endforeach; ?>


                                </ul>
                            </div>
                            <div class="box box--socials">
                                <div class="name">Присоединяйтесь к нам в соцсетях:</div>
                                <ul>
                                    <?php foreach (get_field('soc', 'option') as $item): ?>
                                        <li><a href="<?= $item['link'] ?>"><i
                                                        style="background-image: url('<?= $item['icon'] ?>')"></i></a>
                                        </li>
                                    <?php endforeach; ?>


                                </ul>
                            </div>
                            <div class="box box--payment">
                                <div class="name">Способы оплаты:</div>
                                <ul>
                                    <?php foreach (get_field('payments', 'option') as $item): ?>
                                        <li>
                                            <i style="background-image: url('<?= $item['icons'] ?>')"></i>
                                        </li>
                                    <?php endforeach; ?>


                                </ul>
                            </div>

                        </div>
                        <div class="footer-top__column column--sm">
                            <nav>
                                <div class="name">Печатная продукция</div>
                                <?php custom_menu_output(330); ?>

                                <!--<ul>
                                    {% include "menu.twig" with {'items': footer_product_menu.get_items} %}
                                </ul>-->
                            </nav>
                        </div>
                        <div class="footer-top__column column--sm">
                            <nav>
                                <div class="name">Полезные разделы</div>
                                <?php custom_menu_output(329); ?>
                                <!-- <ul>
                                     {% include "menu.twig" with {'items': footer_comp_menu.get_items} %}
                                 </ul>-->
                            </nav>
                        </div>
                        <div class="footer-top__column">
                            <div class="footer-top__column-part">
                                <div class="name">Контактные данные</div>
                                <?php foreach (get_field('footer_data', 'option') as $item): ?>
                                    <?php if ($item['phone']): ?>
                                        <div class="item">
                                    <span class="icon"
                                          style="background-image: url('<?= get_template_directory_uri() ?>/static/images/icons/ic_call-gr.svg')"></span>
                                            <div class="title">
                                                <a href="tel:<?= $item['phone'] ?>"><?= $item['phone'] ?></a>
                                                <span><?= $item['text'] ?></span>
                                            </div>
                                        </div>
                                    <?php elseif ($item['email']): ?>
                                        <div class="item">
                                    <span class="icon"
                                          style="background-image: url('<?= get_template_directory_uri() ?>/static/images/icons/ic_mail-gr.svg')"></span>
                                            <div class="title">
                                                <a href="mailto:<?= $item['email'] ?>"><?= $item['email'] ?></a>
                                                <span><?= $item['text'] ?></span>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>


                            </div>
                            <div class="footer-top__column-part">
                                <div class="name">Офисы в Москве</div>
                                <?php foreach (get_field('offices', 'option') as $item): ?>
                                    <div class="item">
                                    <span class="icon"
                                          style="background-image: url('<?= get_template_directory_uri() ?>/static/images/icons/ic_map.svg')"></span>
                                        <div class="title">
                                            <a href="<?= $item['address'] ?>"
                                               target="_blank"><?= $item['title'] ?></a>
                                            <span><?= $item['address_text'] ?></span>
                                        </div>
                                    </div>
                                <?php endforeach; ?>


                            </div>

                        </div>
                        <div class="footer-top__column column--addition">
                            <div class="box box--socials">
                                <div class="name">Присоединяйтесь к нам в соцсетях:</div>
                                <ul>
                                    <?php foreach (get_field('soc', 'option') as $item): ?>
                                        <li><a href="<?= $item['link'] ?>"><i
                                                        style="background-image: url('<?= $item['icon'] ?>')"></i></a>
                                        </li>
                                    <?php endforeach; ?>


                                </ul>
                            </div>
                            <div class="box box--payment">
                                <div class="name">Способы оплаты:</div>
                                <ul>
                                    <?php foreach (get_field('payments', 'option') as $item): ?>
                                        <li>
                                            <i style="background-image: url('<?= $item['icons'] ?>')"></i>
                                        </li>
                                    <?php endforeach; ?>


                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="_container footer-bottom__container">
                <div class="footer-bottom__wrapper">
                    <div class="footer-bottom__actions">
                        <?= get_field('copyright_text', 'option') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<div class="popup-call">
    <div class="popup-call__modal" id="modal-call">
        <div class="popup-call__wrapper">
            <div class="popup-call__body">
                <div class="title">
                    <h4>Заказать обратный звонок</h4>
                    <span>Ответим на заявку за 2 минуты</span>
                </div>
                <form action="/wp-json/contact-form-7/v1/contact-forms/30305/feedback" data-form="banner" method="POST"
                      novalidate="novalidate">
                    <div class="item item--field">
                        <label for="NAMECALL">Имя</label>
                        <input type="text" name="your-name" id="NAMECALL" placeholder="Иван">
                    </div>
                    <div class="item item--field NUMBER">
                        <label for="NUMBERCALL">Номер телефона <span>*</span></label>
                        <input type="text" name="your-phone" id="NUMBERCALL" placeholder="+7" required
                               data-maska="+# (###) ###-##-##">
                    </div>
                    <div class="wpcf7-response-output" aria-hidden="true"></div>

                    <div class="smart-captcha smart-captcha_invisible" id="yandex_captcha-824-6122"
                         data-testid="smartCaptcha-container">
                        <div style="display: none;">
                            <iframe frameborder="0"
                                    src="https://smartcaptcha.yandexcloud.net/backend.636bb879d1085041bc19.html?sitekey=ysc1_WRhWaN7JzeljVBdJPJzgiQrebE02VD25unvpK6dE939aabb1&amp;theme=light&amp;hl=ru&amp;host=dev.pechater.ru&amp;href=https%3A%2F%2Fdev.pechater.ru%2F&amp;test=false&amp;webview=false&amp;hideChallengeContainer=false"
                                    style="display: block; width: 100%; height: 100%; z-index: 0; transform: translate3d(0px, 0px, 0px);"
                                    aria-hidden="true" allow="encrypted-media *;" data-testid="backend-iframe"
                                    title="SmartCaptcha backend"></iframe>
                        </div>
                        <input type="hidden" name="smart-token" data-testid="smart-token">
                    </div>
                    <button class="btn-blue">Отправить</button>
                    <div class="item item--policy">
                        Оставляя заявку, вы соглашаетесь <br>
                        <a href="#">с политикой конфиденциальности</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="popup-review">
    <div class="popup-review__modal" id="modal-review">
        <div class="popup-review__wrapper">
            <div class="popup-review__body">
                <div class="title">
                    <h4>Оставить отзыв</h4>
                    <span>Прикрепите видеофайл или благодарственное письмо на фирменном бланке</span>
                </div>
                <form action="/wp-json/contact-form-7/v1/contact-forms/31836/feedback" data-form="banner" method="POST"
                      novalidate="novalidate">
                    <div class="item item--field">
                        <label for="NAMECALLREVIEW">Имя</label>
                        <input type="text" id="your-name" placeholder="Иван">
                    </div>
                    <div class="wpcf7-response-output" aria-hidden="true"></div>

                    <div class="smart-captcha smart-captcha_invisible" id="yandex_captcha-824-6122"
                         data-testid="smartCaptcha-container">
                        <div style="display: none;">
                            <iframe frameborder="0"
                                    src="https://smartcaptcha.yandexcloud.net/backend.636bb879d1085041bc19.html?sitekey=ysc1_WRhWaN7JzeljVBdJPJzgiQrebE02VD25unvpK6dE939aabb1&amp;theme=light&amp;hl=ru&amp;host=dev.pechater.ru&amp;href=https%3A%2F%2Fdev.pechater.ru%2F&amp;test=false&amp;webview=false&amp;hideChallengeContainer=false"
                                    style="display: block; width: 100%; height: 100%; z-index: 0; transform: translate3d(0px, 0px, 0px);"
                                    aria-hidden="true" allow="encrypted-media *;" data-testid="backend-iframe"
                                    title="SmartCaptcha backend"></iframe>
                        </div>
                        <input type="hidden" name="smart-token" data-testid="smart-token">
                    </div>
                    <div class="item item--field NUMBER">
                        <label for="NUMBERCALLREVIEW">Номер телефона <span>*</span></label>
                        <input type="text" id="your-phone" placeholder="+7" required
                               data-maska="+# (###) ###-##-##">
                    </div>
                    <div class="item item--file">
                        <div class="file-names"></div>
                        <div class="send-content">
                            <input type="file" name="files[]"
                                   accept=".pdf,.jpeg,.jpg,.png,.gif,.doc,.docx,.xls,.xlsx,.ppt,.pptx"
                                   multiple="false">
                            <span class="add-file"><b>Прикрепить файл</b></span>
                        </div>
                    </div>
                    <button class="btn-blue">Отправить</button>
                    <div class="item item--policy">
                        Оставляя заявку, вы соглашаетесь <br>
                        <a href="#">с политикой конфиденциальности</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="popup-advice">
    <div class="popup-advice__modal" id="modal-advice">
        <div class="popup-advice__wrapper">
            <div class="popup-advice__body">
                <div class="title">
                    <h4>Получить персональное предложение</h4>
                    <span>Ответим на заявку за 2 минуты</span>
                </div>
                <form action="/wp-json/contact-form-7/v1/contact-forms/30305/feedback" data-form="banner" method="POST"
                      novalidate="novalidate">
                    <div class="item item--field">
                        <label for="NAMEADVICE">Имя</label>
                        <input type="text" name="your-name" id="NAMEADVICE" placeholder="Иван">
                    </div>
                    <div class="wpcf7-response-output" aria-hidden="true"></div>

                    <div class="smart-captcha smart-captcha_invisible" id="yandex_captcha-824-6122"
                         data-testid="smartCaptcha-container">
                        <div style="display: none;">
                            <iframe frameborder="0"
                                    src="https://smartcaptcha.yandexcloud.net/backend.636bb879d1085041bc19.html?sitekey=ysc1_WRhWaN7JzeljVBdJPJzgiQrebE02VD25unvpK6dE939aabb1&amp;theme=light&amp;hl=ru&amp;host=dev.pechater.ru&amp;href=https%3A%2F%2Fdev.pechater.ru%2F&amp;test=false&amp;webview=false&amp;hideChallengeContainer=false"
                                    style="display: block; width: 100%; height: 100%; z-index: 0; transform: translate3d(0px, 0px, 0px);"
                                    aria-hidden="true" allow="encrypted-media *;" data-testid="backend-iframe"
                                    title="SmartCaptcha backend"></iframe>
                        </div>
                        <input type="hidden" name="smart-token" data-testid="smart-token">
                    </div>
                    <div class="item item--field NUMBER">
                        <label for="NUMBERADVICE">Номер телефона <span>*</span></label>
                        <input type="text" name="your-phone" id="NUMBERADVICE" placeholder="+7" required
                               data-maska="+# (###) ###-##-##">
                    </div>
                    <button class="btn-blue">Отправить</button>
                    <div class="item item--policy">
                        Оставляя заявку, вы соглашаетесь <br>
                        <a href="#">с политикой конфиденциальности</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="popup-review popup-order">
    <div class="popup-review__modal" id="modal-order">
        <div class="popup-review__wrapper">
            <div class="popup-review__body">
                <div class="title">
                    <h4>Быстрый заказ</h4>
                    <span>Загрузите файлы или введите описание заказа</span>
                </div>
                <ul class="socials">
                    <li>
                        <a href="https://t.me/pechater"><span
                                    style="background-image: url(https://dev.pechater.ru/wp-content/uploads/2024/06/ic_telegram.svg)"></span></a>
                    </li>
                    <li>
                        <a href="https://wa.me/79295049474"><span
                                    style="background-image: url(https://dev.pechater.ru/wp-content/uploads/2024/06/ic_whatsapp.svg)"></span></a>
                    </li>
                </ul>
                <form action="/wp-json/contact-form-7/v1/contact-forms/31836/feedback" data-form="banner" method="POST"
                      novalidate="novalidate">
                    <div class="item item--field">
                        <label for="NAMECALLREVIEW">Имя</label>
                        <input type="text" id="your-name" placeholder="Иван">
                    </div>
                    <div class="wpcf7-response-output" aria-hidden="true"></div>

                    <div class="smart-captcha smart-captcha_invisible" id="yandex_captcha-824-6122"
                         data-testid="smartCaptcha-container">
                        <div style="display: none;">
                            <iframe frameborder="0"
                                    src="https://smartcaptcha.yandexcloud.net/backend.636bb879d1085041bc19.html?sitekey=ysc1_WRhWaN7JzeljVBdJPJzgiQrebE02VD25unvpK6dE939aabb1&amp;theme=light&amp;hl=ru&amp;host=dev.pechater.ru&amp;href=https%3A%2F%2Fdev.pechater.ru%2F&amp;test=false&amp;webview=false&amp;hideChallengeContainer=false"
                                    style="display: block; width: 100%; height: 100%; z-index: 0; transform: translate3d(0px, 0px, 0px);"
                                    aria-hidden="true" allow="encrypted-media *;" data-testid="backend-iframe"
                                    title="SmartCaptcha backend"></iframe>
                        </div>
                        <input type="hidden" name="smart-token" data-testid="smart-token">
                    </div>
                    <div class="item item--field NUMBER">
                        <label for="NUMBERCALLREVIEW">Номер телефона <span>*</span></label>
                        <input type="text" id="your-phone" placeholder="+7" required
                               data-maska="+# (###) ###-##-##">
                    </div>
                    <div class="item item--field TEXTA">
                        <label for="NUMBERCALLTEXTA">Ваше сообщение</label>
                        <textarea name="" id="NUMBERCALLTEXTA"></textarea>
                    </div>
                    <div class="item item--file">
                        <div class="file-names"></div>
                        <div class="send-content">
                            <input type="file" name="files[]"
                                   accept=".pdf,.jpeg,.jpg,.png,.gif,.doc,.docx,.xls,.xlsx,.ppt,.pptx"
                                   multiple="false">
                            <span class="add-file"><b>Прикрепить файл</b></span>
                        </div>
                    </div>
                    <button class="btn-blue">Заказать</button>
                    <div class="item item--policy">
                        Нажимая на кнопку "Заказать", вы соглашаетесь на обработку персональных данных в соответствии с
                        <a href="https://pechater.ru/politika-konfidentsialnosti/">политикой конфиденциальности </a>
                        и <a href="https://pechater.ru/usloviya-ispolzovaniya-sajta/">условиями использования сайта</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php wp_footer(); ?>

</body>
</html>