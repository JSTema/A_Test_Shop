</div>
</div>
</section>

<footer id="footer"><!--Footer-->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="companyinfo">
                        <h2><span>e</span>-shopper</h2>
                        <p>The most famous Shop in your <b>LIFE</b></p>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="/template/images/home/iframe1.png" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Наши Клиенты</p>
                            <h2>09 МАЯ 2018</h2>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="/template/images/home/iframe2.png" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Наши Клиенты</p>
                            <h2>31 ДЕКАБРЯ 2017</h2>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="/template/images/home/iframe3.png" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Наши Клиенты</p>
                            <h2>16 ИЮНЯ 2017</h2>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="/template/images/home/iframe4.png" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Наши Клиенты</p>
                            <h2>24 МАЯ 2018</h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="address">
                        <img src="/template/images/home/map.png" alt="" />
                        <p>22 KarlMarx str, DP (Dnepr) UA</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Сервисы</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="https://novaposhta.ua/ru/office" target="_blank">Новая Почта</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Наши Партнеры</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="/catalog">D&G</a></li>
                            <li><a href="/catalog">ForMen</a></li>
                            <li><a href="/catalog">Armani</a></li>
                            <li><a href="/catalog">Adidas</a></li>
                            <li><a href="/catalog">Nike</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <a href="/contacts"><h2>Контакты</h2></a>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="/contacts">Map</a></li>
                            <li><a href="/contacts">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <a href="/about"><h2>О Нас</h2></a>
                    </div>
                </div>
                <div class="col-sm-3 col-sm-offset-1">
                    <div class="single-widget">
                        <h2>About Shopper</h2>
                        <form action="#" class="searchform">
                            <input type="text" placeholder="Your email address" />
                            <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                            <p><b>Желаете связаться с Нами?<br>Перейдите в раздел <a href="/contacts"><span style="color: #FE980F;">Контакты</span></a></b></p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2018 E-SHOPPER Inc. All rights reserved.</p>
                <p class="pull-right">Designed by <span><a target="_blank" href="/about">TestShopDev</a></span></p>
            </div>
        </div>
    </div>

</footer><!--/Footer-->

<script src="/template/js/jquery.js"></script>
<!--Our Slider From http://jquery.malsup.com/cycle2/download/-->
<script src="/template/js/jquery.cycle2.min.js" type="text/javascript"></script>
<script src="/template/js/jquery.cycle2.carousel.js" type="text/javascript"></script>
<!-- END of Our Slider From http://jquery.malsup.com/cycle2/download/-->
<script src="/template/js/bootstrap.min.js"></script>
<script src="/template/js/jquery.scrollUp.min.js"></script>
<script src="/template/js/price-range.js"></script>
<script src="/template/js/jquery.prettyPhoto.js"></script>
<script src="/template/js/main.js"></script>
<!--//Добавление товаров в корзину Ajax методом-->
<script>
    $(document).ready(function(){
        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/"+id, {}, function (data) {
                $("#cart-count").html(data);
            });
            return false;
        });
    });
</script>
</body>
</html>