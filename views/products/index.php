<?php require_once ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
<?php require_once ROOT . '/views/layouts/left_site_bar.php'; ?>
            <h2 class="title text-center">Полная Информация о Товаре</h2>
            <div class="col-sm-9 padding-right">
                <div class="features_items">

                <div class="product-details"><!--product-details-->
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="view-product">
                                <img src="/template/images/product-details/1.jpg" alt="" />
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="product-information"><!--/product-information-->
                                <img src="/images/product-details/new.jpg" class="newarrival" alt="" />
                                <h2><?php  echo $products['name'] ;?></h2>
                                <p><?php echo $products['code']; ?></p>
                                <span>
                                            <span>US $<?php echo $products['price']; ?></span>
                                            <label><?php echo $products['status']; ?></label>
                                            <input type="text" value="1" />
                                            <p>
                                              <a href="#" data-id="<?php echo $products['id']; ?>"
                                                    class="btn btn-default add-to-cart">
                                                    <i class="fa fa-shopping-cart"></i>В корзину
                                              </a>
                                            </p>
                                        </span>
                                <p><b>Наличие:</b> <?php echo $products['status']; ?></p>
                                <p><b>Состояние:</b> <?php echo $products['is_new'];?></p>
                                <p><b>Производитель:</b> <?php echo $products['brand'];?></p>
                            </div><!--/product-information-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <h5><?php echo $products['description'];?></h5>
                            <p>Разнообразный и богатый опыт постоянный количественный рост и
                                сфера нашей активности требуют определения и уточнения направлений
                                прогрессивного развития. Таким образом реализация намеченных плановых
                                заданий требуют определения и уточнения форм развития.</p>
                            <p>Повседневная практика показывает, что новая модель организационной
                                деятельности способствует подготовки и реализации позиций, занимаемых
                                участниками в отношении поставленных задач. Таким образом постоянное
                                информационно-пропагандистское обеспечение нашей деятельности влечет
                                за собой процесс внедрения и модернизации форм развития.</p>
                            <p>Повседневная практика показывает, что новая модель организационной
                                деятельности способствует подготовки и реализации позиций, занимаемых
                                участниками в отношении поставленных задач. Таким образом постоянное
                                информационно-пропагандистское обеспечение нашей деятельности влечет
                                за собой процесс внедрения и модернизации форм развития.</p>
                            <p>Повседневная практика показывает, что новая модель организационной
                                деятельности способствует подготовки и реализации позиций, занимаемых
                                участниками в отношении поставленных задач. Таким образом постоянное
                                информационно-пропагандистское обеспечение нашей деятельности влечет
                                за собой процесс внедрения и модернизации форм развития.</p>
                        </div>
                    </div>
                </div><!--/product-details--->
            </div>
        </div>
    </div>
</section>


<?php require_once ROOT . '/views/layouts/footer.php'; ?>
