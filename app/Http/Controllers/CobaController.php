<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class CobaController extends BaseController
{
    public function index()
    {
        return view('firstpage');
    }

    public function profil()
    {
        return view('secondpage');
    }

    public function kampus()
    {
        return view('thirdpage');
    }
}
