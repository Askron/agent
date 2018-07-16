<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
?>
<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_RECURSIVE" => "N",
        "AREA_FILE_SHOW" => "sect",
        "AREA_FILE_SUFFIX" => "main",
        "COMPONENT_TEMPLATE" => "",
        "EDIT_TEMPLATE" => ""
    ),
    false,
    Array (
        "HIDE_ICONS"=>"Y"
    )
);?>
<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_RECURSIVE" => "N",
        "AREA_FILE_SHOW" => "sect",
        "AREA_FILE_SUFFIX" => "guide",
        "COMPONENT_TEMPLATE" => "",
        "EDIT_TEMPLATE" => ""
    ),
    false,
    Array (
        "HIDE_ICONS"=>"Y"
    )
);?>
<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_RECURSIVE" => "N",
        "AREA_FILE_SHOW" => "sect",
        "AREA_FILE_SUFFIX" => "video",
        "COMPONENT_TEMPLATE" => "",
        "EDIT_TEMPLATE" => ""
    ),
    false,
    Array (
        "HIDE_ICONS"=>"Y"
    )
);?>
<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_RECURSIVE" => "N",
        "AREA_FILE_SHOW" => "sect",
        "AREA_FILE_SUFFIX" => "percents",
        "COMPONENT_TEMPLATE" => "",
        "EDIT_TEMPLATE" => ""
    ),
    false,
    Array (
        "HIDE_ICONS"=>"Y"
    )
);?>
<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_RECURSIVE" => "N",
        "AREA_FILE_SHOW" => "sect",
        "AREA_FILE_SUFFIX" => "numbers",
        "COMPONENT_TEMPLATE" => "",
        "EDIT_TEMPLATE" => ""
    ),
    false,
    Array (
        "HIDE_ICONS"=>"Y"
    )
);?>
<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_RECURSIVE" => "N",
        "AREA_FILE_SHOW" => "sect",
        "AREA_FILE_SUFFIX" => "advantagies",
        "COMPONENT_TEMPLATE" => "",
        "EDIT_TEMPLATE" => ""
    ),
    false,
    Array (
        "HIDE_ICONS"=>"Y"
    )
);?>
<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_RECURSIVE" => "N",
        "AREA_FILE_SHOW" => "sect",
        "AREA_FILE_SUFFIX" => "order",
        "COMPONENT_TEMPLATE" => "",
        "EDIT_TEMPLATE" => ""
    ),
    false,
    Array (
        "HIDE_ICONS"=>"Y"
    )
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
