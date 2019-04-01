<?php

class TodoController extends BaseController
{
    public function addTodoAction()
    {
        $req = Request($this->getRequest());
        $rules = [
            'content' => 'required',
            'time' => 'required|date_format:Y-m-d H:i',
            'token' => 'required|auth:admin',
            ///...
        ];
        $validator = $this->validator->make($req, $rules);
        //判断验证是否通过
        if ($validator->passes()) {
            //通过
            $todo = new TodoModel();
            $todo->content = $req['content'];
            $todo->time = $req['time'];
            $todo->user_id = $this->id;
            $todo->status = 1;
            //todo.
            if ($todo->save()){
                echo toJson($todo->toArray());
            }
        } else {
            //未通过
            //输出错误消息
            echo toJson(['errorcode'=>4001,'errormsg'=>$validator->messages()->all()]); // 或者 $validator->errors();
        }
        return false;
    }

    public function todoAction()
    {
        $req = Request($this->getRequest());
        $rules = [
            'token' => 'required|auth:admin',
            ///...
        ];
        $validator = $this->validator->make($req, $rules);
        //判断验证是否通过
        if ($validator->passes()) {
            //通过
            $todo = new TodoModel();
            $list = $todo
                ->where('user_id',$this->id)
                ->where('status',1)
                ->orderBy('time','asc')
                ->get()->toArray();
            echo toJson($list);
        } else {
            //未通过
            //输出错误消息
            echo toJson(['errorcode'=>4001,'errormsg'=>$validator->messages()->all()]); // 或者 $validator->errors();
        }
        return false;
    }
    public function deltodoAction()
    {
        $id = $this->getRequest()->getParam('id');
        $req = Request($this->getRequest());
        $rules = [
            'token' => 'required|auth:admin',
            ///...
        ];
        $validator = $this->validator->make($req, $rules);
        //判断验证是否通过
        if ($validator->passes()) {
            //通过
            $todo = new TodoModel();
            $list = $todo
                ->where('user_id',$this->id)
                ->where('id',$id)
                ->update(['status'=>0]);
            echo toJson($list);
        } else {
            //未通过
            //输出错误消息
            echo toJson(['errorcode'=>4001,'errormsg'=>$validator->messages()->all()]); // 或者 $validator->errors();
        }
        return false;
    }
    public function edittodoAction()
    {
        $id = $this->getRequest()->getParam('id');
        $req = Request($this->getRequest());
        $rules = [
            'token' => 'required|auth:admin',
            ///...
        ];
        $validator = $this->validator->make($req, $rules);
        //判断验证是否通过
        if ($validator->passes()) {
            //通过
            $todo = new TodoModel();
            $list = $todo
                ->where('user_id',$this->id)
                ->where('id',$id)
                ->update(['content'=>$req['content'],'time'=>$req['time']]);
            echo toJson($list);
        } else {
            //未通过
            //输出错误消息
            echo toJson(['errorcode'=>4001,'errormsg'=>$validator->messages()->all()]); // 或者 $validator->errors();
        }
        return false;
    }
}
