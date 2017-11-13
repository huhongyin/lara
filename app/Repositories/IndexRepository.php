<?php
namespace App\Repositories;

class IndexRepository{

    public function doUpload($files)
    {
        $pathArr = [];
        if(count($files) > 0){
            foreach($files as $key => $file) {
                $path = $file->file('img')->storeAs('public', 'test');
                $pathArr[] = $path;
            }
        }else{
            return array('code' => Config::get('constants.ERROR_CODE'), 'msg' => '请选择图片');
        }
        if(!empty($pathArr)){
            return array('code' => Config::get('constants.SUCCESS'), 'msg' => '成功', 'data' => array('path' => implode(',', $pathArr)));
        }else{
            return array('code' => Config::get('constants.ERROR_CODE'), 'msg' => '请选择图片');
        }
    }

}