<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>

<?if(!empty($arResult["ERROR_MESSAGE"]))
{
    foreach($arResult["ERROR_MESSAGE"] as $v)
        ShowError($v);
}
if(strlen($arResult["OK_MESSAGE"]) > 0)
{
    ?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
}
?>
<form action="<?=POST_FORM_ACTION_URI?>" method="POST" class="order__form">
    <?=bitrix_sessid_post()?>
    <?$APPLICATION->IncludeFile("/local/include/index/order_form_input_name.php", array(),array("MODE"=>"html", "NAME"=>"поле имени"));?>
    <?$APPLICATION->IncludeFile("/local/include/index/order_form_input_phone.php", array(),array("MODE"=>"html", "NAME"=>"поле номера телефона"));?>
    <div class="order__form-button">
        <div class="order__arrow order-arrow">
            <img alt="arrow" src="/img/arrow-order.svg" class="order__arrow-img">
        </div>
        <button data-fancybox="" data-src="#hidden-content" type="submit" href="#" class="order__form-button-btn">
            <?$APPLICATION->IncludeFile("/local/include/index/order_form_button.php", array(),array("MODE"=>"html", "NAME"=>"кнопку"));?>
        </button>
    </div>
    <label class="order__form-check">
        <div class="order__check">
            <input type="checkbox" class="order__checkbox-square">
            <div class="order__checkbox-custom">
            </div>
        </div>
        <span class="order__checkbox-text"></span><?$APPLICATION->IncludeFile("/local/include/index/order_form_agreement.php", array(),array("MODE"=>"html", "NAME"=>"текст согласия"));?></label>
</form>