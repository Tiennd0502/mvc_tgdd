<div id="tab-links">
  <div class="tab-links">
    <a href="laptop" class="links-active">laptop</a>
    <a href="pc" class="">Máy tính bộ - Màn hình</a>
    <a href="printer" class="">Máy in - Mực in</a>
  </div>
  <div class="mac-hp-area">
    <a href=""><img src="public/images/macbook.png"></a>
    <a href=""><img src="public/images/hp.png"></a>
  </div>
</div>
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
    <a href="">Dưới 10 triệu</a>
    <a href="">Từ 10 - 15 triệu</a>
    <a href="">Từ 15 - 25 triệu</a>
    <a href="">Trên 25 triệu</a>
  </div>
  <div class="filter-feature">
    <label class="criteria js-filter-feature" id="js-filter-feature">
      <span>Bộ lọc</span><i class="fa fa-caret-down"></i>
    </label>
    <div class="content-feature js-content-feature" style="display: none">
      <label class="closefeature"><i class="fal fa-times-circle"></i></label>
      <div class="content-feature-list">
        <div class="content-feature-item">
          <label>RAM</label>
          <div class="barpage-item">
            <label class="barpage-title">16GB
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">8GB
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">4GB
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
        </div>
        <div class="content-feature-item">
          <label>CPU</label>
          <div class="barpage-item">
            <label class="barpage-title">Intel Core i7
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">Intel Core i5
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">Intel Core i3
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">Intel Celeron/Pentium
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">AMD
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
        </div>
        <div class="content-feature-item">
          <label>Ổ cứng</label>
          <div class="barpage-item">
            <label class="barpage-title">SSD: 1 TB
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">SSD: 512 GB
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">SSD: 256 GB
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">SSD: 128 GB
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">HHD: từ 1 TB trở lên
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">HHD: dưới 1 TB
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
        </div>
      </div>
      <div class="content-feature-list">
        <div class="content-feature-item">
          <label>Màn hình</label>
          <div class="barpage-item">
            <label class="barpage-title">Trên 15 inch
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">Khoảng 14 inch
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">Khoảng 13 inch
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
        </div>
        <div class="content-feature-item">
          <label>Tính năng Đặc biệt</label>
          <div class="barpage-item">
            <label class="barpage-title">Ổ Cứng SSD
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">Card đồ họa rời
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">CPU Intel thế hệ 10(Mới)
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">Màn hình cảm ứng
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">Màn hình gập 360 độ
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">Bộ nhớ Intel Optane
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">Viền màn hình mỏng
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">Wifi 6 nhanh 4 lần wifi 5(Mới)
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">MH chống chới Anti Glare
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
      <label class="barpage-title">Chỉ bán online
        <input type="checkbox" >
        <span class="checkmark"></span>
      </label>
      <span class="new">MỚI</span>
    </div>
  </div>
</div>
<div class="demand">
  <h3 class="title" style="border-bottom: none">Chọn nhu cầu:</h3>
  <div class="property-need">
    <a href="">
      <img src="public/images/hoc-tap.jpg" alt="">
      <span>Học tập - Văn phòng</span>
    </a>
    <a href="">
      <img src="public/images/do-hoa-(tgdd).jpg" alt="">
      <span>Đồ họa - Kỹ thuật</span>
    </a>
    <a href="">
      <img src="public/images/mong-nhe.jpg" alt="">
      <span>Mõng nhẹ</span>
    </a>
    <a href="">
      <img src="public/images/gaming.jpg" alt="">
      <span>Laptop - Gaming</span>
    </a>
    <a href="">
      <img src="public/images/cao-cap.jpg" alt="">
      <span>Cao cấp - Sang trọng</span>
    </a>
  </div>
</div>
<div class="img-title">
  <img src="public/images/FeatureLaptopShockPrice.png" alt="">
