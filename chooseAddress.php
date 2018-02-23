<?php
include 'header.php';
?>
<style>
    .caption, .clear-rating {
        display: none !important;
    }

</style>
<div class="chooseAddress">
    <!-- 搜索框-->
    <div class="searchArea">
        <!-- 结构布局搜索框左含有icon和del,右为button-->
        <!--        <form action="">-->
        <div class="searchGroup">
            <img src="public/cssImg/icon/16/search.png" alt="">
            <input class="search" type="text" placeholder="河北石家庄张扬北路品琪旗舰店">
            <img src="public/cssImg/icon/16/del.png" alt="" class="del">
        </div>
        <button class="btn idCardBtn">搜索</button>
        <!--        </form>-->


    </div>
    <div class="container">
        <!-- 附近门店 -->
        <div class="nearbyShop">
            <!--        标题-->
            <p class="nearbyShopTitle">附近门店</p>
            <!--        列表填充-->
            <!--        结构:左icon-home 中文字上下结构 右input-radio-->
            <form action="">
                <ul class="nearbyShopUl">
                    <li>
                        <img src="public/cssImg/icon/kmThumb.png" alt="" class="home">
                        <div class="nearbyShopUlText">
                            <p class="shopName">河北石家庄品琪旗舰店</p>
                            <div class="likeImgAndLikeStar">
                                <p class="likeHand"><s class="like"></s> <span>613</span></p>
                                <p class="likeStar">
                                    <input id="input-21e" value="3.5" type="text" class="rating" data-min=0 data-max=5
                                           data-step=0.5 data-size="xs"
                                           title="">
                                </p>

                            </div>

                        </div>
                        <u class="tickVessel"></u>
                    </li>
                    <li>
                        <img src="public/cssImg/icon/kmThumb.png" alt="" class="home">
                        <div class="nearbyShopUlText">
                            <p class="shopName">河北石家庄品琪旗舰店</p>
                            <div class="likeImgAndLikeStar">
                                <p class="likeHand"><s class="like"></s> <span>613</span>
                                </p>
                                <p class="likeStar">
                                    <input id="input-21e" value="3.5" type="text" class="rating" data-min=0 data-max=5
                                           data-step=0.5 data-size="xs"
                                           title="">
                                </p>

                            </div>

                        </div>
                        <u class="tickVessel"></u>
                    </li>
                    <li>
                        <img src="public/cssImg/icon/kmThumb.png" alt="" class="home">
                        <div class="nearbyShopUlText">
                            <p class="shopName">河北石家庄品琪旗舰店</p>
                            <div class="likeImgAndLikeStar">
                                <p class="likeHand"><s class="noLike"></s> <span>613</span></p>
                                <p class="likeStar">
                                    <input id="input-21e" value="3.5" type="text" class="rating" data-min=0 data-max=5
                                           data-step=0.5 data-size="xs"
                                           title="">
                                </p>

                            </div>

                        </div>
                        <u class="tickVessel"></u>
                    </li>

                </ul>
                <div class="nearbyShopButton">
                    <button class="btn">提交</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript" src="public/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="public/css/bootstrap3.3.7/js/bootstrap.min.js"></script>
<script>
    $(function () {

//       选择门店页面-点击查询区域的删除按钮操作
        $('.searchGroup .del').click(function () {
            $('.searchGroup .search').val('');
        })
//       选择门店页面-点击查询区域跳转到查询门店结果页面的按钮操作
        $('.searchArea .btn').click(function () {
            var searchVal = $('.searchGroup .search').val();
            if (searchVal) {
                location.href = 'chooseAddressSearchShop.php'
            } else {
                alert('搜索条件不能为空');
            }
            console.log(searchVal);
        })

        //   选择门店页面-结果详情区域的radio点击操作
        $('.nearbyShopUl').delegate('li', 'click', function (e) {
            var e = e.target;

            if ($(e) !== $('.nearbyShopUl>li')) {
                $(e).parents('li').parents('.nearbyShopUl').find('u').removeClass('tickVesselActive');
                $(e).parents('li').find('u').addClass('tickVesselActive');
            }
            if (e == this) {
                $(e).parents('.nearbyShopUl').find('u').removeClass('tickVesselActive');
                $(e).find('u').addClass('tickVesselActive');
            }
            var isHasLikeClass = $(e).hasClass('like');
            var isHasNoLikeClass = $(e).hasClass('noLike');
            if (isHasLikeClass) {
                $(e).addClass('noLike').removeClass('like');
//                var s = Number($(e).siblings('span').html());
                var s = ($(e).siblings('span').html());
                s --;
                $(e).siblings('span').html(s);
            } else {
                $(e).addClass('like').removeClass('noLike');
                var a = ($(e).siblings('span').html());
                a ++;
                $(e).siblings('span').html(a);
            }

        })


    })
</script>
</body>
</html>
