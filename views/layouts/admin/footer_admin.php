<div class="page-buffer"></div>
</div>

<footer id="footer" class="page-footer"><!--Footer-->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright &copy; 2018</p>
                <p class="pull-right">Test Shop</p>
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
<!--Подключение красивого файл кнопки-->
<script type="text/javascript" src="/template/bower_components/bootstrap-filestyle/src/bootstrap-filestyle.min.js"></script>
<!--Подключение красивого файл кнопки-->
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