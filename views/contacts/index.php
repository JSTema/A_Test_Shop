<?php require_once (ROOT . "/views/layouts/header.php");?>

<div id="contact-page" class="container">
    <div class="bg">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="title text-center"><strong>Наши </strong>Контакты</h2>
                <div id="gmap" class="contact-map">
                    <?php require_once (ROOT . "/views/contacts/maps.php");?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8">
                <?php if($result):?>
                    <p style="color: #2b542c">Сообщение отправленно! Мы ответим Вам на указанный Вами email </p>
                <?php else:?>
                <?php if (isset($errors) && is_array($errors)):?>
                    <?php foreach ($errors as $error): ?>
                        <ul>
                            <li style="color: darkred"><?php echo $error;?></li>
                        </ul>
                    <?php endforeach; ?>
                <?php endif;?>
                <div class="contact-form">
                    <h2 class="title text-center">связаться c Нами</h2>
                    <div class="status alert alert-success" style="display: none"></div>
                    <form action="#" id="main-contact-form" class="contact-form row" name="contact-form" method="post" enctype="multipart/form-data">
<!--                        <div class="form-group col-md-6">-->
<!--                            <input type="text" name="name" class="form-control" required="required" placeholder="Имя" value="--><?php //echo $name;?><!--">-->
<!--                        </div>-->
                        <div class="form-group col-md-6">
                            <input type="email" name="userEmail" class="form-control" placeholder="Email" value="<?php echo $userEmail;?>">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="text" name="userSubject" class="form-control" placeholder="Тема Сообщения" value="<?php echo $userSubject;?>">
                        </div>
                        <div class="form-group col-md-12">
                            <textarea name="userText" id="message"  class="form-control" rows="8" placeholder="Ваше Сообщение" value="<?php echo $userText;?>"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <input type="submit" name="submit" class="btn btn-primary pull-right" value="Отправить">
                        </div>
                    </form>
                </div>
                <?php endif;?>
            </div>
            <div class="col-sm-4">
                <div class="contact-info">
                    <h2 class="title text-center">информация о нас</h2>
                    <address>
                        <p>Test-Shop Inc.</p>
                        <p>22 KarlMarx str, DP</p>
                        <p>Dnepr UA</p>
                        <p>Mobile: +380 50-001-01-01</p>
<!--                        <p>Fax: 1-714-252-0026</p>-->
                        <p>Email: jsvdvtema@gmail.com</p>
                    </address>
                    <div class="social-networks">
                        <h2 class="title text-center">мы в соц сетях</h2>
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/#contact-page-->

<?php require_once (ROOT . "/views/layouts/footer.php");?>
