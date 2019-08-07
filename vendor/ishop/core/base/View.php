<?php


namespace ishop\base;


use ishop\App;
use ishop\Db;

class View
{
    public $route;
    public $controller;
    public $model;
    public $view;
    public $prefix;
    public $layout;
    public $data = [];
    public $meta = [];


    public function __construct($route, $layout = '', $view = '', $meta = '')
    {
        $this->route = $route;
        $this->controller = $route['controller'];
        $this->model = $route['controller'];
        $this->view = $view;
        $this->prefix = $route['prefix'];
        $this->meta = $meta;
        if($layout === false){
            $this->layout = false;
        }else{
            $this->layout = $layout ?: LAYOUT;
        }
    }

    public function render($data)
    {
        if(is_array($data)) extract($data);
        $viewFile = APP . "/views/{$this->prefix}{$this->controller}/{$this->view}.php";
        if(is_file($viewFile)){
            ob_start();
            require_once $viewFile;
            $content = ob_get_clean();
        }else{
            throw new \Exception("Вид $viewFile не найден", 500);
        }

        if(false !== $this->layout){
            $layoutFile = APP . "/views/layouts/{$this->layout}.php";
            if(is_file($layoutFile)){
                require_once $layoutFile;
            }else{
                throw new \Exception("Не найден шаблон $this->layout", 500);
            }
        }
    }

    public function getMeta(){
        $metaContent = "<title>{$this->meta['title']}</title>" . PHP_EOL .
                        '<meta name="description" content="' . $this->meta['descr'] . "\"></meta>" . PHP_EOL .
                        '<meta name="keywords" content="' . $this->meta['keywords'] . "\"></meta>" . PHP_EOL;
        return $metaContent;
              
    }
}