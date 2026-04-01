<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:57:"/www/wwwroot/punalei/addons/ldcms/view/default/index.html";i:1754571368;s:56:"/www/wwwroot/punalei/addons/ldcms/view/default/head.html";i:1754571368;s:55:"/www/wwwroot/punalei/addons/ldcms/view/default/nav.html";i:1754571368;s:58:"/www/wwwroot/punalei/addons/ldcms/view/default/footer.html";i:1772273471;s:61:"/www/wwwroot/punalei/addons/ldcms/view/default/full_page.html";i:1754571368;}*/ ?>
﻿<!DOCTYPE html>
<html lang="ch">
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

                <?php $__DxtQoLpqdU__ =\addons\ldcms\model\Category::instance()->getHomeNav(0,"0","");if(is_array($__DxtQoLpqdU__) || $__DxtQoLpqdU__ instanceof \think\Collection || $__DxtQoLpqdU__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__DxtQoLpqdU__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
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
                                        <?php $__2n1VcALxHm__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"all","");if(is_array($__2n1VcALxHm__) || $__2n1VcALxHm__ instanceof \think\Collection || $__2n1VcALxHm__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__2n1VcALxHm__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                                        <div class="body-item">
                                            <div class="body-item-header">
                                                <text><?php echo $item['name']; ?></text><!--二级-->
                                                <div class="iconfont icon-icon-arrow-right"></div>
                                            </div>
                                            <?php $__GCgSJ7BQ8h__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"all","");if(is_array($__GCgSJ7BQ8h__) || $__GCgSJ7BQ8h__ instanceof \think\Collection || $__GCgSJ7BQ8h__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__GCgSJ7BQ8h__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
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


                                <?php $__xEUrMbHKAW__ =\addons\ldcms\model\Category::instance()->getHomeLevelNav(3,0,0,"");if(is_array($__xEUrMbHKAW__) || $__xEUrMbHKAW__ instanceof \think\Collection || $__xEUrMbHKAW__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__xEUrMbHKAW__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>

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
            is_null($simple)&&$addon_config['simple']&&request()->isMobile()?$simple=true:'';$__gvkS7dylHF__=\addons\ldcms\model\Document::instance()->getHomeList(['cid'=>$cid,'mid'=>$mid,'limit'=>'200','ext'=>'','filterWhere'=>isset($filterWhere)?$filterWhere:[],'_where'=>isset($_where)?$_where:[],'page'=>$page,'simple'=>$simple,'_order'=>'']); if(is_array($__gvkS7dylHF__) || $__gvkS7dylHF__ instanceof \think\Collection || $__gvkS7dylHF__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__gvkS7dylHF__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                                            <a href="<?php echo $item['url']; ?>" class="page-item-content-item"><?php echo $item['title']; ?>                         <text></text>
                                            </a><!--五级-->
                                            <?php endforeach; endif; else: echo "" ;endif; $pages=$page?$__gvkS7dylHF__->render():"";$pages_total=$page&&!$simple?$__gvkS7dylHF__->total():0; ?>


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
                            <?php $__GRZ3jDYleP__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"all","");if(is_array($__GRZ3jDYleP__) || $__GRZ3jDYleP__ instanceof \think\Collection || $__GRZ3jDYleP__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__GRZ3jDYleP__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                            <div class="hide-item">
                                <a class="hide-item-row" href="<?php echo $item['url']; ?>">
                                    <?php echo $item['name']; ?>                  <i class="iconfont icon-icon-arrow-right"></i>
                                </a>
                                <div class="hide-item-extend">
                                    <?php $__6CsujSHZEd__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"all","");if(is_array($__6CsujSHZEd__) || $__6CsujSHZEd__ instanceof \think\Collection || $__6CsujSHZEd__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__6CsujSHZEd__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
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

                            <?php $__IP8mvOfR47__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"all","");if(is_array($__IP8mvOfR47__) || $__IP8mvOfR47__ instanceof \think\Collection || $__IP8mvOfR47__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__IP8mvOfR47__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
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
                            <?php $__rMipJbqk26__ =\addons\ldcms\model\Category::instance()->getHomeNav(0,"1","");if(is_array($__rMipJbqk26__) || $__rMipJbqk26__ instanceof \think\Collection || $__rMipJbqk26__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__rMipJbqk26__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
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

                    <?php $__g9WHPClObe__ =\addons\ldcms\model\Category::instance()->getHomeNav(0,"all","");if(is_array($__g9WHPClObe__) || $__g9WHPClObe__ instanceof \think\Collection || $__g9WHPClObe__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__g9WHPClObe__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>

                    <li class="nav-li">
                        <div class="li-row">
                            <a class="li-a" href="<?php echo $item['url']; ?>"><?php echo $item['name']; ?></a><!--一级-->
                            <span data-open="false" class="arrows iconfont icon-icon-arrow-right"></span>
                        </div>

                        <?php $__yiKvLae9VS__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"all","");if(is_array($__yiKvLae9VS__) || $__yiKvLae9VS__ instanceof \think\Collection || $__yiKvLae9VS__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__yiKvLae9VS__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>

                        <ul class="next-list">

                            <li class="nav-li">
                                <div class="li-row">
                                    <a class="li-a" href="<?php echo $item['url']; ?>"><?php echo $item['name']; ?></a><!--二级-->
                                    <span data-open="false" class="arrows iconfont icon-icon-arrow-right d-block d-lg-none"></span>
                                </div>
                                <?php $__cmGCegk39o__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"all","");if(is_array($__cmGCegk39o__) || $__cmGCegk39o__ instanceof \think\Collection || $__cmGCegk39o__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__cmGCegk39o__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                                <ul class="next-list">
                                    <li class="nav-li">
                                        <div class="li-row">
                                            <a class="li-a" href="<?php echo $item['url']; ?>"><?php echo $item['name']; ?></a><!--三级-->
                                            <span data-open="false" class="arrows iconfont icon-icon-arrow-right d-block d-lg-none"></span>
                                        </div>
                                        <?php $__8Niq3V5ndJ__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"all","");if(is_array($__8Niq3V5ndJ__) || $__8Niq3V5ndJ__ instanceof \think\Collection || $__8Niq3V5ndJ__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__8Niq3V5ndJ__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                                        <ul class="next-list">
                                            <li class="nav-li">
                                                <div class="li-row">
                                                    <a class="li-a" href="<?php echo $item['url']; ?>"><?php echo $item['name']; ?></a><!--四级-->
                                                    <span data-open="false" class="arrows iconfont icon-icon-arrow-right d-block d-lg-none"></span>
                                                </div>

                                                <ul class="next-list">
                                                    <?php $__6S5DhLgOaB__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"all","");if(is_array($__6S5DhLgOaB__) || $__6S5DhLgOaB__ instanceof \think\Collection || $__6S5DhLgOaB__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__6S5DhLgOaB__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
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

<!-- 箭头 -->
<!-- 箭头 -->
<div class="home-bounce">
    <img class="arrow" src="/assets/addons/ldcms/default/images/jiantou.png?v=<?php echo $site['version']; ?>" alt="">
    <div class="shadow"></div>
    <div class="particle-container">
        <div class="particle animated-particle"></div>
        <div class="particle animated-particle"></div>
        <div class="particle animated-particle"></div>
        <div class="particle animated-particle"></div>
        <div class="particle animated-particle"></div>
        <div class="particle animated-particle"></div>
        <div class="particle animated-particle"></div>
        <div class="particle animated-particle"></div>
        <div class="particle animated-particle"></div>
        <div class="particle animated-particle"></div>
        <div class="particle animated-particle"></div>
        <div class="particle animated-particle"></div>
        <div class="particle animated-particle"></div>
        <div class="particle animated-particle"></div>
        <div class="particle animated-particle"></div>
    </div>
</div>
<script>

    $(function () {
        // 粒子数组
        var particles = [...document.querySelectorAll('.particle')]
        particles.forEach(assignStylesToParticle)
        $('.home-bounce').click(function () {
            if ($('.home-bounce .arrow').hasClass('back')) {
                $.fn.fullpage.moveTo(1);
            } else {
                $.fn.fullpage.moveSectionDown();
            }
        })
    })

    function getRandomStyles() {
        const duration = (Math.random() * 3 + 1).toFixed(2) // duration is between 1 and 4 seconds
        const x = Math.floor(-10 + Math.random() * 110) // x is between -10% and 100%
        const y = Math.floor(Math.random() * 100) // y is between 0% and 100%
        const h = 15 // height is always 15px
        const w = Math.ceil(Math.random() * 3) // width is between 1 and 3px
        return {
            left: `${x}%`,
            top: `${y}%`,
            height: `${h}px`,
            width: `${w}px`,
            animationDuration: `${duration}s`,
        }
    }

    function assignStylesToParticle(element) {
        if (!element.classList.contains['animated-particle']) {
            element.classList.add('animated-particle')
        }

        const style = getRandomStyles()

        Object.keys(style).forEach((key) => {
            element.style[key] = style[key]
        })

        element.addEventListener(
            'animationend',
            () => {
                element.classList.remove('animated-particle')

                /*
                    浏览器会尝试批量处理累积的更改，并且仅在您正在执行的操作结束时执行计算，
                    这行代码的作用是要求浏览器为您提供有关 dom 的信息。但是为了知道 offsetWidth 的值，
                    浏览器必须放弃批量更改的计划，现在就执行页面的重排
                  */
                void element.offsetWidth
                assignStylesToParticle(element)
            },
            { once: true }
        )
    }
</script>
<div id="fullpage">

    <!-- banner --><!-- 轮播 -->
    <div class="section">
        <div class="swiper swiper-container index-banner">
            <div class="swiper-wrapper">
                <a href="index.html" class="swiper-slide" data-swiper-autoplay="6000" v="true">
                    <video data-autoplay="" autoplay="" muted="" loop=""
                           src="<?php echo $ld['video']; ?>"></video>
                </a>


                <?php $__T4i6Dgkeo3__=\addons\ldcms\model\Ad::instance()->getHomeSlide("index");if(is_array($__T4i6Dgkeo3__) || $__T4i6Dgkeo3__ instanceof \think\Collection || $__T4i6Dgkeo3__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__T4i6Dgkeo3__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                <a href="<?php echo $item['url']; ?>" class="swiper-slide">
                    <div class="bg d-none d-lg-block"
                         style="background-image: url(<?php echo $item['image']; ?>);"></div>
                    <img class="d-block d-lg-none" src="<?php echo $item['image']; ?>"
                         alt="">
                    <div class="banner-word">
                        <div class="title"><?php echo $item['title']; ?></div>
                        <div class="subtitle empty"></div>
                        <div class="link">了解更多<i class="iconfont icon-icon-arrow-right"></i></div>
                    </div>
                </a>
                <?php endforeach; endif; else: echo "" ;endif; ?>




            </div>
            <div class="index-banner-pagination swiper-pagination"></div>
        </div>
    </div>

    <?php $__k3D9KQaouc__ =\addons\ldcms\model\Category::instance()->getHomeNav(0,"all","");if(is_array($__k3D9KQaouc__) || $__k3D9KQaouc__ instanceof \think\Collection || $__k3D9KQaouc__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__k3D9KQaouc__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;if($item['mid'] == "6"): ?>
    <div class="section">
        <!-- 产品 -->
        <div class="index-product">
            <div class="container home">

                <div class="product-controller animate__animated animate__slower">
                    <?php $__bgsLjYDHac__ =\addons\ldcms\model\Category::instance()->getHomeLevelNav(1,6,$item['id'],"");if(is_array($__bgsLjYDHac__) || $__bgsLjYDHac__ instanceof \think\Collection || $__bgsLjYDHac__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__bgsLjYDHac__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;if($key == 0): ?>
                    <a class="controller-item active" href="<?php echo $item['url']; ?>">
                        <img class="bg-img" src="/assets/addons/ldcms/default/images/index-product-icon-active-bg.png?v=<?php echo $site['version']; ?>" alt=""><!--动态-->
                        <div class="product-item">
                            <div class="img">
                                <img class="product-icon" src="<?php echo $item['image']; ?>" alt=""><!--黑-->
                                <img class="product-icon active" src="<?php echo $item['big_image']; ?>" alt=""><!--蓝-->
                            </div>
                            <div class="title"><?php echo $item['name']; ?></div>
                        </div>
                    </a>
                    <?php else: ?>

                    <a class="controller-item active" href="<?php echo $item['url']; ?>">
                        <img class="bg-img" src="/assets/addons/ldcms/default/images/index-product-icon-active-bg.png?v=<?php echo $site['version']; ?>" alt=""><!--动态-->
                        <div class="product-item">
                            <div class="img">
                                <img class="product-icon" src="<?php echo $item['image']; ?>" alt=""><!--黑-->
                                <img class="product-icon active" src="<?php echo $item['big_image']; ?>" alt=""><!--蓝-->
                            </div>
                            <div class="title"><?php echo $item['name']; ?></div>
                        </div>
                    </a>
                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>

                </div>

                <div class="product-swiper-container animate__animated animate__slower">
                    <div class="product-swiper swiper swiper-container">
                        <div class="swiper-wrapper">
                            <?php $__x0yBCI1uWd__ =\addons\ldcms\model\Category::instance()->getHomeLevelNav(1,6,1,"");if(is_array($__x0yBCI1uWd__) || $__x0yBCI1uWd__ instanceof \think\Collection || $__x0yBCI1uWd__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__x0yBCI1uWd__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                            <div class="swiper-slide">
                                <div class="text">
                                    <div class="title"><?php echo $item['title']; ?></div>
                                    <div class="content">
                                        <?php echo $item['seo_description']; ?>
                                    </div>
                                    <a class="learn-more" href="<?php echo $item['url']; ?>">查看更多<i class="iconfont icon-sanjiao3"></i></a>
                                </div>
                                <a class="img-box" href="<?php echo $item['url']; ?>">
                                    <img src="<?php echo $item['index_images']; ?>" alt="">
                                </a>
                            </div>
                            <?php endforeach; endif; else: echo "" ;endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php elseif($item['urlname'] == "guanyupunalei"): ?>
    <div class="section">
        <!-- 关于我们 -->
        <div class="index-about">
            <div class="container home">
                <div class="about-main">
                    <div class="text-col animate__animated animate__slower">
                        <div class="about-header">
                            <div class="index-title">
                                <div class="main-title"><?php echo $item['name']; ?></div>
                                <div class="sub-title arial">/ ABOUT US</div>
                            </div>
                        </div>
                        <div class="about-content">
                            <?php echo $item['seo_description']; ?>
                        </div>
                        <a href="<?php echo $item['url']; ?>" class="learn-more">
                            查看更多<i class="iconfont icon-sanjiao3"></i>
                        </a>
                    </div>
                    <div class="img-col animate__animated animate__slower">
                        <img class="img-main" src="<?php echo $item['index_images']; ?>" alt="">
                        <img class="img-bg" src="/assets/addons/ldcms/default/images/index-about-2.jpg?v=<?php echo $site['version']; ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php elseif($item['mid'] == "2"): ?>
    <div class="section">
        <!-- 新闻 -->
        <div class="index-news">
            <div class="container home">
                <div class="index-title animate__animated animate__slower">
                    <div class="main-title"><?php echo $item['name']; ?></div>
                    <div class="sub-title arial">/ NEWS CENTER</div>
                </div>
                <div class="new-content">
                    <div class="news-list swiper swiper-container animate__animated animate__slower">
                        <div class="swiper-wrapper">
                            <?php $cid=$item['id'];$mid=2;$page=null;$simple=false;            // 不传入cid默认获取栏目cid,并且开启分页
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
            is_null($simple)&&$addon_config['simple']&&request()->isMobile()?$simple=true:'';$__i6UajIZO5n__=\addons\ldcms\model\Document::instance()->getHomeList(['cid'=>$cid,'mid'=>$mid,'limit'=>'16','ext'=>'intro,time,index_img','filterWhere'=>isset($filterWhere)?$filterWhere:[],'_where'=>isset($_where)?$_where:[],'page'=>$page,'simple'=>$simple,'_order'=>'']); if(is_array($__i6UajIZO5n__) || $__i6UajIZO5n__ instanceof \think\Collection || $__i6UajIZO5n__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__i6UajIZO5n__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;if($item['tag'] == "unique"): ?>
                            <div class="swiper-slide">
                                <a href="<?php echo $item['url']; ?>" class="news-item unique"
                                   style="background-image: url('<?php echo $item['index_img']; ?>')">
                                    <div class="item-text">
                                        <div class="text-time arial"><?php echo $item['time']; ?></div>
                                        <div class="text-title">
                                            <?php echo $item['title']; ?>
                                        </div>
                                        <div class="text-content">
                                            <?php echo $item['intro']; ?>
                                        </div>
                                        <div class="text-learn-more">
                                            查看更多
                                            <i class="iconfont icon-sanjiao3"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php else: ?>
                            <div class="swiper-slide">
                                <a href="<?php echo $item['url']; ?>" class="news-item">
                                    <div class="item-text">
                                        <div class="text-time arial"><?php echo $item['time']; ?></div>
                                        <div class="text-title">
                                            <?php echo $item['title']; ?>
                                        </div>
                                        <div class="text-content">
                                            <?php echo $item['intro']; ?>
                                        </div>
                                        <div class="text-learn-more">
                                            查看更多
                                            <i class="iconfont icon-sanjiao3"></i>
                                        </div>
                                    </div>
                                    <div class="item-img">
                                        <img class="img" src="<?php echo $item['index_img']; ?>" alt="">
                                    </div>
                                </a>
                            </div>
                            <?php endif; endforeach; endif; else: echo "" ;endif; $pages=$page?$__i6UajIZO5n__->render():"";$pages_total=$page&&!$simple?$__i6UajIZO5n__->total():0; ?>


                        </div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; endforeach; endif; else: echo "" ;endif; ?>



    <div class="section fp-auto-height">
    <!-- footer -->
    <div class="global-footer">
        <div class="footer-body container fix">
            <div class="body-main">

                <?php $__LXyjHu1ZN0__ =\addons\ldcms\model\Category::instance()->getHomeNav(0,"all","");if(is_array($__LXyjHu1ZN0__) || $__LXyjHu1ZN0__ instanceof \think\Collection || $__LXyjHu1ZN0__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__LXyjHu1ZN0__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;if($item['mid']=="6"): ?>
                    <div class="main-item d-none d-lg-block">
                        <a href="<?php echo $item['url']; ?>" class="link-title"><?php echo $item['name']; ?></a>
                        <?php $__gq3zbIpUGN__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"all","");if(is_array($__gq3zbIpUGN__) || $__gq3zbIpUGN__ instanceof \think\Collection || $__gq3zbIpUGN__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__gq3zbIpUGN__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                        <a href="<?php echo $item['url']; ?>" class="item-link"><?php echo $item['name']; ?></a>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                    <?php endif; endforeach; endif; else: echo "" ;endif; $__LWbRpq8G5J__ =\addons\ldcms\model\Category::instance()->getHomeNav(0,"all","");if(is_array($__LWbRpq8G5J__) || $__LWbRpq8G5J__ instanceof \think\Collection || $__LWbRpq8G5J__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__LWbRpq8G5J__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;if($item['mid']=="2"): ?>
                <div class="main-item d-none d-lg-block">
                    <a href="<?php echo $item['url']; ?>" class="link-title"><?php echo $item['name']; ?></a>
                    <?php $__GkVwptFfmv__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"all","");if(is_array($__GkVwptFfmv__) || $__GkVwptFfmv__ instanceof \think\Collection || $__GkVwptFfmv__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__GkVwptFfmv__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
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
                    <?php $__mNRp9zKSDM__ =\addons\ldcms\model\Category::instance()->getHomeNav(0,"all","");if(is_array($__mNRp9zKSDM__) || $__mNRp9zKSDM__ instanceof \think\Collection || $__mNRp9zKSDM__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__mNRp9zKSDM__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;if($item['mid']=="0"): ?>
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


