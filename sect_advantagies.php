<section class="advantage">
    <div class="advantage__background-plus-1 plus1">
        <img src="/img/plus.svg" alt="">
    </div>
    <div class="advantage__background-plus-2 plus2">
        <img src="/img/plus.svg" alt="">
    </div>
    <div class="advantage__background-plus-3 plus3">
        <img src="/img/plus.svg" alt="">
    </div>
    <div class="advantage__background-plus-4 plus4">
        <img src="/img/plus.svg" alt="">
    </div>
    <div class="advantage__background-plus-5 plus5">
        <img src="/img/plus.svg" alt="">
    </div>
    <div class="advantage__background-plus-6 plus6">
        <img src="/img/plus.svg" alt="">
    </div>
    <div class="advantage__background-plus-7 plus7">
        <img src="/img/plus.svg" alt="">
    </div>
    <div class="advantage__background-plus-8 plus8">
        <img src="/img/plus.svg" alt="">
    </div>
    <div class="container">
        <div class="advantage__title">
 <span class="advantage__title-text block__text-title">
     <?$APPLICATION->IncludeFile("/local/include/index/advantagies_title.php", array(),array("MODE"=>"html", "NAME"=>"заголовок"));?>
 </span>
        </div>
        <?$APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "advantagies",
            array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_SECTIONS_CHAIN" => "N",
                "AJAX_MODE" => "Y",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "COMPONENT_TEMPLATE" => "advantagies",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "DISPLAY_DATE" => "N",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "N",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array(
                    0 => "",
                    1 => "",
                ),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "7",
                "IBLOCK_TYPE" => "text_blocks",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "INCLUDE_SUBSECTIONS" => "N",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "6",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "Новости",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array(
                    0 => "",
                    1 => "icon",
                ),
                "SET_BROWSER_TITLE" => "N",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "SHOW_404" => "N",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_BY2" => "SORT",
                "SORT_ORDER1" => "DESC",
                "SORT_ORDER2" => "ASC",
                "STRICT_SECTION_CHECK" => "N"
            ),
            false
        );?>
    </div>
</section>