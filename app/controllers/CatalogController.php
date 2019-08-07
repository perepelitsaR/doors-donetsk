<?php


namespace app\controllers;


use ishop\App;
use ishop\Pagination;
use RedBeanPHP\R;

class CatalogController extends AppController
{

    public function indexAction(){

    }

    public function doorsAction(){
        $maxItemCount = App::$app->getProperty('pagination');
        $count_vhodnie = R::count('door', 'type="dver_vhodnaja"');
        $count_mejkomnatnie = R::count('door', 'type="dver_mezhkomnatnaja"');
        $type = $_REQUEST['type'];
        $page = $_REQUEST['PAGE'] ? $_REQUEST['PAGE'] : 1;
        if($type){
            if($type == 'dver_vhodnaja'){
                $items = $count_vhodnie;
            }else {
                $items = $count_mejkomnatnie;
            }
            $doors = R::findAll('door', 'type="'. $type . '"');
        }else{
            $items = R::count('door');
            $doors = R::findAll('door');
        }

        $paginator = new Pagination($maxItemCount, $items, $page);
        $end = $paginator->getBeginItemIndex() + $paginator->getNumberOfItemsOnCurrentPage();
        $chosen_doors = [];
        $i = 0;
        foreach ($doors as $door){
            $i++;
            if($i > $paginator->getBeginItemIndex()){
                $chosen_doors[] = $door;

            }
            if ($i == $end){
                break;
            }


        }

        $links = $paginator->getPaginationLinks("doors?PAGE=");

        $this->set(compact('count_vhodnie', 'count_mejkomnatnie', 'chosen_doors', 'links', 'type'));
    }

    public function furnitureAction(){
        $maxItemCount = App::$app->getProperty('pagination');
        $page = $_REQUEST['PAGE'] ? $_REQUEST['PAGE'] : 1;
        $nItems = R::count('furniture');
        $furnitureItems = R::findAll('furniture');

        $paginator = new Pagination($maxItemCount, $nItems, $page);
        $end = $paginator->getBeginItemIndex() + $paginator->getNumberOfItemsOnCurrentPage();
        $furniture = [];
        $i = 0;
        foreach ($furnitureItems as $furnitureItem){
            $i++;
            if($i > $paginator->getBeginItemIndex()){
                $furniture[] = $furnitureItem;

            }
            if ($i == $end){
                break;
            }


        }

        $links = $paginator->getPaginationLinks("furniture?PAGE=");

        $this->set(compact( 'furniture', 'links'));
    }

    public function rolikiAction(){

    }

}