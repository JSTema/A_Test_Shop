<?php

class Product
{
    const DEFAULT_VAL = 3;

    public static function getLatestProducts($count = self::DEFAULT_VAL)
    {
        $link = Db::getConnection();

        $productsList = [];

        $query = ("SELECT `id`, `name`, `price`, `image`, `is_new`, `code` FROM `product` 
                  ORDER BY `id` DESC 
                  LIMIT  $count");
        $res = mysqli_query($link, $query);

        $i = 0;
        while($row = $res->fetch_array()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['code'] = $row['code'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['image'] = $row['image'];
            $productsList[$i]['is_new'] = $row['is_new'];
            $productsList[$i]['description'] = $row['description'];
            $i++;
        }
        return $productsList;
    }

    public static function getProductListByCategory($categoryId = false , $page = 1)
    {
        if($categoryId) {
            $limit = Product::DEFAULT_VAL;
            $page = intval($page);
            $offset = ($page - 1) * self::DEFAULT_VAL;

            $link = Db::getConnection();
            $products = [];

            $sql = "SELECT `id`, `name`, `price`, `is_new` FROM `product`
                    WHERE `status` = 1 AND `category_id` = $categoryId
                    ORDER BY `id` ASC
                    LIMIT $limit OFFSET $offset";

            $res = $link->query($sql);


            $i = 0;
            while ($row = $res->fetch_assoc()) {
                $products[$i]['id'] = $row['id'];
                $products[$i]['name'] = $row['name'];
                $products[$i]['price'] = $row['price'];
                $products[$i]['image'] = $row['image'];
                $products[$i]['is_new'] = $row['is_new'];
                $products[$i]['status'] = $row['status'];
                $products[$i]['status'] = $row['code'];
                $products[$i]['avaliability'] = $row['avaliability'];
                $products[$i]['brand'] = $row['brand'];
                $i++;
            }
            return $products;
        }
    }

    public static function getProductById($id)
    {
        $id = intval($id);

        if($id) {
            $link = Db::getConnection();
            $query = ("SELECT `id`, `name`, `code`, `price`, `image`, `brand`, `is_new`, `status` , `description` 
                        FROM `product`
                        WHERE `id` = $id");

            $res = mysqli_query($link, $query);

            return $res->fetch_assoc();
        }

    }

    public  static function getTotalProductsInCategory($categoryId)
    {
        $link = Db::getConnection();
        $sql = "SELECT count(id) as count FROM product
                WHERE status = 1 AND category_id = $categoryId";

        $res = $link->query($sql);
        $row = $res->fetch_assoc();

        return $row['count'];

    }

    public static function getProdustsByIds($idsArray)
    {
        // Соединение с БД
        $db = Db::getPDOConnection();
        // Превращаем массив в строку для формирования условия в запросе
        $idsString = implode(',', $idsArray);
        // Текст запроса к БД
        $sql = "SELECT * FROM product WHERE status='1' AND id IN ($idsString)";
        $result = $db->query($sql);
        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);
        // Получение и возврат результатов
        $i = 0;
        $products = array();
        while ($row = $result->fetch()) {
            $products[$i]['id'] = $row['id'];
            $products[$i]['code'] = $row['code'];
            $products[$i]['name'] = $row['name'];
            $products[$i]['price'] = $row['price'];
            $i++;
        }
        return $products;
    }

    public static function getRecommendedProducts()
    {
        // Соединение с БД
        $db = Db::getPDOConnection();
        // Получение и возврат результатов
        $result = $db->query("SELECT `id`, `name`, `price`, `is_new`, `image`, `brand` FROM `product` "
            . "WHERE `status` = '1' AND `is_recommended` = '1' "
            . "ORDER BY `id` DESC");
        $i = 0;
        $productsList = array();
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['is_new'] = $row['is_new'];
            $productsList[$i]['image'] = $row['image'];
            $productsList[$i]['brand'] = $row['brand'];
            $i++;
        }
        return $productsList;
    }

    public static function getImage($id)
    {
        // Название изображения-пустышки
        $noImage = '0.jpg';
        // Путь к папке с товарами
        $path = '/upload/images/products/';
        // Путь к изображению товара
        $pathToProductImage = $path . $id . '.jpg';
        if (file_exists($_SERVER['DOCUMENT_ROOT'].$pathToProductImage)) {
            // Если изображение для товара существует
            // Возвращаем путь изображения товара
            return $pathToProductImage;
        }
        // Возвращаем путь изображения-пустышки
        return $path . $noImage;
    }

    public static function getProductsList()
    {
        // Соединение с БД
        $db = Db::getPDOConnection();
        // Получение и возврат результатов
        $result = $db->query("SELECT `id`, `name`, `price`, `code`, `description` FROM `product` ORDER BY `id` ASC");
        $productsList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['code'] = $row['code'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['description'] = $row['description'];
            $i++;
        }
        return $productsList;
    }

    public static function deleteProductById($id)
    {
        // Соединение с БД
        $db = Db::getPDOConnection();
        // Текст запроса к БД
        $sql = "DELETE FROM `product` WHERE `id` = :id";
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    public static function updateProductById($id, $options)
    {
        $db = Db::getPDOConnection();
        // Текст запроса к БД
        $sql = "UPDATE product
            SET 
                name = :name, 
                code = :code, 
                price = :price, 
                category_id = :category_id, 
                brand = :brand, 
                avaliability = :avaliability, 
                description = :description, 
                is_new = :is_new, 
                is_recommended = :is_recommended, 
                status = :status
            WHERE id = :id";
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':code', $options['code'], PDO::PARAM_STR);
        $result->bindParam(':price', $options['price'], PDO::PARAM_STR);
        $result->bindParam(':category_id', $options['category_id'], PDO::PARAM_INT);
        $result->bindParam(':brand', $options['brand'], PDO::PARAM_STR);
        $result->bindParam(':avaliability', $options['avaliability'], PDO::PARAM_INT);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        $result->bindParam(':is_new', $options['is_new'], PDO::PARAM_INT);
        $result->bindParam(':is_recommended', $options['is_recommended'], PDO::PARAM_INT);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        return $result->execute();
    }


    public static function createProduct($options)
    {
        // Соединение с БД
        $db = Db::getPDOConnection();
        // Текст запроса к БД
        $sql = "INSERT INTO `product` 
             (`name`, `code`, `price`, `category_id`, `brand`, `avaliability`, `description`, `is_new`, `is_recommended`, `status`)
             VALUES 
             (:name, :code, :price, :category_id, :brand, :avaliability, :description, :is_new, :is_recommended, :status)";
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':code', $options['code'], PDO::PARAM_STR);
        $result->bindParam(':price', $options['price'], PDO::PARAM_STR);
        $result->bindParam(':category_id', $options['category_id'], PDO::PARAM_INT);
        $result->bindParam(':brand', $options['brand'], PDO::PARAM_STR);
        $result->bindParam(':avaliability', $options['avaliability'], PDO::PARAM_INT);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        $result->bindParam(':is_new', $options['is_new'], PDO::PARAM_INT);
        $result->bindParam(':is_recommended', $options['is_recommended'], PDO::PARAM_INT);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        if ($result->execute()) {
            // Если запрос выполенен успешно, возвращаем id добавленной записи
            return $db->lastInsertId();
        }
        // Иначе возвращаем 0
        return 0;
    }

    public static function getAvailabilityText($availability)
    {
        switch ($availability) {
            case '1':
                return 'В наличии';
                break;
            case '0':
                return 'Под заказ';
                break;
        }
    }


}