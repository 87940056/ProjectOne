<?php
namespace App\controller;
use Core\frameWork;
class screenController extends frameWork{
    function __construct(){
        session_start();
        if(isset($_SESSION['screen'])){
            $this->redirect('/index');
        }
    }
    function screen1(){
        $this->display('default/Log/screen1');
    }
    function screen2(){
        $this->display('default/Log/screen2');

    }
    function screen3(){
        $this->display('default/Log/screen3');
    }
    function screenSession(){
        session_start();
        $_SESSION['screen']=true;
        $this->redirect('/index');
    }
}