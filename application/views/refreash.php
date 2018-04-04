<?php


$user = $this->session->userdata('user');


// 如果未登录
if ($this->session->userdata('user') == "") {

    echo "<script>alert('请先登录')</script>";
    echo "<script>location.href='signin'</script>";

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>发布信息</title>
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
    <!-- <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script> -->
    <!-- //meta tags -->
    <!-- js -->
    <!-- <script type="text/javascript" src="assets/js/jquery.min.js"></script> -->
    <!-- js -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/bootstrap-select.js"></script> -->
    <!-- <script>
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
    </script> -->
    <!-- language-select -->
    <!-- <script type="text/javascript" src="assets/js/jquery.leanModal.min.js"></script> -->
    <link href="assets/css/jquery.uls.css" rel="stylesheet"/>
    <link href="assets/css/jquery.uls.grid.css" rel="stylesheet"/>
    <link href="assets/css/jquery.uls.lcd.css" rel="stylesheet"/>
    <!-- Source -->
    <!-- <script src="assets/js/jquery.uls.data.js"></script>
    <script src="assets/js/jquery.uls.data.utils.js"></script>
    <script src="assets/js/jquery.uls.lcd.js"></script>
    <script src="assets/js/jquery.uls.languagefilter.js"></script>
    <script src="assets/js/jquery.uls.regionfilter.js"></script>
    <script src="assets/js/jquery.uls.core.js"></script> -->

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
                        class="fa fa-home home_1"></i></a> / <span>发布你的商品</span></span>
    </div>
</div>
<!-- //breadcrumbs -->
<!-- Submit Ad -->
<div class="submit-ad main-grid-border">
    <div class="container">
        <h2 class="w3-head">张贴广告</h2>
        <div class="post-ad-form">
        
        <form action="user/do_update" enctype="multipart/form-data" method="post" >
                <label>选择类别 <span>*</span></label>
                <?php 
                                             foreach($list as $ads ){
                                             
                                             ?>

                <select class=""  name="adstype" id="adstype">
                    <option value="<?php  echo $ads->adstype;?>"><?php  echo $ads->adstype;?></option>
                    <option value="手机">手机</option>
                    <option value="电子电器">电子电器</option>
                    <option value="汽车">汽车</option>
                    <option value="摩托">摩托</option>
                    
                </select>
                <div class="clearfix"></div>
                <label name="title" for="title">广告标题 <span>*</span></label>
                <input type="text" name="title" id="title" class="phone" placeholder="" value="<?php  echo $ads->adsname;?>">
                <label name="price" for="price">价格 <span>*</span></label>
                <input type="text" name="price" id="price" class="price" placeholder=""  value="<?php  echo $ads->price;?>">
                <input type="text" name="id" style="display:none;"  value="<?php  echo $ads->ads_id;?>">
               

                <div class="clearfix"></div>
                <label name="decribe" for="describe">广告描述 <span>*</span></label>
                <input type="text" name="describe" id="describe" class="describe" placeholder=""  value="<?php  echo $ads->describe;?>">
                <!-- <label name="describe">广告描述 <span>*</span></label>
                <input type="text" class="mess"  name="describe"  id="describe" placeholder=""  value="<?php  echo $ads->describe;?>"> -->
                <!-- <textarea class="mess" name="describe" id="describe"    placeholder="<?php  echo $ads->describe;?>"></textarea> -->
                <div class="clearfix"></div>
                <div class="upload-ad-photos">
                    <label name="photo">拍照为您的广告 :</label>
                    
                    <div class="photos-upload-view">
                    <img src="<?php echo 'http://127.0.0.1/market/'.$ads->photo?>" title="" alt="" style="width:100px;height:100px;" />
                    
                    </div>



                    
                    
                    <div class="clearfix"></div>
                    <!-- <script src="assets/js/filedrag.js"></script> -->
                </div>
                <div class="personal-details">
                   
                    
                    <input id="photo" type="file" name="userfile" size="20" />
                    <?php }?>
                    <br /><br />                                                            
                     <div class="clearfix"></div>
                        <p class="post-terms">通过点击 <strong>按钮后</strong> 你接受我 <a href="terms" target="_blank">使用条款 </a>
                            并且 <a href="privacy" target="_blank">隐私权政策</a></p>
                        <input type="submit" value="发布" id="btn">
                        <div class="clearfix"></div>
                    </form>
                </div>
                
        </div>
    </div>
</div>
<!-- // Submit Ad -->
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
<!-- <script src="assets/js/classie.js"></script>
<script src="assets/js/main.js"></script> -->
<!-- //Navigation-JavaScript -->
<!-- here stars scrolling icon -->
<!-- <script type="text/javascript">
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
</script> -->
<!-- start-smoth-scrolling -->
<!-- <script type="text/javascript" src="assets/js/move-top.js"></script>
<script type="text/javascript" src="assets/js/easing.js"></script> -->
<script type="text/javascript">
    // jQuery(document).ready(function ($) {
    //     $(".scroll").click(function (event) {
    //         event.preventDefault();
    //         $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
    //     });
    // });

    // $('#btn').on('click', function () {
      
    //     var adstype = $('#adstype').val();
    //     var title = $('#title').val();
    //     var describe = $('#describe').val();
    //     var photo = $('#photo').val();
    //     var price = $('#price').val();
    //     var userid = $('#userid').val();
    //     var index = photo.lastIndexof("\\");
    //     var str = photo.substring(index + 1,photo .length)
        
    //     $.get('User/post_ad', {
           
    //         adstype: adstype,
    //         title: title,
    //         describe: describe,
    //         photo: photo,
    //         price: price,
    //         userid: userid,
    //         str:str
    //     }, function (data) {
    //         if (data == 'error') {

    //         } else {
    //             location.href = 'User/categories';
    //         }
    //     }, 'text');


    // });


</script>
<!-- start-smoth-scrolling -->
<!-- //here ends scrolling icon -->
</html>