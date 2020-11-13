<section>
  <aside class="home-banner">
    <div id="sync1" class="owl-carousel owl-theme" style="opacity: 1; display: block">
      <div class="item" >
        <a href="#"><img src="public/images/home_carousel/800-300-800x300-7.png" width="800" height="300"></a>
      </div>
      <div class="item" >
        <a href="#"><img src="public/images/home_carousel/800-300-800x300-44.png" width="800" height="300"></a>
      </div>
      <div class="item" >
        <a href="#"><img src="public/images/home_carousel/reno4-chung-800-300-800x300.png" width="800" height="300"></a>
      </div>
      <div class="item" >
        <a href="#"><img src="public/images/home_carousel/800-300-800x300-11.png" width="800" height="300"></a>
      </div>
      <div class="item" >
        <a href="#"><img src="public/images/home_carousel/800-300-800x300-1.png" width="800" height="300"></a>
      </div>
      <div class="item">
        <a href="#"><img src="public/images/home_carousel/800-300-800x300-6.png" width="800" height="300"></a>
      </div>
      <div class="item">
        <a href="#"><img src="public/images/home_carousel/800-300-800x300-5.png" width="800" height="300"></a>
      </div>
      <div class="item">
        <a href="#"><img src="public/images/home_carousel/800-300-800x300-9 (1).png" width="800" height="300"></a>
      </div>
    </div>
    <div id="sync2" class="owl-carousel owl-theme" style="opacity: 1; display: block">
      <div class="item">
        <h3>Flashsale 9.9<br>Giảm Lớn Đến 49%</h3>
      </div>
      <div class="item">
        <h3>Galaxy Note20 Series<br>Ưu Đãi Đến 4 Triệu</h3>
      </div>
      <div class="item">
        <h3>Thu Cũ Đổi Mới<br>Reno4 | 4 Pro</h3>
      </div>
      <div class="item">
        <h3>Sắm iPhone Online<br>Giảm Sốc Đến 6 Triệu</h3>
      </div>
      <div class="item">
        <h3>Đồng Hồ Chính Hãng<br>Giảm Đến 50%</h3>
      </div>
      <div class="item">
        <h3>Redmi Note 9 series<br>Giảm Đến 200 Ngàn</h3>
      </div>
      <div class="item">
        <h3>Galaxy Watch3<br>Giảm Ngay 25%</h3>
      </div>
      <div class="item">
       <h3>Phụ Kiện Sale Siêu Sốc<br>Giảm Đến 49%</h3>
      </div>
    </div>
  </aside>
  <!-- carousel -->
  <aside class="home-news">
    <figure>
      <h2><a href="#" title="">Tin công nghệ</a></h2>
    </figure>
    <div class="news-post">
      <a href="">
        <img src="public/images/new_post/m31s_800x450-100x100.jpg" alt="Galaxy M31s với pin 6.000 mAh, 4 camera 64MP mặt sau ấn định ngày ra mắt chính thức" width="100" height="70">
        <h3>Galaxy M31s với pin 6.000 mAh, 4 camera 64MP mặt sau ấn định ngày ra mắt chính thức</h3>
        <span>9 giờ trước</span>
      </a>
    </div>
    <div class="tow-banner">
      <a href="#"><img src="public/images/banner/A21s-398-110-398x110.png" alt="" width="398" height="110"></a>
      <a href="#"><img src="public/images/banner/398-110-398x110.png" alt="" width="398" height="110"></a>
    </div>
  </aside>
  <!-- postsbanner -->
</section>
<div class="promot-banner">
  <a href=""><img src="public/images/banner/1200-75-1200x75-2.png" alt="" width="1200" height="75"></a>
</div>
<div class="">
  <div id="owl-promo" class="owl-carousel home-promo weekend owl-theme">
    <?php 
      if (isset($data["Mobile"]) && !empty($data["Mobile"])) {
        $mobiles = json_decode($data["Mobile"]); 
        foreach ($mobiles as $mobile) { ?>
          <div class="item">
            <a href="dtdd/detail/<?= $mobile->id ?>" class="large">
              <img src="public/images/avatar/<?= $mobile->image?>" alt="" width="180" height="180" >
              <h3><?= $mobile->name?></h3>
              <!-- <h6 class="text-promo">Hàng sắp về</h6> -->
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
              <!-- <label class="installment">Trả góp 0%</label> -->
              <?php 
                //if (!empty($mobile->discount)) { ?>
                  <!-- <label class="discount">GIẢM 45.000₫</label> -->
              <?php //}?>
              <label class="discount">GIẢM 45.000₫</label>
              <?php 
                if (!empty($mobile->icon)) { ?>
                  <img class="icon-imgNew cate1" src="public/images/icon/<?= $mobile->icon?>" alt="" >
              <?php }?>
            </a>
          </div>
        <?php } 
      } ?>
  </div>
