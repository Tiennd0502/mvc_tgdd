<div class="banner">
  <div id="owl-home" class="owl-carousel owl-theme">
    <div class="item">
      <a href=""><img src="public/images/home_carousel/a51-71-800-170-800x170-4.png" width="800"height="170"></a>
    </div>
    <div class="item ">
      <a href="#"><img src="public/images/home_carousel/A93-800-170-800x170.png" width="800"height="170"></a>
    </div>
    <div class="item ">
      <a href="#"><img src="public/images/home_carousel/800-170-800x170-6.png" width="800"height="170"></a>
    </div>
    <div class="item ">
      <a href="#"><img src="public/images/home_carousel/800-170-800x170-11.png" width="800"height="170"></a>
    </div>
    <div class="item ">
      <a href="#"><img src="public/images/home_carousel/800-170-800x170-10.png" width="800"height="170"></a>
    </div>
    <div class="item ">
      <a href="#"><img src="public/images/home_carousel/Nokia-83-800-170-800x170.png" width="800"height="170"></a>
    </div>
    <div class="item ">
      <a href="#"><img src="public/images/home_carousel/OnePlus-Nord-800-170-800x170-4.png" width="800"height="170"></a>
    </div>
    <div class="item ">
      <a href="#"><img src="public/images/home_carousel/800-170-800x170-23.png" width="800"height="170"></a>
    </div>
    <div class="item ">
      <a href="#"><img src="public/images/home_carousel/Note10plus-800-170-800x170.png" width="800"height="170"></a>
    </div>
  </div>
  <div class="right-banner">
    <a href="#">
      <img src="public/images/banner/A31-11-390-80-390x80-4.png" width="390" height="90" alt=""></a>
    <a href="#">
      <img src="public/images/banner/sticky-oppo-a523-390-80-390x80.png" width="390" height="90" alt="">
    </a>
  </div>
</div>
<!-- fillter-trademark -->
<div class="filter-trademark">
  <?php 
    if (isset($data["Trademarks"]) && !empty($data["Trademarks"])) {
      $trademarks = json_decode($data["Trademarks"]);
      $index = 0;
      foreach ($trademarks as $trademark) {
        if ($index < 7) { ?>
          <!-- class="check" -->
          <a href="" ><img src="public/images/trademark<?= $trademark->path ?>" alt=""></a>
        <?php }else { ?>  
           <a href="" class="name-trandemark" ><img src="public/images/trademark<?= $trademark->path ?>" alt=""></a>
        <?php }
        $index++;
      }
    }?>
   <a href="javascript:;" id="trademark-more" style="border-top: 1px solid #eee">Xem thêm</a>
