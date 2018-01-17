<?php
namespace App\Repositories;


class GenerateFileRepository{

    public function generateControllerAndRepository($fileName)
    {
        $msg = '';
        //创建controller
        $firstChar = substr($fileName, 0, 1);
        $fileName = substr($fileName, 1, strlen($fileName));
        $fileName = strtoupper($firstChar).$fileName;
        $fileName = str_ireplace('controller', '', $fileName);
        $s = "/usr/local/php/bin/php artisan make:controller Web/$fileName"."Controller";
        exec($s, $res);
        $msg .= $res[0];
        //创建repository
        $repositoryPath = dirname(__FILE__)."/$fileName"."Repository.php";
        $repositoryFile = fopen($repositoryPath, "w+");
        $content = "<?php\r\n\r\nnamespace App\Repositories;\r\n\r\nclass ProcessEngineRepository{\r\n\r\n}\r\n";
        fwrite($repositoryFile, $content);
        fclose($repositoryFile);
        echo $msg;
    }

}
