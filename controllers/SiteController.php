<?php


class SiteController
{
    public function actionIndex()
    {
        $categories = [];
        $categories = Category::getCategoriesList();

        $products = [];
        $products = Product::getLatestProducts(3);

        $sliderProducts = Product::getRecommendedProducts();

        require_once ROOT . '/views/site/index.php';
        return true;
    }

}