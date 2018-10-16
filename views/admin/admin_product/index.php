<?php include ROOT . '/views/layouts/admin/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <br/>
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админка</a></li>
                    <li class="active">Управление товарами</li>
                </ol>
            </div>
            <a href="/admin/product/create" class="btn btn-success back"><i class="fa fa-plus"></i> Добавить Новый Товар</a>
            <br>
            <br>
            <h4>Список товаров</h4>
            <br/>
            <table class="table-bordered table-striped table">
                <tr>
                    <th style="width: 20px;">ID товара</th>
                    <th>Артикул</th>
                    <th>Название товара</th>
                    <th>Описание</th>
                    <th>Цена $</th>
                    <th style="width: 40px; color: darkgreen">Редактировать</th>
                    <th style="width: 40px; color: darkred">Удалить</th>
                </tr>
                <?php foreach ($productsList as $product): ?>
                    <tr>
                        <td><?php echo $product['id']; ?></td>
                        <td><?php echo $product['code']; ?></td>
                        <td><?php echo $product['name']; ?></td>
                        <td><?php echo $product['description']; ?></td>
                        <td><?php echo $product['price']; ?></td>
                        <td><a href="/admin/product/update/<?php echo $product['id']; ?>" title="Редактировать"><i style="color: darkgreen;" class="fa fa-pencil-square-o"></i></a></td>
                        <td><a href="/admin/product/delete/<?php echo $product['id']; ?>" title="Удалить"><i style="color: darkred;" class="fa fa-times"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <br>
            <br>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/admin/footer_admin.php'; ?>
