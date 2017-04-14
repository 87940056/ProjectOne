<?php
namespace App\controller;
use Core\frameWork;
class indexController extends frameWork{
    function __construct(){
        session_start();
        if(!isset($_SESSION['screen'])){
            $this->redirect('/screen/screen1');
        }else{
            if(!isset($_SESSION['login'])){
                $this->redirect('/login');
            }
        }
    }
    function index(){
        $this->display('default/Home/home');
    }
    function log(){
        $this->display('default/Log/Log');
    }
    function loglist(){
        $this->display('default/Log/LogList');
    }
    function log_detail(){
        $this->display('default/Log/LogDetail');
    }
    function car_rent(){
        $this->display('default/CarRent/CarRent');
    }
    function personal(){
        $this->display('default/Personal/Personal');
    }
    function fun_list(){
        $this->display('default/Personal/FunList');
    }
    function fun_detail(){
        $this->display('default/Personal/FunDetail');
    }
    function chat(){
        $this->display('default/Personal/Chat');
    }
    function search(){
        $this->display('default/Search/Search');
    }
    function search_in(){
        $this->display('default/Search/search_in');
    }
    function search_loser(){
        $this->display('default/Search/search_loser');
    }
    function search_network(){
        $this->display('default/Search/search_network');
    }
    function Order_details(){
        $this->display('default/Payment/OrderDetails');
    }
    function Choice_card(){
        $this->display('default/Payment/Choice_card');
    }
    function Payment_method(){
        $this->display('default/Payment/Payment_method');
    }
    function password(){
        $this->display('default/Payment/password');
    }


}