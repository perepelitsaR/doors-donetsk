<?php


namespace app\controllers;


use RedBeanPHP\R;

class ProductController extends AppController
{
    public function indexAction(){
        $id = $_REQUEST['id'];
        $catalog = $_REQUEST['catalog'];

        $product = [];
        if($catalog == 'furniture'){
            $product = R::find('furniture', "id=$id");
        }else if($catalog == 'door'){
            $product = R::find('door', "id=$id");
        }
        $product = $product[$id];

        $this->set(compact('product'));
    }

}