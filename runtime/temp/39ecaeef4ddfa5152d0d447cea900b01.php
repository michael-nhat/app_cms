<?php if (!defined('THINK_PATH')) exit(); /*a:9:{s:38:"template/default/html/index/index.html";i:1666882817;s:70:"/www/wwwroot/maccms10test2/template/default/html/blocks/head-tags.html";i:1666882158;s:64:"/www/wwwroot/maccms10test2/template/default/html/blocks/top.html";i:1666679231;s:76:"/www/wwwroot/maccms10test2/template/default/html/blocks/popular--slides.html";i:1666366068;s:71:"/www/wwwroot/maccms10test2/template/default/html/blocks/new-movies.html";i:1666620061;s:70:"/www/wwwroot/maccms10test2/template/default/html/blocks/tv-series.html";i:1666623429;s:68:"/www/wwwroot/maccms10test2/template/default/html/blocks/top-ten.html";i:1666772514;s:67:"/www/wwwroot/maccms10test2/template/default/html/blocks/footer.html";i:1666774314;s:79:"/www/wwwroot/maccms10test2/template/default/html/blocks/script-bottom-body.html";i:1666791328;}*/ ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
<title>New web for apple CMS 功能模块及系统标签等等介绍 - 苹果CMS</title>

<link rel="shortcut icon" type="image/x-icon" href="<?php echo $maccms['path_tpl']; ?>html/public/static/favicon.ico"/>
<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
  integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
/>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
/>
<link
  rel="stylesheet"
  href="<?php echo $maccms['path_tpl']; ?>html/public/static/layui/layui/css/layui.css"
  type="text/css"
/>
<link
  rel="stylesheet"
  href="<?php echo $maccms['path_tpl']; ?>html/public/static/css/style.css"
  type="text/css"
/>
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


    <div class="first-blk layui-container layui-row sui-right-col">
      <div class="layui-col-lg10">
        <div class="sui-right-wrap">
          <div class="popular--slides">
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="list-top-movie-item" id="list-top-movie-item-1">
          <div class="wrap-item-movie">
            <a href="#" class="movie-link">
              <img src="/static/img/top-avatar1.jpg" class="movie-poster" alt="" />
            </a>
            <div class="item-movie-descibe">梁a</div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="list-top-movie-item" id="list-top-movie-item-1">
          <div class="wrap-item-movie">
            <a href="#" class="movie-link">
              <img src="/static/img/top-avatar2.jpg" class="movie-poster" alt="" />
            </a>
            <div class="item-movie-descibe">梁a</div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="list-top-movie-item" id="list-top-movie-item-1">
          <div class="wrap-item-movie">
            <a href="#" class="movie-link">
              <img src="/static/img/top-avatar3.jpg" class="movie-poster" alt="" />
            </a>
            <div class="item-movie-descibe">梁a</div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="list-top-movie-item" id="list-top-movie-item-1">
          <div class="wrap-item-movie">
            <a href="#" class="movie-link">
              <img src="/static/img/top-avatar4.jpg" class="movie-poster" alt="" />
            </a>
            <div class="item-movie-descibe">梁a</div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="list-top-movie-item" id="list-top-movie-item-1">
          <div class="wrap-item-movie">
            <a href="#" class="movie-link">
              <img src="/static/img/top-avatar5.jpg" class="movie-poster" alt="" />
            </a>
            <div class="item-movie-descibe">梁a</div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="list-top-movie-item" id="list-top-movie-item-1">
          <div class="wrap-item-movie">
            <a href="#" class="movie-link">
              <img src="/static/img/top-avatar5.jpg" class="movie-poster" alt="" />
            </a>
            <div class="item-movie-descibe">梁a</div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>
