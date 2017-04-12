<?php
namespace Core;
class frameWork{
    public $arr;
    public function session($k,$v){
        session_start();
        $_SESSION[$k]=$v;
    }
    public function redirect($url){
        header('Location:index.php/'.$url);
    }
    public function assign($k,$v){
        $this->arr[$k]=$v;
    }
    public function display($mark){
        $file=VIEW.$mark.'.html';
        if($this->arr){
            extract($this->arr);
        }
        include $file;
    }
    public function json($value){
        header('content-Type:text/json');
        echo json_encode($value);
    }
    public static function start(){
        $url=$_SERVER['REQUEST_URI']!='/'?$_SERVER['REQUEST_URI']:'index.php';
        $route=explode('/',explode('?',$url)[0]);
        $c=isset($route[2])?$route[2].'Controller':"indexController";
        $m=isset($route[3])?$route[3]:'index';
        $classFile=CONTROLLER."{$c}.php";
        if(file_exists($classFile)){
            require $classFile;
            $t='\\App\\controller\\'.$c;
            if(class_exists($t)&&method_exists($t,$m)){
                $o=new $t();
                $o->$m();
            }else{
                include VIEW.'404.html';
            }
        }else{
            include VIEW.'404.html';
        }
    }
}