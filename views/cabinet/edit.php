<?php require_once ROOT . '/views/layouts/header.php'; ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-4-offset padding-right">
                    <?php if($result):?>
                        <p style="color: #3c763d">Данные отредактированы !</p>
                    <?php else:?>
                        <?php if(isset($errors) && is_array($errors)):?>
                            <?php foreach ($errors as $error) : ?>
                                <li style="color: darkred"><?php echo $error; ?></li>
                            <?php endforeach;?>
                        <?php endif;?>
                        <br/>
                        <h4 style="opacity: 0.7;">Редактирование данных </h4>
                        <br/>
                        <div class="signup-form">
                            <form action="#" method="post">
                                <p>Имя : </p>
                                <input type="text" name="name" placeholder="Your Name" value="<?php echo $name;?>">
                                <p>Пароль : </p>
                                <input type="password" name="password" placeholder="Your Password" value="<?php echo $password;?>">
                                <br/>
                                <input type="submit" name="submit" class="btn btn-primary" value="Отредактировать" />
                            </form>
                        </div>
                    <?php endif;?>
                    <br/>
                    <br/>
                </div>
            </div>
        </div>
    </section>
<?php require_once ROOT . '/views/layouts/footer.php'; ?>