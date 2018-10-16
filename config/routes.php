<?php

return array(
    'product/(\d{1,})' => 'product/view/$1',

    'catalog' => 'catalog/index',

    'category/(\d{1,})/page-(\d{0,})' => 'catalog/category/$1/$2',
    'category/(\d{0,})' => 'catalog/category/$1',

    'cart/checkout' => 'cart/checkout',
    'cart/delete/([0-9]+)' => 'cart/delete/$1',
    'cart/add/(\d{1,})' => 'cart/add/$1',
    'cart/addAjax/(\d{1,})' => 'cart/addAjax/$1',
    'cart' => 'cart/index',

    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',
    'cabinet/edit' => 'cabinet/edit',
    'cabinet' => 'cabinet/index',

    'admin/product/create' => 'adminProduct/create',
    'admin/product/update/([0-9]+)' => 'adminProduct/update/$1',
    'admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1',
    'admin/product' => 'adminProduct/index',
//
//    'admin/category/create' => 'adminCategory/create',
//    'admin/category/update/([0-9]+)' => 'adminCategory/update/$1',
//    'admin/category/delete/([0-9]+)' => 'adminCategory/delete/$1',
//    'admin/category' => 'adminCategory/index',
//
//    'admin/order/update/([0-9]+)' => 'adminOrder/update/$1',
//    'admin/order/delete/([0-9]+)' => 'adminOrder/delete/$1',
//    'admin/order/view/([0-9]+)' => 'adminOrder/view/$1',
//    'admin/order' => 'adminOrder/index',
    // Admin index
    'admin' => 'admin/index',

    'contacts' => 'contacts/index',

    'about' => 'about/index',

    'news/(\d{1,})' => 'news/view/$1',
    'news' => 'news/index',

    'index.php' => 'site/index',
    '' => 'site/index',

//    'product/(\d{1,})' => 'product/view/$1',
//    'catalog' => 'catalog/index',
//    'category/(\d{1,})' => 'catalog/category/$1',
//    '' => 'site/index',

);