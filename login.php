<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Title</title>
    <link rel="stylesheet" href="public/css/bootstrap3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/css/reset.css">
    <link rel="stylesheet" href="public/css/IDCardStage.css">
    <link rel="stylesheet" href="public/css/button.css">
    <link href="public/css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="public/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="public/js/star-rating.js"></script>
    <style>
        /*    header start*/
        body{
            background-color:#f8f8f8;
        }
        header {
            display: flex;
            display: -webkit-flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }

        .login {
            padding: 1vw;
        }

        .fr {
            float: right;
            margin-top: 6px;
            margin-right: 6px;
            background-color: #FF4351;
            color: #fff;

        }

        .login .foRow:not(:first-child) {
            margin-top: 1rem;
        }

        .login .foRow {
            display: flex;
            display: -webkit-flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: center;
            color: #999;
            padding: 1rem 0;
            /*font-size: 1.9rem;*/
            font-size: 16px;

        }

        .login .foRow .inputGroup {
            border: 1px solid #999;
            border-radius: 5px;
            line-height: 38px;
        }

        .login .foRow .inputGroup input {
            border: 0;
            height: 38px;
            line-height: 38px;
            width: 48vw;
            background-color: transparent;

        }

        @media screen and (min-width: 768px) {

            .login .foRow .inputGroup {
                width: 40vw;
            }

            .login .foRow .inputGroup input.w10vw {
                border: 0;
                height: 38px;
                line-height: 38px;
                width: 19vw;
                background-color: transparent;
            }

            .login .foRow .inputGroup input {
                width: 37vw;
            }
            .footer button{
                width:30vw;
            }
        }

        @media screen and (max-width: 768px) {
            .login .foRow .inputGroup {
                width: 60vw;
            }

            .login .foRow .inputGroup input.w10vw {
                width: 13vw;
            }
            .footer button{
                width:50vw;
            }
        }

        .footer{
            display: flex;
            display: -webkit-flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }


        .button-small{
            padding: 0 10px;
        }

       .footer .button-jumbo {
            font-size: 16px;
            height: 30px;
            line-height: 30px;
            padding: 0 30px;
        }
        /*.login .foRow {}*/
        /*.login .foRow {}*/
        /*    installmentHistory end*/
    </style>
</head>
<body >
<header>
    <span>用户登陆</span>
</header>

<div class="container">
    <div class="login">
        <div class="foRow">
            <span>填写手机号:</span>
            <div class="inputGroup">
                <img src="public/cssImg/icon/32/phone.png" alt="">
                <input type="number" placeholder="请输入数字" name="phone">
            </div>
        </div>

        <div class="foRow">
            <span>填写验证码:</span>
            <div class="inputGroup">
                <img src="public/cssImg/icon/32/gth.png" alt="">
                <input type="text" class="w10vw" name="verifyCode">
                <button class="button-pill button-small fr button button-caution button-jumbo">获取验证码</button>
            </div>
        </div>

        <div class="foRow">
            <span>请设置密码:</span>
            <div class="inputGroup">
                <img src="public/cssImg/icon/32/lock.png" alt="">
                <input type="password" name="password">
            </div>
        </div>

        <div class="foRow">
            <span>请重复密码:</span>
            <div class="inputGroup">
                <img src="public/cssImg/icon/32/reLock.png" alt="">
                <input type="password" name="rePassword">
            </div>
        </div>
    </div>

    <div class="footer">
        <button class="button button-caution button-rounded button-jumbo">注册</button>
    </div>
</div>
<script type="text/javascript" src="public/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="public/css/bootstrap3.3.7/js/bootstrap.min.js"></script>
<script>
    $(function () {


    })
</script>
</body>
</html>