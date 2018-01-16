<?php
namespace App\Repositories;

use Illuminate\Support\Facades\Storage;
use App\Models\ProcessEngineInfo;

class ProcessEngineRepository{

	public function getList($keyword)
	{
	    $where = [];
	    if(!is_null($keyword))
	        array_push($where, ['name', 'like', $keyword]);
		$list = ProcessEngineInfo::where($where)->paginate(15);
        return $list;
	}

	public function getInfo($id)
    {
        $where = ['id', '=', $id];
        $info = ProcessEngineInfo::where($where)->first();
        return $info;
    }

}