</div>
 <div class="new-movies-blk">
  <div class="new-movies-blk--title">
    New movies
  </div>
  <div class="list-movies">
    <div class="items-4-block">
      <div class="list-top-movie-item" id="list-top-movie-item-1">
        <div class="wrap-item-movie">
          <a href="#" class="movie-link">
            <img src="/static/img/top-avatar1.jpg" class="movie-poster" alt="" />
          </a>
          <div class="item-movie-descibe">梁a</div>
        </div>
      </div>
      <div class="list-top-movie-item" id="list-top-movie-item-1">
        <div class="wrap-item-movie">
          <a href="#" class="movie-link">
            <img src="/static/img/top-avatar1.jpg" class="movie-poster" alt="" />
          </a>
          <div class="item-movie-descibe">梁a</div>
        </div>
      </div>
      <div class="list-top-movie-item" id="list-top-movie-item-1">
        <div class="wrap-item-movie">
          <a href="#" class="movie-link">
            <img src="/static/img/top-avatar1.jpg" class="movie-poster" alt="" />
          </a>
          <div class="item-movie-descibe">梁a</div>
        </div>
      </div>
      <div class="list-top-movie-item right-most" id="list-top-movie-item-1">
        <div class="wrap-item-movie">
          <a href="#" class="movie-link">
            <img src="/static/img/top-avatar1.jpg" class="movie-poster" alt="" />
          </a>
          <div class="item-movie-descibe">梁a</div>
        </div>
      </div>
    </div>
    <div class="items-4-block">
      <div class="list-top-movie-item" id="list-top-movie-item-1">
        <div class="wrap-item-movie">
          <a href="#" class="movie-link">
            <img src="/static/img/top-avatar1.jpg" class="movie-poster" alt="" />
          </a>
          <div class="item-movie-descibe">梁a</div>
        </div>
      </div>
      <div class="list-top-movie-item" id="list-top-movie-item-1">
        <div class="wrap-item-movie">
          <a href="#" class="movie-link">
            <img src="/static/img/top-avatar1.jpg" class="movie-poster" alt="" />
          </a>
          <div class="item-movie-descibe">梁a</div>
        </div>
      </div>
      <div class="list-top-movie-item" id="list-top-movie-item-1">
        <div class="wrap-item-movie">
          <a href="#" class="movie-link">
            <img src="/static/img/top-avatar1.jpg" class="movie-poster" alt="" />
          </a>
          <div class="item-movie-descibe">梁a</div>
        </div>
      </div>
      <div class="list-top-movie-item right-most" id="list-top-movie-item-1">
        <div class="wrap-item-movie">
          <a href="#" class="movie-link">
            <img src="/static/img/top-avatar1.jpg" class="movie-poster" alt="" />
          </a>
          <div class="item-movie-descibe">梁a</div>
        </div>
      </div>
    </div>
    <div class="items-4-block">
      <div class="list-top-movie-item" id="list-top-movie-item-1">
        <div class="wrap-item-movie">
          <a href="#" class="movie-link">
            <img src="/static/img/top-avatar1.jpg" class="movie-poster" alt="" />
          </a>
          <div class="item-movie-descibe">梁a</div>
        </div>
      </div>
      <div class="list-top-movie-item" id="list-top-movie-item-1">
        <div class="wrap-item-movie">
          <a href="#" class="movie-link">
            <img src="/static/img/top-avatar1.jpg" class="movie-poster" alt="" />
          </a>
          <div class="item-movie-descibe">梁a</div>
        </div>
      </div>
      <div class="list-top-movie-item" id="list-top-movie-item-1">
        <div class="wrap-item-movie">
          <a href="#" class="movie-link">
            <img src="/static/img/top-avatar1.jpg" class="movie-poster" alt="" />
          </a>
          <div class="item-movie-descibe">梁a</div>
        </div>
      </div>
      <div class="list-top-movie-item right-most" id="list-top-movie-item-1">
        <div class="wrap-item-movie">
          <a href="#" class="movie-link">
            <img src="/static/img/top-avatar1.jpg" class="movie-poster" alt="" />
          </a>
          <div class="item-movie-descibe">梁a</div>
        </div>
      </div>
    </div>
    <div class="items-4-block">
      <div class="list-top-movie-item" id="list-top-movie-item-1">
        <div class="wrap-item-movie">
          <a href="#" class="movie-link">
            <img src="/static/img/top-avatar1.jpg" class="movie-poster" alt="" />
          </a>
          <div class="item-movie-descibe">梁a</div>
        </div>
      </div>
      <div class="list-top-movie-item" id="list-top-movie-item-1">
        <div class="wrap-item-movie">
          <a href="#" class="movie-link">
            <img src="/static/img/top-avatar1.jpg" class="movie-poster" alt="" />
          </a>
          <div class="item-movie-descibe">梁a</div>
        </div>
      </div>
      <div class="list-top-movie-item" id="list-top-movie-item-1">
        <div class="wrap-item-movie">
          <a href="#" class="movie-link">
            <img src="/static/img/top-avatar1.jpg" class="movie-poster" alt="" />
          </a>
          <div class="item-movie-descibe">梁a</div>
        </div>
      </div>
      <div class="list-top-movie-item right-most" id="list-top-movie-item-1">
        <div class="wrap-item-movie">
          <a href="#" class="movie-link">
            <img src="/static/img/top-avatar1.jpg" class="movie-poster" alt="" />
          </a>
          <div class="item-movie-descibe">梁a</div>
        </div>
      </div>
    </div>
  </div>
