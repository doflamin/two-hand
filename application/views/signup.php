<!DOCTYPE html>
<html lang="en">
<head>
    <title>注册</title>
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
                    <a href="user/signin" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> 登录</a>
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
                <a class="post-w3layouts-ad" href="user/postad">免费发布商品信息</a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</header>
<!-- //header -->
<!-- sign up form -->
<section>
    <div id="agileits-sign-in-page" class="sign-in-wrapper">
        <div class="agileinfo_signin">
            <h3>注册</h3>
            <form action="User/add_user" method="get" onsubmit="return false;">
                <input id="name" type="text" name="name" placeholder="用户名">
                <span class="ok" style="display: none;color: #26d02e;">用户名可用</span><span class="error" style="color: red;display: none;">用户名已存在</span>
                <input id="nickname" type="text" name="nickname" placeholder="昵称">
                <input id="email" type="email" name="email" placeholder="邮件">
                <input id="phone" type="tel" name="phone" placeholder="手机号">
                <input id="pwd" type="password" name="password" placeholder="密码">
                <input id="pwd2" type="password" name="password1" placeholder="确认密码">
                <div class="signin-rit">
						<span class="agree-checkbox">
							<label class="checkbox"><input type="checkbox" name="checkbox" id="checked">我同意 <a
                                        class="w3layouts-t" href="User/signup">使用条款</a> 和 <a
                                        class="w3layouts-t" href="User/signup">隐私权限</a></label>
						</span>
                </div>
                <input type="submit" value="注册" id="btn">
            </form>
        </div>
    </div>
</section>
<!-- //sign up form -->
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
<script type="text/javascript" src="assets/js/move-top.js"></script>
<script type="text/javascript" src="assets/js/easing.js"></script>
<script>
    //文档就绪函数
    $(function () {

        //点击提交按钮后的操作
        $('#btn').on('click', function () {
            var name = $('#name').val();
            var nickname = $('#nickname').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
            var pwd = $('#pwd').val();
            var pwd2 = $('#pwd2').val();
            var checked = $('#checked').is(":checked");

            //判断用户名
            if (name !== "") {

                //校验两次密码是否一致且不为空
                if (pwd === pwd2 && pwd !== "") {

                    //是否选中同意协议
                    if (checked) {

                        $.get('User/add_user', {
                            name: name,
                            nickname: nickname,
                            email: email,
                            phone: phone,
                            pwd: pwd

                        }, function (data) {
                            if (data == 'error') {


                            } else {
                                location.href = 'User/signin';
                            }
                        }, 'text');

                    } else {
                        alert("请同意我们的协议和条款");

                    }


                    //if
                } else {
                    alert("两次密码不一致且不为空，请检查后重试！");
                    $('#pwd').css({
                        border: "2px solid red"
                    });
                    $('#pwd2').css({
                        border: "2px solid red"
                    });

                    setTimeout(function () {
                        $('#pwd').css({
                            border: "1px solid black"
                        });
                        $('#pwd2').css({
                            border: "1px solid black"
                        });

                    }, 3000);

                }


            }else{

                alert("请输入用户名");
            }


        });//on click


        //用户名是否重复
        $("#name").on('blur', function () {
            //获取用户名输入框的值
            var name = $(this).val();

            //不为空的时候
            if (name !== "") {
                //ajax获取后台的值判断
                $.get('User/check_name', {
                    name: name
                }, function (data) {
                    if (data == 'already') {
                        $(".error").show();
                        $(".ok").hide();
                    } else {
                        $(".ok").show();
                        $(".error").hide();
                    }
                }, 'text');
            }
        });//on blur


    });//$(function{ })


</script>


</html>