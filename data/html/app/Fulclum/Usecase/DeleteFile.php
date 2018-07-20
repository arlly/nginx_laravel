<?php
/**
 * Created by PhpStorm.
 * User: arimoto
 * Date: 2018/02/13
 * Time: 19:57
 */

namespace App\Fulclum\Usecase;



class DeleteFile
{
    private $targetDir;

    /**
     * UploadFile constructor.
     * @param String $targetDir
     */
    public function __construct(String $targetDir)
    {
        $this->targetDir = $targetDir;
    }

    public function run($filename)
    {
        $filepath = $this->getTargetDir(). $filename;

        if (! file_exists($filepath)) return false;

        unlink($filepath);
        return true;
    }

    public function getTargetDir()
    {
        return $this->targetDir;
    }


}