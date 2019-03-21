<?php

class UserController extends BaseController
{
    public function signupAction()
    {
        $data = Request($this->getRequest());
//        Assert::
        if (!$data){
            echo toJson(['errorcode'=>4000,'errormsg'=>'user message is null']);
        }else{
            dump($data);exit();
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
                echo toJson($msg->toArray());
            }
        }
        return false;
    }
}
