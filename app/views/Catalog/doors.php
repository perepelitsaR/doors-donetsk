<div class="products">
    <h2 class="text-center"><span class="main">НАШИ</span> МОДЕЛИ</h2>
    <div class="container text-center" style="margin-bottom: 20px;"><h3>Двери поставляются в таких <a href="doors_colors.php">цветах</a></h3></div>
    <ul class="product-type-links">
        <li>
            <a href="doors?type=dver_vhodnaja">
                <div class="product-type-name">Входные двери</div>
                <div class="product-type-amount">(<?= $count_vhodnie?>)</div>
            </a>
        </li>
        <hr>
        <li>
            <a href="doors?type=dver_mezhkomnatnaja">
                <div class="product-type-name">Межкомнатные двери</div>
                <div class="product-type-amount">(<?= $count_mejkomnatnie?>)</div>
            </a>
        </li>
        <hr>
    </ul>
    <?php




    $count = count($chosen_doors);
    for( $j = 0; $j < $count;  $j++){
        if($j % 4 == 0){
            echo '<div class="popular-models">';
        }
        if($j % 2 == 0){
            echo '<div class="doors-wrapper">';
        }

        echo '<a href="../product?catalog=door&id='.$chosen_doors[$j]['id'].'"><div class="door">';
        echo '<div class="akcia">Акция</div>';
        echo '<img class="door-image" src="/'.  $chosen_doors[$j]['image_url'] .'">';
        echo '<div class="door-text"><p class="door-name text-center">'.$chosen_doors[$j]['name'].'</p>';
        echo '<p class="door-price text-center new-price">'.$chosen_doors[$j]['price'].' руб.</p>';
        echo '<p class="door-price text-center old-price">'.$chosen_doors[$j]['old_price'].' руб.</p></div>';
        echo '</a></div>';
        if($j % 2 != 0 || $j == $count - 1){
            echo '</div>';
        }
        if($j % 4 == 3 || $j == $count - 1){
            echo '</div>';
        }
    }
    ?>
</div>
<div class="container">
<?= $links?>