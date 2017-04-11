<?php
namespace App\controller;
use App\model\musicModel;
use Core\dbPdo;
use Core\frameWork;
class indexController extends frameWork{
    function index(){
        $this->display('default/Home/Home');
    }
    function log(){
        $this->display('default/Log/Log');
    }
    function log_detail(){
        $this->display('default/Log/LogDetail');
    }
    function car_rent(){
        $this->display('default/CarrEnt/CarRent');
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