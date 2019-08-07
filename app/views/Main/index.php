

<div class="container products">
    <h2><span class="main">ПОПУЛЯРНЫЕ</span> МОДЕЛИ</h2>
    <?php
    $doors = $popular_doors;
    $count = count($doors);
    for($j = 0; $j <  $count; $j++){
        $i = $j;
        if($j % 4 == 0){
            echo '<div class="popular-models">';
        }
        if($j % 2 == 0){
            echo '<div class="doors-wrapper">';
        }
        $type = 'dver_mezhkomnatnaja';
        echo '<a href="../product?catalog=door&id='.$doors[$i]['id'].'"><div class="door">';
        echo '<div class="akcia">Акция</div>';
        echo '<img class="door-image" src="'. $doors[$i]['image_url'] .'">';
        echo '<div class="door-text"><p class="door-name text-center">'.$doors[$i]['name'].'</p>';
        echo '<p class="door-price text-center new-price">'.$doors[$i]['price'].' руб.</p>';
        echo '<p class="door-price text-center old-price">'.$doors[$i]['old_price'].' руб.</p></div>';
        echo '</a></div>';
        if($j % 2 != 0 || $j == $count - 1){
            echo '</div>';
        }
        if($j % 4 == 3 || $j == $count - 1){
            echo '</div>';
        }
    }?>
    <div class="text-center">
        <a href="catalog"><button class="btn green-button text-center">Весь каталог >></button></a>
    </div>
</div>

<div class="container-fluid reasons-to-choose-background">
    <div class="container reasons-to-choose">
        <h2>
            <span class="main">ГЛАВНЫЕ ПРИЧИНЫ</span> ВЫБРАТЬ НАС</h2>
        <div class="row">
            <div class="col-md-6 info-with-image-in-border">
                <div class="image-block">
                    <img src="/images/img-back2.png" />
                    <img src="/images/time.png" />
                </div>
                <div class="text-block">
                    <h3>БЫСТРОЕ ИСПОЛНЕНИЕ</h3>
                    <p>От приема заказа до доставки и установки дверей проходит не более 14 дней.</p>
                </div>
            </div>

            <div class="col-md-6 info-with-image-in-border">
                <div class="image-block">
                    <img src="/images/img-back2.png" />
                    <img src="/images/safe.png" />
                </div>
                <div class="text-block">
                    <h3>ПОВЫШЕННАЯ ПРОЧНОСТЬ</h3>
                    <p>Надежные входные двери из особо прочной стали, устойчивой к взлому.</p>
                </div>
            </div>

            <div class="col-md-6 info-with-image-in-border">
                <div class="image-block">
                    <img src="/images/img-back2.png" />
                    <img src="/images/price.png" />
                </div>
                <div class="text-block">
                    <h3>ЦЕНА ОТ ПРОИЗВОДИТЕЛЯ</h3>
                    <p>Благодаря собственному производству вы получаете дверь по доступной цене.</p>
                </div>
            </div>

            <div class="col-md-6 info-with-image-in-border">
                <div class="image-block">
                    <img src="/images/img-back2.png" />
                    <img src="/images/work.png" />
                </div>
                <div class="text-block">
                    <h3>РАБОТА ПОД ЗАКАЗ</h3>
                    <p>Принимаем заказы на изготовление конструкции любой сложности </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid big-image-block" id="image-block2">
    <div class="image-block-text" id="image-block-text-2">
        <div class="image-block-text-inner">
            <h2>Заполните форму</h2>
            <p>чтобы узнать, сколько будет стоить ваша дверь.</p>
            <form method="POST" id="form" action="main/form">
                <input type="hidden" name="DATA[TITLE]" value="Заявка с лендинга №1"/>
                <input type="text" class="form-control my-form-control" placeholder="Ваше имя*" name="DATA[NAME]" required />
                <input type="tel" class="form-control my-form-control" placeholder="Ваш телефон*" name="DATA[PHONE_WORK]" required />
                <input type="email" class="form-control my-form-control" placeholder="Ваш email*" name="DATA[EMAIL_WORK]" required />
                <button type="submit" class="btn green-button">Получить расчет</button>
            </form>

        </div>
    </div>
</div>


<div id="map">
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af66e4ef8136c15a2e5b1d23b81564af4531e1a09aede30eabf8fc8352c481d70&amp;width=100%25&amp;height=560&amp;lang=ru_UA&amp;scroll=true"></script>
    <div class="map-descr-wrapper">
        <div class="map-description">
            <img id="map-img-background" src="/images/img-back4.png" />
            <img id="map-img" src="/images/map-doors.png" />
            <h3>Мы на карте</h3>
        </div>
    </div>
</div>