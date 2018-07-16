<section class="numbers">
    <div class="container">
        <div class="numbers__title">
    <span class="numbers__title-text block__text-title">
        <?$APPLICATION->IncludeFile("/local/include/index/numbers_examples_title.php", array(),array("MODE"=>"html", "NAME"=>"заголовок"));?>
    </span>
        </div>
        <div class="numbers__container">
            <form action="post">
                <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.top", 
	"numbers", 
	array(
		"ACTION_VARIABLE" => "action",
		"ADD_PICT_PROP" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_TO_BASKET_ACTION" => "ADD",
		"BASKET_URL" => "/personal/basket.php",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPARE_NAME" => "CATALOG_COMPARE_LIST",
		"COMPATIBLE_MODE" => "Y",
		"COMPONENT_TEMPLATE" => "numbers",
		"CONVERT_CURRENCY" => "N",
		"CUSTOM_FILTER" => "",
		"DETAIL_URL" => "",
		"DISPLAY_COMPARE" => "N",
		"ELEMENT_COUNT" => "20",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"ENLARGE_PRODUCT" => "STRICT",
		"FILTER_NAME" => "",
		"HIDE_NOT_AVAILABLE" => "N",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "numbers",
		"LABEL_PROP" => array(
		),
		"LINE_ELEMENT_COUNT" => "3",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_COMPARE" => "Сравнить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"OFFERS_LIMIT" => "5",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPERTIES" => array(
		),
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false}]",
		"PRODUCT_SUBSCRIPTION" => "Y",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SECTION_URL" => "",
		"SEF_MODE" => "N",
		"SHOW_CLOSE_POPUP" => "N",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_MAX_QUANTITY" => "N",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_SLIDER" => "Y",
		"SLIDER_INTERVAL" => "3000",
		"SLIDER_PROGRESS" => "N",
		"TEMPLATE_THEME" => "blue",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"VIEW_MODE" => "SECTION"
	),
	false
);?>
                <div class="numbers__container-buttons">
                    <div class="numbers__container--link">
                        <?$APPLICATION->IncludeFile("/local/include/index/numbers_examples_show_more.php", array(),array("MODE"=>"html", "NAME"=>"кнопку"));?>
                    </div>
                    <div class="numbers__container-btn">
                        <?$APPLICATION->IncludeFile("/local/include/index/numbers_examples_order.php", array(),array("MODE"=>"html", "NAME"=>"кнопку"));?>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<script type="text/javascript">
    $('#showMore').click(function(event){
        event.preventDefault();
        var currentNumbers = new Array();
        $('.numbers__item-text').each(function(i, v){
            currentNumbers.push($(v).html());
        });
        BX.ajax.post('/local/ajax/numbers.php', currentNumbers, function(data){
            data=JSON.parse(data);
            for (key in data) {
                $('.numbers__list').append('<li class="nubmers__list-item" title="Двойной щелчок - Изменить номер"><label class="numbers__item-button number1" style="opacity: 1;"><div class="numbers__item-check"><input type="checkbox" class="numbers__checkbox-round"><div class="numbers__checkbox-custom"></div></div><span class="numbers__item-text">'+ data[key]['NAME'] +'</span></label></li>');
            }
            $('#showMore').css('display', 'none');
        });
    });
</script>