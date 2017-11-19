<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\IndexRepository;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
    private $repository;

    function   __construct(IndexRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
	$photoes = $this->repository->getPhotoesByUid();
        return view('index.index', compact('photoes'));

    }

    public function upload()
    {
	$url = Storage::url('photoes/test/1.jpg');
        return view('index.upload', []);
    }

    public function doUpload(Request $request)
    {
        $res = $this->repository->doUpload($request->file());
	return redirect('/');
       // echo json_encode($res);exit;
    }

}
