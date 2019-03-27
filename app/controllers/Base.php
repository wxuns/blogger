<?php
/**
 * Created by L.
 * Author: wxuns
 * Link: https://www.wxuns.cn
 * Date: 2019/1/17
 * Time: 14:40.
 */
use Yaf\Controller_Abstract as YafController;
use Overtrue\Validation\Translator;
use Overtrue\Validation\Factory as ValidatorFactory;

abstract class BaseController extends YafController
{
    public $validator = '';
    public $id = '';
    public function init()
    {
        $messages = [
            'accepted'             => ':attribute 必须接受。',
            'active_url'           => ':attribute 不是一个有效的网址。',
            'after'                => ':attribute 必须是一个在 :date 之后的日期。',
            'alpha'                => ':attribute 只能由字母组成。',
            'alpha_dash'           => ':attribute 只能由字母、数字和斜杠组成。',
            'alpha_num'            => ':attribute 只能由字母和数字组成。',
            // ...
        ];
        //初始化工厂对象
        $this->validator = new ValidatorFactory(new Translator($messages));
        $this->validator->extend('checktoken',function($attribute, $value) {
            $decoded = \Firebase\JWT\JWT::decode($value, base64_encode('wxuns'), array('HS256'));
            if($decoded){
                $this->id = $decoded->id;
                return true;
            }
            return false;
        },"the token is not a valid token.");
    }
}
