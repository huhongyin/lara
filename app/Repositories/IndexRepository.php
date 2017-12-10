<?php
namespace App\Repositories;

use App\Models\User;
use App\Models\Photoes;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class IndexRepository{

    private $config;
    private $imageType = [1 => "gif", 2 => 'jpg', 3 => 'png'];
    public function __construct()
    {
	
    }
	
    public function getPhotoesByUid($uid = 0)
    {
	$photoes = Photoes::where([['user_id', '=', $uid], ['thumb_url', '!=', '']])->select('user_id', 'dir_name', 'url', 'thumb_url')->get();
	if(count($photoes) > 0){
	    foreach($photoes as $key => $value){
		//var_dump(Image::make('/public/foo.jpg')->resize(200));exit;
	    	$photoes[$key]->path = Storage::url($value->thumb_url);
		$photoes[$key]->realPath = Storage::url($value->url);
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
		$extension = $file->getClientOriginalExtension();
		$nameArr = explode('.', $original);
		$name = $nameArr[0];
		$thumbName = $name.'_thumb';
		$appDataDir = '/data/appdata/photoes/'.$thumbName.'.'.$extension;
		$thumbDir = 'public/photoes/'.$uid.'/'.$thumbName.'.'.$extension;
                //获取文件类型后缀
		$realPath = $file->getRealPath();
                $imageSize = getimagesize($realPath);
		$fileSize = filesize($realPath);
		$oldWidth = $imageSize[0];
		$oldHeight = $imageSize[1];
		$imageType = $this->imageType[$imageSize[2]];
		//宽高比,统一宽度256px
		$widthCheight = $oldWidth / $oldHeight;
		$newWidth = 256;
		$newHeight = $newWidth / $widthCheight;
		//创建画布
		$canvas = imagecreatetruecolor($newWidth, $newHeight);
		$thumbImgSource = '';
		switch($imageType){
                    case 'gif':
			$thumbImgSource = imagecreatefromgif($realPath);
			$copy = imagecopyresized($canvas, $thumbImgSource, 0, 0, 0, 0, $newWidth, $newHeight, $oldWidth, $oldHeight);
			$thumbRes = imagegif($canvas, $appDataDir);
		break;
                    case 'jpg':
			$thumbImgSource = imagecreatefromjpeg($realPath);
			$copy = imagecopyresized($canvas, $thumbImgSource, 0, 0, 0, 0, $newWidth, $newHeight, $oldWidth, $oldHeight);
			$thumbRes = imagejpeg($canvas, $appDataDir);
		break;
		    case 'png':
			$thumbImgSource = imagecreatefrompng($realPath);
			$copy = imagecopyresized($canvas, $thumbImgSource, 0, 0, 0, 0, $newWidth, $newHeight, $oldWidth, $oldHeight);
			$thumbRes = imagepng($canvas, $appDataDir);
		break;
		}
		if($thumbRes){
		    $content = file_get_contents($appDataDir);
		}
		if(!empty($content)){
		    $storageRes = Storage::put('public/photoes/'.$uid.'/'.$thumbName.'.'.$extension, $content);
		}
                $path = $file->storeAs('public/photoes/'.$uid, $original);
        		if(!empty($path) && $storageRes){
        		    $saveData['user_id'] = $uid;
        		    $saveData['url'] = $path;
        		    $saveData['dir_name'] = $uid;
			    $saveData['thumb_url'] = $thumbDir;
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
