<?php

class CatalogController
{
    public function actionIndex()
    {
        $categories = [];
        $categories = Category::getCategoriesList();

        $lastProducts = [];
        $lastProducts = Product::getLatestProducts(12);

        require_once ROOT . '/views/catalog/index.php';
        return true;
    }

    public function actionCategory($categoryId, $page = 1)
    {
//        echo 'Category: ' . $categoryId;
//        echo 'Page: ' . $page;


        $categories = [];
        $categories = Category::getCategoriesList();

        $categoriesProduct = [];
        $categoriesProduct = Product::getProductListByCategory($categoryId, $page);

        $total = Product::getTotalProductsInCategory($categoryId);

        $pagination = new Pagination($total, $page, Product::DEFAULT_VAL, "page-");

        require_once  ROOT . '/views/catalog/category.php';
        return true;

    }

}