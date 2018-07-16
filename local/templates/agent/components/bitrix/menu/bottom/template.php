<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?/*<nav class="nav__menu footer__menu">
    <ul class="nav__menu-list">
        <li class="nav__menu-item footer__menu-item">
            <a href="help-change.html" class="nav__menu-link footer__menu-link">Схема работы</a>
        </li>
        <li class="nav__menu-item footer__menu-item">
            <a href="rates.html" class="nav__menu-link footer__menu-link">Тарифы</a>
        </li>
        <li class="nav__menu-item footer__menu-item">
            <a href="about.html" class="nav__menu-link footer__menu-link">О нас</a>
        </li>
        <li class="nav__menu-item footer__menu-item">
            <a href="contacts.html" class="nav__menu-link footer__menu-link">Контакты</a>
        </li>
    </ul>
</nav>*/?>

<?if (!empty($arResult)):?>
<nav class="nav__menu footer__menu">
    <ul class="nav__menu-list">

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
		continue;
?>
    <li class="nav__menu-item footer__menu-item">
        <a href="<?=$arItem["LINK"]?>" class="nav__menu-link footer__menu-link"><?=$arItem["TEXT"]?></a>
    </li>
	
<?endforeach?>

    </ul>
</nav>
<?endif?>