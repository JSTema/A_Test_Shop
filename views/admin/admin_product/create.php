<?php include ROOT . '/views/layouts/admin/header_admin.php'; ?>

    <section>
        <div class="container">
            <div class="row">

                <br/>

                <div class="breadcrumbs">
                    <ol class="breadcrumb">
                        <li><a href="/admin">Админпанель</a></li>
                        <li><a href="/admin/product">Управление товарами</a></li>
                        <li class="active">Редактировать товар</li>
                    </ol>
                </div>
                <h4><b>Добавить новый товар</b></h4>
                <br/>
                <br/>

                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li style="color: darkgreen;"> - <?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <div class="col-lg-6">
                    <div class="login-form">
                        <form action="#" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                            <p>Название товара :</p>
                            <input type="text" name="name" placeholder="" value="">

                            <p>Артикул :</p>
                            <input type="text" name="code" placeholder="" value="">

                            <p>Стоимость, $</p>
                            <input type="text" name="price" placeholder="" value="">

                            <p>Категория :</p>
                            <select name="category_id" class="form-control">
                                <?php if (is_array($categoriesList)): ?>
                                    <?php foreach ($categoriesList as $category): ?>
                                        <option value="<?php echo $category['id']; ?>">
                                            <?php echo $category['name']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>

                            <br/><br/>

                            <p>Производитель :</p>
                            <input type="text" name="brand" placeholder="" value="" class="form-control">

                            <p>Изображение товара :</p>
                            <input type="file" name="image" placeholder="" value="" class="filestyle" data-text="Открыть файл" data-btnClass="btn-success">

                            <p>Детальное описание :</p>
                            <textarea name="description" class="form-control"></textarea>

                            <br/><br/>

                            <p>Наличие на складе :</p>
                            <select name="avaliability" class="form-control">
                                <option value="1" selected="selected">Да</option>
                                <option value="0">Нет</option>
                            </select>

                            <br/><br/>

                            <p>Новинка :</p>
                            <select name="is_new" class="form-control">
                                <option value="1" selected="selected">Да</option>
                                <option value="0">Нет</option>
                            </select>

                            <br/><br/>

                            <p>Рекомендуемые :</p>
                            <select name="is_recommended" class="form-control">
                                <option value="1" selected="selected">Да</option>
                                <option value="0">Нет</option>
                            </select>

                            <br/><br/>

                            <p>Статус :</p>
                            <select name="status" class="form-control">
                                <option value="1" selected="selected">Отображается</option>
                                <option value="0">Скрыт</option>
                            </select>

                            <br/><br/>

                            <input type="submit" name="submit" class="btn btn-success active" value="Сохранить">

                            <br/><br/>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

<?php include ROOT . '/views/layouts/admin/footer_admin.php'; ?>