<?php

class Category
{
    public  static function getCategoriesList()
    {
        $link = Db::getConnection();

        $categoriesList = [];

        $query = "SELECT `id`, `name` FROM `category` ORDER BY `sort_order` DESC ";
        $res = mysqli_query($link, $query);

        $i = 0;
        while($row = $res->fetch_array()) {
            $categoriesList[$i]['id'] = $row['id'];
            $categoriesList[$i]['name'] = $row['name'];
            $i++;
        }
        return $categoriesList;
    }
    public static function getCategoriesListAdmin()
    {
        // Соединение с БД
        $db = Db::getPDOConnection();
        // Запрос к БД
        $result = $db->query("SELECT `id`, `name`, `sort_order`, `status` FROM `category` ORDER BY `sort_order` ASC");
        // Получение и возврат результатов
        $categoryList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $categoryList[$i]['sort_order'] = $row['sort_order'];
            $categoryList[$i]['status'] = $row['status'];
            $i++;
        }
        return $categoryList;
    }

}