<?php
$user = $this->session->userdata('user')

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>登陆</title>
    <base href="<?php echo site_url() ?>">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"><!-- bootstrap-CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap-select.css"><!-- bootstrap-select-CSS -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all"/><!-- style.css -->
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

                        ?></a>
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
                    <input name="Search" type="text" placeholder="今天有什么可以帮您的吗？" required=" ">
                    
                    <button type="submit" class="btn btn-default" aria-label="Left Align">
                        <i class="fa fa-search" aria-hidden="true"> </i>
                    </button>
                </form>
                <a class="post-w3layouts-ad" href="user/postad">免费发布商品信息</a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</header>
<!-- //header -->
<!-- sign in form -->
<section>
    <div id="agileits-sign-in-page" class="sign-in-wrapper">
        <div class="agileinfo_signin">
            <h3>会员登陆</h3>
            <form action="User/login" method="get" onsubmit="return false;">
                <input id="name" type="text" name="name" placeholder="用户名">
                <input id="pwd" type="password" name="pwd" placeholder="密码">
                <input id="btn" type="submit" value="登录">
                <div class="forgot-grid">
                    <label class="checkbox"><input id="checked" type="checkbox" name="checkbox">记住密码</label>
                    <div class="clearfix"></div>
                </div>
            </form>
            <h6> 还不是会员？ <a href="user/signup">现在就注册！</a></h6>
        </div>
    </div>
</section>
<!-- //sign in form -->
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
                <p> © 2018 Resale. All Rights Reserved </a></p>
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


<script type="text/javascript" src="assets/js/move-top.js"></script>
<script type="text/javascript" src="assets/js/easing.js"></script>
<script>

    $(function () {

        //本地化存储封装，保存用户信息
        var Util = (function () {
            // 防止key被覆盖，加一个前置
            var prefix = 'market_';

            // 取数据
            var StorageGetter = function (key) {
                return localStorage.getItem(prefix + key);
            };

            // 存数据(键=>值）
            var StorageSetter = function (key, val) {
                return localStorage.setItem(prefix + key, val);
            };

            //判断数据是否存在
            var hasStorage = function (key) {
                return localStorage.hasOwnProperty(prefix + key);
            };


            //将方法返回出去
            return {
                StorageGetter: StorageGetter,
                StorageSetter: StorageSetter,
                hasStorage: hasStorage
            };
        })();


        //进入页面时首先初始化，寻找本地化存储中是否有保存的用户信息（用户名和密码）
        (function () {
            //判断存在
            if (Util.hasStorage("username") && Util.hasStorage("password")) {
                //为表单里赋值（把本地化存储的内容取出来放在input中）
                $('#name').val(Util.StorageGetter('username'));
                $('#pwd').val(Util.StorageGetter('password'));
            }
        })();


        //给id为btn的绑定点击事件（jquery方式）
        $('#btn').on('click', function () {

            //获取表单信息
            var name = $('#name').val();
            var pwd = $('#pwd').val();
            //是否记住密码
            var checked = $('#checked').is(":checked");

            //用户名切密码不为空
            if (name !== "" && pwd !== "") {

                //是否选中同意协议
                if (checked) {

                    //将获取的用户名和密码存入localstorage中（记住密码功能）
                    Util.StorageSetter('username', name);
                    Util.StorageSetter('password', pwd);

                }


                //向后台查数据
                $.get('User/login_check', {
                    name: name,
                    pwd: pwd

                }, function (data) {
                    if (data == 'pwd-error') {
                        alert("密码错误！请重新输入");

                    } else if (data == 'user-no-exit') {

                        alert("用户不存在！请检查用户名！");

                    } else {
                        //成功跳转到index
                        location.href = 'User/index';
                    }
                }, 'text');//ajax

            } else {

                alert("请输入用户名或密码后再试！");

            }

        });//on click
    });


</script>


</html>