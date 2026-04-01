<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:64:"/www/wwwroot/punalei/addons/ldcms/view/default/list_product.html";i:1775009027;s:56:"/www/wwwroot/punalei/addons/ldcms/view/default/head.html";i:1754571368;s:55:"/www/wwwroot/punalei/addons/ldcms/view/default/nav.html";i:1754571368;s:60:"/www/wwwroot/punalei/addons/ldcms/view/default/position.html";i:1754571368;s:58:"/www/wwwroot/punalei/addons/ldcms/view/default/footer.html";i:1772273471;s:61:"/www/wwwroot/punalei/addons/ldcms/view/default/full_page.html";i:1754571368;}*/ ?>
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

                <?php $__Hah89A3YGi__ =\addons\ldcms\model\Category::instance()->getHomeNav(0,"0","");if(is_array($__Hah89A3YGi__) || $__Hah89A3YGi__ instanceof \think\Collection || $__Hah89A3YGi__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__Hah89A3YGi__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
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
                                        <?php $__7lXWVmYh9M__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"all","");if(is_array($__7lXWVmYh9M__) || $__7lXWVmYh9M__ instanceof \think\Collection || $__7lXWVmYh9M__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__7lXWVmYh9M__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                                        <div class="body-item">
                                            <div class="body-item-header">
                                                <text><?php echo $item['name']; ?></text><!--二级-->
                                                <div class="iconfont icon-icon-arrow-right"></div>
                                            </div>
                                            <?php $__8oVd9hpXeW__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"all","");if(is_array($__8oVd9hpXeW__) || $__8oVd9hpXeW__ instanceof \think\Collection || $__8oVd9hpXeW__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__8oVd9hpXeW__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
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


                                <?php $__Vv4eXZOMcf__ =\addons\ldcms\model\Category::instance()->getHomeLevelNav(3,0,0,"");if(is_array($__Vv4eXZOMcf__) || $__Vv4eXZOMcf__ instanceof \think\Collection || $__Vv4eXZOMcf__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__Vv4eXZOMcf__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>

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
            is_null($simple)&&$addon_config['simple']&&request()->isMobile()?$simple=true:'';$__xfZB3KWC7G__=\addons\ldcms\model\Document::instance()->getHomeList(['cid'=>$cid,'mid'=>$mid,'limit'=>'200','ext'=>'','filterWhere'=>isset($filterWhere)?$filterWhere:[],'_where'=>isset($_where)?$_where:[],'page'=>$page,'simple'=>$simple,'_order'=>'']); if(is_array($__xfZB3KWC7G__) || $__xfZB3KWC7G__ instanceof \think\Collection || $__xfZB3KWC7G__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__xfZB3KWC7G__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                                            <a href="<?php echo $item['url']; ?>" class="page-item-content-item"><?php echo $item['title']; ?>                         <text></text>
                                            </a><!--五级-->
                                            <?php endforeach; endif; else: echo "" ;endif; $pages=$page?$__xfZB3KWC7G__->render():"";$pages_total=$page&&!$simple?$__xfZB3KWC7G__->total():0; ?>


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
                            <?php $__lZhLzdXAB8__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"all","");if(is_array($__lZhLzdXAB8__) || $__lZhLzdXAB8__ instanceof \think\Collection || $__lZhLzdXAB8__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__lZhLzdXAB8__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                            <div class="hide-item">
                                <a class="hide-item-row" href="<?php echo $item['url']; ?>">
                                    <?php echo $item['name']; ?>                  <i class="iconfont icon-icon-arrow-right"></i>
                                </a>
                                <div class="hide-item-extend">
                                    <?php $__hopRc6aG8l__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"all","");if(is_array($__hopRc6aG8l__) || $__hopRc6aG8l__ instanceof \think\Collection || $__hopRc6aG8l__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__hopRc6aG8l__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
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

                            <?php $__f9UCeyTbZQ__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"all","");if(is_array($__f9UCeyTbZQ__) || $__f9UCeyTbZQ__ instanceof \think\Collection || $__f9UCeyTbZQ__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__f9UCeyTbZQ__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
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
                            <?php $__wu6MmATg9c__ =\addons\ldcms\model\Category::instance()->getHomeNav(0,"1","");if(is_array($__wu6MmATg9c__) || $__wu6MmATg9c__ instanceof \think\Collection || $__wu6MmATg9c__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__wu6MmATg9c__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
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

                    <?php $__R6hysAEf7e__ =\addons\ldcms\model\Category::instance()->getHomeNav(0,"all","");if(is_array($__R6hysAEf7e__) || $__R6hysAEf7e__ instanceof \think\Collection || $__R6hysAEf7e__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__R6hysAEf7e__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>

                    <li class="nav-li">
                        <div class="li-row">
                            <a class="li-a" href="<?php echo $item['url']; ?>"><?php echo $item['name']; ?></a><!--一级-->
                            <span data-open="false" class="arrows iconfont icon-icon-arrow-right"></span>
                        </div>

                        <?php $__CVJlS6mTWR__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"all","");if(is_array($__CVJlS6mTWR__) || $__CVJlS6mTWR__ instanceof \think\Collection || $__CVJlS6mTWR__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__CVJlS6mTWR__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>

                        <ul class="next-list">

                            <li class="nav-li">
                                <div class="li-row">
                                    <a class="li-a" href="<?php echo $item['url']; ?>"><?php echo $item['name']; ?></a><!--二级-->
                                    <span data-open="false" class="arrows iconfont icon-icon-arrow-right d-block d-lg-none"></span>
                                </div>
                                <?php $__FO3uwXx64i__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"all","");if(is_array($__FO3uwXx64i__) || $__FO3uwXx64i__ instanceof \think\Collection || $__FO3uwXx64i__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__FO3uwXx64i__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                                <ul class="next-list">
                                    <li class="nav-li">
                                        <div class="li-row">
                                            <a class="li-a" href="<?php echo $item['url']; ?>"><?php echo $item['name']; ?></a><!--三级-->
                                            <span data-open="false" class="arrows iconfont icon-icon-arrow-right d-block d-lg-none"></span>
                                        </div>
                                        <?php $__OUy8hw7XV4__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"all","");if(is_array($__OUy8hw7XV4__) || $__OUy8hw7XV4__ instanceof \think\Collection || $__OUy8hw7XV4__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__OUy8hw7XV4__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                                        <ul class="next-list">
                                            <li class="nav-li">
                                                <div class="li-row">
                                                    <a class="li-a" href="<?php echo $item['url']; ?>"><?php echo $item['name']; ?></a><!--四级-->
                                                    <span data-open="false" class="arrows iconfont icon-icon-arrow-right d-block d-lg-none"></span>
                                                </div>

                                                <ul class="next-list">
                                                    <?php $__fdpgv2aV8U__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"all","");if(is_array($__fdpgv2aV8U__) || $__fdpgv2aV8U__ instanceof \think\Collection || $__fdpgv2aV8U__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__fdpgv2aV8U__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
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
    <?php $__vq7Bf9pEaZ__=\addons\ldcms\model\Ad::instance()->getHomeSlide("product_pc");if(is_array($__vq7Bf9pEaZ__) || $__vq7Bf9pEaZ__ instanceof \think\Collection || $__vq7Bf9pEaZ__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__vq7Bf9pEaZ__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
    <img src="<?php echo $item['image']; ?>" alt="">
    <?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<!-- 手机 -->
<div class="track global-banner d-block d-md-none">
    <?php $__cYAPmpZBSI__=\addons\ldcms\model\Ad::instance()->getHomeSlide("product_mobile");if(is_array($__cYAPmpZBSI__) || $__cYAPmpZBSI__ instanceof \think\Collection || $__cYAPmpZBSI__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__cYAPmpZBSI__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
    <img src="<?php echo $item['image']; ?>" alt="">
    <?php endforeach; endif; else: echo "" ;endif; ?>
</div>

<!-- 面包屑 -->
<!-- 面包屑 -->
<div class="track global-crumbs">
    <div class="container">
        <a class="crumb" href="/"><span class="iconfont icon-shouye"></span>首页</a>
        <?php $__52jzvMmcRI__=\addons\ldcms\model\Category::instance()->getHomePosition($category['id']);if(is_array($__52jzvMmcRI__) || $__52jzvMmcRI__ instanceof \think\Collection || $__52jzvMmcRI__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__52jzvMmcRI__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
        <span class="separator">&gt;</span>
        <a class="crumb" href="<?php echo $item['url']; ?>"><?php echo $item['name']; ?></a>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>

<!--$category['id']-->

<!-- 导航 -->
<div class="track product-navigation container">

    <?php if($category['pid'] == 0): ?>
    <div class="primary-navigation">
        <?php $__V7g4dIeh91__ =\addons\ldcms\model\Category::instance()->getHomeLevelNav(1,6,0,"");if(is_array($__V7g4dIeh91__) || $__V7g4dIeh91__ instanceof \think\Collection || $__V7g4dIeh91__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__V7g4dIeh91__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
        <a href="<?php echo $item['url']; ?>" class="item">
            <img src="<?php echo $item['image']; ?>" alt="">
            <img class="selected" src="<?php echo $item['big_image']; ?>" alt="">
            <div class="title"><?php echo $item['name']; ?></div>
        </a>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <?php else: ?>
    <div class="primary-navigation">
        <?php $__ahkNj1x5rP__ =\addons\ldcms\model\Category::instance()->getHomeLevelNav(2,6,0,"");if(is_array($__ahkNj1x5rP__) || $__ahkNj1x5rP__ instanceof \think\Collection || $__ahkNj1x5rP__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__ahkNj1x5rP__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
        <a href="<?php echo $item['url']; ?>" class="item">
            <img src="<?php echo $item['image']; ?>" alt="">
            <img class="selected" src="<?php echo $item['big_image']; ?>" alt="">
            <div class="title"><?php echo $item['name']; ?></div>
        </a>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <?php endif; ?>

    <div class="secondary-navigation">
        <!--是否是上级并且第一位-->
        <?php if($category['pid'] != 0): $__6O0ZojrdlL__ =\addons\ldcms\model\Category::instance()->getHomeLevelNav(3,6,$category['id'],"");if(is_array($__6O0ZojrdlL__) || $__6O0ZojrdlL__ instanceof \think\Collection || $__6O0ZojrdlL__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__6O0ZojrdlL__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;if($item['id'] == $category['id']): ?>
         <a href="<?php echo $item['url']; ?>" class="item active"><?php echo $item['name']; ?></a>
        <?php else: ?>
        <a href="<?php echo $item['url']; ?>" class="item"><?php echo $item['name']; ?></a>
        <?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>
    </div>

</div>
<div class="track product-container container">


    <?php if($category['pid'] == 0): ?>
    <div class="row product-list">
        <?php $cid=0;$mid=6;$page=null;$simple=null;            // 不传入cid默认获取栏目cid,并且开启分页
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
            is_null($simple)&&$addon_config['simple']&&request()->isMobile()?$simple=true:'';$__K6nVOtSNfH__=\addons\ldcms\model\Document::instance()->getHomeList(['cid'=>$cid,'mid'=>$mid,'limit'=>'16','ext'=>'part','filterWhere'=>isset($filterWhere)?$filterWhere:[],'_where'=>isset($_where)?$_where:[],'page'=>$page,'simple'=>$simple,'_order'=>'']); if(is_array($__K6nVOtSNfH__) || $__K6nVOtSNfH__ instanceof \think\Collection || $__K6nVOtSNfH__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__K6nVOtSNfH__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
        <div class="col-6 col-md-4 col-lg-3">
            <a href="<?php echo $item['url']; ?>" class="product-item">
                <div class="item-title item-type"><?php echo $item['title']; ?></div>
                <div class="item-spec"><?php echo $item['part']; ?></div>
                <div class="item-img-box">
                    <img class="item-img" src="<?php echo $item['image']; ?>" alt="">
                </div>
                <div class="item-learn-more">查看更多</div>
            </a>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; $pages=$page?$__K6nVOtSNfH__->render():"";$pages_total=$page&&!$simple?$__K6nVOtSNfH__->total():0; ?>
    </div>
    <?php else: ?>

    <div class="row product-list">
        <?php $cid=$category['id'];$mid=6;$page=null;$simple=null;            // 不传入cid默认获取栏目cid,并且开启分页
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
            is_null($simple)&&$addon_config['simple']&&request()->isMobile()?$simple=true:'';$__xKbWmnuQA4__=\addons\ldcms\model\Document::instance()->getHomeList(['cid'=>$cid,'mid'=>$mid,'limit'=>'16','ext'=>'part','filterWhere'=>isset($filterWhere)?$filterWhere:[],'_where'=>isset($_where)?$_where:[],'page'=>$page,'simple'=>$simple,'_order'=>'']); if(is_array($__xKbWmnuQA4__) || $__xKbWmnuQA4__ instanceof \think\Collection || $__xKbWmnuQA4__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__xKbWmnuQA4__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
        <div class="col-6 col-md-4 col-lg-3">
            <a href="<?php echo $item['url']; ?>" class="product-item">
                <div class="item-title item-type"><?php echo $item['title']; ?></div>
                <div class="item-spec"><?php echo $item['part']; ?></div>
                <div class="item-img-box">
                    <img class="item-img" src="<?php echo $item['image']; ?>" alt="">
                </div>
                <div class="item-learn-more">查看更多</div>
            </a>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; $pages=$page?$__xKbWmnuQA4__->render():"";$pages_total=$page&&!$simple?$__xKbWmnuQA4__->total():0; ?>
    </div>




    <?php endif; ?>




</div>



<!-- footer -->
<div class="section fp-auto-height">
    <!-- footer -->
    <div class="global-footer">
        <div class="footer-body container fix">
            <div class="body-main">

                <?php $__oe25H06UV3__ =\addons\ldcms\model\Category::instance()->getHomeNav(0,"all","");if(is_array($__oe25H06UV3__) || $__oe25H06UV3__ instanceof \think\Collection || $__oe25H06UV3__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__oe25H06UV3__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;if($item['mid']=="6"): ?>
                    <div class="main-item d-none d-lg-block">
                        <a href="<?php echo $item['url']; ?>" class="link-title"><?php echo $item['name']; ?></a>
                        <?php $__WSCQ4TPaVe__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"all","");if(is_array($__WSCQ4TPaVe__) || $__WSCQ4TPaVe__ instanceof \think\Collection || $__WSCQ4TPaVe__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__WSCQ4TPaVe__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                        <a href="<?php echo $item['url']; ?>" class="item-link"><?php echo $item['name']; ?></a>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                    <?php endif; endforeach; endif; else: echo "" ;endif; $__sewoWMLrEF__ =\addons\ldcms\model\Category::instance()->getHomeNav(0,"all","");if(is_array($__sewoWMLrEF__) || $__sewoWMLrEF__ instanceof \think\Collection || $__sewoWMLrEF__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__sewoWMLrEF__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;if($item['mid']=="2"): ?>
                <div class="main-item d-none d-lg-block">
                    <a href="<?php echo $item['url']; ?>" class="link-title"><?php echo $item['name']; ?></a>
                    <?php $__JwZnmk0UPT__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"all","");if(is_array($__JwZnmk0UPT__) || $__JwZnmk0UPT__ instanceof \think\Collection || $__JwZnmk0UPT__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__JwZnmk0UPT__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
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
                    <?php $__ua4HezRbB6__ =\addons\ldcms\model\Category::instance()->getHomeNav(0,"all","");if(is_array($__ua4HezRbB6__) || $__ua4HezRbB6__ instanceof \think\Collection || $__ua4HezRbB6__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__ua4HezRbB6__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;if($item['mid']=="0"): ?>
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


