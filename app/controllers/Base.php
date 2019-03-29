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
            return $this->checkToken($attribute,$value);
        },"the token is not a valid token.");
        $this->validator->extend('auth',function($attribute, $value, $parameters) {
            return $this->checkToken($attribute,$value,$parameters);
        },"who are you?");
    }

    public function checkToken($attribute, $value, $parameters)
    {
        $decoded = \Firebase\JWT\JWT::decode($value, base64_encode('wxuns'), array('HS256'));
        if($decoded){
            $msg = DB::table('users')
                ->where([
                    ['users.username','=',$decoded->username],
                    ['users.password','=',$decoded->password]
                ])->first();
            if (!$msg){
                return false;
            }

            $this->id = $decoded->id;
            if($parameters[0] == 'admin'&&$msg->auth == 1){
                return true;
            }else if ($parameters[0] == 'user'&&$msg->auth == 2){
                return true;
            }
            return false;
        }
        return false;
    }
}
