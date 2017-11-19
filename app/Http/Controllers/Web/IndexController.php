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

    /** 
     * 生成缩略图函数（支持图片格式：gif、jpeg、png和bmp） 
     * @author ruxing.li 
     * @param  string $src      源图片路径 
     * @param  int    $width    缩略图宽度（只指定高度时进行等比缩放） 
     * @param  int    $width    缩略图高度（只指定宽度时进行等比缩放） 
     * @param  string $filename 保存路径（不指定时直接输出到浏览器） 
     * @return bool 
     */  
    public function mkThumbnail(Request $request) 
    {  
        $src = base64_decode($request->path);
        $width = 300;
        $height = 0;
        if (!isset($width) && !isset($height))  
            return false;  
        if (isset($width) && $width <= 0)  
            return false;  
        if (isset($height) && $height <= 0)  
            return false;  
      
        $size = getimagesize($src);  
        if (!$size)  
            return false;  
      
        list($src_w, $src_h, $src_type) = $size;  
        $src_mime = $size['mime'];  
        switch($src_type) {  
            case 1 :  
                $img_type = 'gif';  
                break;  
            case 2 :  
                $img_type = 'jpeg';  
                break;  
            case 3 :  
                $img_type = 'png';  
                break;  
            case 15 :  
                $img_type = 'wbmp';  
                break;  
            default :  
                return false;  
        }  
      
        if (!isset($width))  
            $width = $src_w * ($height / $src_h);  
        if (!isset($height))  
            $height = $src_h * ($width / $src_w);  
      
        $imagecreatefunc = 'imagecreatefrom' . $img_type;  
        $src_img = $imagecreatefunc($src);  
        $dest_img = imagecreatetruecolor($width, $height);  
        imagecopyresampled($dest_img, $src_img, 0, 0, 0, 0, $width, $height, $src_w, $src_h);  
      
        $imagefunc = 'image' . $img_type;  
        if ($filename) {  
            $imagefunc($dest_img, $filename);  
        } else {  
            header('Content-Type: ' . $src_mime);  
            $imagefunc($dest_img);  
        }  
        imagedestroy($src_img);  
        imagedestroy($dest_img);  
        exit;
    }  

}
