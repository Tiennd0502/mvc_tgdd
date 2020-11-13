<header class="header" id="top">
  <div class="container">
    <a href="home" class="header-logo"><img src="public/images/logo/logo-tgdd.png" alt=""></a>
    <form class="header-search" id="search" method="Post" accept-charset="utf-8" autocomplete="off">
      <input type="text" name="search" id="js-search" value="" placeholder="Bạn tìm gì...">
      <i class="fa fa-search"></i>
      <ul class="wrap-suggestion" id="js-wrap-suggestion"></ul>
    </form>
    <div class="header-infor">
      <a href="Cart" class="infor-cart"><i class="fal fa-shopping-cart"></i>Giỏ hàng</a>
      <a href="History_cart" class="infor-history">LỊCH SỬ MUA HÀNG</a>
      <a href="" class="infor-new-hot"><span class="dot"><span class="ping"></span></span><span class="text">Trực tiếp ra mắt Realme C12</span></a>
    </div>
    <div class="" style="margin-left: auto;margin-right: 0;overflow: hidden">
      <a href="" class="infor-technology">24h CÔNG NGHỆ</a>
      <a href="" class="infor-contact">HỎI ĐÁP</a>
      <a href="" class="infor-game-ap">GAME APP</a>
    </div>
    <?php 
      if (isset($data["ClassBody"])) {?>
        <a class="leftgame home" href="">
          <img src="public/images/home-left-min.png" width="146" style="position: fixed; left: 611px; top: 120px;z-index: 2">
        </a>
        <a class="rightgame home" href="">
          <img src="public/images/home-right-min.png" width="117" style="position: fixed; right: -0.5px; top: 120px;z-index: 2">
        </a>
    <?php }?>
  </div>
</header><!-- /header -->