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

    /**
     * 获取流程列表信息
     * @param $keyword string 搜索关键字
     * @return
     */
    public function processEngineList(Request $request)
    {
        $list = $this->repository->getList($request->keyword);
        return view('processEngine.list', ['list' => $list]);
    }

    /**
     * 新增/修改信息
     * @param $id int 修改对象id
     * @return
     */
    public function addProcessEngine(Request $request)
    {
        $info = [];
        if($request->id != 0)
            $info = $this->repository->getInfo($request->id);
        return view('processEngine.info', ['info' => $info]);
    }

}
