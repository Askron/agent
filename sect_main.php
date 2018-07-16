<div class="page__content">
    <section class="main">
        <div class="container">
            <div class="main__content">
                <div class="main__content-top">
                    <div class="main__content-text">
                        <? $APPLICATION->IncludeFile("/local/include/index/main_title.php", array(),array("MODE"=>"html", "NAME"=>"заголовок"));?>
                    </div>
                    <div class="main__content-button">
                        <? $APPLICATION->IncludeFile("/local/include/index/main_button.php", array(),array("MODE"=>"html", "NAME"=>"кнопку"));?>
                    </div>
                </div>
                <div data-delay="1000" class="main__content-info main-section">
                    <div class="info__block-right">
                        <div class="info__block-text">
                            <? $APPLICATION->IncludeFile("/local/include/index/main_block_left_title.php", array(),array("MODE"=>"html", "NAME"=>"цену"));?>
                        </div>
                        <div class="info__block-descr">
                            <? $APPLICATION->IncludeFile("/local/include/index/main_block_left_text.php", array(),array("MODE"=>"html", "NAME"=>"текст"));?>
                        </div>
                    </div>
                    <div class="info__block-left">
                        <div class="info__block-text">
                            <? $APPLICATION->IncludeFile("/local/include/index/main_block_right_title.php", array(),array("MODE"=>"html", "NAME"=>"цену"));?>
                        </div>
                        <div class="info__block-descr">
                            <? $APPLICATION->IncludeFile("/local/include/index/main_block_right_text.php", array(),array("MODE"=>"html", "NAME"=>"текст"));?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>