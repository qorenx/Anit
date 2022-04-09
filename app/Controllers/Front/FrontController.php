<?php

namespace App\Controllers\Front;

use App\Controllers\BaseController;

class FrontController extends BaseController
{
    public function index()
    {
        return view('İndex');
    }
}