</div>
<?php 
  if (isset($data["SquirrelPrices"])) {
    $squirrelPrices = json_decode($data["SquirrelPrices"],TRUE);
  }
 ?>
<div class="laptop-shock">
  <div class="owl-carousel home-promo owl-theme" id="owl-laptop">
    <?php 
      foreach ($squirrelPrices as $item) { ?>
        <div class="item">
          <a href="laptop/detail/<?= $item["id"] ?>" class="laptop large">
            <img src="public/images/avatar<?= $item["image"]?>" alt="" width="180" height="180">
            <div class="product-props">
              <?php 
                $ram = explode(",", trim($item["ram"]))[0];
                $arr = explode(" ", trim($item["internal_memory"]));
                $internal_memory = $arr[0]. " ". $arr[1];
               ?>
              <span class="dotted ">RAM <?= $ram ?></span>
              <span class="dotted ">Ổ CỨNG <?= $internal_memory ?></span>
            </div>
            <h3><?= $item["name"]?></h3>
            <div class="product-price">
              <strong><?= number_format(round($item["price"] - $item["price"] * $item["discount"] / 100, -4),0,",", ".")  ?></strong>
              <span><?= number_format($item["price"],0,",",".") ?></span>
              <i>-<?= $item["discount"] ?>%</i>                      
            </div>
            <div class="product-promo noimage">
              <?php if(!empty($item["gift"]) && is_numeric($item["gift"])){ ?>
                  <p>Giảm thêm <b><?= number_format($item["gift"], 0,",",".")?>₫</b></p>
                <?php } ?>
              <!-- <p>Ưu đãi đặc quyền Galaxy Z Elite và gói dịch vụ cao cấp</p> -->
            </div>
            <!-- <label class="preorder">Đặt trước đến 24/09</label> -->
            <label class="installment">Trả góp 0%</label>
            <!-- <label class="discount">GIẢM 45.000₫</label> -->
            <?php 
              if (!empty($item["icon"])) { ?>
                <img class="icon-imgNew cate2" src="public/images/icon<?= $item["icon"] ?>" alt="">
              <?php }?>
          </a>
        </div>
    <?php } ?>
  </div>
