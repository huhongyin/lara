<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {

        return view('index.index', []);

    }

    public function upload()
    {

    }

    public function doUpload()
    {

    }

}
