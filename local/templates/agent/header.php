<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;

$asset = Asset::getInstance();
Loc::loadMessages(__FILE__);
?>
<!DOCTYPE html>
<html xml:lang="<?= LANGUAGE_ID ?>" lang="<?= LANGUAGE_ID ?>">
<head>
    <title><?$APPLICATION->ShowTitle()?></title>
    <meta charset="<?=SITE_CHARSET?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta content="ie=edge" http-equiv="x-ua-compatible">

	<?$asset->addJs(SITE_TEMPLATE_PATH . "/js/jquery.min.js");?>
	<?$asset->addJs(SITE_TEMPLATE_PATH . "/js/jquery.fancybox.min.js");?>
	<?$asset->addJs(SITE_TEMPLATE_PATH . "/js/main.min.js");?>

    <meta property="og:type" content="website">
    <meta property="og:url" content="<?=$APPLICATION->GetCurPage(true)?>">
    <meta property="og:title" content="<?=$APPLICATION->ShowTitle(false)?>">
    <meta property="og:image" content="<?$APPLICATION->ShowProperty("og_image")?>">
    <meta property="og:description" content="<?$APPLICATION->ShowProperty("description")?>">
    <meta property="og:locale" content="<?=strtolower(LANGUAGE_ID)."_".strtoupper(LANGUAGE_ID)?>">
    <?$APPLICATION->ShowHead();?>
</head>
<body>
    <div class="wrapper">
        <div id="panel"><?$APPLICATION->ShowPanel();?></div>
        <div data-delay="300" class="main__background main-back">
            <img src="<?=SITE_TEMPLATE_PATH?>/img/Map.svg" alt="" class="main__background-pic">
        </div>
        <header class="header header-on-main">
                <div class="container header__container">
                    <div class="header__right">
                        <div class="logo">
                            <? $APPLICATION->IncludeFile("/local/include/header/logo.php", array(),array("MODE"=>"html", "NAME"=>"логотип"));?>
                        </div>

                        <!-- Custom select -->
                        <? $APPLICATION->IncludeFile("/local/include/header/location.php", array(),array("MODE"=>"html", "NAME"=>"селектор"));?>
                        <!-- Custom select --> 
                    </div>

                    <?$APPLICATION->IncludeComponent("bitrix:menu", "top", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"COMPONENT_TEMPLATE" => "mainmenu",
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "main",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	),
	false
);?>
                    <div class="header__number mobile-none">
                        <div class="header__number-phone site__number">
                            <? $APPLICATION->IncludeFile("/local/include/.default/number.php", array(),array("MODE"=>"html", "NAME"=>"номер"));?>
                        </div>
                    </div>
                    <br>

                    <div class="office tablet-none">
                        <? $APPLICATION->IncludeFile("/local/include/header/cabinet_button.php", array(),array("MODE"=>"html", "NAME"=>"кнопку"));?>
                    </div>

                    <div class="d-none">
                        <div class="header__login">
                            <span class="header__login-btn"><a href="#" class="header__login-link"><?=Loc::getMessage("T_AGENT_LOGOUT");?></a></span>
                            <div class="header__login-img">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/login.svg" alt="login" class="header__login-pic">
                            </div>
                        </div>
                    </div>

                    <div class="burger">
                        <span class="espan"></span>
                        <span class="espan"></span>
                        <span class="espan"></span>
                    </div>
                </div>
        </header>