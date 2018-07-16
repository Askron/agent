<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
?>
        <footer class="footer">
            <div class="container footer__container">
                
                <div class="footer__left">
                    <div class="footer__policy">
                        <div class="footer__policy-number">
                            <div class="footer__number-phone site__number">
                                <?$APPLICATION->IncludeFile("/local/include/.default/number.php", array(),array("MODE"=>"html", "NAME"=>"номер"));?>
                            </div>
                            <div class="footer__policy-time">
                                <? $APPLICATION->IncludeFile("/local/include/footer/work_time.php", array(),array("MODE"=>"html", "NAME"=>"время"));?>
                            </div>
                        </div>
                        <div class="footer__policy-confid">
                            <div class="footer__policy-confid-text">
                                <?$APPLICATION->IncludeFile("/local/include/footer/privacy_policy.php", array(),array("MODE"=>"html", "NAME"=>"ссылку"));?>
                            </div>
                        </div>
                    </div>

                    <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "bottom",
                        Array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "left",
                            "COMPONENT_TEMPLATE" => "mainmenu",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "1",
                            "MENU_CACHE_GET_VARS" => array(),
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "ROOT_MENU_TYPE" => "main",
                            "USE_EXT" => "N"
                        )
                    );?>
                </div>

                <div class="footer__logo">
                    <? $APPLICATION->IncludeFile("/local/include/footer/copyright.php", array(),array("MODE"=>"html", "NAME"=>"копирайт"));?>
                </div>

            </div>
        </footer>

    </div>
    <div class="hidden-menu">
            <div class="hidden-menu__list">
                <ul class="hidden-nav__list">
                    <li class="hidden-nav__list-item">
                        <a href="help.html">Схема работы</a>
                    </li>
                    <li class="hidden-nav__list-item">
                        <a href="rates.html">Тарифы</a>
                    </li>
                    <li class="hidden-nav__list-item">
                        <a href="about.html">О нас</a>
                    </li>
                    <li class="hidden-nav__list-item">
                        <a href="contacts.html">Контакты</a>
                    </li>
                </ul>
                <div class="hidden-menu__button">
                    <button href="#" class="hidden-menu__button-btn">Кабинет агента</button>
                    <div class="hidden-menu__number">
                        <a href="tel:88007770567">8-800-777-0567</a>
                    </div>
                </div>
            </div>
    </div>
    <div class="form-main__popup" id="hidden-content">
        <div class="form-main__popup-text">Спасибо!<br>Ваш заказ успешно оформлен.</div>
    </div>
</body>
</html>