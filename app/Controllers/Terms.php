<?php

namespace App\Controllers;

class Terms extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('terms');
        echo view('footer');
    }
}
