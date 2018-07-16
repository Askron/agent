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
<div class="order__bottom">
    <?
    $index=0;
    foreach($arResult["ITEMS"] as $arItem):
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        switch($index)
        {
            case 0: $classSuffix = 'pay'; break;
            case 1: $classSuffix = 'partners'; break;
            case 2: $classSuffix = 'year'; break;
        }
    ?>
        <div class="order__bottom-item order__<?=$classSuffix?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <span class="order__bottom-item-number"><?=$arItem["NAME"]?></span>
            <span class="order__bottom-item-text"><?=$arItem["PREVIEW_TEXT"]?></span>
        </div>
    <?
        $index++;
    endforeach;
    ?>
</div>