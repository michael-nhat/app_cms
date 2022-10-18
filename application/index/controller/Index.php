<?php
namespace app\index\controller;

class Index extends Base
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->assign('version',['code' => "custom version"]);
        return $this->label_fetch('index/index');
    }

}
