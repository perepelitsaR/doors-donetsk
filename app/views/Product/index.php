<?php

$choosen_product = $product;
?>
<div class="container">
    <h2 class="text-center"><?php echo $choosen_product['name']?></h2>
    <div class="row">
        <div class="col-sm-5 text-center">
            <img class="door-image-descr" src="<?php echo $choosen_product['image_url'] ?>">
        </div>
        <div class="col-sm-7">
            <div class="item_price">
                <div class="item_old_price"><?php echo $choosen_product['old_price']?> руб.</div>
                <div class="row">
                    <div class="item_current_price col-sm-3"><?php echo $choosen_product['price']?> руб.</div>
                    <div class="item_economy_price col-sm-7">(Экономия в цене - <?php echo $choosen_product['old_price'] - $choosen_product['price']  ?> руб.)</div>
                </div>
            </div>
            <div class="description">
                <?php echo $choosen_product['description']?>
            </div>
        </div>
    </div>
</div>