<?php


namespace ishop;


class Pagination
{
    private $maxItemCountOnPage;
    private $nItems;
    private $nPages;
    private $currentPage;
    private $beginItemIndex;
    private $nItemsOnCurrentPage;
    public function __construct($maxItemCountOnPage, $nItems, $currentPage)
    {
        $this->maxItemCountOnPage = $maxItemCountOnPage;
        $this->nItems = $nItems;
        $this->nPages = ceil($this->nItems / $this->maxItemCountOnPage);
        if($currentPage < 1){
            $this->currentPage = 1;
        }else if($currentPage > $this->nPages){
            $this->currentPage = $this->nPages;
        }else{
            $this->currentPage = $currentPage;
        }

        $this->beginItemIndex = $this->maxItemCountOnPage * ($this->currentPage - 1);
        $this->nItemsOnCurrentPage = min($this->maxItemCountOnPage,
                                  $this->nItems - $this->beginItemIndex);

    }

    public function getBeginItemIndex(){
        return $this->beginItemIndex;
    }

    public function getNumberOfItemsOnCurrentPage(){
        return $this->nItemsOnCurrentPage;
    }


    public function getPaginationLinks($baseUrl){
        //baseUrl в виде catalog/doors?PAGE=

        $begin = $this->beginItemIndex;
        $count = $this->nItemsOnCurrentPage;
        $items = $this->nItems;
        $page = $this->currentPage;
        $nPages = $this->nPages;

        $res = "<span>Товары ". ($begin + 1) . " - " . ($begin + $count) . " из " . $items ."</span>";
        $res .=  "<br>";
//echo "<span>Начало | Пред. | 1 2 3 4 5 | След. | Конец</span>";
        $res .= '<span class="pages-links">';
        if($page != 1){
            $res .= '<a href='. '"' . $baseUrl . '1' . '">Начало</a> | ';
            $res .= '<a href='. '"' . $baseUrl . ($page - 1) . '">Пред.</a> | ';
        }else{
            $res .= "Начало | Пред. | ";
        }


        $n = 5;//Кличество страниц
        $k = 2;//количество станиц по бокам от текущей
        if(($nPages - $page) < $k){
            $k = $n - ($nPages - $page) - 1;
        }
        for($p = $page - $k; $n > 0; $p++){
            if($p > 0){
                if($p == $page){
                    $res .= " ".$p." | ";
                }else{
                    $res .= '<a href='. '"' . $baseUrl . $p . '">'.$p.'</a> | ';
                }

                $n--;
            }
            if($p == $nPages){
                break;
            }
        }

        if($page != $nPages){
            $res .= '<a href='. '"' . $baseUrl . ($page + 1) . '">След.</a> | ';
            $res .= '<a href='. '"' . $baseUrl . $nPages . '">Конец.</a> | ';

        }else{
            $res .= " След. | Конец | ";
        }
        return $res;
    }


}