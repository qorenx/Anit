<?php

namespace App\Controllers\Back;

use App\Controllers\BaseController;

class BackController extends BaseController
{
    public function index()
    {
        return view('/admin/admin.php');
    }
}