</div>
<!-- filter other -->
<div class="filter-other">
  <div class="filter-price">
    <label>Chọn mức giá: </label>
    <a href="">Dưới 2 triệu</a>
    <a href="">Từ 2 - 4 triệu</a>
    <a href="">Từ 4 - 7 triệu</a>
    <a href="">Từ 7 - 13 triệu</a>
    <a href="">Trên 13 triệu</a>
  </div>
  <div class="filter-feature">
    <label class="criteria js-filter-feature" id="js-filter-feature"> <span>Bộ lọc</span><i class="fa fa-caret-down"></i>
    </label>
    <div class="content-feature js-content-feature" style="display: none">
      <label class="closefeature"><i class="fal fa-times-circle"></i></label>
      <div class="content-feature-list">
        <div class="content-feature-item">
          <label>Loại điện thoại</label>
          <div class="barpage-item">
            <label class="barpage-title">Điện thoại phổ thông
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">Android
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">iPhone (IOS)
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
        </div>
        <div class="content-feature-item">
          <label>Dung lượng pin</label>
          <div class="barpage-item">
            <label class="barpage-title">Từ 3000 đến 5000 mAh
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">Pin khủng trên 5000 mAh
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
        </div>
        <div class="content-feature-item">
          <label>Dung lượng RAM</label>
          <div class="barpage-item">
            <label class="barpage-title">Dưới 4GB
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">Từ 4 - 6GB
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">8GB Trở lên
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
        </div>
      </div>
      <div class="content-feature-list">
        <div class="content-feature-item">
          <label>Bộ nhớ trong</label>
          <div class="barpage-item">
            <label class="barpage-title">Dưới 32GB
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">Từ 32-64GB
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">Từ 128-256GB
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">512GB Trở lên
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
        </div>
        <div class="content-feature-item">
          <label>Tính năng Camera</label>
          <div class="barpage-item">
            <label class="barpage-title">Camera góc rộng
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">Camera xóa phông
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">Camera zoom chụp xa
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">Camera macro chụp cận cảnh
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
        </div>
        <div class="content-feature-item">
          <label>Tính năng đặc biệt</label>
          <div class="barpage-item">
            <label class="barpage-title">Bảo mật khuôn mặt
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">Bảo mật vân tay
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">Sạc pin nhanh 
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">Sạc không dây
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">Chống nước, bụi
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
        </div>
      </div>
      <div class="filter-feature-more js-filter-feature-more">
        Xem thêm tính năng khác <i class="fa fa-caret-down" ></i>
      </div>
      <div class="content-feature-list" style="border-bottom: none; display: none;">
        <div class="content-feature-item">
          <label>Kiểu màn hình</label>
          <div class="barpage-item">
            <label class="barpage-title">Siêu tràn viền
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">Tràn viền(tai thỏ, giọt nước,..)
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
        </div>
        <div class="content-feature-item">
          <label>Kích thước màn hình</label>
          <div class="barpage-item">
            <label class="barpage-title">Màn hình lớn 6 in trở lên
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">Nhỏ gọn, dễ cầm
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
        </div>
        <div class="content-feature-item">
          <label>Chất liệu vỏ</label>
          <div class="barpage-item">
            <label class="barpage-title">Kim loại
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">Kim loại và kính
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
        </div>
      </div>
      <div class="result">
        <button type="button" class="view-result">Xem 6 kết quả</button>
        <button type="reset" class="clear-prop">Bỏ tất cả lựa chọn</button>
      </div>
    </div>
  </div>
  <div class="filter-barpage">
    <div class="barpage-item">
      <label class="barpage-title">Mới
        <input type="checkbox" >
        <span class="checkmark"></span>
      </label>
    </div>
    <div class="barpage-item">
      <label class="barpage-title">Trả góp 0%
        <input type="checkbox" >
        <span class="checkmark"></span>
      </label>
    </div>
    <div class="barpage-item">
      <label class="barpage-title">Độc quyền
        <input type="checkbox" >
        <span class="checkmark"></span>
      </label>
      <span class="new">MỚI</span>
    </div>
  </div>
  <div class="filter-sort">
    <span class="criteria js-sort" id="js-sort"> <span>Sắp xếp</span><i class="fa fa-caret-down"></i></span>
    <div class="content-sort js-content-sort" style="">
      <label class="closefilter js-closefilter "><i class="fal fa-times-circle"></i></label>
      <span><span class="check-sort"><i class="fal fa-check"></i></span> Nổi bật nhất</span>
      <span><span class="check-sort"></span> Bán chạy nhất</span>
      <span><span class="check-sort"></span> Giá cao đến thấp</span>
      <span><span class="check-sort"></span> Giá thấp đến cao</span>
    </div>
  </div>
