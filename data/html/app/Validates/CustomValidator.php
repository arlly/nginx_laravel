<?php
/**
 * Created by PhpStorm.
 * User: arimoto
 * Date: 2018/03/05
 * Time: 17:14
 */

namespace App\Http\Validates;


use Illuminate\Validation\Validator;

class CustomValidator extends Validator
{

    public function validateHiragana($attribute, $value, $parameters)
    {
        if (preg_match('/[^ぁ-んー]/u', $value) !== 0) {
            return false;
        }
        return true;
    }

    public function validateKatakana($attribute, $value, $parameters)
    {
        if (preg_match('/[^ァ-ヶー]/u', $value) !== 0) {
            return false;
        }
        return true;
    }

}