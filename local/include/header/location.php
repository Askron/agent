<div class="select_mate" data-mate-select="active" >
    <select name="" onchange="" onclick="return false;" id="">
        <option value="1">Санкт-Петербург</option>
        <option value="2">Москва</option>
        <option value="3">Красноярск</option>
        <option value="4">Новосибирск</option>
    </select>
    <p class="selecionado_opcion"  onclick="open_select(this)"></p>
    <span onclick="open_select(this)" class="icon_select_mate">
        <? $APPLICATION->IncludeFile("/local/include/header/location_arrow.php", array(),array("MODE"=>"html", "NAME"=>"стрелку"));?>
    </span>
    <div class="cont_list_select_mate">
        <ul class="cont_select_int"></ul>
    </div>
</div>