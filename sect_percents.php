<section class="percent">
    <div class="percent__background" id="percent-graph">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="1920px" height="540px" viewBox="0 0 1920 540" enable-background="new 0 0 1920 540" xml:space="preserve">
            <g id="graph-3" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="graph-2" transform="translate(0.000000, -1999.000000)" stroke-width="94" stroke="#FFFFFF" fill-rule="freeze">
                    <g id="graph-1" transform="translate(-348.000000, 1413.000000)">
                        <polyline id="graph" points="312.500223 1093.4004 509.806399 933.33582 733.829535 1003.89176 888.910911 952.523584 1132.34769 1010.57119 1371.40717 838.394974 1640.61344 933.791423 1923.60807 714.856688 2103.03847 782.311506 2570.32462 399.241889"></polyline>
                    </g>
                </g>
            </g>
        </svg>
    </div>
    <div class="container">
        <div class="percent__block">
            <div class="percent__block-left">
                <div class="percent__block-text block__text-title">
                    <?$APPLICATION->IncludeFile("/local/include/index/percents_title.php", array(),array("MODE"=>"html", "NAME"=>"заголовок"));?>
                </div>
                <div class="percent__block-descr">
                    <?$APPLICATION->IncludeFile("/local/include/index/percents_text.php", array(),array("MODE"=>"html", "NAME"=>"текст"));?>
                </div>
            </div>
            <div class="percent__block-right">
                <div class="percent__block-summ">
                    <div class="percent__block-summ-percent">
                        <div class="percent__block-summ-number range-sum"></div>
                        <div class="percent__block-summ-rouble">
                            <?$APPLICATION->IncludeFile("/local/include/index/percents_ruble_img.php", array(),array("MODE"=>"html", "NAME"=>"изображение"));?>
                        </div>
                    </div>
                    <span class="percent__block-summ-text">
                        <?$APPLICATION->IncludeFile("/local/include/index/percents_monthly.php", array(),array("MODE"=>"html", "NAME"=>"текст"));?>
                    </span>
                    <?$APPLICATION->IncludeFile("/local/include/index/percents_input.php", array(),array("MODE"=>"html", "NAME"=>"шкалу"));?>
                    <div class="output-value">
                        <output class="percent__block-slider-output range-value" name="output" for="range"></output>
                        <div class="output-value__text">
                            <span>
                                <?$APPLICATION->IncludeFile("/local/include/index/percents_subscribers.php", array(),array("MODE"=>"html", "NAME"=>"текст"));?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>