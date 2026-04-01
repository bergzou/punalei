<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:72:"/www/wwwroot/punalei/addons/ldcms/view/default/detail_guanyupunalei.html";i:1772274222;s:56:"/www/wwwroot/punalei/addons/ldcms/view/default/head.html";i:1754571368;s:55:"/www/wwwroot/punalei/addons/ldcms/view/default/nav.html";i:1754571368;s:60:"/www/wwwroot/punalei/addons/ldcms/view/default/position.html";i:1754571368;s:58:"/www/wwwroot/punalei/addons/ldcms/view/default/footer.html";i:1772273471;s:61:"/www/wwwroot/punalei/addons/ldcms/view/default/full_page.html";i:1754571368;}*/ ?>
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

                <?php $__DH31BSitOC__ =\addons\ldcms\model\Category::instance()->getHomeNav(0,"0","");if(is_array($__DH31BSitOC__) || $__DH31BSitOC__ instanceof \think\Collection || $__DH31BSitOC__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__DH31BSitOC__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
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
                                        <?php $__KeqFZd1w8a__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"all","");if(is_array($__KeqFZd1w8a__) || $__KeqFZd1w8a__ instanceof \think\Collection || $__KeqFZd1w8a__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__KeqFZd1w8a__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                                        <div class="body-item">
                                            <div class="body-item-header">
                                                <text><?php echo $item['name']; ?></text><!--二级-->
                                                <div class="iconfont icon-icon-arrow-right"></div>
                                            </div>
                                            <?php $__Fas487JWNO__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"all","");if(is_array($__Fas487JWNO__) || $__Fas487JWNO__ instanceof \think\Collection || $__Fas487JWNO__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__Fas487JWNO__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
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


                                <?php $__P58pyeR4Ql__ =\addons\ldcms\model\Category::instance()->getHomeLevelNav(3,0,0,"");if(is_array($__P58pyeR4Ql__) || $__P58pyeR4Ql__ instanceof \think\Collection || $__P58pyeR4Ql__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__P58pyeR4Ql__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>

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
            is_null($simple)&&$addon_config['simple']&&request()->isMobile()?$simple=true:'';$__UTpb8Wv47C__=\addons\ldcms\model\Document::instance()->getHomeList(['cid'=>$cid,'mid'=>$mid,'limit'=>'200','ext'=>'','filterWhere'=>isset($filterWhere)?$filterWhere:[],'_where'=>isset($_where)?$_where:[],'page'=>$page,'simple'=>$simple,'_order'=>'']); if(is_array($__UTpb8Wv47C__) || $__UTpb8Wv47C__ instanceof \think\Collection || $__UTpb8Wv47C__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__UTpb8Wv47C__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                                            <a href="<?php echo $item['url']; ?>" class="page-item-content-item"><?php echo $item['title']; ?>                         <text></text>
                                            </a><!--五级-->
                                            <?php endforeach; endif; else: echo "" ;endif; $pages=$page?$__UTpb8Wv47C__->render():"";$pages_total=$page&&!$simple?$__UTpb8Wv47C__->total():0; ?>


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
                            <?php $__vnIHtqdGOl__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"all","");if(is_array($__vnIHtqdGOl__) || $__vnIHtqdGOl__ instanceof \think\Collection || $__vnIHtqdGOl__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__vnIHtqdGOl__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                            <div class="hide-item">
                                <a class="hide-item-row" href="<?php echo $item['url']; ?>">
                                    <?php echo $item['name']; ?>                  <i class="iconfont icon-icon-arrow-right"></i>
                                </a>
                                <div class="hide-item-extend">
                                    <?php $__iHjoQLOr5u__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"all","");if(is_array($__iHjoQLOr5u__) || $__iHjoQLOr5u__ instanceof \think\Collection || $__iHjoQLOr5u__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__iHjoQLOr5u__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
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

                            <?php $__EqQXY4Gwea__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"all","");if(is_array($__EqQXY4Gwea__) || $__EqQXY4Gwea__ instanceof \think\Collection || $__EqQXY4Gwea__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__EqQXY4Gwea__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
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
                            <?php $__sx1TPURez5__ =\addons\ldcms\model\Category::instance()->getHomeNav(0,"1","");if(is_array($__sx1TPURez5__) || $__sx1TPURez5__ instanceof \think\Collection || $__sx1TPURez5__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__sx1TPURez5__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
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

                    <?php $__w8YoisnfTk__ =\addons\ldcms\model\Category::instance()->getHomeNav(0,"all","");if(is_array($__w8YoisnfTk__) || $__w8YoisnfTk__ instanceof \think\Collection || $__w8YoisnfTk__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__w8YoisnfTk__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>

                    <li class="nav-li">
                        <div class="li-row">
                            <a class="li-a" href="<?php echo $item['url']; ?>"><?php echo $item['name']; ?></a><!--一级-->
                            <span data-open="false" class="arrows iconfont icon-icon-arrow-right"></span>
                        </div>

                        <?php $__K3PXoJMjNV__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"all","");if(is_array($__K3PXoJMjNV__) || $__K3PXoJMjNV__ instanceof \think\Collection || $__K3PXoJMjNV__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__K3PXoJMjNV__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>

                        <ul class="next-list">

                            <li class="nav-li">
                                <div class="li-row">
                                    <a class="li-a" href="<?php echo $item['url']; ?>"><?php echo $item['name']; ?></a><!--二级-->
                                    <span data-open="false" class="arrows iconfont icon-icon-arrow-right d-block d-lg-none"></span>
                                </div>
                                <?php $__xWXpOReToL__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"all","");if(is_array($__xWXpOReToL__) || $__xWXpOReToL__ instanceof \think\Collection || $__xWXpOReToL__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__xWXpOReToL__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                                <ul class="next-list">
                                    <li class="nav-li">
                                        <div class="li-row">
                                            <a class="li-a" href="<?php echo $item['url']; ?>"><?php echo $item['name']; ?></a><!--三级-->
                                            <span data-open="false" class="arrows iconfont icon-icon-arrow-right d-block d-lg-none"></span>
                                        </div>
                                        <?php $__v5dEM9bilj__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"all","");if(is_array($__v5dEM9bilj__) || $__v5dEM9bilj__ instanceof \think\Collection || $__v5dEM9bilj__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__v5dEM9bilj__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                                        <ul class="next-list">
                                            <li class="nav-li">
                                                <div class="li-row">
                                                    <a class="li-a" href="<?php echo $item['url']; ?>"><?php echo $item['name']; ?></a><!--四级-->
                                                    <span data-open="false" class="arrows iconfont icon-icon-arrow-right d-block d-lg-none"></span>
                                                </div>

                                                <ul class="next-list">
                                                    <?php $__o0vi2Ewg3K__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"all","");if(is_array($__o0vi2Ewg3K__) || $__o0vi2Ewg3K__ instanceof \think\Collection || $__o0vi2Ewg3K__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__o0vi2Ewg3K__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
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
    <?php $__NTgJzjSfqy__=\addons\ldcms\model\Ad::instance()->getHomeSlide("about_pc");if(is_array($__NTgJzjSfqy__) || $__NTgJzjSfqy__ instanceof \think\Collection || $__NTgJzjSfqy__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__NTgJzjSfqy__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
    <img src="<?php echo $item['image']; ?>" alt="">
    <?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<!-- 手机 -->
<div class="track global-banner d-block d-md-none">
    <?php $__wM7Ud2C8TL__=\addons\ldcms\model\Ad::instance()->getHomeSlide("about_mobile");if(is_array($__wM7Ud2C8TL__) || $__wM7Ud2C8TL__ instanceof \think\Collection || $__wM7Ud2C8TL__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__wM7Ud2C8TL__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
    <img src="<?php echo $item['image']; ?>" alt="">
    <?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<!-- 面包屑 -->
<!-- 面包屑 -->
<div class="track global-crumbs">
    <div class="container">
        <a class="crumb" href="/"><span class="iconfont icon-shouye"></span>首页</a>
        <?php $__osGVHrMO6i__=\addons\ldcms\model\Category::instance()->getHomePosition($category['id']);if(is_array($__osGVHrMO6i__) || $__osGVHrMO6i__ instanceof \think\Collection || $__osGVHrMO6i__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__osGVHrMO6i__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
        <span class="separator">&gt;</span>
        <a class="crumb" href="<?php echo $item['url']; ?>"><?php echo $item['name']; ?></a>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>


<!-- 公司简介 -->
<div class="track about-container" id="109">
    <div class="about-intro-container container">
        <div class="intro-text">
            <div class="text-title">企业简介</div>
            <div class="text-content">
                <?php echo $content['intro_content']; ?>
            </div>
        </div>

        <div class="intro-img-box">
            <img src="<?php echo $content['intro_img']; ?>">
            <div class="iconfont video-btn icon-sanjiao3"></div>
        </div>
    </div>
</div>

<!-- 企业文化 -->
<div class="track about-culture container">
    <div class="culture-title">企业文化</div>
    <div class="culture-content">
        <div class="content-text">

            <div class="text-item">
                <div class="icon-box">
                    <img src="/assets/addons/ldcms/default/images/a444b7f2ce6f7c2e47badf3071685975.png?v=<?php echo $site['version']; ?>" alt="">
                </div>
                <div class="right">
                    <div class="title">使命</div>
                    <div class="content"><?php echo $content['culture_mission']; ?></div>
                </div>
            </div>
            <div class="text-item">
                <div class="icon-box">
                    <img src="/assets/addons/ldcms/default/images/4a916922de0305c14126f2abe49a2088.png?v=<?php echo $site['version']; ?>" alt="">
                </div>
                <div class="right">
                    <div class="title">愿景</div>
                    <div class="content"><?php echo $content['culture_prospect']; ?></div>
                </div>
            </div>
            <div class="text-item">
                <div class="icon-box">
                    <img src="/assets/addons/ldcms/default/images/3467ad57e2c767b07f6bf165ac8785ef.png?v=<?php echo $site['version']; ?>" alt="">
                </div>
                <div class="right">
                    <div class="title">核心价值观</div>
                    <div class="content"><?php echo $content['culture_core_value']; ?></div>
                </div>
            </div>


        </div>
    </div>
</div>


<!-- 企业荣誉 -->
<div class="track about-honor container" id="29">
    <div class="honor-header">
        <div class="honor-title">普纳雷荣誉</div>
        <div class="honor-tabs">

         
        
            <div class="tab active">
                企业荣誉证书
            </div>
          


        </div>
    </div>



    <div class="honor-swiper honor-swiper-active swiper swiper-container">
        <div class="swiper-wrapper">

            <?php $var=$content['company_ccie'];if(!empty($var)):$__kLIZoeCpq5__=explode(",",$var);if(is_array($__kLIZoeCpq5__) || $__kLIZoeCpq5__ instanceof \think\Collection || $__kLIZoeCpq5__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__kLIZoeCpq5__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
            <div class="swiper-slide">
                <div class="honor-item">
                    <img class="item-img" src="<?php echo $item; ?>" alt="">
                </div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; endif;?>

        </div>
    </div>


    <div class="about-honor-pagination"></div><!--分页器-->
</div>


<!-- 视频弹框 -->
<div id="videoBox" class="overlay-container">
    <div id="videoOverlay" class="overlay">
        <div id="videoDialog" class="dialog">
            <div class="dialog-button iconfont icon-RectangleCopy"></div>
            <video class="dialog-video" controls=""
                   src="<?php echo $content['intro_video']; ?>"></video>
        </div>
    </div>
</div>

<script>
    $(function () {

        // 视频弹框
        // 点击打开
        $('.video-btn').click(function () {
            $("#videoBox").fadeIn(200)
            $("#videoOverlay").animate({
                opacity: 1
            }, 200)
            $("#videoDialog").addClass("active")
            $('.dialog-video').trigger('play');
        })
        // 点击关闭
        $(".dialog-button").click(function () {
            $("#videoBox").fadeOut(200);
            $("#videoDialog").removeClass("active");
            $('.dialog-video').trigger('pause');
        })

        // 点击蒙层关闭弹窗
        $("#videoBox").click(function (event) {
            if (event.target === event.currentTarget) {
                $("#videoBox").fadeOut(200);
                $("#videoDialog").removeClass("active");
                $('.dialog-video').trigger('pause');
            }
        })

        var counts = []
        $('.about-data').each(function (_, item) {
            counts.push(new CountUp(item.id, item.dataset.value, {
                useEasing: true,  // 过渡动画效果，默认ture
                useGrouping: false,  // 千分位效果，例：1000->1,000。默认true
                separator: ',',   // 使用千分位时分割符号
                decimal: '.',   // 小数位分割符号
                prefix: '',    // 前置符号
                suffix: ''    // 后置符号，可汉字
            }))
        })

        function showNumber() {
            counts.forEach(function (item) {
                item.start()
            })
        }

        var isRun = true;
        const windowHeight = $(window).height()


        // 发展历程
        var mainSwiper = new Swiper('.course-main-swiper', {
            noSwiping: true,
            spaceBetween: 50,
            // effect: 'flip',
        })
        new Swiper('.course-thumbs-swiper', {
            slidesPerView: 5,
            direction: "vertical",
            mousewheel: true,
            centeredSlides: true,
            controller: {
                control: mainSwiper,
            }
        })


        // 企业荣誉
        var honorSwiper = initHonorSwiper()

        $('.honor-tabs .tab').click(function () {
            honorSwiper.destroy()
            $(this).addClass('active').siblings().removeClass('active')
            $('.honor-swiper').eq($(this).index()).addClass('honor-swiper-active').siblings().removeClass('honor-swiper-active')
            honorSwiper = initHonorSwiper()
        })

        function initHonorSwiper() {
            return new Swiper('.honor-swiper-active', {
                speed: 2000,
                autoplay: {
                    delay: 6000,
                },
                pagination: {
                    el: '.about-honor-pagination',
                    clickable: true,
                },
                grid: {
                    fill: 'row',
                },
                breakpoints: {
                    1920: {
                        spaceBetween: 20,
                        slidesPerView: 4,
                        slidesPerGroup: 4,
                        grid: {
                            rows: 2,
                        },
                    },
                    1200: {
                        spaceBetween: 20,
                        slidesPerView: 3,
                        slidesPerGroup: 3,
                        grid: {
                            rows: 2,
                        },
                    },
                    768: {
                        spaceBetween: 20,
                        slidesPerView: 2,
                        slidesPerGroup: 2,
                        grid: {
                            rows: 2,
                        },
                    },
                    576: {
                        spaceBetween: 15,
                        slidesPerView: 2,
                        slidesPerGroup: 2,
                        grid: {
                            rows: 2,
                        },
                    }
                }
            })
        }


    })
</script>


<!-- footer -->
<div class="section fp-auto-height">
    <!-- footer -->
    <div class="global-footer">
        <div class="footer-body container fix">
            <div class="body-main">

                <?php $__QorSM07ICm__ =\addons\ldcms\model\Category::instance()->getHomeNav(0,"all","");if(is_array($__QorSM07ICm__) || $__QorSM07ICm__ instanceof \think\Collection || $__QorSM07ICm__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__QorSM07ICm__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;if($item['mid']=="6"): ?>
                    <div class="main-item d-none d-lg-block">
                        <a href="<?php echo $item['url']; ?>" class="link-title"><?php echo $item['name']; ?></a>
                        <?php $__6nfyuKxZe0__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"all","");if(is_array($__6nfyuKxZe0__) || $__6nfyuKxZe0__ instanceof \think\Collection || $__6nfyuKxZe0__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__6nfyuKxZe0__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                        <a href="<?php echo $item['url']; ?>" class="item-link"><?php echo $item['name']; ?></a>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                    <?php endif; endforeach; endif; else: echo "" ;endif; $__Te9JUxMLIt__ =\addons\ldcms\model\Category::instance()->getHomeNav(0,"all","");if(is_array($__Te9JUxMLIt__) || $__Te9JUxMLIt__ instanceof \think\Collection || $__Te9JUxMLIt__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__Te9JUxMLIt__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;if($item['mid']=="2"): ?>
                <div class="main-item d-none d-lg-block">
                    <a href="<?php echo $item['url']; ?>" class="link-title"><?php echo $item['name']; ?></a>
                    <?php $__uGwjUqHdcM__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"all","");if(is_array($__uGwjUqHdcM__) || $__uGwjUqHdcM__ instanceof \think\Collection || $__uGwjUqHdcM__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__uGwjUqHdcM__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
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
                    <?php $__dLjlIGT8Xm__ =\addons\ldcms\model\Category::instance()->getHomeNav(0,"all","");if(is_array($__dLjlIGT8Xm__) || $__dLjlIGT8Xm__ instanceof \think\Collection || $__dLjlIGT8Xm__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__dLjlIGT8Xm__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;if($item['mid']=="0"): ?>
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
