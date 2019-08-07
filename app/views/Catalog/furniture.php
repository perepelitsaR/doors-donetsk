<div class="container products">
    <h2><span class="main">НАШИ</span> МОДЕЛИ</h2>


    <div class="product-type-name" style="font-size: 22px; text-align: center;"><span style="color:red;">Внимание! </span>У нас также есть <a href="roliki">ролики для душевых кабин!</a></div>
    <!-- <div class="product-type-amount">()</div> -->

    <?php
    $count = count($furniture);

    for($i = 0; $i < $count; $i++){
        if($i % 4 == 0){
            echo '<div class="popular-models">';
        }
        if($i % 2 == 0){
            echo '<div class="doors-wrapper">';
        }
        echo '<a href="../product?catalog=furniture&id='.$furniture[$i]['id'].'"><div class="door">';
        echo '<div class="akcia">Акция</div>';
        echo '<img class="door-image" style="height:auto; margin-top: 40px;" src="/'. $furniture[$i]['image_url'] .'">';
        echo '<div class="door-text"><p class="door-name text-center">'.$furniture[$i]['name'].'</p>';
        echo '<p class="door-price text-center new-price">'.$furniture[$i]['price'].' руб.</p>';
        echo '<p class="door-price text-center old-price">'.$furniture[$i]['old_price'].' руб.</p></div>';
        echo '</a></div>';
        if($i % 2 != 0 || $i == $count - 1){
            echo '</div>';
        }
        if($i % 4 == 3 || $i == $count - 1){
            echo '</div>';
        }
    }
    ?>
</div>
<div class="container">
    <?php echo $links?>
</div>
