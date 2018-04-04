<?php
//先取到本地缓存的已登录的用户信息
$user = $this->session->userdata('user');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>二手交易平台</title>
    <base href="<?php echo site_url() ?>">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"><!-- bootstrap-CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap-select.css"><!-- bootstrap-select-CSS -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all"/><!-- style.css -->
    <link rel="stylesheet" href="assets/css/flexslider.css" type="text/css" media="screen"/><!-- flexslider-CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"/><!-- fontawesome-CSS -->
    <link rel="stylesheet" href="assets/css/menu_sideslide.css" type="text/css" media="all"><!-- Navigation-CSS -->
    <!-- meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
</head>
<body>
<!-- Navigation -->
<div class="agiletopbar">
    <div class="wthreenavigation">
        <div class="menu-wrap">
            <nav class="menu">
                <div class="icon-list">
                    <a href="User/mobiles">
                        <i class="fa fa-fw fa-mobile"></i>
                        <span>手机</span>
                    </a>
                    <a href="User/electronicsappliances">
                        <i class="fa fa-fw fa-laptop"></i>
                        <span>电子产品和家用电器</span>
                    </a>
                    <a href="User/cars">
                        <i class="fa fa-fw fa-car"></i>
                        <span>汽车</span>
                    </a>
                    <a href="User/bikes">
                        <i class="fa fa-fw fa-motorcycle"></i>
                        <span>自行车</span>
                    </a>
                </div>
            </nav>
            <button class="close-button" id="close-button">Close Menu</button>
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
                    <a aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i>
                        <?php

                        if (isset($user)) {
                            echo $user->nickname;
                            echo "<a href=\"User/exit_login\"> [退出]</a> ";
                        } else {
                            echo "游客 <a href=\"User/signin\">登录</a>";
                        }

                        ?>


                    </a>
                </li>
                <li class="dropdown head-dpdn">
                    <div class="header-right">
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
                <a class="post-w3layouts-ad" href="user/myads">我的物品</a>
                <a class="post-w3layouts-ad" href="user/postad">免费发布商品信息</a>
                <a class="post-w3layouts-ad" href="user/feedback" >联系我们</a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</header>
<!-- //header -->
<!-- Slider -->
<div class="slider">
    <ul class="rslides" id="slider">
        <li>
            <div class="w3ls-slide-text">
                <h3>在线出售二手商品</h3>
                <a href="user/categories" class="w3layouts-explore-all">浏览所有类别</a>
            </div>
        </li>
    </ul>
</div>
<!-- //Slider -->
<!-- content-starts-here -->
<div class="main-content">
    <div class="w3-categories">
        <h3>浏览分类</h3>
        <div class="container">
            <div class="col-md-3">
                <div class="focus-grid w3layouts-boder1">
                    <a class="btn-8" href="user/mobiles">
                        <div class="focus-border">
                            <div class="focus-layout">
                                <div class="focus-image"><i class="fa fa-mobile"></i></div>
                                <h4 class="clrchg">手机</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="focus-grid w3layouts-boder2">
                    <a class="btn-8" href="user/electronicsappliances">
                        <div class="focus-border">
                            <div class="focus-layout">
                                <div class="focus-image"><i class="fa fa-laptop"></i></div>
                                <h4 class="clrchg"> 电子商品</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="focus-grid w3layouts-boder3">
                    <a class="btn-8" href="user/cars">
                        <div class="focus-border">
                            <div class="focus-layout">
                                <div class="focus-image"><i class="fa fa-car"></i></div>
                                <h4 class="clrchg">汽车</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="focus-grid w3layouts-boder4">
                    <a class="btn-8" href="user/bikes">
                        <div class="focus-border">
                            <div class="focus-layout">
                                <div class="focus-image"><i class="fa fa-motorcycle"></i></div>
                                <h4 class="clrchg">摩托</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="trending-ads">
        <div class="container">
            <!-- slider -->
            <div class="agile-trend-ads">
                <h2>广告</h2>
               
                <ul id="flexiselDemo3">
                <?php 
                                             foreach($list as $ads ){
                                             
                                             ?>
              
                    <li style="list-style:none;">
                        <div class="col-md-3 biseller-column">
                        <a href="user/single?id= <?php echo $ads->ads_id; ?>" class="single" >
                            <input type="text" name="id" style="display:none;"  value="<?php  echo $ads->ads_id;?>">
                            <img src="<?php echo 'http://127.0.0.1/market/'.$ads->photo?>" title="" alt="" style="width:100px;height:100px;" />
                                <span class="price">&#36; <?php echo $ads->price?></span>
                            </a>
                            <div class="w3-ad-info">
                            <h5> <?php echo $ads->adsname?></h5>
                                
                            </div>
                        </div>                   
                        
                    </li>
                    <?php }?>
                    
                </ul>
            </div>
        </div>
        <!-- //slider -->
    </div>


</div>
<!--footer section start-->
<footer>

    <div class="agileits-footer-bottom text-center">
        <div class="container">
            <div class="w3-footer-logo">
                <h1><a href="user/index"><span>二手</span>交易平台</a></h1>
            </div>

            <div class="copyrights">
                <p> © 2018 Resale. All Rights Reserved </a></p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</footer>
<!--footer section end-->
<!-- Navigation-Js-->
<script type="text/javascript" src="assets/js/main.js"></script>
<script type="text/javascript" src="assets/js/classie.js"></script>
<!-- //Navigation-Js-->
<!-- js -->
<script src="assets/js/jquery.min.js"></script>
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
<!--<script type="text/javascript" href="assets/js/jquery.leanModal.min.js"></script>-->
<!--<link href="assets/css/jquery.uls.css" rel="stylesheet"/>-->
<!--<link href="assets/css/jquery.uls.grid.css" rel="stylesheet"/>-->
<!--<link href="assets/css/jquery.uls.lcd.css" rel="stylesheet"/>-->
<!-- Source -->
<script src="assets/js/jquery.uls.data.js"></script>
<script src="assets/js/jquery.uls.data.utils.js"></script>
<script src="assets/js/jquery.uls.lcd.js"></script>
<script src="assets/js/jquery.uls.languagefilter.js"></script>
<script src="assets/js/jquery.uls.regionfilter.js"></script>
<script src="assets/js/jquery.uls.core.js"></script>


<!-- Slider-JavaScript -->
<script src="assets/js/responsiveslides.min.js"></script>
<script>
    $(function () {
        $("#slider").responsiveSlides({
            auto: true,
            pager: false,
            nav: true,
            speed: 500,
            maxwidth: 800,
            namespace: "large-btns"
        });

    });
</script>
<!-- //Slider-JavaScript -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function () {

        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };


        $().UItoTop({easingType: 'easeOutQuart'});

    });
</script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="assets/js/move-top.js"></script>
<script type="text/javascript" src="assets/js/easing.js"></script>
<script type="text/javascript">
    $(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- //here ends scrolling icon -->
</body>
</html>