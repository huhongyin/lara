<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\ProcessEngineRepository;
use Illuminate\Support\Facades\Storage;

class ProcessEngineController extends Controller
{
    private $repository;

    function   __construct(ProcessEngineRepository $repository)
    {
        $this->repository = $repository;
    }

    //已有配置列表
    public function processEngineList(Request $request)
    {

    }

}