</div>
<h1 class="h1">Điện thoại nỗi bật nhất</h1>
<div class="home-product">
  <!-- Lấy 2 sản phẩm điện thoại nổi bật có image_hot -->
  <?php 
    if(isset($data["Mobile"]) && !empty($data["Mobile"])){
      $mobiles = json_decode($data["Mobile"]);
      $mobile_hot = array();
      $index = 0;
      foreach ($mobiles as $key => $mobile) {
        if(!empty($mobile->image_hot)){
          $mobile_hot[] = $mobile;
          unset($mobiles[$key]);
          $index ++ ;
        }
        if($index == 2){
          break;
        }
      }
      $index = 0;
      $count = 0;
      foreach ($mobiles as $mobile) {
        if ($count == 0 || $count == 4) { ?>
          <div class="feature">
            <!-- dtdd/ //strtolower(str_replace(" ","-",$mobile_hot[$index]->name))  -->
            <a href="dtdd/detail/<?= $mobile_hot[$index]->id ?>" class="large">
              <img src="public/images/avatar_hot/<?= $mobile_hot[$index]->image_hot ?>" alt="" width="600" height="275">
              <h3><?= $mobile_hot[$index]->name ?></h3>
              <!-- <h6 class="text-promo">Hàng sắp về</h6> -->
              <div class="product-price">
                <?php 
                if ($mobile_hot[$index]->discount != 0) { ?>
                  <strong><?= number_format(round($mobile_hot[$index]->price - $mobile_hot[$index]->price * $mobile_hot[$index]->discount / 100, -4),0,",", ".")  ?></strong>
                  <span><?= number_format($mobile_hot[$index]->price,0,",",".") ?></span>
                  <i>-<?= $mobile_hot[$index]->discount ?>%</i>
                <?php }else { ?>
                  <strong><?= number_format($mobile_hot[$index]->price,0,",", ".")  ?></strong>
                <?php }?>                      
              </div>
              <!-- <div class="product-promo noimage">
                <p>Giảm thêm <b>500.000₫</b></p>
                <p>Ưu đãi đặc quyền Galaxy Z Elite và gói dịch vụ cao cấp</p>
              </div> -->
              <!-- <label class="preorder">Đặt trước đến 24/09</label> -->
              <label class="installment">Trả góp 0%</label>
              <!-- <label class="discount">GIẢM 45.000₫</label> -->
              <!-- <img class="icon-imgNew cate1" src="./images/Label_01-05.png" alt=""> -->
              <?php 
              if (!empty($mobile_hot[$index]->icon)) { ?>
                <img class="icon-imgNew cate1" src="public/images/icon/<?= $mobile_hot[$index]->icon?>" alt="">
              <?php }?>
            </a>
          </div>
        <?php $index = 1; $count++ ;} ?>
          <?php 
            //$positon = strpos($mobile->name, "(");
            //if($positon == false){
             // $name = $mobile->name;
            //}else{
            //  $name = trim(substr($mobile->name, 0, $positon));
            //} ?>
        <div>
          <!-- dtdd/detail/ //strtolower(str_replace(" ","-",$mobile->name))  -->
          <a href="dtdd/detail/<?= $mobile->id ?>" class="large">
            <img src="public/images/avatar/<?= $mobile->image?>" alt="" width="180" height="180">
            <h3><?= $mobile->name?></h3>
            <h6 class="text-promo">Hàng sắp về</h6>
            <div class="product-price">
              <?php 
              if ($mobile->discount != 0) { ?>
                <strong><?= number_format(round($mobile->price - $mobile->price * $mobile->discount / 100, -4),0,",", ".")  ?></strong>
                <span><?= number_format($mobile->price,0,",",".") ?></span>
                <i>-<?= $mobile->discount ?>%</i>
              <?php }else { ?>
                <strong><?= number_format($mobile->price,0,",", ".")  ?></strong>
              <?php }?>                    
            </div>
            <div class="product-promo noimage">
              <?php if(!empty($mobile->gift)){ ?>
                <p>Giảm thêm <b><?= number_format($mobile->gift, 0,",",".")?>₫</b></p>
              <?php } ?>
              <!-- <p>Ưu đãi đặc quyền Galaxy Z Elite và gói dịch vụ cao cấp</p> -->
            </div>
            <!-- <label class="preorder">Đặt trước đến 24/09</label> -->
            <label class="installment">Trả góp 0%</label>
            <!-- <label class="discount">GIẢM 45.000₫</label> -->
            <?php 
            if (!empty($mobile->icon)) { ?>
              <img class="icon-imgNew cate1" src="public/images/icon/<?= $mobile->icon?>" alt="">
            <?php }?>
          </a>
        </div>
        <?php 
          $count++ ; 
          if ($count == 28) {
            break;
          }
      }
    }
   ?>
</div>
<div class="show-more">
  <label for="">Xem thêm 145 điện thoại<i class="fa fa-caret-down"></i></label>
</div>
<div class="catetag">
  <a href="">Samsung Galaxy Note Mới</a>
  <a href="">iPhone 11 Pro Max</a>
  <a href="">iPhone 11</a>
  <a href="">Redmi Note 9S</a>
  <a href="">OPPO Reno4</a>
  <a href="">Điện thoại độc quyền</a>
  <a href="">OnePlus</a>
  <a href="">Điện thoại Energizer</a>
  <a href="">Điện thoại thông minh</a>
  <a href="">Điện thoại pin trâu</a>
</div>
</div>
<div class="slogan">
  <div class="container">
    <p><i class="fal fa-truck-container"></i><span class="text">Giao hàng nhanh chóng</span></p>
    <p><i class="fal fa-piggy-bank"></i><span class="text">Thanh toán: tiền mặt, visa / master, trả góp</span></p>
    <p><i class="far fa-phone-laptop"></i><span class="text">Trải nghiệm sản phẩm tại nhà</span></p>
    <p><i class="far fa-award"></i><span class="text">Lỗi đổi tại nhà nhanh chóng</span></p>
    <p><i class="fas fa-user-headset"></i><span class="text">Hỗ trợ suốt thời gian sử dụng. Hotline: <span>1800.1763</span></span></p>
  </div>
</div>