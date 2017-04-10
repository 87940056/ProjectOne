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
    function car_rent(){
        $this->display('default/CarrEnt/CarrEnt');
    }
    function personal(){
        $this->display('default/Personal/Personal');
    }
    function search(){
        $this->display('default/Search/Search');
    }
    function pay(){
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