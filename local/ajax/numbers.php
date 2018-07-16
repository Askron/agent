<?
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if (\Bitrix\Main\Loader::includeModule('iblock'))
{
    $arNamesExcluded=array();
    foreach ($_POST as $key => $value)
    {
        $arNamesExcluded[]=$value;
    }
    $respond = \Bitrix\Iblock\ElementTable::getList(array(
        'select' => array('NAME'),
        'filter' => array('IBLOCK_ID' => '6', '!=NAME' => $arNamesExcluded),
        'limit' => '20'
    ));
    echo json_encode($respond->fetchAll());
}
?>