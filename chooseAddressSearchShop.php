<?php
include 'header.php';
?>

<div class="chooseAddressSearchShop nearbyShop">

    <ul class="nearbyShopUl">
        <li>
            <img src="public/cssImg/icon/32/home.png" alt="" class="home">
            <div class="nearbyShopUlText">
                <p class="shopName">河北石家庄品琪旗舰店</p>
                <p class="shopAddress">河北石家庄张扬北路456号</p>
            </div>
            <input type="radio">
        </li>
        <li>
            <img src="public/cssImg/icon/32/home.png" alt="" class="home">
            <div class="nearbyShopUlText">
                <p class="shopName">河北石家庄品琪旗舰店</p>
                <p class="shopAddress">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est id maiores
                    molestiae quasi quia similique unde! Accusantium, ad, distinctio eligendi fugiat harum
                    molestiae, numquam officia possimus quia quis voluptates voluptatibus.</p>
            </div>
            <input type="radio">
        </li>
        <li>
            <img src="public/cssImg/icon/32/home.png" alt="" class="home">
            <div class="nearbyShopUlText">
                <p class="shopName">河北石家庄品琪旗舰店</p>
                <p class="shopAddress">河北石家庄张扬北路456号</p>
            </div>
            <input type="radio">
        </li>
        <li>
            <img src="public/cssImg/icon/32/home.png" alt="" class="home">
            <div class="nearbyShopUlText">
                <p class="shopName">河北石家庄品琪旗舰店</p>
                <p class="shopAddress">河北石家庄张扬北路456号</p>
            </div>
            <input type="radio">
        </li>
        <li>
            <img src="public/cssImg/icon/32/home.png" alt="" class="home">
            <div class="nearbyShopUlText">
                <p class="shopName">河北石家庄品琪旗舰店</p>
                <p class="shopAddress">河北石家庄张扬北路456号</p>
            </div>
            <input type="radio">
        </li>
        <li>
            <img src="public/cssImg/icon/32/home.png" alt="" class="home">
            <div class="nearbyShopUlText">
                <p class="shopName">河北石家庄品琪旗舰店</p>
                <p class="shopAddress">河北石家庄张扬北路456号</p>
            </div>
            <input type="radio">
        </li>
        <li>
            <img src="public/cssImg/icon/32/home.png" alt="" class="home">
            <div class="nearbyShopUlText">
                <p class="shopName">河北石家庄品琪旗舰店</p>
                <p class="shopAddress">河北石家庄张扬北路456号</p>
            </div>
            <input type="radio">
        </li>
        <li>
            <img src="public/cssImg/icon/32/home.png" alt="" class="home">
            <div class="nearbyShopUlText">
                <p class="shopName">河北石家庄品琪旗舰店</p>
                <p class="shopAddress">河北石家庄张扬北路456号</p>
            </div>
            <input type="radio">
        </li>
        <li>
            <img src="public/cssImg/icon/32/home.png" alt="" class="home">
            <div class="nearbyShopUlText">
                <p class="shopName">河北石家庄品琪旗舰店</p>
                <p class="shopAddress">河北石家庄张扬北路456号</p>
            </div>
            <input type="radio">
        </li>
        <li>
            <img src="public/cssImg/icon/32/home.png" alt="" class="home">
            <div class="nearbyShopUlText">
                <p class="shopName">河北石家庄品琪旗舰店</p>
                <p class="shopAddress">河北石家庄张扬北路456号</p>
            </div>
            <input type="radio">
        </li>
        <li>
            <img src="public/cssImg/icon/32/home.png" alt="" class="home">
            <div class="nearbyShopUlText">
                <p class="shopName">河北石家庄品琪旗舰店</p>
                <p class="shopAddress">河北石家庄张扬北路456号</p>
            </div>
            <input type="radio">
        </li>
        <li>
            <img src="public/cssImg/icon/32/home.png" alt="" class="home">
            <div class="nearbyShopUlText">
                <p class="shopName">河北石家庄品琪旗舰店</p>
                <p class="shopAddress">河北石家庄张扬北路456号</p>
            </div>
            <input type="radio">
        </li>
        <li>
            <img src="public/cssImg/icon/32/home.png" alt="" class="home">
            <div class="nearbyShopUlText">
                <p class="shopName">河北石家庄品琪旗舰店</p>
                <p class="shopAddress">河北石家庄张扬北路456号</p>
            </div>
            <input type="radio">
        </li>

    </ul>
    <div class="nearbyShopButton">
        <button class="btn">提交</button>
    </div>


</div>
<script type="text/javascript" src="public/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="public/css/bootstrap3.3.7/js/bootstrap.min.js"></script>
<script>
    $(function () {

        $('.nearbyShopUl').delegate('li', 'click', function (e) {
            var e = e.target;

            if ($(e) !== $('.nearbyShopUl>li')) {
                $(e).parents('li').parents('.nearbyShopUl').find('input[type="radio"]').prop('checked', false);
                $(e).parents('li').find('input[type="radio"]').prop('checked', true);
            }
            if (e == this) {
                $(e).parents('.nearbyShopUl').find('input[type="radio"]').prop('checked', false);
                $(e).find('input[type="radio"]').prop('checked', true);
            }

        })
    })
</script>
</body>
</html>
