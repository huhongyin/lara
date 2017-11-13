<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\IndexRepository;

class IndexController extends Controller
{
    private $repository;

    function   __construct(IndexRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {

        return view('index.index', []);

    }

    public function upload()
    {
        return view('index.upload', []);
    }

    public function doUpload(Request $request)
    {
        $res = $this->repository->doUpload($request->file());
        echo json_encode($res);exit;
    }

}
