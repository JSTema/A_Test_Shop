 <?php require_once ROOT . '/views/layouts/header.php'; ?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-4-offset padding-right">
                <?php if($result):?>
                    <p style="color: #3c763d">Вы Успешно Зарегестрированы!</p>
                <?php else:?>
                    <?php if(isset($errors) && is_array($errors)):?>
                        <?php foreach ($errors as $error) : ?>
                            <li style="color: darkred"><?php echo $error; ?></li>
                        <?php endforeach;?>
                    <?php endif;?>
                    <p style="opacity: 0.7;">Регистрация</p>
                    <div class="signup-form">
                        <form action="#" method="post">
                            <input type="text" name="name" placeholder="Your Name" value="<?php echo $name;?>">
                            <input type="email" name="email" placeholder="Your E-Mail" value="<?php echo$email; ?>">
                            <input type="password" name="password" placeholder="Your Password" value="<?php echo $password;?>">
                            <input type="submit" name="submit" class="btn btn-primary" value="Регистрация" />
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