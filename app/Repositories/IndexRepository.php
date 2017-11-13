<?php
namespace App\Repositories;

use App;

class IndexRepository{

    private $config;
    public function __construct()
    {
	
    }

    public function doUpload($files, $uid = 'test')
    {
        $pathArr = [];
        if(count($files) > 0){
            foreach($files as $key => $file) {
		$original = $file->getClientOriginalName();
                $path = $file->storeAs('public/photoes/'.$uid, $original);
                $pathArr[] = $path;
            }
        }else{
            return array('code' => 0, 'msg' => '请选择图片');
        }
        if(!empty($pathArr)){
            return array('code' => 200, 'msg' => '成功', 'data' => array('path' => implode(',', $pathArr)));
        }else{
            return array('code' => 0, 'msg' => '请选择图片');
        }
    }

}
