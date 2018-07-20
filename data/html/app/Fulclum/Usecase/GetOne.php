<?php
/**
 * Created by PhpStorm.
 * User: arimoto
 * Date: 2018/02/02
 * Time: 16:17
 */
namespace App\Fulclum\Usecase;

use App\Fulclum\Repository\Repository;

class GetOne
{
    private $repo;

    public function __construct(Repository $repo)
    {
        $this->repo = $repo;
    }

    public function run(int $id)
    {
        return $this->repo->find($id);
    }
}