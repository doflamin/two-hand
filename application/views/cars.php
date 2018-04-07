<?php
//先取到本地缓存的已登录的用户信息
$user = $this->session->userdata('user');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>汽车</title>
    <base href="<?php echo site_url() ?>">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"><!-- bootstrap-CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap-select.css"><!-- bootstrap-select-CSS -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all"/><!-- style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/jquery-ui1.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"/><!-- fontawesome-CSS -->
    <link rel="stylesheet" href="assets/css/menu_sideslide.css" type="text/css" media="all"><!-- Navigation-CSS -->
    <!-- meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Resale Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- //meta tags -->
    <!-- js -->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <!-- js -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/bootstrap-select.js"></script>
    <script>
        $(document).ready(function () {
            var mySelect = $('#first-disabled2');

            $('#special').on('click', function () {
                mySelect.find('option:selected').prop('disabled', true);
                mySelect.selectpicker('refresh');
            });

            $('#special2').on('click', function () {
                mySelect.find('option:disabled').prop('disabled', false);
                mySelect.selectpicker('refresh');
            });

            $('#basic2').selectpicker({
                liveSearch: true,
                maxOptions: 1
            });
        });
    </script>
    <!-- language-select -->
    <script type="text/javascript" src="assets/js/jquery.leanModal.min.js"></script>
    <link href="assets/css/jquery.uls.css" rel="stylesheet"/>
    <link href="assets/css/jquery.uls.grid.css" rel="stylesheet"/>
    <link href="assets/css/jquery.uls.lcd.css" rel="stylesheet"/>
    <!-- Source -->
    <script src="assets/js/jquery.uls.data.js"></script>
    <script src="assets/js/jquery.uls.data.utils.js"></script>
    <script src="assets/js/jquery.uls.lcd.js"></script>
    <script src="assets/js/jquery.uls.languagefilter.js"></script>
    <script src="assets/js/jquery.uls.regionfilter.js"></script>
    <script src="assets/js/jquery.uls.core.js"></script>
    <script>
        $(document).ready(function () {
            $('.uls-trigger').uls({
                onSelect: function (language) {
                    var languageName = $.uls.data.getAutonym(language);
                    $('.uls-trigger').text(languageName);
                },
                quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
            });
        });
    </script>
    <!-- //language-select -->
    <!-- switcher-grid and list alignment -->
    <script src="assets/js/tabs.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            var elem = $('#container ul');
            $('#viewcontrols a').on('click', function (e) {
                if ($(this).hasClass('gridview')) {
                    elem.fadeOut(1000, function () {
                        $('#container ul').removeClass('list').addClass('grid');
                        $('#viewcontrols').removeClass('view-controls-list').addClass('view-controls-grid');
                        $('#viewcontrols .gridview').addClass('active');
                        $('#viewcontrols .listview').removeClass('active');
                        elem.fadeIn(1000);
                    });
                }
                else if ($(this).hasClass('listview')) {
                    elem.fadeOut(1000, function () {
                        $('#container ul').removeClass('grid').addClass('list');
                        $('#viewcontrols').removeClass('view-controls-grid').addClass('view-controls-list');
                        $('#viewcontrols .gridview').removeClass('active');
                        $('#viewcontrols .listview').addClass('active');
                        elem.fadeIn(1000);
                    });
                }
            });
        });
    </script>
    <!-- //switcher-grid and list alignment -->
</head>
<body>
<!-- Navigation -->
<div class="agiletopbar">
    <div class="wthreenavigation">
        <div class="menu-wrap">
            <nav class="menu">
                <div class="icon-list">
                    <a href="user/mobiles"><i class="fa fa-fw fa-mobile"></i><span>手机</span></a>
                    <a href="user/electronicsappliances"><i class="fa fa-fw fa-laptop"></i><span>电子商品</span></a>
                    <a href="user/cars"><i class="fa fa-fw fa-car"></i><span>汽车</span></a>
                    <a href="user/bikes"><i class="fa fa-fw fa-motorcycle"></i><span>摩托</span></a>
                </div>
            </nav>
            <button class="close-button" id="close-button">关闭菜单</button>
        </div>
        <button class="menu-button" id="open-button"></button>
    </div>
    <div class="clearfix"></div>
