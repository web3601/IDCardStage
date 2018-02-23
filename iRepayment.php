<?php
include 'header.php';
?>
<style>
    /*    installmentHistory start*/
    .iRepayment {
    }
    .iRepayment .foRow:not(:first-child){
        margin-top:3rem;
    }

    .iRepayment .foRow .foTitle {
        display: flex;
        display: -webkit-flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
        color: #999;
        padding: 1rem 0;
        font-size: 2rem;
        border-bottom: 1px solid #999;

    }

    .iRepayment .foRow .foCon {
        font-size: 3rem;
        display: flex;
        display: -webkit-flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
    }

    .iRepayment .foRow .foBottom {
        font-size: 2rem;
    }

    .iRepayment .foRow .cf3446b {
        color: #f3446b;
    }
    .iRepayment .foRow .c333 {
        color: #333;
    }
    .iRepayment .foRow .c999 {
        color: #999;

    }

    .iRepayment .foRow .w50vw {
        width: 52vw;
    }
    .iRepayment .footer {
        display: flex;
        display: -webkit-flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;

        margin-top:3rem;

    }
    .iRepayment .footer p {
        font-size: 2rem;
        color: #f3446b;
        min-height:4vh;

    }
    .iRepayment .footer .btn {
        width:50vw;
        margin-top:2rem;

    }

    /*.iRepayment .foRow {}*/
    /*.iRepayment .foRow {}*/
    /*    installmentHistory end*/
</style>
<div class="container">
    <div class="iRepayment">
        <div class="foRow">
            <div class="foTitle">
                <span class="c333">按期还款</span>
                <p>
                    <span class="cf3446b">还款</span>
                    <i class="tickVessel tickVesselActive"></i>
                </p>
            </div>
            <div class="foCon">
                <p class="cf3446b w50vw"><span class="price">1200.00</span>/期</p>
                <p class=""></p><!-- 布局占位符--勿删-->
            </div>
            <div class="foCon foBottom">
                <p class="w50vw c333">还款日期:<span class="price">2018.01.26</span></p>
                <p class=""></p><!-- 布局占位符--勿删-->
            </div>
        </div>

        <div class="foRow">
            <div class="foTitle">
                <span class="c333">全额还款</span>
                <p>
                    <span class="">还款</span>
                    <i class="tickVessel"></i>
                </p>
            </div>
            <div class="foCon">
                <p class="w50vw "><span class="price">36000.00</span></p>
                <p class=""></p><!-- 布局占位符--勿删-->
            </div>
            <div class="foCon foBottom">
                <p class="w50vw c333">还款日期:<span class="price">2018.04.26</span></p>
                <p class=""></p><!-- 布局占位符--勿删-->
            </div>
        </div>
        <div class="footer">
            <p>1200.00</p>
            <button class="btn idCardBtn">提交</button>
        </div>

    </div>
</div>
<script type="text/javascript" src="public/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="public/css/bootstrap3.3.7/js/bootstrap.min.js"></script>
<script>
    $(function () {
        $('.foRow').click(function(e){
            var e = e.target;
            var isHasTickVesselActive=$(this).find('.foTitle>p>i').hasClass('tickVesselActive');
            var isHasCf3446b=$(this).find('.foTitle>p>span').hasClass('cf3446b');
            var foConIsHasCf3446b= $($(this).find('.foCon')[0]).find('p.w50vw').hasClass('cf3446b');
            $('.foRow').find('.foTitle>p>span').removeClass('cf3446b');
            $('.foRow').find('.foTitle>p>i').removeClass('tickVesselActive');
            $('.foRow').find('p.w50vw').removeClass('cf3446b');
            if(isHasTickVesselActive&&isHasCf3446b&&foConIsHasCf3446b){
                $(this).find('.foTitle>p>span').removeClass('cf3446b');
                $(this).find('.foTitle>p>i').removeClass('tickVesselActive');
                $($(this).find('.foCon')[0]).find('p.w50vw').removeClass('cf3446b');
                $('.footer').find('p').html('请选择还款类型');
                $('.footer').find('button').removeClass('idCardBtn');
            }else{
                $(this).find('.foTitle>p>span').addClass('cf3446b');
                $(this).find('.foTitle>p>i').addClass('tickVesselActive');
                $($(this).find('.foCon')[0]).find('p.w50vw').addClass('cf3446b');
                var s =$(this).find('.price').html();
                $('.footer').find('p').html(s);
                $('.footer').find('button').addClass('idCardBtn');
            }
        })


    })
</script>
</body>
</html>