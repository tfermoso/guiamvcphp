<?php

class PageController extends Controller{
    public function home(){
        //require_once(__DIR__.'/../Views/home.view.php');
        $this->render("home");
    }
    public function listar(){
        require_once(__DIR__.'/../Views/listar.view.php');
    }
    public function modificar(){
        echo 'estoy en modificar';
    }
    public function nuevo(){
        echo 'estoy en nuevo';
    }

}