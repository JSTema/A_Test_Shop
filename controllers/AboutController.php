<?php
/**
 * Created by PhpStorm.
 * User: DvTema
 * Date: 27.09.2018
 * Time: 18:54
 */

class AboutController
{

    public function actionIndex()
    {
        require_once (ROOT . '/views/about/index.php');
        return true;
    }


}