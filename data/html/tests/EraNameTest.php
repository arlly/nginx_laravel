<?php
/**
 * Created by PhpStorm.
 * User: arlly
 * Date: 2018/05/04
 * Time: 19:37
 */

namespace Tests;

use App\Fulclum\Usecase\GetEraName;
use Tests\TestCase;

class EraNameTest extends TestCase
{
    /**
     * @test
     */
    public function 元号のテスト()
    {
        $usecase = new GetEraName();

        $era = $usecase->run(1989);
        $this->assertEquals($era, '平成元年');

    }

}