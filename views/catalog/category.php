<?php require_once ROOT . '/views/layouts/header.php';?>
<?php require_once ROOT . '/views/layouts/left_site_bar.php';?>

    <div class="col-sm-9 padding-right">
    <div class="features_items">
        <h2 class="title text-center">Список товаров</h2>
   <?php foreach ($categoriesProduct as $prod):?>
    <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo text-center">
                    <img src="/template/images/home/product4.jpg" alt="" />
                    <h2>$<?php echo $prod['price'];?></h2>
                    <p>
                    <a href="/product/<?php echo $prod['id'];?>">
                        <br>
<!--                        ID:--><?php //echo $prod['id'];?><!--<br>-->
                        Посмотреть <?php echo $prod['name'];?>
                    </a>
                    </p>
                    <br>
                    <b style="font-size: 16px;"><?php echo $prod['name'];?></b>
<!--                    <a href="/cart/add/--><?php //echo $prod['id'];?><!--" class="btn btn-default add-to-cart" data-id="--><?php //echo $prod['id']; ?><!--"><i class="fa fa-shopping-cart"></i>В корзину</a>-->
<!--                    <a href="#" data-id="--><?php //echo $prod['id'];?><!--"-->
<!--                       class="btn btn-default add-to-cart">-->
<!--                        <i class="fa fa-shopping-cart"></i>В корзину-->
<!--                    </a>-->
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>

    </div>
        <?php echo $pagination->get(); ?>
    </div>

<?php require_once ROOT . '/views/layouts/footer.php';?>