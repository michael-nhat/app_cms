<?php
namespace app\index\controller;

// html with boostrap index
class Bindex extends Base
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        // die();
        $this->assign('version',['code' => "custom version"]);
        return $this->label_fetch('bindex/bindex');
    }

    public function index2()
    {
        $this->assign('version',['code' => "custom version2"]);
        return $this->label_fetch('index/index2');
    }
}
