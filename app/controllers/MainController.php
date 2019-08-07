<?php


namespace app\controllers;



use ishop\App;
use ishop\Cache;
use RedBeanPHP\R;
use admin_functions\Db_functions;

class MainController extends AppController
{

    public function indexAction(){
        $popular_doors_ids = R::findAll('populardoors');
        $popular_doors = [];
        //$popular_doors[1]['popular_door_id']
        foreach ($popular_doors_ids as $k){
            $id = $k['popular_door_id'];
            $door = R::find('door', "id=$id");
            $popular_doors[] = $door[$id];
        }
        $this->set(compact('popular_doors'));
    }

    public function formAction(){

        header('Location: ../');
    }


    //main/admin
    public function adminAction(){
        $functions = new Db_functions();
        $functions->inflateDb();
        $this->layout = false;
    }
}