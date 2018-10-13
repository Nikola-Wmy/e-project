<?php
namespace app\login\controller;

class Index
{
    public function index()
    {
        echo "Hello： " . cookie('user_name') . ', <a href="' . url('login/loginout') . '">退出</a>';
    }
}