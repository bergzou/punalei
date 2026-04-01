<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:73:"/www/wwwroot/punalei/addons/ldcms/view/default/detail_xiazaizhongxin.html";i:1754571368;s:56:"/www/wwwroot/punalei/addons/ldcms/view/default/head.html";i:1754571368;s:55:"/www/wwwroot/punalei/addons/ldcms/view/default/nav.html";i:1754571368;s:58:"/www/wwwroot/punalei/addons/ldcms/view/default/footer.html";i:1772273471;s:61:"/www/wwwroot/punalei/addons/ldcms/view/default/full_page.html";i:1754571368;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="<?php echo $ld['favicon']; ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/addons/ldcms/default/css/bootstrap.min.css?v=<?php echo $site['version']; ?>">
    <link rel="stylesheet" href="/assets/addons/ldcms/default/css/swiper-bundle.min.css?v=<?php echo $site['version']; ?>">
    <link rel="stylesheet" href="/assets/addons/ldcms/default/css/jquery.fullpage.min.css?v=<?php echo $site['version']; ?>">
    <link rel="stylesheet" href="/assets/addons/ldcms/default/css/style.css?v=<?php echo $site['version']; ?>">
    <link rel="stylesheet" href="/assets/addons/ldcms/default/css/ellipsis.css?v=<?php echo $site['version']; ?>">
    <link rel="stylesheet" href="/assets/addons/ldcms/default/css/animate.min.css?v=<?php echo $site['version']; ?>">
    <link rel="stylesheet" href="/assets/addons/ldcms/default/css/style1.css?v=<?php echo $site['version']; ?>">
    <link rel="stylesheet" href="/assets/addons/ldcms/default/css/element.css?v=<?php echo $site['version']; ?>">
    <script src="/assets/addons/ldcms/default/js/jquery-1.12.4.min.js?v=<?php echo $site['version']; ?>"></script>
    <script src="/assets/addons/ldcms/default/js/scrollreveal.js?v=<?php echo $site['version']; ?>"></script>
    <script src="/assets/addons/ldcms/default/js/bootstrap.min.js?v=<?php echo $site['version']; ?>"></script>
    <script src="/assets/addons/ldcms/default/js/swiper-bundle.min.js?v=<?php echo $site['version']; ?>"></script>
    <script src="/assets/addons/ldcms/default/js/jquery.fullpage.min.js?v=<?php echo $site['version']; ?>"></script>
    <script src="/assets/addons/ldcms/default/js/countUp.js?v=<?php echo $site['version']; ?>"></script>
    <script src="/assets/addons/ldcms/default/js/common.js?v=<?php echo $site['version']; ?>"></script>
    <script src="/assets/addons/ldcms/default/js/ellipsis.js?v=<?php echo $site['version']; ?>"></script>
    <script src="/assets/addons/ldcms/default/js/omit.js?v=<?php echo $site['version']; ?>"></script>
    <script src="/assets/addons/ldcms/default/js/no.js?v=<?php echo $site['version']; ?>"></script>
    <script src="/assets/addons/ldcms/default/js/vue.js?v=<?php echo $site['version']; ?>"></script>
    <script src="/assets/addons/ldcms/default/js/element.js?v=<?php echo $site['version']; ?>"></script>
    <script src="/assets/addons/ldcms/default/js/base.js?v=<?php echo $site['version']; ?>"></script>
    <script src="/assets/addons/ldcms/default/js/city.js?v=<?php echo $site['version']; ?>"></script>
    <script src="/assets/addons/ldcms/default/js/axios.min.js?v=<?php echo $site['version']; ?>"></script>


    <title><?php echo $ld['sitetitle']; ?></title>
    <meta name="keywords"
          content="<?php echo $ld['seo_keywords']; ?>">
    <meta name="description"
          content="<?php echo $ld['seo_description']; ?>">
</head>
<body>
<body>