</div>
<!-- Điện thoại nỗi bật nhất -->
  <div class="navigat">
    <h2>Điện thoại nỗi bật nhất</h2>
    <div class="view-all">
      <a href="" title="">Điện thoại độc quyền</a>
      <a href="dtdd/2" title="">Điện thoại Samsung</a>
      <a href="dtdd/iphone-11-Pro-Max" title="">iPhone 11 Pro Max</a>
      <a href="dtdd/oppo-reno3" title="">OPPO Reno3</a>
      <a href="dtdd/redmi 9" title="">Redmi 9</a>
      <a href="dtdd" title="">Xem tất cả <b>30</b> điện thoại</a>
    </div>
  </div>
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
              <a href="dtdd/detail/<?= $mobile_hot[$index]->id ?>" class="large">
                <img data-src="public/images/avatar_hot/<?= $mobile_hot[$index]->image_hot?>" alt="" width="600" height="275" class="lazyload" loading="lazy" >
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
                  <img class="icon-imgNew cate1 lazyload" data-src="public/images/icon/<?= $mobile_hot[$index]->icon?>" alt="" loading="lazy" >
                <?php }?>
              </a>
            </div>
          <?php $index = 1; $count++ ;}else{ ?>
            <div>
              <a href="dtdd/detail/<?= $mobile->id ?>" class="large">
                <img data-src="public/images/avatar<?= $mobile->image?>" alt="" width="180" height="180" class="lazyload" loading="lazy" >
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
                <!-- <label class="installment">Trả góp 0%</label> -->
                <label class="discount">GIẢM 45.000₫</label>
                <?php 
                if (!empty($mobile->icon)) { ?>
                  <img class="icon-imgNew cate1 lazyload" data-src="public/images/icon/<?= $mobile->icon?>" alt=""  loading="lazy">
                <?php }?>
              </a>
            </div>
          <?php 
            $count++ ; 
            if ($count == 8) {
              break;
            }
          }
        }
      }
     ?>
  </div>
   <!-- Laptop nỗi bật nhất -->
  <div class="navigat">
    <h2>Laptop nỗi bật nhất</h2>
    <div class="view-all">
      <a href="laptop/laptop_asus" title="">Laptop Asus</a>
      <a href="" title="">Laptop HP</a>
      <a href="" title="">Laptop Lenovo</a>
      <a href="" title="">Macbook Pro</a>
      <a href="" title="">Laptop Acer</a>
      <a href="laptop" title="">Xem tất cả <b>30</b> laptop</a>
    </div>
  </div>
  <div class="home-product">
    <?php 
      // lấy 1 sản phẩm laptop nổi bật nhất
      if(isset($data["Laptop"]) && !empty($data["Laptop"])){
        $laptops = json_decode($data["Laptop"]);
        $laptop_hot = array();
        foreach ($laptops as $key => $laptop) {
          if(!empty($laptop->image_hot)){
            $laptop_hot[] = $laptop;
            unset($laptops[$key]);
            break ;
          }
        }
        $index = 0;
        $count = 0;
        foreach ($laptops as $laptop) {
          if ($count == 0) { ?>
            <div class="feature">
              <a href="dtdd/<?= strtolower(str_replace(" ","-",$laptop_hot[$index]->name)) ?>" class="large">
                <img class="lazyload" loading="lazy" data-src="public/images/avatar_hot/<?= $laptop_hot[$index]->image_hot?>" alt="" width="600" height="275">
                <h3><?= $laptop_hot[$index]->name ?></h3>
                <!-- <h6 class="text-promo">Hàng sắp về</h6> -->
                <div class="product-price">
                  <?php 
                  if ($laptop_hot[$index]->discount != 0) { ?>
                    <strong><?= number_format(round($laptop_hot[$index]->price - $laptop_hot[$index]->price * $laptop_hot[$index]->discount / 100, -4),0,",", ".")  ?></strong>
                    <span><?= number_format($laptop_hot[$index]->price,0,",",".") ?></span>
                    <i>-<?= $laptop_hot[$index]->discount ?>%</i>
                  <?php }else { ?>
                    <strong><?= number_format($laptop_hot[$index]->price,0,",", ".")  ?></strong>
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
                if (!empty($laptop_hot[$index]->icon)) { ?>
                  <img class="icon-imgNew cate1 lazyload" data-src="public/images/icon/<?= $laptop_hot[$index]->icon?>" alt=""  loading="lazy">
                <?php }?>
              </a>
            </div>
          <?php $index = 1; $count++ ;}else{ ?>
            <div>
              <a href="dtdd/<?= strtolower(str_replace(" ","-",$laptop->name)) ?>" class="laptop large">
                <img class="lazyload" loading="lazy" data-src="public/images/avatar/<?= $laptop->image?>" alt="" width="180" height="180" >
                <h3><?= $laptop->name?></h3>
                <div class="product-price">
                  <?php 
                  if ($laptop->discount != 0) { ?>
                    <strong><?= number_format(round($laptop->price - $laptop->price * $laptop->discount / 100, -4),0,",", ".")  ?></strong>
                    <span><?= number_format($laptop->price,0,",",".") ?></span>
                    <i>-<?= $laptop->discount ?>%</i>
                  <?php }else { ?>
                    <strong><?= number_format($laptop->price,0,",", ".")  ?></strong>
                  <?php }?>                    
                </div>
                <div class="product-promo noimage">
                  <?php if(!empty($laptop->gift)){ ?>
                    <p>Giảm thêm <b><?= number_format($laptop->gift, 0,",",".")?>₫</b></p>
                  <?php } ?>
                  <!-- <p>Ưu đãi đặc quyền Galaxy Z Elite và gói dịch vụ cao cấp</p> -->
                </div>
                <!-- <label class="preorder">Đặt trước đến 24/09</label> -->
                <label class="installment">Trả góp 0%</label>
                <!-- <label class="discount">GIẢM 45.000₫</label> -->
                <?php 
                if (!empty($laptop->icon)) { ?>
                  <img class="icon-imgNew cate44 lazyload" loading="lazy" data-src="public/images/icon/<?= $laptop->icon?>" alt="" >
                <?php }?>
              </a>
            </div>
          <?php 
            $count++ ; 
            if ($count == 4) {
              break;
            }
          }
        }
      }

     ?>
  </div>
  <!-- Tablet nỗi bật nhất -->
  <div class="navigat">
    <h2>Tablet nỗi bật nhất</h2>
    <div class="view-all">
      <a href="" title="">Máy tính bảng iPad</a>
      <a href="" title="">Máy tính bảng Samsung</a>
      <a href="" title="">iPad 10.2 inch</a>
      <a href="" title="">Samsung Galaxy Tab S6 Lite</a>
      <a href="" title="">Lenovo Tab E10</a>
      <a href="tablet" title="">Xem tất cả <b>27</b> tablet</a>
    </div>
  </div>
  <div class="home-product">
    <?php 
      // lấy 1 sản phẩm laptop nổi bật nhất
      if(isset($data["Tablet"]) && !empty($data["Tablet"])){
        $tablets = json_decode($data["Tablet"]);
        $tablet_hot = array();
        foreach ($tablets as $key => $tablet) {
          if(!empty($tablet->image_hot)){
            $tablet_hot[] = $tablet;
            unset($tablets[$key]);
            break ;
          }
        } ?>
        <div class="feature">
          <a href="dtdd/<?= strtolower(str_replace(" ","-",$tablet_hot["0"]->name)) ?>" class="large">
            <img class="lazyload" loading="lazy" data-src="public/images/avatar_hot/<?= $tablet_hot["0"]->image_hot?>" alt="" width="600" height="275" >
            <h3><?= $tablet_hot["0"]->name ?></h3>
            <!-- <h6 class="text-promo">Hàng sắp về</h6> -->
            <div class="product-price">
              <?php 
              if ($tablet_hot["0"]->discount != 0) { ?>
                <strong><?= number_format(round($tablet_hot["0"]->price - $tablet_hot["0"]->price * $tablet_hot["0"]->discount / 100, -4),0,",", ".")  ?></strong>
                <span><?= number_format($tablet_hot["0"]->price,0,",",".") ?></span>
                <i>-<?= $tablet_hot["0"]->discount ?>%</i>
              <?php }else { ?>
                <strong><?= number_format($tablet_hot["0"]->price,0,",", ".")  ?></strong>
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
            if (!empty($tablet_hot["0"]->icon)) { ?>
              <img class="icon-imgNew cate1 lazyload" loading="lazy" data-src="public/images/icon/<?= $tablet_hot["0"]->icon?>" alt="" >
            <?php }?>
          </a>
        </div>
      <?php
        $count = 0 ;
        foreach ($tablets as $tablet) { ?>
          <div>
            <a href="dtdd/<?= strtolower(str_replace(" ","-",$tablet->name)) ?>" class="large">
              <img class="lazyload" loading="lazy" data-src="public/images/avatar/<?= $tablet->image?>" alt="" width="180" height="180" >
              <h3><?= $tablet->name?></h3>
              <div class="product-price">
                <?php 
                if ($tablet->discount != 0) { ?>
                  <strong><?= number_format(round($tablet->price - $tablet->price * $tablet->discount / 100, -4),0,",", ".")  ?></strong>
                  <span><?= number_format($tablet->price,0,",",".") ?></span>
                  <i>-<?= $tablet->discount ?>%</i>
                <?php }else { ?>
                  <strong><?= number_format($tablet->price,0,",", ".")  ?></strong>
                <?php }?>                    
              </div>
              <div class="product-promo noimage">
                <?php if(!empty($tablet->gift)){ ?>
                  <p>Giảm thêm <b><?= number_format($tablet->gift, 0,",",".")?>₫</b></p>
                <?php } ?>
                <!-- <p>Ưu đãi đặc quyền Galaxy Z Elite và gói dịch vụ cao cấp</p> -->
              </div>
              <!-- <label class="preorder">Đặt trước đến 24/09</label> -->
              <label class="installment">Trả góp 0%</label>
              <!-- <label class="discount">GIẢM 45.000₫</label> -->
              <?php 
              if (!empty($tablet->icon)) { ?>
                <img class="icon-imgNew cate44 lazyload" loading="lazy" data-src="public/images/icon/<?= $tablet->icon?>" alt="" >
              <?php }?>
            </a>
          </div>
        <?php 
          $count++ ; 
          if ($count == 3) {
            break;
          }
        }
      } ?>
  </div>
  <!-- Phụ kiện giá rẻ -->
  <div class="navigat">
    <h2>Phụ kiện giá rẻ</h2>
    <div class="view-all">
      <a href="" title="">Pin sạc dự phòng</a>
      <a href="" title="">Cáp sạc</a>
      <a href="" title="">Tai nghe</a>
      <a href="" title="">Loa</a>
      <a href="" title="">Thẻ nhớ</a>
      <a href="" title="">Phụ kiện chính hãng</a>
      <a href="" title="">Ốp lưng điện thoại</a>
      <a href="" title="">Xem tất cả <b>3.529</b> phụ kiện</a>
    </div>
  </div>
  <div class="">
    <div class="owl-carousel home-promo acc h-auto owl-theme" >
      <div class="item">
        <a href="" class="">
          <img src="./images/sac-du-phong-polymer-10000mah-qc-3-evalu-pa-f1-air-anh-dai-dien-400x400.jpg" alt="" width="180" height="180" >
          <h3>Pin sạc dự phòng Polymer 10.000 mAh QC 3.0 eValu PA F1 Air Nhôm Bạc</h3>
          <!-- <h6 class="text-promo">Hàng sắp về</h6> -->
          <div class="product-price">
            <strong>455.000₫</strong>
            <span>650.000₫</span>
            <i>-7%</i>                      
          </div>
          <div class="product-promo noimage">
            <!-- <p>Giảm thêm <b>500.000₫</b></p> -->
            <!-- <p>Ưu đãi đặc quyền Galaxy Z Elite và gói dịch vụ cao cấp</p> -->
          </div>
          <!-- <label class="preorder">Đặt trước đến 24/09</label> -->
          <!-- <label class="installment">Trả góp 0%</label> -->
          <label class="discount">GIẢM 49.000₫</label>
          <!-- <img class="icon-imgNew cate1" src="./images/Label_01-05.png" alt=""> -->
        </a>
      </div>
      <div class="item">
        <a href="" class="">
          <img src="./images/cap-micro-1m-evalu-ltm-01-do-den-1-400x400.jpg" alt="" width="180" height="180">
          <h3>Cáp Micro 1m eValu LTM -01</h3>
          <!-- <h6 class="text-promo">Hàng sắp về</h6> -->
          <div class="product-price">
            <strong>51.000₫</strong>
            <span>100.000₫</span>
            <!-- <i>-7%</i>                       -->
          </div>
          <div class="product-promo noimage">
            <!-- <p>Giảm thêm <b>500.000₫</b></p> -->
            <!-- <p>Ưu đãi đặc quyền Galaxy Z Elite và gói dịch vụ cao cấp</p> -->
          </div>
          <!-- <label class="preorder">Đặt trước đến 24/09</label> -->
          <!-- <label class="installment">Trả góp 0%</label> -->
          <label class="discount">GIẢM 49.000₫</label>
          <!-- <img class="icon-imgNew cate1" src="./images/Label_01-05.png" alt=""> -->
        </a>
      </div>
      <div class="item">
        <a href="" class="">
          <img src="./images/the-nho-microsd-8gb-class-4-fix-400x400.jpg" alt="" width="180" height="180">
          <h3>Thẻ nhớ MicroSD 8 GB Class 4</h3>
          <!-- <h6 class="text-promo">Hàng sắp về</h6> -->
          <div class="product-price">
            <strong>150.000₫</strong>
            <!-- <span>650.000₫</span>
            <i>-7%</i> -->                      
          </div>
          <div class="product-promo noimage">
            <!-- <p>Giảm thêm <b>500.000₫</b></p> -->
            <!-- <p>Ưu đãi đặc quyền Galaxy Z Elite và gói dịch vụ cao cấp</p> -->
          </div>
          <!-- <label class="preorder">Đặt trước đến 24/09</label> -->
          <!-- <label class="installment">Trả góp 0%</label> -->
          <!-- <label class="discount">GIẢM 49.000₫</label> -->
          <!-- <img class="icon-imgNew cate1" src="./images/Label_01-05.png" alt=""> -->
        </a>
      </div>
      <div class="item">
        <a href="" class="">
          <img src="./images/sac-du-phong-polymer-10000mah-qc-3-evalu-pa-f1-air-anh-dai-dien-400x400.jpg" alt="" width="180" height="180">
          <h3>Pin sạc dự phòng Polymer 10.000 mAh QC 3.0 eValu PA F1 Air Nhôm Bạc</h3>
          <!-- <h6 class="text-promo">Hàng sắp về</h6> -->
          <div class="product-price">
            <strong>455.000₫</strong>
            <span>650.000₫</span>
            <i>-7%</i>                      
          </div>
          <div class="product-promo noimage">
            <!-- <p>Giảm thêm <b>500.000₫</b></p> -->
            <!-- <p>Ưu đãi đặc quyền Galaxy Z Elite và gói dịch vụ cao cấp</p> -->
          </div>
          <!-- <label class="preorder">Đặt trước đến 24/09</label> -->
          <!-- <label class="installment">Trả góp 0%</label> -->
          <label class="discount">GIẢM 49.000₫</label>
          <!-- <img class="icon-imgNew cate1" src="./images/Label_01-05.png" alt=""> -->
        </a>
      </div>
      <div class="item">
        <a href="" class="">
          <img src="./images/cap-micro-1m-evalu-ltm-01-do-den-1-400x400.jpg" alt="" width="180" height="180">
          <h3>Cáp Micro 1m eValu LTM -01</h3>
          <!-- <h6 class="text-promo">Hàng sắp về</h6> -->
          <div class="product-price">
            <strong>51.000₫</strong>
            <span>100.000₫</span>
            <!-- <i>-7%</i>                       -->
          </div>
          <div class="product-promo noimage">
            <!-- <p>Giảm thêm <b>500.000₫</b></p> -->
            <!-- <p>Ưu đãi đặc quyền Galaxy Z Elite và gói dịch vụ cao cấp</p> -->
          </div>
          <!-- <label class="preorder">Đặt trước đến 24/09</label> -->
          <!-- <label class="installment">Trả góp 0%</label> -->
          <label class="discount">GIẢM 49.000₫</label>
          <!-- <img class="icon-imgNew cate1" src="./images/Label_01-05.png" alt=""> -->
        </a>
      </div>
      <div class="item">
        <a href="" class="">
          <img src="./images/the-nho-microsd-8gb-class-4-fix-400x400.jpg" alt="" width="180" height="180">
          <h3>Thẻ nhớ MicroSD 8 GB Class 4</h3>
          <!-- <h6 class="text-promo">Hàng sắp về</h6> -->
          <div class="product-price">
            <strong>150.000₫</strong>
            <!-- <span>650.000₫</span>
            <i>-7%</i> -->                      
          </div>
          <div class="product-promo noimage">
            <!-- <p>Giảm thêm <b>500.000₫</b></p> -->
            <!-- <p>Ưu đãi đặc quyền Galaxy Z Elite và gói dịch vụ cao cấp</p> -->
          </div>
          <!-- <label class="preorder">Đặt trước đến 24/09</label> -->
          <!-- <label class="installment">Trả góp 0%</label> -->
          <!-- <label class="discount">GIẢM 49.000₫</label> -->
          <!-- <img class="icon-imgNew cate1" src="./images/Label_01-05.png" alt=""> -->
        </a>
      </div>
      <div class="item">
        <a href="" class="">
          <img src="./images/cap-micro-1m-evalu-ltm-01-do-den-1-400x400.jpg" alt="" width="180" height="180">
          <h3>Cáp Micro 1m eValu LTM -01</h3>
          <!-- <h6 class="text-promo">Hàng sắp về</h6> -->
          <div class="product-price">
            <strong>51.000₫</strong>
            <span>100.000₫</span>
            <!-- <i>-7%</i>                       -->
          </div>
          <div class="product-promo noimage">
            <!-- <p>Giảm thêm <b>500.000₫</b></p> -->
            <!-- <p>Ưu đãi đặc quyền Galaxy Z Elite và gói dịch vụ cao cấp</p> -->
          </div>
          <!-- <label class="preorder">Đặt trước đến 24/09</label> -->
          <!-- <label class="installment">Trả góp 0%</label> -->
          <label class="discount">GIẢM 49.000₫</label>
          <!-- <img class="icon-imgNew cate1" src="./images/Label_01-05.png" alt=""> -->
        </a>
      </div>
      <div class="item">
        <a href="" class="">
          <img src="./images/the-nho-microsd-8gb-class-4-fix-400x400.jpg" alt="" width="180" height="180">
          <h3>Thẻ nhớ MicroSD 8 GB Class 4</h3>
          <!-- <h6 class="text-promo">Hàng sắp về</h6> -->
          <div class="product-price">
            <strong>150.000₫</strong>
            <!-- <span>650.000₫</span>
            <i>-7%</i> -->                      
          </div>
          <div class="product-promo noimage">
            <!-- <p>Giảm thêm <b>500.000₫</b></p> -->
            <!-- <p>Ưu đãi đặc quyền Galaxy Z Elite và gói dịch vụ cao cấp</p> -->
          </div>
          <!-- <label class="preorder">Đặt trước đến 24/09</label> -->
          <!-- <label class="installment">Trả góp 0%</label> -->
          <!-- <label class="discount">GIẢM 49.000₫</label> -->
          <!-- <img class="icon-imgNew cate1" src="./images/Label_01-05.png" alt=""> -->
        </a>
      </div>
    </div>
  </div>
  <!-- Phụ kiện chính hãng -->
  <div class="navigat">
    <h2>Phụ kiện chính hãng</h2>
    <div class="view-all">
      <a href="" title="">Xem tất cả <b>409</b> phụ kiện chính hãng</a>
    </div>
  </div>
  <div class="">
    <div class="owl-carousel home-promo acc h-auto owl-theme" >
      <div class="item">
        <a href="" class="">
          <img src="./images/tai-nghe-bluetooth-airpods-pro-apple-mwp22-ava-400x400.jpg" alt="" width="180" height="180" >
          <h3>Tai nghe AirPods Pro sạc không dây Apple MWP22</h3>
          <!-- <h6 class="text-promo">Hàng sắp về</h6> -->
          <div class="product-price">
            <strong>6.990.000₫</strong>
            <!-- <span>650.000₫</span>
            <i>-7%</i> -->                      
          </div>
          <div class="product-promo noimage">
            <p>Quà <b>100.000₫</b></p>
            <!-- <p>Ưu đãi đặc quyền Galaxy Z Elite và gói dịch vụ cao cấp</p> -->
          </div>
          <!-- <label class="preorder">Đặt trước đến 24/09</label> -->
          <label class="installment">Trả góp 0%</label>
          <!-- <label class="discount">GIẢM 49.000₫</label> -->
          <!-- <img class="icon-imgNew cate1" src="./images/Label_01-05.png" alt=""> -->
        </a>
      </div>
      <div class="item">
        <a href="" class="">
          <img src="./images/tai-nghe-bluetooth-airpods-2-wireless-charge-mrxj2-avatar-1-400x400.jpg" alt="" width="180" height="180">
          <h3>Tai nghe AirPods 2 sạc không dây Apple MRXJ2</h3>
          <!-- <h6 class="text-promo">Hàng sắp về</h6> -->
          <div class="product-price">
            <strong>4.990.000₫</strong>
            <span>5.900.000₫</span>
            <!-- <i>-7%</i>                       -->
          </div>
          <div class="product-promo noimage">
            <!-- <p>Quà <b>100.000₫</b></p> -->
            <!-- <p>Ưu đãi đặc quyền Galaxy Z Elite và gói dịch vụ cao cấp</p> -->
          </div>
          <!-- <label class="preorder">Đặt trước đến 24/09</label> -->
          <!-- <label class="installment">Trả góp 0%</label> -->
          <label class="discount">GIẢM 1.000.000₫</label>
          <!-- <img class="icon-imgNew cate1" src="./images/Label_01-05.png" alt=""> -->
        </a>
      </div>
      <div class="item">
        <a href="" class="">
          <img src="./images/tai-nghe-bluetooth-true-wireless-jbl-live-300tws-600x600-1-400x400.jpg" alt="" width="180" height="180">
          <h3>Tai nghe Bluetooth True Wireless JBL LIVE 300TWS</h3>
          <!-- <h6 class="text-promo">Hàng sắp về</h6> -->
          <div class="product-price">
            <strong>3.990.000₫</strong>
            <!-- <span>5.900.000₫</span> -->
            <!-- <i>-7%</i>                       -->
          </div>
          <div class="product-promo noimage">
            <!-- <p>Quà <b>100.000₫</b></p> -->
            <!-- <p>Ưu đãi đặc quyền Galaxy Z Elite và gói dịch vụ cao cấp</p> -->
          </div>
          <!-- <label class="preorder">Đặt trước đến 24/09</label> -->
          <label class="installment">Trả góp 0%</label>
          <!-- <label class="discount">GIẢM 1.000.000₫</label> -->
          <!-- <img class="icon-imgNew cate1" src="./images/Label_01-05.png" alt=""> -->
        </a>
      </div>
      <div class="item">
        <a href="" class="">
          <img src="./images/tai-nghe-bluetooth-airpods-pro-apple-mwp22-ava-400x400.jpg" alt="" width="180" height="180">
          <h3>Tai nghe AirPods Pro sạc không dây Apple MWP22</h3>
          <!-- <h6 class="text-promo">Hàng sắp về</h6> -->
          <div class="product-price">
            <strong>6.990.000₫</strong>
            <!-- <span>650.000₫</span>
            <i>-7%</i> -->                      
          </div>
          <div class="product-promo noimage">
            <p>Quà <b>100.000₫</b></p>
            <!-- <p>Ưu đãi đặc quyền Galaxy Z Elite và gói dịch vụ cao cấp</p> -->
          </div>
          <!-- <label class="preorder">Đặt trước đến 24/09</label> -->
          <label class="installment">Trả góp 0%</label>
          <!-- <label class="discount">GIẢM 49.000₫</label> -->
          <!-- <img class="icon-imgNew cate1" src="./images/Label_01-05.png" alt=""> -->
        </a>
      </div>
      <div class="item">
        <a href="" class="">
          <img src="./images/tai-nghe-bluetooth-airpods-2-wireless-charge-mrxj2-avatar-1-400x400.jpg" alt="" width="180" height="180">
          <h3>Tai nghe AirPods 2 sạc không dây Apple MRXJ2</h3>
          <!-- <h6 class="text-promo">Hàng sắp về</h6> -->
          <div class="product-price">
            <strong>4.990.000₫</strong>
            <span>5.900.000₫</span>
            <!-- <i>-7%</i>                       -->
          </div>
          <div class="product-promo noimage">
            <!-- <p>Quà <b>100.000₫</b></p> -->
            <!-- <p>Ưu đãi đặc quyền Galaxy Z Elite và gói dịch vụ cao cấp</p> -->
          </div>
          <!-- <label class="preorder">Đặt trước đến 24/09</label> -->
          <!-- <label class="installment">Trả góp 0%</label> -->
          <label class="discount">GIẢM 1.000.000₫</label>
          <!-- <img class="icon-imgNew cate1" src="./images/Label_01-05.png" alt=""> -->
        </a>
      </div>
      <div class="item">
        <a href="" class="">
          <img src="./images/tai-nghe-bluetooth-true-wireless-jbl-live-300tws-600x600-1-400x400.jpg" alt="" width="180" height="180">
          <h3>Tai nghe Bluetooth True Wireless JBL LIVE 300TWS</h3>
          <!-- <h6 class="text-promo">Hàng sắp về</h6> -->
          <div class="product-price">
            <strong>3.990.000₫</strong>
            <!-- <span>5.900.000₫</span> -->
            <!-- <i>-7%</i>                       -->
          </div>
          <div class="product-promo noimage">
            <!-- <p>Quà <b>100.000₫</b></p> -->
            <!-- <p>Ưu đãi đặc quyền Galaxy Z Elite và gói dịch vụ cao cấp</p> -->
          </div>
          <!-- <label class="preorder">Đặt trước đến 24/09</label> -->
          <label class="installment">Trả góp 0%</label>
          <!-- <label class="discount">GIẢM 1.000.000₫</label> -->
          <!-- <img class="icon-imgNew cate1" src="./images/Label_01-05.png" alt=""> -->
        </a>
      </div>
      <div class="item">
        <a href="" class="">
          <img src="./images/tai-nghe-bluetooth-airpods-pro-apple-mwp22-ava-400x400.jpg" alt="" width="180" height="180">
          <h3>Tai nghe AirPods Pro sạc không dây Apple MWP22</h3>
          <!-- <h6 class="text-promo">Hàng sắp về</h6> -->
          <div class="product-price">
            <strong>6.990.000₫</strong>
            <!-- <span>650.000₫</span>
            <i>-7%</i> -->                      
          </div>
          <div class="product-promo noimage">
            <p>Quà <b>100.000₫</b></p>
            <!-- <p>Ưu đãi đặc quyền Galaxy Z Elite và gói dịch vụ cao cấp</p> -->
          </div>
          <!-- <label class="preorder">Đặt trước đến 24/09</label> -->
          <label class="installment">Trả góp 0%</label>
          <!-- <label class="discount">GIẢM 49.000₫</label> -->
          <!-- <img class="icon-imgNew cate1" src="./images/Label_01-05.png" alt=""> -->
        </a>
      </div>
      <div class="item">
        <a href="" class="">
          <img src="./images/tai-nghe-bluetooth-airpods-2-wireless-charge-mrxj2-avatar-1-400x400.jpg" alt="" width="180" height="180">
          <h3>Tai nghe AirPods 2 sạc không dây Apple MRXJ2</h3>
          <!-- <h6 class="text-promo">Hàng sắp về</h6> -->
          <div class="product-price">
            <strong>4.990.000₫</strong>
            <span>5.900.000₫</span>
            <!-- <i>-7%</i>                       -->
          </div>
          <div class="product-promo noimage">
            <!-- <p>Quà <b>100.000₫</b></p> -->
            <!-- <p>Ưu đãi đặc quyền Galaxy Z Elite và gói dịch vụ cao cấp</p> -->
          </div>
          <!-- <label class="preorder">Đặt trước đến 24/09</label> -->
          <!-- <label class="installment">Trả góp 0%</label> -->
          <label class="discount">GIẢM 1.000.000₫</label>
          <!-- <img class="icon-imgNew cate1" src="./images/Label_01-05.png" alt=""> -->
        </a>
      </div>
      <div class="item">
        <a href="" class="">
          <img src="./images/tai-nghe-bluetooth-true-wireless-jbl-live-300tws-600x600-1-400x400.jpg" alt="" width="180" height="180">
          <h3>Tai nghe Bluetooth True Wireless JBL LIVE 300TWS</h3>
          <!-- <h6 class="text-promo">Hàng sắp về</h6> -->
          <div class="product-price">
            <strong>3.990.000₫</strong>
            <!-- <span>5.900.000₫</span> -->
            <!-- <i>-7%</i>                       -->
          </div>
          <div class="product-promo noimage">
            <!-- <p>Quà <b>100.000₫</b></p> -->
            <!-- <p>Ưu đãi đặc quyền Galaxy Z Elite và gói dịch vụ cao cấp</p> -->
          </div>
          <!-- <label class="preorder">Đặt trước đến 24/09</label> -->
          <label class="installment">Trả góp 0%</label>
          <!-- <label class="discount">GIẢM 1.000.000₫</label> -->
          <!-- <img class="icon-imgNew cate1" src="./images/Label_01-05.png" alt=""> -->
        </a>
      </div>
      <div class="item">
        <a href="" class="">
          <img src="./images/tai-nghe-bluetooth-airpods-pro-apple-mwp22-ava-400x400.jpg" alt="" width="180" height="180">
          <h3>Tai nghe AirPods Pro sạc không dây Apple MWP22</h3>
          <!-- <h6 class="text-promo">Hàng sắp về</h6> -->
          <div class="product-price">
            <strong>6.990.000₫</strong>
            <!-- <span>650.000₫</span>
            <i>-7%</i> -->                      
          </div>
          <div class="product-promo noimage">
            <p>Quà <b>100.000₫</b></p>
            <!-- <p>Ưu đãi đặc quyền Galaxy Z Elite và gói dịch vụ cao cấp</p> -->
          </div>
          <!-- <label class="preorder">Đặt trước đến 24/09</label> -->
          <label class="installment">Trả góp 0%</label>
          <!-- <label class="discount">GIẢM 49.000₫</label> -->
          <!-- <img class="icon-imgNew cate1" src="./images/Label_01-05.png" alt=""> -->
        </a>
      </div>
      <div class="item">
        <a href="" class="">
          <img src="./images/tai-nghe-bluetooth-airpods-2-wireless-charge-mrxj2-avatar-1-400x400.jpg" alt="" width="180" height="180">
          <h3>Tai nghe AirPods 2 sạc không dây Apple MRXJ2</h3>
          <!-- <h6 class="text-promo">Hàng sắp về</h6> -->
          <div class="product-price">
            <strong>4.990.000₫</strong>
            <span>5.900.000₫</span>
            <!-- <i>-7%</i>                       -->
          </div>
          <div class="product-promo noimage">
            <!-- <p>Quà <b>100.000₫</b></p> -->
            <!-- <p>Ưu đãi đặc quyền Galaxy Z Elite và gói dịch vụ cao cấp</p> -->
          </div>
          <!-- <label class="preorder">Đặt trước đến 24/09</label> -->
          <!-- <label class="installment">Trả góp 0%</label> -->
          <label class="discount">GIẢM 1.000.000₫</label>
          <!-- <img class="icon-imgNew cate1" src="./images/Label_01-05.png" alt=""> -->
        </a>
      </div>
      <div class="item">
        <a href="" class="">
          <img src="./images/tai-nghe-bluetooth-true-wireless-jbl-live-300tws-600x600-1-400x400.jpg" alt="" width="180" height="180">
          <h3>Tai nghe Bluetooth True Wireless JBL LIVE 300TWS</h3>
          <!-- <h6 class="text-promo">Hàng sắp về</h6> -->
          <div class="product-price">
            <strong>3.990.000₫</strong>
            <!-- <span>5.900.000₫</span> -->
            <!-- <i>-7%</i>                       -->
          </div>
          <div class="product-promo noimage">
            <!-- <p>Quà <b>100.000₫</b></p> -->
            <!-- <p>Ưu đãi đặc quyền Galaxy Z Elite và gói dịch vụ cao cấp</p> -->
          </div>
          <!-- <label class="preorder">Đặt trước đến 24/09</label> -->
          <label class="installment">Trả góp 0%</label>
          <!-- <label class="discount">GIẢM 1.000.000₫</label> -->
          <!-- <img class="icon-imgNew cate1" src="./images/Label_01-05.png" alt=""> -->
        </a>
      </div>
    </div>
  </div>

  <!-- Đồng hồ thông minh -->
  <div class="navigat">
    <h2>Đồng hồ thông minh</h2>
    <div class="view-all">
      <a href="" title="">Apple</a>
      <a href="" title="">Samsung</a>
      <a href="" title="">Huawei</a>
      <a href="" title="">Xiaomi</a>
      <a href="" title="">Oppo</a>
      <a href="" title="">Xem tất cả <b>75</b> đồng hồ thông minh</a>
    </div>
  </div>
  <div class="">
    <div class="owl-carousel home-promo h-auto swatch owl-theme" >
      <?php 
        $swatchs = json_decode($data["Swatch"], TRUE);
        $index = 0;
        foreach ($swatchs as $item) {?>
          <div class="item">
            <a href="swatch/detail/<?= $item["id"]?>" class="">
              <img class="lazyload" loading="lazy" data-src="public/images/avatar<?= $item["image"]?>" alt="" width="180" height="180" >
              <h3><?= $item["name"]?></h3>
              <!-- <h6 class="text-promo">Hàng sắp về</h6> -->
              <div class="product-price">
                <?php 
                if ($item["discount"] != 0) { ?>
                  <strong><?= number_format(round($item["price"] - $item["price"] * $item["discount"] / 100, -4),0,",", ".")  ?></strong>
                  <span><?= number_format($item["price"],0,",",".") ?></span>
                  <i>-<?= $item["discount"] ?>%</i>
                <?php }else { ?>
                  <strong><?= number_format($item["price"],0,",", ".")  ?></strong>
                <?php }?>                      
              </div>
              <div class="product-promo noimage">
                <!-- <p>Quà <b>100.000₫</b></p> -->
                <!-- <p>Ưu đãi đặc quyền Galaxy Z Elite và gói dịch vụ cao cấp</p> -->
              </div>
              <!-- <label class="preorder">Đặt trước đến 24/09</label> -->
              <!-- <label class="installment">Trả góp 0%</label> -->
              <!-- <label class="discount">GIẢM 49.000₫</label> -->
              <?php 
              if (!empty($item["icon"])) { ?>
                <img class="icon-imgNew cate2 lazyload" loading="lazy" data-src="public/images/icon/<?= $item["icon"]?>" alt="" >
              <?php }?>
            </a>
          </div>
        <?php 
          $index++; 
          if ($index == 10) {break;}
          } ?>
    </div>
  </div>

  <!-- Đồng hồ thời trang -->
  <div class="navigat">
    <h2>Đồng hồ thời trang</h2>
    <div class="view-all">
      <a href="" title="">Casio</a>
      <a href="" title="">Citizen</a>
      <a href="" title="">Orient</a>
      <a href="" title="">MVW</a>
      <a href="" title="">Elio</a>
      <a href="" title="">Xem tất cả <b>3.487</b> đồng hồ thời trang</a>
    </div>
  </div>
  <div class="">
    <div class="owl-carousel home-promo h-auto fwatch owl-theme" >
      <?php 
        $fwatchs = json_decode($data["Fwatch"], TRUE);
        $index = 0;
        foreach ($fwatchs as $item) {?>
          <div class="item">
            <a href="fwatch/detail/<?= $item["id"]?>" class="">
              <img class="lazyload" loading="lazy" data-src="public/images/avatar<?= $item["image"]?>" alt="" width="180" height="180" >
              <h3><?= $item["name"]?></h3>
              <!-- <h6 class="text-promo">Hàng sắp về</h6> -->
              <div class="product-price">
                <?php 
                if ($item["discount"] != 0) { ?>
                  <strong><?= number_format(round($item["price"] - $item["price"] * $item["discount"] / 100, -4),0,",", ".")  ?></strong>
                  <span><?= number_format($item["price"],0,",",".") ?></span>
                  <i>-<?= $item["discount"] ?>%</i>
                <?php }else { ?>
                  <strong><?= number_format($item["price"],0,",", ".")  ?></strong>
                <?php }?>                      
              </div>
              <div class="product-promo noimage">
                <!-- <p>Quà <b>100.000₫</b></p> -->
                <!-- <p>Ưu đãi đặc quyền Galaxy Z Elite và gói dịch vụ cao cấp</p> -->
              </div>
              <!-- <label class="preorder">Đặt trước đến 24/09</label> -->
              <!-- <label class="installment">Trả góp 0%</label> -->
              <!-- <label class="discount">GIẢM 49.000₫</label> -->
              <?php 
              if (!empty($item["icon"])) { ?>
                <img class="icon-imgNew cate2 lazyload" loading="lazy" data-src="public/images/icon<?= $item["icon"]?>" alt="" >
              <?php }?>
            </a>
          </div>
        <?php
          $index++; 
          if ($index == 10) {break;}
        } ?>
    </div>
  </div>
  <!-- Máy cũ nỗi bật -->
  <div class="navigat">
    <h2>MÁY CŨ NỔI BẬT</h2>
    <div class="view-all">
      <a href="" title="">Điện thoại cũ</a>
      <a href="" title="">Tablet cũ</a>
      <a href="" title="">Laptop cũ</a>
      <a href="" title="">Đồng hồ cũ</a>
      <a href="" title="">Phụ kiện cũ</a>
    </div>
  </div>
  <div class="">
    <div class="owl-carousel home-promo owl-theme" id="owl-promo-old">
      <div class="item">
        <div class="div-extend ">
          <span class="quantity">1.152 máy</span>
        </div>
        <a href="" class="">
          <span class="labelshock-top">-15%</span>
          <img src="./images/sieu-pham-galaxy-s-black-400x400.jpg" alt="" >
          <h3>Samsung Galaxy S10</h3>
          <div class="oldprice">
            <span>Giá từ: </span>9.400.000₫
            <span class="price-line">11.060.000₫</span>
          </div>
          <div class="newprice">Máy mới đã ngừng kinh doanh</div>
          <div class="newprice">
            Rẻ hơn máy mới: <span>1.510.000₫ (42%)</span>
          </div>
        </a>
      </div>
      <div class="item">
        <div class="div-extend ">
          <span class="quantity">2.657 máy</span>
        </div>
        <a href="" class="">
          <span class="labelshock-top">-15%</span>
          <img src="./images/samsung-galaxy-a80-050320-050301-400x400.jpg" alt="">
          <h3>Samsung Galaxy S10</h3>
          <div class="oldprice">
            <span>Giá từ: </span>6.710.000₫
            <span class="price-line">7.900.000₫</span>
          </div>
          <div class="newprice">Máy mới đã ngừng kinh doanh</div>
          <!-- <div class="newprice">
            Rẻ hơn máy mới: <span>1.510.000₫ (42%)</span>
          </div> -->
        </a>
      </div>
      <div class="item">
        <div class="div-extend ">
          <span class="quantity">1.152 máy</span>
        </div>
        <a href="" class="">
          <span class="labelshock-top">-15%</span>
          <img src="./images/sieu-pham-galaxy-s-black-400x400.jpg" alt="">
          <h3>Samsung Galaxy S10</h3>
          <div class="oldprice">
            <span>Giá từ: </span>9.400.000₫
            <span class="price-line">11.060.000₫</span>
          </div>
          <div class="newprice">Máy mới đã ngừng kinh doanh</div>
          <div class="newprice">
            Rẻ hơn máy mới: <span>1.510.000₫ (42%)</span>
          </div>
        </a>
      </div>
      <div class="item">
        <div class="div-extend ">
          <span class="quantity">2.657 máy</span>
        </div>
        <a href="" class="">
          <span class="labelshock-top">-15%</span>
          <img src="./images/samsung-galaxy-a80-050320-050301-400x400.jpg" alt="">
          <h3>Samsung Galaxy S10</h3>
          <div class="oldprice">
            <span>Giá từ: </span>6.710.000₫
            <span class="price-line">7.900.000₫</span>
          </div>
          <div class="newprice">Máy mới đã ngừng kinh doanh</div>
          <!-- <div class="newprice">
            Rẻ hơn máy mới: <span>1.510.000₫ (42%)</span>
          </div> -->
        </a>
      </div>
      <div class="item">
        <div class="div-extend ">
          <span class="quantity">1.152 máy</span>
        </div>
        <a href="" class="">
          <span class="labelshock-top">-15%</span>
          <img src="./images/sieu-pham-galaxy-s-black-400x400.jpg" alt="">
          <h3>Samsung Galaxy S10</h3>
          <div class="oldprice">
            <span>Giá từ: </span>9.400.000₫
            <span class="price-line">11.060.000₫</span>
          </div>
          <div class="newprice">Máy mới đã ngừng kinh doanh</div>
          <div class="newprice">
            Rẻ hơn máy mới: <span>1.510.000₫ (42%)</span>
          </div>
        </a>
      </div>
      <div class="item">
        <div class="div-extend ">
          <span class="quantity">2.657 máy</span>
        </div>
        <a href="" class="">
          <span class="labelshock-top">-15%</span>
          <img src="./images/samsung-galaxy-a80-050320-050301-400x400.jpg" alt="">
          <h3>Samsung Galaxy S10</h3>
          <div class="oldprice">
            <span>Giá từ: </span>6.710.000₫
            <span class="price-line">7.900.000₫</span>
          </div>
          <div class="newprice">Máy mới đã ngừng kinh doanh</div>
          <!-- <div class="newprice">
            Rẻ hơn máy mới: <span>1.510.000₫ (42%)</span>
          </div> -->
        </a>
      </div>
      <div class="item">
        <div class="div-extend ">
          <span class="quantity">1.152 máy</span>
        </div>
        <a href="" class="">
          <span class="labelshock-top">-15%</span>
          <img src="./images/sieu-pham-galaxy-s-black-400x400.jpg" alt="">
          <h3>Samsung Galaxy S10</h3>
          <div class="oldprice">
            <span>Giá từ: </span>9.400.000₫
            <span class="price-line">11.060.000₫</span>
          </div>
          <div class="newprice">Máy mới đã ngừng kinh doanh</div>
          <div class="newprice">
            Rẻ hơn máy mới: <span>1.510.000₫ (42%)</span>
          </div>
        </a>
      </div>
      <div class="item">
        <div class="div-extend ">
          <span class="quantity">2.657 máy</span>
        </div>
        <a href="" class="">
          <span class="labelshock-top">-15%</span>
          <img src="./images/samsung-galaxy-a80-050320-050301-400x400.jpg" alt="">
          <h3>Samsung Galaxy S10</h3>
          <div class="oldprice">
            <span>Giá từ: </span>6.710.000₫
            <span class="price-line">7.900.000₫</span>
          </div>
          <div class="newprice">Máy mới đã ngừng kinh doanh</div>
          <!-- <div class="newprice">
            Rẻ hơn máy mới: <span>1.510.000₫ (42%)</span>
          </div> -->
        </a>
      </div>
      <div class="item">
        <div class="div-extend ">
          <span class="quantity">1.152 máy</span>
        </div>
        <a href="" class="">
          <span class="labelshock-top">-15%</span>
          <img src="./images/sieu-pham-galaxy-s-black-400x400.jpg" alt="">
          <h3>Samsung Galaxy S10</h3>
          <div class="oldprice">
            <span>Giá từ: </span>9.400.000₫
            <span class="price-line">11.060.000₫</span>
          </div>
          <div class="newprice">Máy mới đã ngừng kinh doanh</div>
          <div class="newprice">
            Rẻ hơn máy mới: <span>1.510.000₫ (42%)</span>
          </div>
        </a>
      </div>
      <div class="item">
        <div class="div-extend ">
          <span class="quantity">2.657 máy</span>
        </div>
        <a href="" class="">
          <span class="labelshock-top">-15%</span>
          <img src="./images/samsung-galaxy-a80-050320-050301-400x400.jpg" alt="">
          <h3>Samsung Galaxy S10</h3>
          <div class="oldprice">
            <span>Giá từ: </span>6.710.000₫
            <span class="price-line">7.900.000₫</span>
          </div>
          <div class="newprice">Máy mới đã ngừng kinh doanh</div>
          <!-- <div class="newprice">
            Rẻ hơn máy mới: <span>1.510.000₫ (42%)</span>
          </div> -->
        </a>
      </div>
    </div>
  </div>
</div>
