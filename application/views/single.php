<?php
//先取到本地缓存的已登录的用户信息
$user = $this->session->userdata('user');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>商品信息</title>
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

        <style>
        #buy_btn{
            width:120px;
            height:40px;
            margin-top:20px;
            background:#ffa0a0;
            border:1px solid #000000;


        }
        #msg_btn{
            width:70px;
            height:25px;
            margin-top:20px;
            background:#00ffff;
            border:1px solid #000000;
        }
        .reply{
            width:70px;
            height:25px;
            margin-top:20px;
            background:#ffa0a0;
            border:1px solid #000000;
        }

        .refreash{
            width:70px;
            height:25px;
            margin-top:20px;
            background:#fff;
            border:1px solid #000000;
            
            line-height:25px;
            text-align:center;
            border-radius:20%;
        }
        
        </style>
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
    <link rel="stylesheet" href="assets/css/flexslider.css" media="screen"/><!-- flexslider css -->
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
            <div class="agileits_search" style="width:264px; ">
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
			<a href="user/categories">所有商品</a> / 
            <span>商品详细信息</span>			
    </div>
</div>
<!-- //breadcrumbs -->
<!--single-page-->
<?php 
                                             foreach($list as $ads ){
                                             
                                             ?>
<div class="single-page main-grid-border">
    <div class="container">
        <div class="product-desc">
            <div class="col-md-7 product-view">
                <h2><?php echo $ads->adsname?></h2>
               
                <div class="flexslider">
                <img src="<?php echo 'http://127.0.0.1/market/'.$ads->photo?>" title="" alt="" style="width:400px;height:400px; margin:0 auto;" />
                    
                </div>
                <!-- FlexSlider -->
                <script defer src="assets/js/jquery.flexslider.js"></script>

                <script>
                    // Can also be used with $(document).ready()
                    $(window).load(function () {
                        $('.flexslider').flexslider({
                            animation: "slide",
                            controlNav: "thumbnails"
                        });
                    });
                </script>
                <!-- //FlexSlider -->
                <div class="product-details">
                    
                    
                    
                    <h4><span class="w3layouts-agileinfo">描述</span> :<p><?php echo $ads->describe?></p>
                        <div class="clearfix"></div>
                    </h4>

                </div>
            </div>
            <div class="col-md-5 product-details-grid">
                <div class="item-price">
                    <div class="product-price">
                        <p class="p-price">价格</p>
                        <h3 class="rate"><?php echo '￥'.$ads->price?></h3>
                        <div class="clearfix"></div>
                    </div>
                   
                    <div class="itemtype">
                        <p class="p-price">商品类型</p>
                        <h4><?php echo $ads->adstype?></h4>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="interested text-center">
                    <form action="user/buy" method="get">
                    <h4>对这个商品感兴趣吗？
                    <input type="text" name="user_id" style="display:none;"  value="<?php  echo $ads->user_id;?>">
                    <input type="text" name="ads_id" style="display:none;"  value="<?php  echo $ads->ads_id;?>">                   
                    <input type="text" name="title" style="display:none;"  value="<?php  echo $ads->adsname;?>">
                    <input type="text" name="adstype" style="display:none;"  value="<?php  echo $ads->adstype;?>">
                    <input type="text" name="describe" style="display:none;"  value="<?php  echo $ads->describe;?>">
                    <input type="text" name="price" style="display:none;"  value="<?php  echo $ads->price;?>">
                    <input type="text" name="photo" style="display:none;"  value="<?php  echo $ads->photo;?>">


                    </h4>
                    <input type="submit" value="购买" id="buy_btn" >
                    </form>

                </div>
                <div class="tips">
                    <h4>已有评论</h4>
                    <ol style="list-style:none;">
                    <?php 
                        foreach($comment_results as $comment ){                                        
                    ?>
                        <li>
                            <a href="javascript:;">
                            <?php echo $comment->commenter ?> 说：
                            <?php echo $comment->comment_content ?> 
                            
                            </a>
                        </li>
                        
                    <?php 
                        }                                        
                    ?>

                     <?php 
                        foreach($reply_results as $reply ){                                        
                    ?>
                        <li>
                            <a href="javascript:;">
                            <?php echo $reply->replyer ?> 回复
                            <?php echo $reply->commenter ?>

                            说：
                            <?php echo $reply->reply_content ?> 
                            </a>
                        </li>
                        
                    <?php 
                        }                                        
                    ?>
                       
                    </ol>
                </div>
                <form action="user/add_comment" method="get" >
                <label name="comment" for="comment">请输入您想说的话 <span>*</span></label>
                <input type="text" name="comment" id="comment" class="comment" placeholder="">   
                <input type="text" name="commenter" id="commenter" class="commenter" placeholder="" value="<?php echo $user->nickname?>" style="display:none;">
                <input type="text" name="id" id="id" class="id" placeholder="" value="<?php echo $ads->ads_id?>" style="display:none;">
                <input type="submit" value="发表" id="msg_btn">            
                </form>



                <form action="user/reply" method="post">

                   
                    <label name="reply" for="reply">或想回复的评论： <span>*</span></label>
                    <select class=""  name="commenter" id="comment_id">
                    
                    <option value="请选择要回复的人">请选择要回复的人</option>
                    <?php 
                        foreach($comment_results as $comment ){                                        
                    ?>
                        <option name="commenter" value="<?php echo $comment->commenter ?>"><?php echo $comment->commenter ?></option>
                        <?php 
                        }                                        
                    ?>
                    </select>
                    <input type="text" name="reply_content" id="reply" placeholder=""> 

                    <input type="text" name="id" id="id" class="id" placeholder="" value="<?php echo $ads->ads_id?>" style="display:none;">
                    <input type="text" name="replyer" id="replyer" class="replyer" placeholder="" value="<?php echo $user->nickname?>" style="display:none;">
                                    
                                    
                                    
                    <button class="reply">回复</button>
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<?php }?>
<!--//single-page-->
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
                <p> © 2016 Resale. All Rights Reserved</p>
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