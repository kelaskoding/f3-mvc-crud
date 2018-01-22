<?php

class HomeController{
    function index(){
        echo Template::instance()->render('index.html');
    }
}