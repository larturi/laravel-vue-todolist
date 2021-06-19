<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AppController extends Controller
{

    public function __construct() {}

    public function index()
    {
        echo 'Online';
    }

}

