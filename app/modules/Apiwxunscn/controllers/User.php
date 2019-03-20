<?php

class UserController extends BaseController
{
    public function signupAction()
    {
        $data = Request($this->getRequest());
        if (!$data){
            echo toJson(['errorcode'=>4000,'errormsg'=>'user message is null']);
        }else{
            $user = new UserModel();
            $msg = $user->where([
                ['username','=',$data['username']],
                ['password','=',md5($data['password'])]
            ])->first();
            if (!$msg){
                echo toJson(['errorcode'=>4000,'errormsg'=>'user not find']);
            }else{
                echo toJson($msg);
            }
        }
        return false;
    }
}
