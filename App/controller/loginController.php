<?php
namespace App\controller;

use Core\frameWork;

class loginController extends frameWork{
//    function __construct()
//    {
//        if(isset($_COOKIE['login'])) {
//            session_start();
//            $_SESSION['login'] = true;
//            $this->redirect('/index.php/index');
//        }
//    }
    function index()
    {
        session_start();
        if(isset($_SESSION['login'])){
            $this->redirect('');
        }else{
            $this->display('admin/Login/login_home');
        }
    }
    function login(){
        $this->display('admin/Login/Login');
    }

    function check()
    {
        if($_POST['username']==='admin'&&$_POST['password']==='123456'){
            session_start();
            $_SESSION['login']='true';
            $this->redirect('');
//            if($_POST['check']==='on'){
//                setcookie('login','true',time()+20,'/');
//            }
        }else{
            header('location:/index.php/login');
        }
    }
    function logout()
    {
        session_start();
        unset($_SESSION['login']);
        setcookie('login','',time()+600,'/');
        header('location:/index.php/login');
    }
}