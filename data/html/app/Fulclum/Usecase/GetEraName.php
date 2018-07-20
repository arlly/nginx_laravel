<?php
/**
 * Created by PhpStorm.
 * User: arlly
 * Date: 2018/05/04
 * Time: 19:42
 */

namespace App\Fulclum\Usecase;


class GetEraName
{
    public function __construct()
    {
        $this->eraNames = [
            '平成' => 1989,
            '昭和' => 1926,
            '大正' => 1912,
            '明治' => 1868,
        ];
    }

    /**
     * @param $year
     * @return string
     * @throws \Exception
     */
    public function run($year)
    {
        foreach ($this->eraNames as $key => $value) {
            if ($year >= $value) {
                $num = $year - $value + 1;
                $eraYear = ($num == 1) ? '元' : $num;

                return "{$key}{$eraYear}年";
            }
        }

        throw new \Exception('Not Found');
    }

}