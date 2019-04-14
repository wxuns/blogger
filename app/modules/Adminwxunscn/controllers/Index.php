<?php

class IndexController extends BaseController
{
    public function indexAction()
    {
        $this->initView();
//        $this->render($this->_script_path . '/admin/index');
        $this->getView()->display($this->_script_path . "/test.phtml");
    }
}
