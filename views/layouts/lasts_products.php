<?php foreach ($products as $value) : ?>
    <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products" style="text-align: right">
                <?php if($value['is_new']):?>
                    <img src="/template/images/home/new.png"/>
                <?php endif;?>
                <div class="productinfo text-center">
                    <p>Code: <?php echo $value['code'];?></p>
                    <img src="<?php echo $value['image']; ?>" alt="" />
                    <h2><?php echo $value['price']; ?></h2>
                    <p>
                        <a href="/product/<?php echo $value['id']; ?>">Посмотреть <?php echo $value['name']; ?></a>
                    </p>
                    <p><b style="font-size: 16px;"><?php echo $value['name']; ?></b></p>

<!--                    <a href="/cart/add/--><?php //echo $value['id'];?><!--" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>-->
                </div>
            </div>
        </div>
    </div>
<?php endforeach;?>