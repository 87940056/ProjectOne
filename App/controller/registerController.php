<?php
namespace App\controller;
use App\model\musicModel;
use Core\dbPdo;
use Core\frameWork;
class registerController extends frameWork
{
    function index(){
        $this->display('admin/Register/message');
    }
}