<?php
namespace App\controller;
use Core\framework;

class loginController extends framework{
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
        $this->display('admin/Login/login_home');
//        session_start();
//        if(isset($_SESSION['login'])){
//            $this->redirect('/index.php/index');
//        }else{
//            $this->display('login');
//        }
    }
    function check()
    {

//        if($_POST['user']==='admin'&&$_POST['password']==='123456'){
//            session_start();
//            $_SESSION['login']='true';
//            $this->redirect('/index.php/index');
//            if($_POST['check']==='on'){
//                setcookie('login','true',time()+20,'/');
//            }
//        }else{
//            header('location:/index.php/login');
//        }
    }
    function logout()
    {
        session_start();
        unset($_SESSION['login']);
        setcookie('login','',time()+600,'/');
        header('location:/index.php/login');
    }
}