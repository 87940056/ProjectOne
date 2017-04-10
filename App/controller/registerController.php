<?php
namespace App\controller;
use Core\framework;

class registerController extends framework{

    function index()
    {
        $this->display('admin/Register/Register');
    }
}