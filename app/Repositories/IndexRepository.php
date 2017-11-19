<?php
namespace App\Repositories;

use App\Models\User;
use App\Models\Photoes;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class IndexRepository{

    private $config;
    public function __construct()
    {
	
    }
	
    public function getPhotoesByUid($uid = 0)
    {
	$photoes = Photoes::where([['user_id', '=', $uid]])->select('user_id', 'dir_name', 'url')->get();
	if(count($photoes) > 0){
	    foreach($photoes as $key => $value){
		//var_dump(Image::make('/public/foo.jpg')->resize(200));exit;
	    	$photoes[$key]->path = Storage::url($value->url);
	    }
	}
	return $photoes;
    }

    public function doUpload($files, $uid = 0)
    {
        $pathArr = [];
        if(count($files) > 0){
            foreach($files as $key => $file) {
		$original = $file->getClientOriginalName();
                $path = $file->storeAs('public/photoes/'.$uid, $original);
		if(!empty($path)){
		    $saveData['user_id'] = $uid;
		    $saveData['url'] = $path;
		    $saveData['dir_name'] = $uid;
		    Photoes::create($saveData);
                    $pathArr[] = $path;
		}
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

    public function getUserPhotoes($uid = 0)
    {
	
    }

}