</div>
 <div class="tv-series-blk">
    <div class="tv-series-blk--title">TV Series</div>
    <div class="list-movies">
      <div class="items-4-block">
        <div class="list-top-movie-item" id="list-top-movie-item-1">
          <div class="wrap-item-movie">
            <a href="#" class="movie-link">
              <img src="/static/img/top-avatar1.jpg" class="movie-poster" alt="" />
            </a>
            <div class="item-movie-descibe">梁a</div>
          </div>
        </div>
        <div class="list-top-movie-item" id="list-top-movie-item-1">
          <div class="wrap-item-movie">
            <a href="#" class="movie-link">
              <img src="/static/img/top-avatar1.jpg" class="movie-poster" alt="" />
            </a>
            <div class="item-movie-descibe">梁a</div>
          </div>
        </div>
        <div class="list-top-movie-item" id="list-top-movie-item-1">
          <div class="wrap-item-movie">
            <a href="#" class="movie-link">
              <img src="/static/img/top-avatar1.jpg" class="movie-poster" alt="" />
            </a>
            <div class="item-movie-descibe">梁a</div>
          </div>
        </div>
        <div class="list-top-movie-item right-most" id="list-top-movie-item-1">
          <div class="wrap-item-movie">
            <a href="#" class="movie-link">
              <img src="/static/img/top-avatar1.jpg" class="movie-poster" alt="" />
            </a>
            <div class="item-movie-descibe">梁a</div>
          </div>
        </div>
      </div>
      <div class="items-4-block">
        <div class="list-top-movie-item" id="list-top-movie-item-1">
          <div class="wrap-item-movie">
            <a href="#" class="movie-link">
              <img src="/static/img/top-avatar1.jpg" class="movie-poster" alt="" />
            </a>
            <div class="item-movie-descibe">梁a</div>
          </div>
        </div>
        <div class="list-top-movie-item" id="list-top-movie-item-1">
          <div class="wrap-item-movie">
            <a href="#" class="movie-link">
              <img src="/static/img/top-avatar1.jpg" class="movie-poster" alt="" />
            </a>
            <div class="item-movie-descibe">梁a</div>
          </div>
        </div>
        <div class="list-top-movie-item" id="list-top-movie-item-1">
          <div class="wrap-item-movie">
            <a href="#" class="movie-link">
              <img src="/static/img/top-avatar1.jpg" class="movie-poster" alt="" />
            </a>
            <div class="item-movie-descibe">梁a</div>
          </div>
        </div>
        <div class="list-top-movie-item right-most" id="list-top-movie-item-1">
          <div class="wrap-item-movie">
            <a href="#" class="movie-link">
              <img src="/static/img/top-avatar1.jpg" class="movie-poster" alt="" />
            </a>
            <div class="item-movie-descibe">梁a</div>
          </div>
        </div>
      </div>
      <div class="items-4-block">
        <div class="list-top-movie-item" id="list-top-movie-item-1">
          <div class="wrap-item-movie">
            <a href="#" class="movie-link">
              <img src="/static/img/top-avatar1.jpg" class="movie-poster" alt="" />
            </a>
            <div class="item-movie-descibe">梁a</div>
          </div>
        </div>
        <div class="list-top-movie-item" id="list-top-movie-item-1">
          <div class="wrap-item-movie">
            <a href="#" class="movie-link">
              <img src="/static/img/top-avatar1.jpg" class="movie-poster" alt="" />
            </a>
            <div class="item-movie-descibe">梁a</div>
          </div>
        </div>
        <div class="list-top-movie-item" id="list-top-movie-item-1">
          <div class="wrap-item-movie">
            <a href="#" class="movie-link">
              <img src="/static/img/top-avatar1.jpg" class="movie-poster" alt="" />
            </a>
            <div class="item-movie-descibe">梁a</div>
          </div>
        </div>
        <div class="list-top-movie-item right-most" id="list-top-movie-item-1">
          <div class="wrap-item-movie">
            <a href="#" class="movie-link">
              <img src="/static/img/top-avatar1.jpg" class="movie-poster" alt="" />
            </a>
            <div class="item-movie-descibe">梁a</div>
          </div>
        </div>
      </div>
      <div class="items-4-block">
        <div class="list-top-movie-item" id="list-top-movie-item-1">
          <div class="wrap-item-movie">
            <a href="#" class="movie-link">
              <img src="/static/img/top-avatar1.jpg" class="movie-poster" alt="" />
            </a>
            <div class="item-movie-descibe">梁a</div>
          </div>
        </div>
        <div class="list-top-movie-item" id="list-top-movie-item-1">
          <div class="wrap-item-movie">
            <a href="#" class="movie-link">
              <img src="/static/img/top-avatar1.jpg" class="movie-poster" alt="" />
            </a>
            <div class="item-movie-descibe">梁a</div>
          </div>
        </div>
        <div class="list-top-movie-item" id="list-top-movie-item-1">
          <div class="wrap-item-movie">
            <a href="#" class="movie-link">
              <img src="/static/img/top-avatar1.jpg" class="movie-poster" alt="" />
            </a>
            <div class="item-movie-descibe">梁a</div>
          </div>
        </div>
        <div class="list-top-movie-item right-most" id="list-top-movie-item-1">
          <div class="wrap-item-movie">
            <a href="#" class="movie-link">
              <img src="/static/img/top-avatar1.jpg" class="movie-poster" alt="" />
            </a>
            <div class="item-movie-descibe">梁a</div>
          </div>
        </div>
      </div>
    </div>
  </div>
   
        </div>
        <div class="sui-right-wrap">



          <!-- {maccms:type num="300"  tab="art"} -->
          <?php $__TAG__ = '{"num":"36","paging":"yes","pageurl":"vod\/show","type":"current","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__);$__PAGING__ = mac_page_param($__LIST__['total'],$__LIST__['limit'],$__LIST__['page'],$__LIST__['pageurl'],$__LIST__['half']); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;          echo '<pre>';
          var_dump($vo['vod_name']);
          echo '</pre>';
          endforeach; endif; else: echo "" ;endif; ?>
        </div>
      </div>
      <div class="layui-col-lg2 sui-left-col">
        <div class="blk-top-ten">
  <div class="wrap-title-top">
    <div class="title-top" onclick="openTopMoviesTab('top-week');">
      Top of week
    </div>
    <div class="title-top" onclick="openTopMoviesTab('top-month');">
      Top of month
    </div>
  </div>

  <div class="top-month">
    <ul class="list-movies">
      <li class="list-top-movie-item" id="list-top-movie-item-1">
        <div class="wrap-item-movie">
          <a href="#" class="movie-link">
            <img
              src="/static/img/top-avatar2.jpg"
              class="movie-poster"
              alt=""
            />
          </a>
          <div class="item-movie-descibe">梁a</div>
        </div>
      </li>
      <li class="list-top-movie-item" id="list-top-movie-item-1">
        <div class="wrap-item-movie">
          <a href="#" class="movie-link">
            <img
              src="/static/img/top-avatar1.jpg"
              class="movie-poster"
              alt=""
            />
          </a>
          <div class="item-movie-descibe">梁a</div>
        </div>
      </li>
      <li class="list-top-movie-item" id="list-top-movie-item-1">
        <div class="wrap-item-movie">
          <a href="#" class="movie-link">
            <img
              src="/static/img/top-avatar1.jpg"
              class="movie-poster"
              alt=""
            />
          </a>
          <div class="item-movie-descibe">梁a</div>
        </div>
      </li>
      <li class="list-top-movie-item" id="list-top-movie-item-1">
        <div class="wrap-item-movie">
          <a href="#" class="movie-link">
            <img
              src="/static/img/top-avatar1.jpg"
              class="movie-poster"
              alt=""
            />
          </a>
          <div class="item-movie-descibe">梁a</div>
        </div>
      </li>
      <li class="list-top-movie-item" id="list-top-movie-item-1">
        <div class="wrap-item-movie">
          <a href="#" class="movie-link">
            <img
              src="/static/img/top-avatar1.jpg"
              class="movie-poster"
              alt=""
            />
          </a>
          <div class="item-movie-descibe">梁a</div>
        </div>
      </li>
      <li class="list-top-movie-item" id="list-top-movie-item-1">
        <div class="wrap-item-movie">
          <a href="#" class="movie-link">
            <img
              src="/static/img/top-avatar1.jpg"
              class="movie-poster"
              alt=""
            />
          </a>
          <div class="item-movie-descibe">梁a</div>
        </div>
      </li>
      <li class="list-top-movie-item" id="list-top-movie-item-1">
        <div class="wrap-item-movie">
          <a href="#" class="movie-link">
            <img
              src="/static/img/top-avatar1.jpg"
              class="movie-poster"
              alt=""
            />
          </a>
          <div class="item-movie-descibe">梁a</div>
        </div>
      </li>
      <li class="list-top-movie-item" id="list-top-movie-item-1">
        <div class="wrap-item-movie">
          <a href="#" class="movie-link">
            <img
              src="/static/img/top-avatar1.jpg"
              class="movie-poster"
              alt=""
            />
          </a>
          <div class="item-movie-descibe">梁a</div>
        </div>
      </li>
    </ul>
  </div>
  <div class="top-week">
    <ul class="list-movies">
      <li class="list-top-movie-item" id="list-top-movie-item-1">
        <div class="wrap-item-movie">
          <a href="#" class="movie-link">
            <img
              src="/static/img/top-avatar1.jpg"
              class="movie-poster"
              alt=""
            />
          </a>
          <div class="item-movie-descibe">梁a</div>
        </div>
      </li>
      <li class="list-top-movie-item" id="list-top-movie-item-1">
        <div class="wrap-item-movie">
          <a href="#" class="movie-link">
            <img
              src="/static/img/top-avatar1.jpg"
              class="movie-poster"
              alt=""
            />
          </a>
          <div class="item-movie-descibe">梁a</div>
        </div>
      </li>
      <li class="list-top-movie-item" id="list-top-movie-item-1">
        <div class="wrap-item-movie">
          <a href="#" class="movie-link">
            <img
              src="/static/img/top-avatar1.jpg"
              class="movie-poster"
              alt=""
            />
          </a>
          <div class="item-movie-descibe">梁a</div>
        </div>
      </li>
      <li class="list-top-movie-item" id="list-top-movie-item-1">
        <div class="wrap-item-movie">
          <a href="#" class="movie-link">
            <img
              src="/static/img/top-avatar1.jpg"
              class="movie-poster"
              alt=""
            />
          </a>
          <div class="item-movie-descibe">梁a</div>
        </div>
      </li>
      <li class="list-top-movie-item" id="list-top-movie-item-1">
        <div class="wrap-item-movie">
          <a href="#" class="movie-link">
            <img
              src="/static/img/top-avatar1.jpg"
              class="movie-poster"
              alt=""
            />
          </a>
          <div class="item-movie-descibe">梁a</div>
        </div>
      </li>
      <li class="list-top-movie-item" id="list-top-movie-item-1">
        <div class="wrap-item-movie">
          <a href="#" class="movie-link">
            <img
              src="/static/img/top-avatar1.jpg"
              class="movie-poster"
              alt=""
            />
          </a>
          <div class="item-movie-descibe">梁a</div>
        </div>
      </li>
      <li class="list-top-movie-item" id="list-top-movie-item-1">
        <div class="wrap-item-movie">
          <a href="#" class="movie-link">
            <img
              src="/static/img/top-avatar1.jpg"
              class="movie-poster"
              alt=""
            />
          </a>
          <div class="item-movie-descibe">梁a</div>
        </div>
      </li>
      <li class="list-top-movie-item" id="list-top-movie-item-1">
        <div class="wrap-item-movie">
          <a href="#" class="movie-link">
            <img
              src="/static/img/top-avatar1.jpg"
              class="movie-poster"
              alt=""
            />
          </a>
          <div class="item-movie-descibe">梁a</div>
        </div>
      </li>
    </ul>
  </div>
</div>

        <div class="hot-tags-blk">Hot tags block</div>
        <div class="statictis-blk">
         
        </div>
      </div>
      <div class="footer layui-col-lg12">footer

    <div class="logo-class"><?php echo $maccms['site_logo']; ?>aa</div>
    <img src="<?php echo $maccms['site_logo']; ?>" alt="">
</div>
    </div>

    <script src="<?php echo $maccms['path_tpl']; ?>html/public/static/js/top-movies-tab.js"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>
<script src="<?php echo $maccms['path_tpl']; ?>html/public/static/js/jquery2.js"></script>
<script src="<?php echo $maccms['path_tpl']; ?>html/public/static/layui/layui/layui.js"></script>
<script src="<?php echo $maccms['path_tpl']; ?>html/public/static/js/main.js"></script>
  </body>
</html>
