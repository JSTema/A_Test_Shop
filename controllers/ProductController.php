<?php

class ProductController
{
    public  function actionView($productId)
    {
        $categories = [];
        $categories = Category::getCategoriesList();

        $products = Product::getProductById($productId);


        require_once  ROOT . '/views/products/index.php';

        return true;
    }
}