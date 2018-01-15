<?php
namespace App\Repositories;

use Illuminate\Support\Facades\Storage;
use App\Models\ProcessEngineInfoModel;

class ProcessEngineRepository{

	public function getList()
	{
		$list = ProcessEngineInfoModel::paginate(15);
        return $list;
	}

}
