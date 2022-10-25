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
        require(__DIR__.'/../mock/index.mock.php');
        $this->assign('topTenMovies',$topTenMovies);
        $this->assign('version',['code' => "custom version"]);
        return $this->label_fetch('index/index');
    }

    public function index2()
    {
        $this->assign('version',['code' => "custom version"]);
        return $this->label_fetch('index/index2');
    }
}

