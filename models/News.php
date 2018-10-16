<?php

class News
{
    public static function getNewsItemById($id)
    {
        $id = intval($id);
        $link = Db::getConnection();

        $query = "SELECT `id`, `date`, `title` FROM `news`
                  WHERE `id` = ".$id;
        $res = mysqli_query($link, $query);

        $newsItem = $res->fetch_assoc();

        return $newsItem;
    }

    public static function getNewsList()
    {
        $link = Db::getConnection();
        $newsList = [];

        $query = "SELECT `id`, `title`, `date` FROM `news` 
                  ORDER BY `date` DESC 
                  LIMIT 10";
        $res = mysqli_query($link, $query);


        $i = 0;
        while($row = $res->fetch_array()) {
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['title'] = $row['title'];
            $newsList[$i]['date'] = $row['date'];
            $i++;
        }
        return $newsList;

    }
}