</div>
<div class="title-filter-sort">
  <h1 class="h1">Laptop bán chạy</h1>
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
<div class="home-product">
  <!-- Lấy 2 sản phẩm laptop nổi bật có image_hot -->
  <?php 
    if(isset($data["Laptop"]) && !empty($data["Laptop"])){
      $laptops = json_decode($data["Laptop"], TRUE);
      $laptop_hot = array();
      $index = 0;
      foreach ($laptops as $key => $laptop) {
        if(!empty($laptop["image_hot"])){
          $laptop_hot[] = $laptop;
          unset($laptops[$key]);
          $index ++ ;
        }
        if($index == 2){
          break;
        }
      }
      $index = 0;
      $count = 0;
      foreach ($laptops as $laptop) {
        if ($count == 0 || $count == 4) { ?>
          <div class="feature">
            <!-- dtdd/ //strtolower(str_replace(" ","-",$laptop_hot[$index]->name))  -->
            <a href="laptop/detail/<?= $laptop_hot[$index]["id"] ?>" class="large">
              <img src="public/images/avatar_hot<?= $laptop_hot[$index]["image_hot"] ?>" alt="" width="600" height="275">
              <h3><?= $laptop_hot[$index]["name"] ?></h3>
              <!-- <h6 class="text-promo">Hàng sắp về</h6> -->
              <div class="product-price">
                <?php 
                if ($laptop_hot[$index]["discount"] != 0) { ?>
                  <strong><?= number_format(round($laptop_hot[$index]["price"] - $laptop_hot[$index]["price"] * $laptop_hot[$index]["discount"] / 100, -4),0,",", ".")  ?></strong>
                  <span><?= number_format($laptop_hot[$index]["price"],0,",",".") ?></span>
                  <i>-<?= $laptop_hot[$index]["discount"] ?>%</i>
                <?php }else { ?>
                  <strong><?= number_format($laptop_hot[$index]["price"],0,",", ".")  ?></strong>
                <?php }?>                      
              </div>
              <div class="product-promo noimage">
                <?php if(!empty($laptop_hot[$index]["gift"]) && is_numeric($laptop_hot[$index]["gift"])){ ?>
                  <p>Giảm thêm <b><?= number_format($laptop_hot[$index]["gift"], 0,",",".")?>₫</b></p>
                <?php } ?>
              </div>
              <!-- <label class="preorder">Đặt trước đến 24/09</label> -->
              <label class="installment">Trả góp 0%</label>
              <!-- <label class="discount">GIẢM 45.000₫</label> -->
              <!-- <img class="icon-imgNew cate1" src="./images/Label_01-05.png" alt=""> -->
            </a>
          </div>
        <?php $index = 1; $count++ ;} ?>
        <div>
          <a href="laptop/detail/<?= $laptop["id"] ?>" class="laptop large">
            <img src="public/images/avatar<?= $laptop["image"] ?>" alt="" width="180" height="180">
            <h3><?= $laptop["name"] ?></h3>
            <!-- <h6 class="text-promo">Hàng sắp về</h6> -->
            <div class="product-price">
              <?php 
              if ($laptop["discount"] != 0) { ?>
                <strong><?= number_format(round($laptop["price"] - $laptop["price"] * $laptop["discount"] / 100, -4),0,",", ".")  ?></strong>
                <span><?= number_format($laptop["price"],0,",",".") ?></span>
                <i>-<?= $laptop["discount"] ?>%</i>
              <?php }else { ?>
                <strong><?= number_format($laptop["price"],0,",", ".")  ?></strong>
              <?php }?>                    
            </div>
            <div class="product-promo noimage">
              <?php if(!empty($laptop["gift"])){ ?>
                <p>Giảm thêm <b><?= number_format($laptop["gift"], 0,",",".")?>₫</b></p>
              <?php } ?>
              <!-- <p>Ưu đãi đặc quyền Galaxy Z Elite và gói dịch vụ cao cấp</p> -->
            </div>
            <!-- <label class="preorder">Đặt trước đến 24/09</label> -->
            <label class="installment">Trả góp 0%</label>
            <!-- <label class="discount">GIẢM 45.000₫</label> -->
            <?php 
            if (!empty($laptop["icon"])) { ?>
              <img class="icon-imgNew cate2" src="public/images/icon<?= $laptop["icon"]?>" alt="">
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
  <label for="">Xem thêm 125 laptop<i class="fa fa-caret-down"></i></label>
</div>
<!-- Block tin tức cho laptop -->
<div class="news-block-laptop">
  <div class="block-tab">
    <a href="javascript:void(0);" data-id="1" class="js-show-content tab-active">VIDEO VỀ LAPTOP</a>
    <a href="javascript:;" data-id="2" class="js-show-content">TIN TỨC</a>
    <a href="javascript:;" data-id="3"class="js-show-content">HƯỚNG DẪN</a>
  </div>
  <!-- Xem video về laptop -->
  <div class="video js-video" >
    <a href="">
      <img src="./images/maxresdefault.jpg" alt="">
    </a>
    <div class="video-list">
      <a href="">
        <img src="./images/mqdefault.jpg" alt="">
        <div>
          <h3>Đánh giá ASUS ROG G512 - Định Nghĩa Lại Laptop Gaming</h3>
          <span>22/08</span>
        </div>
      </a>
      <a href="">
        <img src="./images/mqdefault (1).jpg" alt="">
        <div>
          <h3>Lenovo Legion 5: Laptop gaming TỐT NHẤT trong tầm giá???</h3>
          <span>15/08</span>
        </div>
      </a>
      <a href="">
        <img src="./images/mqdefault.jpg" alt="">
        <div>
          <h3>Đánh giá ASUS ROG G512 - Định Nghĩa Lại Laptop Gaming</h3>
          <span>22/08</span>
        </div>
      </a>
      <a href="">
        <img src="./images/mqdefault.jpg" alt="">
        <div>
          <h3>Đánh giá ASUS ROG G512 - Định Nghĩa Lại Laptop Gaming</h3>
          <span>22/08</span>
        </div>
      </a>
    </div>
  </div>
  <!-- Xem tất cả bài tin về laptop -->
  <div class="news js-news" style="display: none">
    <a href="">
      <img src="./images/laptopaceraspirea515535112i5_800x450-600x400.jpg" alt="">
      <h3>Top laptop Acer đáng sắm đang đồng giảm 10% cực xịn giúp bạn cuối tuần không trở nên buồn chán, tham khảo list này ngay</h3>
      <span>1 ngày trước</span>
    </a>
    <div class="news-list">
      <a href="">
        <img src="./images/laptop-3m_800x450-600x400.jpg" alt="">
        <div>
           <h3>Top 3 laptop dưới 10 triệu bán chạy nhất tháng 8 tại Thế Giới Di Động, cấu hình đáp ứng tốt nhu cầu học tập và văn phòng</h3>
          <span>2 ngày trước</span>
        </div>
      </a>
      <a href="">
        <img src="./images/th_800x450-600x400.jpg" alt="">
        <div>
          <h3>Mừng đại lễ 2/9, hàng loạt laptop HP đồng giảm sốc 20%, cơ hội săn laptop xịn giá tiết kiệm lại đến rồi đây</h3>
          <span>6 ngày trước</span>
        </div>
      </a>
      <a href="">
        <img src="./images/t_800x450-600x400.jpg" alt="">
        <div>
          <h3>Chia sẻ đến bạn loạt laptop Lenovo cực chất đang giảm đến 10%, đi kèm rất nhiều quà tặng và ưu đãi hấp dẫn dành cho bạn</h3>
          <span>1 ngày trước</span>
        </div>
      </a>
      <a href="">
        <img src="./images/laptop-3m_800x450-600x400.jpg" alt="">
        <div>
           <h3>Top 3 laptop dưới 10 triệu bán chạy nhất tháng 8 tại Thế Giới Di Động, cấu hình đáp ứng tốt nhu cầu học tập và văn phòng</h3>
          <span>2 ngày trước</span>
        </div>
      </a>
      <a href="">
        <img src="./images/th_800x450-600x400.jpg" alt="">
        <div>
          <h3>Mừng đại lễ 2/9, hàng loạt laptop HP đồng giảm sốc 20%, cơ hội săn laptop xịn giá tiết kiệm lại đến rồi đây</h3>
          <span>6 ngày trước</span>
        </div>
      </a>
      <a href="">
        <img src="./images/t_800x450-600x400.jpg" alt="">
        <div>
          <h3>Chia sẻ đến bạn loạt laptop Lenovo cực chất đang giảm đến 10%, đi kèm rất nhiều quà tặng và ưu đãi hấp dẫn dành cho bạn</h3>
          <span>1 ngày trước</span>
        </div>
      </a>
      <a href="" class="viewall">Xem tất cả bài tin về laptop </a>
    </div>  
  </div>
  <!-- Xem tất cả hướng dẫn về laptop -->
  <div class="news tutorial js-tutorial" style="display: none">
    <a href="">
      <img src="./images/cach-cap-quyen-pop-imap-cho-outlook-gmail-yahoo-icloud-thumb-01.jpg" alt="">
      <h3>Cách cấp quyền POP, IMAP cho Outlook, Gmail, Yahoo, iCloud nhanh chóng</h3>
      <p> POP và IMAP là hai giao thức cho phép truy cập tài khoản email của bạn từ nhiều thiết bị và ứng dụng mail khác nhau. Tham khảo bà...</p>
    </a>
    <div class="news-list">
      <a href="">
        <img src="./images/cach-them-tai-khoan-email-khac-vao-gmail-tren-may-tinh-thumb.jpg" alt="">
        <div>
          <h3>Cách dùng Gmail để gửi nhận thư từ các email khác (Outlook, Yahoo,...)</h3>
          <p> Việc đồng bộ các email khác như Outlook, Yahoo, mail công ty,... vào Gmail cá nhân giúp bạn dễ dàng quản lý các tin nhắn, không t...</p>
        </div>
      </a>
      <a href="">
        <img src="./images/cach-xem-mat-khau-wifi-da-luu-tren-dien-thoai-may-tinh-don-thumb.jpg" alt="">
        <div>
           <h3>Cách xem mật khẩu WiFi đã lưu trên điện thoại, máy tính đơn giản</h3>
          <p> Bạn muốn xem lại WiFi mà bạn đã lưu mà không biết làm như thế nào? Thì ở bài viết này chúng ta cùng tìm hiểu về cách xem mật khẩu...</p>
        </div>
      </a>
      <a href="">
        <img src="./images/th_800x450-600x400.jpg" alt="">
        <div>
          <h3>Mừng đại lễ 2/9, hàng loạt laptop HP đồng giảm sốc 20%, cơ hội săn laptop xịn giá tiết kiệm lại đến rồi đây</h3>
          <p>POP và IMAP là hai giao thức cho phép truy cập tài khoản email của bạn từ nhiều thiết bị và ứng dụng mail khác nhau. Tham khảo bà...</p>
        </div>
      </a>
      <a href="">
        <img src="./images/t_800x450-600x400.jpg" alt="">
        <div>
          <h3>Chia sẻ đến bạn loạt laptop Lenovo cực chất đang giảm đến 10%, đi kèm rất nhiều quà tặng và ưu đãi hấp dẫn dành cho bạn</h3>
          <p>POP và IMAP là hai giao thức cho phép truy cập tài khoản email của bạn từ nhiều thiết bị và ứng dụng mail khác nhau. Tham khảo bà...</p>
        </div>
      </a>
      <a href="">
        <img src="./images/th_800x450-600x400.jpg" alt="">
        <div>
          <h3>Mừng đại lễ 2/9, hàng loạt laptop HP đồng giảm sốc 20%, cơ hội săn laptop xịn giá tiết kiệm lại đến rồi đây</h3>
          <p>POP và IMAP là hai giao thức cho phép truy cập tài khoản email của bạn từ nhiều thiết bị và ứng dụng mail khác nhau. Tham khảo bà...</p>
        </div>
      </a>
      <a href="">
        <img src="./images/t_800x450-600x400.jpg" alt="">
        <div>
          <h3>Chia sẻ đến bạn loạt laptop Lenovo cực chất đang giảm đến 10%, đi kèm rất nhiều quà tặng và ưu đãi hấp dẫn dành cho bạn</h3>
          <p>POP và IMAP là hai giao thức cho phép truy cập tài khoản email của bạn từ nhiều thiết bị và ứng dụng mail khác nhau. Tham khảo bà...</p>
        </div>
      </a>
      <a href="" class="viewall">Xem tất cả hướng dẫn về laptop</a>
    </div>  
  </div>
</div>
<!-- /Block tin tức cho laptop -->
<div class="catetag">
  <a href="">Laptop Asus</a>
  <a href="">Laptop HP</a>
  <a href="">Laptop Lenovo</a>
  <a href="">Macbook Pro</a>
  <a href="">Laptop Acer</a>
  <a href="">Dell inspiron</a>
  <a href="">Macbook Air</a>
  <a href="">Macbook Pro 2018</a>
  <a href="">Asus Zenbook</a>
  <a href="">HP Pavilion</a>
  <a href="">HP Envy</a>
  <a href="">Dell inspiron 15</a>
  <a href="">As</a>
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