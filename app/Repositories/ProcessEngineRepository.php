<?php
namespace App\Repositories;

use Illuminate\Support\Facades\Storage;
use App\Models\ProcessEngineInfo;

class ProcessEngineRepository{

	public function getList()
	{
		$list = ProcessEngineInfo::paginate(15);
        return $list;
	}

}
