<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:40:"template/default/html/bindex/bindex.html";i:1666107709;s:64:"/www/wwwroot/maccms10test2/template/default/html/blocks/top.html";i:1666679231;}*/ ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>new webfilm 功能模块及系统标签等等介绍 - 苹果CMS</title>

    <link
      rel="stylesheet"
      href="<?php echo $maccms['path_tpl']; ?>html/public/static/bootstrap/bootstrap-4/css/bootstrap.css"
      type="text/css"
    />
    <link
      rel="stylesheet"
      href="<?php echo $maccms['path_tpl']; ?>html/public/static/css/style.css"
      type="text/css"
    />
    <!-- <link rel="shortcut icon" href="#"> -->

    <style>
      body,
      div,
      a,
      p,
      span {
        user-select: text !important;
      }
    </style>
  </head>
  <body>
    <!-- header -->
        <div class="layui-header header header-index">
        <div class="layui-container">
          <a href="#" class="logo"
            >
            <!-- <img class="img" src="/static/img/logo-movies.png"/> -->
            <i class="fa fa-video-camera" aria-hidden="true"></i>
          </a>
          <div class="layui-form layui-hide-xs header-search">
            搜索
          </div>
          <ul class="layui-nav" id="LAY_NAV_TOP">
            <li class="layui-nav-item" data-dir="docs">
              <a href="/v2/docs/">贤梁</a>
            </li>
            <li class="layui-nav-item" data-dir="demo">
              <a href="/v2/demo/">香蕉</a>
            </li>
            <li class="layui-nav-item" data-dir="demo">
              <a href="/v2/demo/">苹果</a>
            </li>
          </ul>
        </div>
      </div>

    <!-- first block -->
    <!-- As a link -->
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
      </div>
    </nav>

    <!-- As a heading -->
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">Navbar</span>
      </div>
    </nav>

    <script src="<?php echo $maccms['path_tpl']; ?>html/public/static/js/jquery2.js"></script>
    <script src="<?php echo $maccms['path_tpl']; ?>html/public/static/bootstrap/bootstrap-4/js/bootstrap.bundle.js"></script>
  </body>
</html>
