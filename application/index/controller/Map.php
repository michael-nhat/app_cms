<?php
namespace app\index\controller;
use think\Controller;

class Map extends Base
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        // die();
        return $this->label_fetch('map/index');
    }

}

