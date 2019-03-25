<?php

class UserController extends BaseController
{
    public function signupAction()
    {
        $data = Request($this->getRequest());
        $rules = [
            'username' => 'required',
            'password' => 'required',
            ///...
        ];

        $validator = $this->validator->make($data, $rules);

        //判断验证是否通过
        if ($validator->passes()) {
            //通过
            $msg = DB::table('users')
                ->join('auth','users.auth','=','auth.id')
                ->where([
                    ['users.username','=',$data['username']],
                    ['users.password','=',md5($data['password'])]
                ])->first();
            if (!$msg){
                echo toJson(['errorcode'=>4000,'errormsg'=>'user not find']);
            }else{
                $msg->password = $data['password'];
                echo toJson($msg);
            }
        } else {
            //未通过
            //输出错误消息
            echo toJson(['errorcode'=>4000,'errormsg'=>$validator->messages()->all()]); // 或者 $validator->errors();
        }
        return false;
    }
}