<!-- 导航 -->
<div class="global-nav-container">
    <div class="global-nav  animate__fadeInLeftBig">
        <div class="d-none d-lg-flex container fix nav-pc">
            <a href="/" class="nav-brand">
                <img class="img-native" src="<?php echo $ld['logo1']; ?>">
            </a>

            <ul class="nav-list">

                <li class="nav-li">
                    <div class="li-a-box">
                        <a class="li-a" href="/">网站首页</a>
                    </div>
                </li>

                <?php $__7DYy2KjgTJ__ =\addons\ldcms\model\Category::instance()->getHomeNav(0,"0","");if(is_array($__7DYy2KjgTJ__) || $__7DYy2KjgTJ__ instanceof \think\Collection || $__7DYy2KjgTJ__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__7DYy2KjgTJ__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                <!--产品介绍-->

                <?php if($item['mid'] == 6): ?>
                <li class="nav-li">
                    <div class="li-a-box">
                        <a class="li-a" href="<?php echo $item['url']; ?>"><?php echo $item['name']; ?></a><!--一级-->
                    </div>
                    <div class="nav-hide-list container">
                        <div class="product-hide-list-container">
                            <div class="product-hide-left">
                                <div class="product-hide-left-container">
                                    <div class="product-hide-header">
                                        <text><?php echo $item['name']; ?></text><!--一级-->
                                        <div class="iconfont icon-icon-arrow-right"></div>
                                    </div>
                                    <div class="product-hide-body">
                                        <?php $__tzAxHQwUTb__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"all","");if(is_array($__tzAxHQwUTb__) || $__tzAxHQwUTb__ instanceof \think\Collection || $__tzAxHQwUTb__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__tzAxHQwUTb__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                                        <div class="body-item">
                                            <div class="body-item-header">
                                                <text><?php echo $item['name']; ?></text><!--二级-->
                                                <div class="iconfont icon-icon-arrow-right"></div>
                                            </div>
                                            <?php $__Lv6PHfCzMp__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"all","");if(is_array($__Lv6PHfCzMp__) || $__Lv6PHfCzMp__ instanceof \think\Collection || $__Lv6PHfCzMp__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__Lv6PHfCzMp__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                                            <div class="body-item-list">
                                                <div class="list-i" data-id="<?php echo $item['id']; ?>">
                                                    <text><?php echo $item['name']; ?></text><!--三级-->
                                                    <div class="iconfont icon-icon-arrow-right"></div>
                                                </div>
                                            </div>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </div>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="product-hide-right">


                                <?php $__MpteXFHOcb__ =\addons\ldcms\model\Category::instance()->getHomeLevelNav(3,0,0,"");if(is_array($__MpteXFHOcb__) || $__MpteXFHOcb__ instanceof \think\Collection || $__MpteXFHOcb__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__MpteXFHOcb__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>

                                <div class="product-hide-right-page" data-id="<?php echo $item['pid']; ?>">
                                    <div class="page-item">
                                        <a href="<?php echo $item['url']; ?>" class="page-item-title"><?php echo $item['name']; ?></a><!--四级-->
                                        <div class="page-item-content">

                                            <?php $cid=$item['id'];$mid=6;$page=null;$simple=null;            // 不传入cid默认获取栏目cid,并且开启分页
            if( empty($cid) && isset($category['id']) && !empty($category["id"]) ){
                $cid=$category["id"];
                is_null($page)?$page=true:'';  //如果没设置分页，那么默认开启分页
            }
            //传入cid,默认关闭分页
            if(!empty($cid)){
                is_null($page)?$page=false:''; 
            }
            //判断手机端是否开启简洁分页
            $addon_config=get_addon_config('ldcms');
            is_null($simple)&&$addon_config['simple']&&request()->isMobile()?$simple=true:'';$__7U40GLudW3__=\addons\ldcms\model\Document::instance()->getHomeList(['cid'=>$cid,'mid'=>$mid,'limit'=>'200','ext'=>'','filterWhere'=>isset($filterWhere)?$filterWhere:[],'_where'=>isset($_where)?$_where:[],'page'=>$page,'simple'=>$simple,'_order'=>'']); if(is_array($__7U40GLudW3__) || $__7U40GLudW3__ instanceof \think\Collection || $__7U40GLudW3__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__7U40GLudW3__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                                            <a href="<?php echo $item['url']; ?>" class="page-item-content-item"><?php echo $item['title']; ?>                         <text></text>
                                            </a><!--五级-->
                                            <?php endforeach; endif; else: echo "" ;endif; $pages=$page?$__7U40GLudW3__->render():"";$pages_total=$page&&!$simple?$__7U40GLudW3__->total():0; ?>


                                        </div>
                                    </div>


                                </div>

                                <?php endforeach; endif; else: echo "" ;endif; ?>





                            </div>
                        </div>
                    </div>
                </li>

                <?php elseif($item['mid'] == 7): ?>

                <li class="nav-li">
                    <div class="li-a-box">
                        <a class="li-a" href="<?php echo $item['url']; ?>"><?php echo $item['name']; ?></a>
                        <div class="nav-hide-list">
                            <?php $__lKiWrBuMjy__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"all","");if(is_array($__lKiWrBuMjy__) || $__lKiWrBuMjy__ instanceof \think\Collection || $__lKiWrBuMjy__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__lKiWrBuMjy__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                            <div class="hide-item">
                                <a class="hide-item-row" href="<?php echo $item['url']; ?>">
                                    <?php echo $item['name']; ?>                  <i class="iconfont icon-icon-arrow-right"></i>
                                </a>
                                <div class="hide-item-extend">
                                    <?php $__BrGO4E9sZJ__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"all","");if(is_array($__BrGO4E9sZJ__) || $__BrGO4E9sZJ__ instanceof \think\Collection || $__BrGO4E9sZJ__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__BrGO4E9sZJ__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                                    <a href="<?php echo $item['url']; ?>" class="extend-item"><?php echo $item['name']; ?></a>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                    <div class="arrow"></div>
                                </div>
                            </div>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>

                    </div>
                </li>

                <?php else: ?>

                <li class="nav-li">
                    <div class="li-a-box">
                        <a class="li-a" href="<?php echo $item['url']; ?>"><?php echo $item['name']; ?></a>
                        <div class="nav-hide-list">

                            <?php $__scWjXMokul__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"all","");if(is_array($__scWjXMokul__) || $__scWjXMokul__ instanceof \think\Collection || $__scWjXMokul__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__scWjXMokul__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                            <div class="hide-item">
                                <a class="hide-item-row" href="<?php echo $item['url']; ?>">
                                    <?php echo $item['name']; ?>                    <i class="iconfont icon-icon-arrow-right"></i>
                                </a>
                            </div>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>
                </li>
                <?php endif; endforeach; endif; else: echo "" ;endif; ?>

                <li class="nav-li">
                </li>

                <li class="nav-li" style="margin-left: 10px;">
                    <div class="li-a-box">
                        <div class="li-icons">
                            <div class="iconfont icon-a-dingbushangchengtubiao1"></div>
                        </div>
                        <div class="nav-hide-list">
                            <?php $__CroVlRWkO3__ =\addons\ldcms\model\Category::instance()->getHomeNav(0,"1","");if(is_array($__CroVlRWkO3__) || $__CroVlRWkO3__ instanceof \think\Collection || $__CroVlRWkO3__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__CroVlRWkO3__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                            <div class="hide-item">
                                <a class="hide-item-row" href="<?php echo $item['outlink']; ?>" target="_blank">
                                    <?php echo $item['name']; ?>
                                    <i class="iconfont icon-icon-arrow-right"></i>
                                </a>
                            </div>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>
                </li>
            </ul>

        </div>






        <!-- 手机端 -->
        <div class="d-flex d-lg-none nav-ph">
            <a href="/" class="nav-brand">
                <img class="img-native" src="<?php echo $ld['logo1']; ?>">
            </a>
            <div class="iconfont icon-caidan"></div>
            <div class="nav-list-container">
                <div class="close-box">
                    <div class="iconfont icon-RectangleCopy"></div>
                </div>
                <ul class="nav-list">

                    <li class="nav-li">
                        <div class="li-a-box">
                            <a class="li-a" href="/">网站首页</a>
                        </div>
                    </li>

                    <?php $__FwyQsAHp73__ =\addons\ldcms\model\Category::instance()->getHomeNav(0,"all","");if(is_array($__FwyQsAHp73__) || $__FwyQsAHp73__ instanceof \think\Collection || $__FwyQsAHp73__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__FwyQsAHp73__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>

                    <li class="nav-li">
                        <div class="li-row">
                            <a class="li-a" href="<?php echo $item['url']; ?>"><?php echo $item['name']; ?></a><!--一级-->
                            <span data-open="false" class="arrows iconfont icon-icon-arrow-right"></span>
                        </div>

                        <?php $__udon1fRY2s__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"all","");if(is_array($__udon1fRY2s__) || $__udon1fRY2s__ instanceof \think\Collection || $__udon1fRY2s__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__udon1fRY2s__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>

                        <ul class="next-list">

                            <li class="nav-li">
                                <div class="li-row">
                                    <a class="li-a" href="<?php echo $item['url']; ?>"><?php echo $item['name']; ?></a><!--二级-->
                                    <span data-open="false" class="arrows iconfont icon-icon-arrow-right d-block d-lg-none"></span>
                                </div>
                                <?php $__YzUrnQ9oZv__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"all","");if(is_array($__YzUrnQ9oZv__) || $__YzUrnQ9oZv__ instanceof \think\Collection || $__YzUrnQ9oZv__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__YzUrnQ9oZv__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                                <ul class="next-list">
                                    <li class="nav-li">
                                        <div class="li-row">
                                            <a class="li-a" href="<?php echo $item['url']; ?>"><?php echo $item['name']; ?></a><!--三级-->
                                            <span data-open="false" class="arrows iconfont icon-icon-arrow-right d-block d-lg-none"></span>
                                        </div>
                                        <?php $__SKNwIbXEof__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"all","");if(is_array($__SKNwIbXEof__) || $__SKNwIbXEof__ instanceof \think\Collection || $__SKNwIbXEof__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__SKNwIbXEof__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                                        <ul class="next-list">
                                            <li class="nav-li">
                                                <div class="li-row">
                                                    <a class="li-a" href="<?php echo $item['url']; ?>"><?php echo $item['name']; ?></a><!--四级-->
                                                    <span data-open="false" class="arrows iconfont icon-icon-arrow-right d-block d-lg-none"></span>
                                                </div>

                                                <ul class="next-list">
                                                    <?php $__SJwbKNcUmi__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"all","");if(is_array($__SJwbKNcUmi__) || $__SJwbKNcUmi__ instanceof \think\Collection || $__SJwbKNcUmi__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__SJwbKNcUmi__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                                                    <li class="nav-li">
                                                        <div class="li-row">
                                                            <a class="li-a" href="<?php echo $item['url']; ?>"><?php echo $item['name']; ?></a><!--五级-->
                                                            <span data-open="false" class="arrows iconfont icon-icon-arrow-right d-block d-lg-none"></span>
                                                        </div>
                                                    </li>
                                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                                </ul>

                                            </li>
                                        </ul>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </li>


                                </ul>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </li>


                        </ul>

                        <?php endforeach; endif; else: echo "" ;endif; ?>

                    </li>

                    <?php endforeach; endif; else: echo "" ;endif; ?>




                </ul>
            </div>
        </div>

    </div>
</div>


<!-- 电脑 -->
<div class="track global-banner d-none d-md-block">
    <?php $__7s2NlFeCSW__=\addons\ldcms\model\Ad::instance()->getHomeSlide("down_pc");if(is_array($__7s2NlFeCSW__) || $__7s2NlFeCSW__ instanceof \think\Collection || $__7s2NlFeCSW__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__7s2NlFeCSW__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
    <img src="<?php echo $item['image']; ?>" alt="">
    <?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<!-- 手机 -->
<div class="track global-banner d-block d-md-none">
    <?php $__pg2dE8Jtbk__=\addons\ldcms\model\Ad::instance()->getHomeSlide("down_mobile");if(is_array($__pg2dE8Jtbk__) || $__pg2dE8Jtbk__ instanceof \think\Collection || $__pg2dE8Jtbk__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__pg2dE8Jtbk__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
    <img src="<?php echo $item['image']; ?>" alt="">
    <?php endforeach; endif; else: echo "" ;endif; ?>
</div>


<!--内容-->
<div class="track down-container">

    <?php 
    $type = input('get.type/');
    $name = input('get.name');
     ?>

    <div class="container">

        <div class="down-navigation">

            <div class="down-col">
                <a href="xiazaizhongxin.html?type=1&name=产品型录" class="down-item <?php if($type == 1): ?>active<?php endif; ?>">
                    <i class="iconfont icon-chanpin"></i>产品型录 </a>
            </div>
            <div class="down-col">
                <a href="xiazaizhongxin.html?type=2&name=用户手册" class="down-item <?php if($type == 2): ?>active<?php endif; ?>">
                    <i class="iconfont icon-chanpin"></i>用户手册 </a>
            </div>
            <div class="down-col">
                <a href="xiazaizhongxin.html?type=3&name=通讯协议" class="down-item <?php if($type == 3): ?>active<?php endif; ?>">
                    <i class="iconfont icon-chanpin"></i>通讯协议 </a>
            </div>
            <div class="down-col">
                <a href="xiazaizhongxin.html?type=4&name=应用驱动软件" class="down-item <?php if($type == 4): ?>active<?php endif; ?>">
                    <i class="iconfont icon-chanpin"></i>应用驱动软件 </a>
            </div>

            <div class="down-col">
                <a href="xiazaizhongxin.html?type=5&name=应用产品资料" class="down-item <?php if($type == 5): ?>active<?php endif; ?>">
                    <i class="iconfont icon-chanpin"></i>应用产品资料 </a>
            </div>

        </div>



        <div class="down-body-container">


            <div class="down-body-title"><?php echo $name; ?></div>

            <div class="row">

                <?php $__vDu6lMAnYE__ =\addons\ldcms\model\Document::instance()->getDownload($type,6,0,"");if(is_array($__vDu6lMAnYE__) || $__vDu6lMAnYE__ instanceof \think\Collection || $__vDu6lMAnYE__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__vDu6lMAnYE__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                <div class="col-12 col-md-6">
                    <a href="<?php echo $item['url']; ?>" class="down-item" id="<?php echo $item['id']; ?>">
                        <span><?php echo $item['name']; ?></span>
                        <i class="iconfont icon-xiazai-wenjianxiazai-10"></i>
                    </a>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>

            </div>



        </div>

    </div>
</div>


<!-- footer -->
<div class="section fp-auto-height">
    <!-- footer -->
    <div class="global-footer">
        <div class="footer-body container fix">
            <div class="body-main">

                <?php $__1CXtq9Huj4__ =\addons\ldcms\model\Category::instance()->getHomeNav(0,"all","");if(is_array($__1CXtq9Huj4__) || $__1CXtq9Huj4__ instanceof \think\Collection || $__1CXtq9Huj4__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__1CXtq9Huj4__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;if($item['mid']=="6"): ?>
                    <div class="main-item d-none d-lg-block">
                        <a href="<?php echo $item['url']; ?>" class="link-title"><?php echo $item['name']; ?></a>
                        <?php $__fBH4IATF2p__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"all","");if(is_array($__fBH4IATF2p__) || $__fBH4IATF2p__ instanceof \think\Collection || $__fBH4IATF2p__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__fBH4IATF2p__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                        <a href="<?php echo $item['url']; ?>" class="item-link"><?php echo $item['name']; ?></a>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                    <?php endif; endforeach; endif; else: echo "" ;endif; $__g13eZRKylT__ =\addons\ldcms\model\Category::instance()->getHomeNav(0,"all","");if(is_array($__g13eZRKylT__) || $__g13eZRKylT__ instanceof \think\Collection || $__g13eZRKylT__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__g13eZRKylT__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;if($item['mid']=="2"): ?>
                <div class="main-item d-none d-lg-block">
                    <a href="<?php echo $item['url']; ?>" class="link-title"><?php echo $item['name']; ?></a>
                    <?php $__whKLH2V1ep__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"all","");if(is_array($__whKLH2V1ep__) || $__whKLH2V1ep__ instanceof \think\Collection || $__whKLH2V1ep__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__whKLH2V1ep__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                    <a href="<?php echo $item['url']; ?>" class="item-link"><?php echo $item['name']; ?></a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                <div class="main-item d-none d-lg-block">
                    <a href="xiazaizhongxin.html" class="link-title">下载中心</a>
                    <a href="xiazaizhongxin.html?type=1&name=产品型录" class="item-link">产品型录</a>
                    <a href="xiazaizhongxin.html?type=2&name=用户手册" class="item-link">用户手册</a>
                    <a href="xiazaizhongxin.html?type=3&name=通讯协议" class="item-link">通讯协议</a>
                    <a href="xiazaizhongxin.html?type=4&name=应用驱动软件" class="item-link">应用驱动软件</a>
                    <a href="xiazaizhongxin.html?type=5&name=应用产品资料" class="item-link">应用产品资料</a>
                </div>

                <div class="main-item d-none d-lg-block">
                    <a href="guanyupunalei.html" class="link-title">关于普纳雷</a>
                    <a href="lianxiwomen.html" class="item-link">联系我们</a>
                    <?php $__icnUVfsB2R__ =\addons\ldcms\model\Category::instance()->getHomeNav(0,"all","");if(is_array($__icnUVfsB2R__) || $__icnUVfsB2R__ instanceof \think\Collection || $__icnUVfsB2R__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__icnUVfsB2R__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;if($item['mid']=="0"): ?>
                    <a href="<?php echo $item['outlink']; ?>" class="item-link"><?php echo $item['name']; ?></a>
                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                </div>

                <div class="main-item main-contact">
                    <div class="link-title">联系我们</div>
                    <div class="item-link">固话：<?php echo $ld['tel']; ?></div>
                    <div class="item-link">QQ： <?php echo $ld['qq']; ?></div>
                    <div class="item-link">手机：<?php echo $ld['phone']; ?></div>
                    <div class="item-link">邮箱：<?php echo $ld['email']; ?></div>
                    <div class="item-link">地址：<?php echo $ld['address']; ?></div>
                </div>

                <div style="display: flex;">
                    <div class="main-item main-code">
                        <img src="<?php echo $ld['wechat']; ?>" class="code-img"
                             alt="">
                        <div class="item-link">普纳雷公众号</div>
                    </div>

                    <div class="main-item main-shop">
                        <a href="<?php echo $ld['taobao_link1']; ?>" target="_blank">
                            <img src="/assets/addons/ldcms/default/images/a_20260228181028_146_30.png?v=<?php echo $site['version']; ?>" alt="">
                        </a>
                        <a href="<?php echo $ld['jd_link1']; ?>" target="_blank">
                            <img src="/assets/addons/ldcms/default/images/beb611739b82cc5c15f87f51e3dc8fe6.png?v=<?php echo $site['version']; ?>" alt="">
                        </a>
                        <a href="<?php echo $ld['albaba_link1']; ?>" target="_blank">
                            <img src="/assets/addons/ldcms/default/images/7557ec8009efe4cefb2488e008f62c54.png?v=<?php echo $site['version']; ?>" alt="">
                        </a>
                        <p>官方商城入口</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="footer-copyright">
            <div class="container fix">
                <div class="copy">
                    版权所有： <?php echo $ld['copyright']; ?> · &nbsp;&nbsp; 备案号:<a href="https://beian.miit.gov.cn/" target="_blank"><?php echo $ld['icp']; ?></a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function jump(url){
        window.location.href=url;
    }
    $(function () {

        $('#fullpage').fullpage({

            responsiveWidth: 992,   // 992 以下屏幕不全屏滚动
            onLeave: function(from, to, direction){
                if (window.innerWidth > 576) {
                    if (to === 2) {
                        $('.index-product .product-controller').addClass('animate__fadeInLeftBig')
                        $('.index-product .product-swiper-container').addClass('animate__fadeInRightBig')
                    } else {
                        $('.index-product .product-controller').removeClass('animate__fadeInLeftBig')
                        $('.index-product .product-swiper-container').removeClass('animate__fadeInRightBig')
                    }

                    if (to === 3) {
                        $('.index-plan .plan-header').addClass('animate__fadeInLeftBig')
                        $('.index-plan .plan-swiper-container').addClass('animate__fadeInRightBig')
                    } else {
                        $('.index-plan .plan-header').removeClass('animate__fadeInLeftBig')
                        $('.index-plan .plan-swiper-container').removeClass('animate__fadeInRightBig')
                    }

                    if (to === 4) {
                        showNumber()
                        $('.index-about .text-col').addClass('animate__fadeInLeftBig')
                        $('.index-about .img-col').addClass('animate__fadeInRightBig')
                    } else {
                        $('.index-about .text-col').removeClass('animate__fadeInLeftBig')
                        $('.index-about .img-col').removeClass('animate__fadeInRightBig')
                    }

                    if (to === 5) {
                        $('.index-news .index-title').addClass('animate__fadeInLeftBig')
                        $('.index-news .news-list').addClass('animate__fadeInRightBig')
                    } else {
                        $('.index-news .index-title').removeClass('animate__fadeInLeftBig')
                        $('.index-news .news-list').removeClass('animate__fadeInRightBig')
                    }
                }else {
                    if (to == 4) {
                        showNumber()
                    }
                }


                if (to === 6) {
                    $('.home-bounce .arrow').addClass('back')
                } else {
                    $('.home-bounce .arrow').removeClass('back')
                }
            },
        })

        $(window).scroll(function (e) {
            if ($(window).width() < 992 && $(window).scrollTop() > 50) {
                $('.global-nav').addClass('top')
            } else {
                $('.global-nav').removeClass('top')
            }
        })



        // 轮播图
        var homeBanner = new Swiper('.index-banner', {
            autoplay: {
                delay: 6000,
                disableOnInteraction: false,
            },
            loop: true,
            pagination: {
                el: '.index-banner-pagination',
                clickable: true
            },
        })

        hideVideo()
        function hideVideo() {
            var width = window.innerWidth
            if (width < 768) {
                homeBanner.destroy()
                console.log(11)
                var slides = $('.index-banner .swiper-slide')
                slides.each(function (_, slide) {
                    if ($(slide).attr('v') === 'true') {
                        $(slide).remove()
                    }
                })
                homeBanner = new Swiper('.index-banner', {
                    autoplay: {
                        delay: 6000,
                        disableOnInteraction: false,
                    },
                    loop: true,
                    pagination: {
                        el: '.index-banner-pagination',
                        clickable: true
                    },
                })

            }
        }



        const productSwiper = new Swiper('.product-swiper', {
            autoplay: {
                delay: 6000,
                disableOnInteraction: false,
            },
            spaceBetween: 50,
            on: {
                slideChangeTransitionStart: function() {
                    const activeIndex = this.activeIndex
                    $(".product-controller .controller-item").each(function (index) {
                        if (index === activeIndex) {
                            $(this).addClass('active').siblings().removeClass('active')
                        }
                    })
                }
            }
        })
        //解决鼠标悬浮切换效果
        $(".product-controller .controller-item").mouseenter(function () {
            $(this).addClass('active').siblings().removeClass('active')
            productSwiper.slideTo($(this).index(), 300, false);
        })




        // 方案
        let timeout = null
        let marginLeft = 0

        if ($(window).width() > 576) {
            setPlanSwiperPadding()
        } else {
            $('.plan-swiper-container').addClass('container home')
            $('.plan-swiper-container').css({ 'padding-left': 0 })
        }
        $(window).resize(function () {
            if ($(window).width() > 576) {
                throttling()
            } else {
                $('.plan-swiper-container').css({ 'padding-left': 0 })
            }
        })

        function throttling(){
            clearTimeout(timeout)
            timeout = setTimeout(function () {
                setPlanSwiperPadding()
            }, 200)
        }
        function setPlanSwiperPadding () {
            marginLeft = ($('.plan-header').outerWidth(true) - $('.plan-header').outerWidth()) / 2
            $('.plan-swiper-container').css({ 'padding-left': marginLeft })
        }

        new Swiper('.plan-swiper', {
            loop: true,
            autoplay: {
                delay: 6000,
                disableOnInteraction: false,
            },
            slidesPerView: 'auto',
            loopedSlides: 5,
            spaceBetween : 90,
            navigation: {
                nextEl: '.plan-swiper-button-next',
            },
            breakpoints: {
                1920: {
                    spaceBetween : 90,
                },
                768: {
                    spaceBetween : 60,
                },
                576: {
                    spaceBetween : 30,
                }
            }
        })

        // 关于
        const counts = []
        $('.about-data').each(function(_, item) {
            counts.push(new CountUp(item.id, item.dataset.value, {
                useEasing: true,  // 过渡动画效果，默认ture
                useGrouping: false,  // 千分位效果，例：1000->1,000。默认true
                separator: ',',   // 使用千分位时分割符号
                decimal: '.',   // 小数位分割符号
                prefix: '',    // 前置符号
                suffix: ''    // 后置符号，可汉字
            }))
        })
        function showNumber () {
            counts.forEach(function (item) {
                item.start()
            })
        }


        new Swiper('.news-list', {
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            loop: true,
            breakpoints: {
                1920: {
                    spaceBetween: 25,
                    slidesPerView: 3,
                },
                992: {
                    spaceBetween: 20,
                    slidesPerView: 3,
                },
                768: {
                    spaceBetween: 20,
                    slidesPerView: 1,
                }
            }
        })
    })
    $(function(){
        let token = localStorage.getItem('token');
        if(!token){
            $('.nav-out').addClass('log-out-none');
            $('.nav-login').removeClass('log-out-none')
        }else{
            $('.nav-login').addClass('log-out-none');
            $('.nav-out').removeClass('log-out-none')
        }
        $('.log-out,.log-out-one').click(function(){
            localStorage.removeItem('token');
        })
    })
</script>


</body>
</html>
