<?php

class NewsController
{
    public function actionIndex()
    {
//        $newsList = [];
//        $newsList = News::getNewsList();

        require_once (ROOT . '/views/news/index.php');

        return true;
    }
    public function actionView($id)
    {
        $newsItem = News::getNewsItemById($id);

        echo "<pre/>";
        print_r($newsItem);
        echo "<pre/>";
//           echo $parameters[0] . "<br/>";
//           echo $parameters[1] . "<br/>";
//           echo $parameters[2] . "<br/>";


    }
}