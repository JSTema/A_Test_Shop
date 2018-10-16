<?php require_once (ROOT . '/views/layouts/header.php'); ?>
<?php require_once (ROOT . '/views/layouts/left_site_bar.php'); ?>

<div class="col-sm-9 padding-right">
    <div class="features_items">
        <h2 class="title text-center">Корзина</h2>
        <?php if ($result):?>
            <p style="text-align: center; color: darkgreen; font-size: 18px;">Ваш Заказ принят , Мы Вам перезвоним !</p>
        <?php else:?>
        <br>
            <p style="text-align: center; color: darkgreen; font-size: 18px;">Выбранно товаров : <b style="font-size: 20px;"><?php echo  $totalQuantity;?></b><br/>
                           На сумму : <b style="font-size: 20px;"><?php echo $totalPrice;?> $</b></p>
        <?php if (!$result) : ?>
        <div class="col-sm-4">
            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li style="color: darkred"> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <br>
            <b><p style="color: darkgreen; text-align: center; font-size: 14px;">Для оформления заказа заполните форму.
                <br> Наш менеджер свяжется с Вами.</p></b>
            <br>
            <div class="login-form">
                <form action="#" method="post">

                    <p>Ваша имя :</p>
                    <input type="text" name="userName" placeholder="Ваше Имя" value="<?php echo $userName; ?>"/>

                    <p>Номер телефона :</p>
                    <input type="text" name="userPhone" placeholder="Номер тедефона" value="<?php echo $userPhone; ?>"/>

                    <p>Комментарий к заказу :</p>
                    <input type="text" name="userComment" placeholder="Сообщение" value="<?php echo $userComment; ?>"/>

                    <br/>
                    <br/>
                    <input type="submit" name="submit" class="btn btn-primary" value="Оформить Заказ" />
                </form>
            </div>
        </div>
        <?php endif; ?>
        <?php endif; ?>

    </div>

<?php require_once (ROOT . '/views/layouts/footer.php'); ?>
