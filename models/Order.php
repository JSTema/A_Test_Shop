<?php

class Order
{
    public static function save($userName, $userPhone, $userComment, $userId, $products)
    {
        // connection DB
        $db = Db::getPDOConnection();
        // sql query into DB
        $sql = "INSERT INTO `orders` (`user_name`, `user_phone`, `user_comment`, `order_user_id`, `products`)
                VALUES (:user_name, :user_phone, :user_comment, :user_id, :products)";
        $products = json_encode($products);
        $result = $db->prepare($sql);
        $result->bindParam(':user_name', $userName, PDO::PARAM_STR);
        $result->bindParam(':user_phone', $userPhone, PDO::PARAM_STR);
        $result->bindParam(':user_comment', $userComment, PDO::PARAM_STR);
        $result->bindParam(':user_id', $userId, PDO::PARAM_STR);
        $result->bindParam(':products', $products, PDO::PARAM_STR);
        return $result->execute();
    }

    public static function getOrdersList()
    {

        $db = Db::getPDOConnection();

        $result = $db->query("SELECT `id`, `user_name`, `user_phone`, `date`, `status` FROM `orders` ORDER BY `id` DESC");
        $ordersList = array();

        $i = 0;
        while ($row = $result->fetch()) {
            $ordersList[$i]['id'] = $row['id'];
            $ordersList[$i]['user_name'] = $row['user_name'];
            $ordersList[$i]['user_phone'] = $row['user_phone'];
            $ordersList[$i]['date'] = $row['date'];
            $ordersList[$i]['status'] = $row['status'];
            $i++;
        }
        return $ordersList;
    }

    public static function getStatusText($status)
    {
        switch ($status) {
            case '1':
                return 'Новый заказ';
                break;
            case '2':
                return 'В обработке';
                break;
            case '3':
                return 'Доставляется';
                break;
            case '4':
                return 'Закрыт';
                break;
        }
    }

    public static function getOrderById($id)
    {
        // Соединение с БД
        $db = Db::getPDOConnection();
        // Текст запроса к БД
        $sql = 'SELECT * FROM `orders` WHERE id = :id';
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);
        // Выполняем запрос
        $result->execute();
        // Возвращаем данные
        return $result->fetch();
    }

    public static function deleteOrderById($id)
    {
        // Соединение с БД
        $db = Db::getPDOConnection();
        // Текст запроса к БД
        $sql = 'DELETE FROM `orders` WHERE id = :id';
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    public static function updateOrderById($id, $userName, $userPhone, $userComment, $date, $status)
    {
        // Соединение с БД
        $db = Db::getPDOConnection();
        // Текст запроса к БД
        $sql = "UPDATE `orders`
            SET 
                user_name = :user_name, 
                user_phone = :user_phone, 
                user_comment = :user_comment, 
                date = :date, 
                status = :status 
            WHERE id = :id";
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':user_name', $userName, PDO::PARAM_STR);
        $result->bindParam(':user_phone', $userPhone, PDO::PARAM_STR);
        $result->bindParam(':user_comment', $userComment, PDO::PARAM_STR);
        $result->bindParam(':date', $date, PDO::PARAM_STR);
        $result->bindParam(':status', $status, PDO::PARAM_INT);

        return $result->execute();
    }
}