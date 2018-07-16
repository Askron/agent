<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<!--<ul class="advantage__list">
    <li class="advantage__list-item">
        <div class="advantage__list-img">
            <img alt="STAR" src="/img/star.svg" class="advantage__list-img-pic">
        </div>
        <div class="advantage__list-title">
            <span class="advantage__list-title-text">Красивые номера от 300₽</span>
        </div>
        <div class="advantage__list-descr">
            <span class="advantage__list-descr-text">Вы будете получать на свою банковскую карту&nbsp;пожизненно (пока работает номер) до&nbsp;20% каждый месяц от суммы потраченных клиентом средств.</span>
        </div>
    </li>
    <li class="advantage__list-item">
        <div class="advantage__list-img">
            <img alt="HAND" src="/img/hand.svg" class="advantage__list-img-pic">
        </div>
        <div class="advantage__list-title">
            <span class="advantage__list-title-text">Постоянная комиссия с каждого активного номера</span>
        </div>
        <div class="advantage__list-descr">
            <span class="advantage__list-descr-text">Вы будете получать на свою банковскую карту&nbsp;пожизненно (пока работает номер) до&nbsp;20% каждый месяц от суммы потраченных клиентом средств.</span>
        </div>
    </li>
    <li class="advantage__list-item">
        <div class="advantage__list-img">
            <img alt="ROUBLE" src="/img/rouble.svg" class="advantage__list-img-pic">
        </div>
        <div class="advantage__list-title">
            <span class="advantage__list-title-text">Нулевые затраты</span>
        </div>
        <div class="advantage__list-descr">
            <span class="advantage__list-descr-text">Вы будете получать на свою банковскую карту&nbsp;пожизненно (пока работает номер) до&nbsp;20% каждый месяц от суммы потраченных клиентом средств.</span>
        </div>
    </li>
    <li class="advantage__list-item">
        <div class="advantage__list-img">
            <img alt="BASE" src="/img/base.svg" class="advantage__list-img-pic">
        </div>
        <div class="advantage__list-title">
            <span class="advantage__list-title-text">Красивые номера от 300₽</span>
        </div>
        <div class="advantage__list-descr">
            <span class="advantage__list-descr-text">Вы будете получать на свою банковскую карту&nbsp;пожизненно (пока работает номер) до&nbsp;20% каждый месяц от суммы потраченных клиентом средств.</span>
        </div>
    </li>
    <li class="advantage__list-item">
        <div class="advantage__list-img">
            <img alt="HUMAN" src="/img/human.svg" class="advantage__list-img-pic">
        </div>
        <div class="advantage__list-title">
            <span class="advantage__list-title-text">Постоянная комиссия с каждого активного номера</span>
        </div>
        <div class="advantage__list-descr">
            <span class="advantage__list-descr-text">Вы будете получать на свою банковскую карту&nbsp;пожизненно (пока работает номер) до&nbsp;20% каждый месяц от суммы потраченных клиентом средств.</span>
        </div>
    </li>
    <li class="advantage__list-item">
        <div class="advantage__list-img">
            <img alt="EXCLUSIVE" src="/img/exclusive.svg" class="advantage__list-img-pic">
        </div>
        <div class="advantage__list-title">
            <span class="advantage__list-title-text">Нулевые затраты</span>
        </div>
        <div class="advantage__list-descr">
            <span class="advantage__list-descr-text">Вы будете получать на свою банковскую карту&nbsp;пожизненно (пока работает номер) до&nbsp;20% каждый месяц от суммы потраченных клиентом средств.</span>
        </div>
    </li>
</ul>-->

<ul class="advantage__list">
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <li class="advantage__list-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div class="advantage__list-img">
                <img alt="STAR" src="<?=$arItem["DISPLAY_PROPERTIES"]["icon"]["FILE_VALUE"]["SRC"];?>" class="advantage__list-img-pic">
            </div>
            <?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
                <div class="advantage__list-title">
                    <span class="advantage__list-title-text"><?echo $arItem["NAME"]?></span>
                </div>
            <?endif;?>
            <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
                <div class="advantage__list-descr">
                    <span class="advantage__list-descr-text"><?echo $arItem["PREVIEW_TEXT"];?></span>
                </div>
            <?endif;?>
        </li>
    <?endforeach;?>
</ul>
