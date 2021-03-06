
<?php
//先取到本地缓存的已登录的用户信息
$user = $this->session->userdata('user');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Resale_v2 a Classified ads Category Flat Bootstrap Responsive Website Template | Feedback ::
        w3layouts</title>
    <base href="<?php echo site_url() ?>">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"><!-- bootstrap-CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap-select.css"><!-- bootstrap-select-CSS -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all"/><!-- style.css -->
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
</head>
<body>
<!-- Navigation -->
<div class="agiletopbar">
    <div class="wthreenavigation">
        <div class="menu-wrap">
            <nav class="menu">
                <div class="icon-list">
                <a href="user/mobiles"><i class="fa fa-fw fa-mobile"></i><span>手机</span></a>
                <a href="user/electronicsappliances"><i class="fa fa-fw fa-laptop"></i><span>电子电器</span></a>
                <a href="user/cars"><i class="fa fa-fw fa-car"></i><span>汽车</span></a>
                <a href="user/bikes"><i class="fa fa-fw fa-motorcycle"></i><span>摩托</span></a>
                </div>
            </nav>
            <button class="close-button" id="close-button"></button>
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
            <div class="agileits_search" >
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
        <span class="agile-breadcrumbs"><a href="user/index"><i
                        class="fa fa-home home_1"></i></a> / <span>反馈</span></span>
    </div>
</div>
<!-- //breadcrumbs -->
<!-- Feedback -->
<div class="feedback main-grid-border">
    <div class="container">
        <h2 class="w3-head">反馈</h2>
        <div class="feed-back">
            <h3>告诉我们你对我们的看法</h3>
            <div class="feed-back-form">
                <form action="user/complaint" method="post">
                    <span>你有什么要告诉我们的吗？</span>

                    <textarea onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}"
                              required="" name="complaint">信息...</textarea>
                    <input type="text" name="userid" style="display:none;"  value="<?php  echo $user->user_id;?>">
                    <input type="submit" value="提交">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- // Feedback -->
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
                <p> © 2016 Resale. All Rights Reserved </a></p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</footer>
<!--footer section end-->
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
</body>
</html>