</div>
<!-- //Navigation -->
<!-- header -->
<header>
    <div class="w3ls-header"><!--header-one-->
        <div class="w3ls-header-left">
        </div>
        <div class="w3ls-header-right">
            <ul>
                <li class="dropdown head-dpdn">
                    <a href="user/signin" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> 
                    <?php

                        if (isset($user)) {
                            echo $user->nickname;
                            echo "<a href=\"User/exit_login\">[退出]</a> ";
                        } else {
                            echo "游客 <a href=\"User/signin\">登录</a>";
                        }

                        ?>
                    </a>
                </li>
                <li class="dropdown head-dpdn">
                    <div class="header-right">
                        <!-- Large modal -->

                    </div>
                </li>
            </ul>
        </div>

        <div class="clearfix"></div>
    </div>
    <div class="container">
        <div class="agile-its-header">
            <div class="logo">
                <h1><a href="user/index"><span>二手</span>交易平台</a></h1>
            </div>
            <div class="agileits_search">
            <form action="#" method="post">
            <input name="Search" type="text"  id="search" placeholder="请输入要搜索的商品名称" required=""/>
            
            <button type="button" class="btn btn-default" aria-label="Left Align" id="search_btn">
                <i class="fa fa-search" aria-hidden="true"> </i>
            </button>
            </form>
            <div class="agileits_search" style="width:264px; position:relative;top:-50px;">
            <a class="post-w3layouts-ad" href="user/myads">我的物品</a>
            <a class="post-w3layouts-ad" href="user/postad">免费发布商品信息</a>             
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</header>
<!-- //header -->
<!-- breadcrumbs -->
<div class="w3layouts-breadcrumbs text-center">
    <div class="container">
			<span class="agile-breadcrumbs">
			<a href="user/index"><i class="fa fa-home home_1"></i></a> / 
			<a href="user/categories">类别</a> / 
			<span>汽车</span></span>
    </div>
</div>
<!-- //breadcrumbs -->
<!-- Cars -->
<div class="total-ads main-grid-border">
    <div class="container">

        <div class="ads-grid">
            <div class="side-bar col-md-3">
                <div class="search-hotel">
                    <h3 class="agileits-sear-head">名称包含</h3>
                    <form>
                        <input type="text" value="Product name..." onfocus="this.value = '';"
                               onblur="if (this.value == '') {this.value = 'Product name...';}" required="">
                        <input type="submit" value=" ">
                    </form>
                </div>


               
               
            </div>
            <div class="agileinfo-ads-display col-md-9">
                <div class="wrapper">
                    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs nav-tabs-responsive" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home"
                                   aria-expanded="true">
                                    <span class="text">所有商品</span>
                                </a>
                            </li>
                            <li role="presentation" class="next">
                                <a href="#profile" role="tab" id="profile-tab" data-toggle="tab"
                                   aria-controls="profile">
                                    <span class="text">商品信息</span>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#samsa" role="tab" id="samsa-tab" data-toggle="tab" aria-controls="samsa">
                                    <span class="text">公司</span>
                                </a>
                            </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                                <div>
                                    <div id="container">
                                        <div class="view-controls-list" id="viewcontrols">
                                            <label>view :</label>
                                            <a class="gridview"><i class="glyphicon glyphicon-th"></i></a>
                                            <a class="listview active"><i class="glyphicon glyphicon-th-list"></i></a>
                                        </div>
                                        
                                        <div class="clearfix"></div>
                                        <ul class="list">                                            
                                           
                                            <?php 
                                             foreach($list as $ads ){
                                             
                                             ?>
                                             <a href="user/single?id= <?php echo $ads->ads_id; ?>" class="single" >
                                                <li>
                                                <img src="<?php echo 'http://127.0.0.1/market/'.$ads->photo?>" title="" alt="" />
                                                    <section class="list-left">
                                                    <h5 class="title"><?php


                                                    if (isset($ads)) {
                                                        echo $ads->adsname;
                                                    }
                                                    
                                                    ?></h5>
                                                        <span class="adprice">
                                                            <?php echo "$".$ads->price;?>
                                                    
                                                        </span>
                                                        <p class="catpath"></p>
                                                    </section>
                                                    <section class="list-right">
                                                       
                                                    </section>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <div class="clearfix"></div>
                                                <?php }?>
                                            </a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- // Cars -->
<!--footer section start-->
<footer>

    <div class="agileits-footer-bottom text-center">
        <div class="container">
            <div class="w3-footer-logo">
                <h1><a href="user/index"><span>二手</span>交易平台</a></h1>
            </div>
            <div class="w3-footer-social-icons">

            </div>
            <div class="copyrights">
                <p> © 2016 Resale. All Rights Reserved </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</footer>
<!--footer section end-->
</body>
<!-- Navigation-JavaScript -->
<script src="assets/js/classie.js"></script>
<script src="assets/js/main.js"></script>
<!-- //Navigation-JavaScript -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function () {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({easingType: 'easeOutQuart'});
        $('#search_btn').on('click', function() {
            // alert(1)
            var key_word = $('#search').val();
    
            $('.list li').each(function(index, li_node) {
                $li_node = $(li_node);
                if($li_node.text().includes(key_word)) {

                    $li_node.attr('style','')
                }else{
                    $li_node.attr('style', 'display: none;')
                }
                // return false;
            });
        });

    });
</script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="assets/js/move-top.js"></script>
<script type="text/javascript" src="assets/js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- //here ends scrolling icon -->
</html>