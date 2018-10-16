<?php require_once ROOT. '/views/layouts/header.php';  ?>
<section>
    <div class="container">
        <div class="row">
            <h2 style="color: "> Личный Кабинет</h2><br/>
            <h4>Добро пожаловать, <?php echo $userNameById['name']; ?></h4>
            <br/>
            <ul>
                <li><a href="/cabinet/edit">Редактирование данных </a></li>

            </ul>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
        </div>

    </div>
</section>

<?php require_once ROOT. '/views/layouts/footer.php';  ?>