<?php require_once ROOT . '/views/layouts/header.php'; ?>
<?php require_once ROOT . '/views/layouts/left_site_bar.php'; ?>

    <div class="col-sm-9 padding-right">
        <div class="features_items"><!--features_items-->
            <h2 class="title text-center">Последние товары</h2>

            <?php foreach ($lastProducts as $product): ?>
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="<?php echo $product['image']; ?>" alt="" />
                                <h2>$<?php echo $product['price'];?></h2>
                                <p>
                                    <a href="/product/<?php echo $product['id'];?>">
                                        <b style="font-size: 16px;">Посмотреть : <?php echo $product['name'];?></b>
                                    </a>
                                </p>
<!--                                <a href="/cart/add/--><?php //echo $product['id'];?><!--" data-id="--><?php //echo $product['id'];?><!--"-->
<!--                                   class="btn btn-default add-to-cart">-->
<!--                                    <i class="fa fa-shopping-cart"></i>В корзину-->
<!--                                </a>-->
                            </div>
                            <?php if ($product['is_new']): ?>
                                <img src="/template/images/home/new.png" class="new" alt="" />
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>

        </div><!--features_items-->


    </div>

<?php require_once ROOT . '/views/layouts/footer.php'; ?>