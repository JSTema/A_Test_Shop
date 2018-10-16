<?php include ROOT . '/views/layouts/admin/header_admin.php'; ?>

    <section>
        <div class="container">
            <div class="row">

                <br/>

                <div class="breadcrumbs">
                    <ol class="breadcrumb">
                        <li><a href="/admin">Админпанель</a></li>
                        <li><a href="/admin/product">Управление товарами</a></li>
                        <li class="active">Удалить товар</li>
                    </ol>
                </div>


                <h4><b>Удалить товар #<?php echo $id; ?></b></h4>


                <p>Вы действительно хотите удалить этот товар?</p>

                <form method="post">
                    <input type="submit" name="submit" value="Удалить" class="btn btn-danger"/>
                </form>

            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

<?php include ROOT . '/views/layouts/admin/footer_admin.php'; ?>