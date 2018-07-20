<?php
/**
 * Created by PhpStorm.
 * User: arimoto
 * Date: 2018/02/13
 * Time: 19:57
 */

namespace App\Fulclum\Usecase;


class UploadFile
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

    public function run($file)
    {
        $fileName = md5(uniqid()) . '.' . $file->getClientOriginalExtension();
        $file->move($this->getTargetDir(), $fileName);

        return $fileName;
    }

    public function getTargetDir()
    {
        return $this->targetDir;
    }


}