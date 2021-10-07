<?php
namespace frontend\controller;
use frontend\model\product;
use core\application;
class productController
{
    public function listAction()
    {
        $model = new product();
        $data = $model->getLIst();
        application::render('list', ['data' => $data]);
    }

}