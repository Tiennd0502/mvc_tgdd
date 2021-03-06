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
      $trademarks = json_decode($data["Trademarks"],TRUE);
      $index = 0;
      foreach ($trademarks as $trademark) { ?>
          <!-- class="check" -->
        <a href="javascript:void(0)" class="js-trademark <?= ($index > 6)? 'name-trandemark' : ''?>" data-id="<?= $trademark['id']?>" data-name="<?= $trademark['name']?>"><img src="public/images/trademark<?= $trademark['path'] ?>" alt=""></a>
      <?php 
        $index++;
      } 
    }?>
   <a href="javascript:;" id="trademark-more" style="border-top: 1px solid #eee">Xem th??m</a>
</div>

<!-- filter other -->
<div class="filter-other">
  <div class="filter-price">
    <label>Ch???n m???c gi??: </label>
    <a href="javascript:void(0)" class='js-price' data-price='duoi-2' data-category='<?= $data["CategoryId"]?>'>D?????i 2 tri???u</a>
    <a href="javascript:void(0)" class='js-price' data-price='tu-2-4' data-category='<?= $data["CategoryId"]?>'>T??? 2 - 4 tri???u</a>
    <a href="javascript:void(0)" class='js-price' data-price='tu-4-7' data-category='<?= $data["CategoryId"]?>'>T??? 4 - 7 tri???u</a>
    <a href="javascript:void(0)" class='js-price' data-price='tu-7-13' data-category='<?= $data["CategoryId"]?>'>T??? 7 - 13 tri???u</a>
    <a href="javascript:void(0)" class='js-price' data-price='tren-13' data-category='<?= $data["CategoryId"]?>'>Tr??n 13 tri???u</a>
  </div>
  <div class="filter-feature">
    <label class="criteria js-filter-feature" id="js-filter-feature"> <span>B??? l???c</span><i class="fa fa-caret-down"></i>
    </label>
    <div class="content-feature js-content-feature" style="display: none">
      <label class="closefeature"><i class="fal fa-times-circle"></i></label>
      <div class="content-feature-list">
        <div class="content-feature-item">
          <label>Lo???i ??i???n tho???i</label>
          <div class="barpage-item">
            <label class="barpage-title">??i???n tho???i ph??? th??ng
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
          <label>Dung l?????ng pin</label>
          <div class="barpage-item">
            <label class="barpage-title">T??? 3000 ?????n 5000 mAh
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">Pin kh???ng tr??n 5000 mAh
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
        </div>
        <div class="content-feature-item">
          <label>Dung l?????ng RAM</label>
          <div class="barpage-item">
            <label class="barpage-title">D?????i 4GB
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">T??? 4 - 6GB
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">8GB Tr??? l??n
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
        </div>
      </div>
      <div class="content-feature-list">
        <div class="content-feature-item">
          <label>B??? nh??? trong</label>
          <div class="barpage-item">
            <label class="barpage-title">D?????i 32GB
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">T??? 32-64GB
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">T??? 128-256GB
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">512GB Tr??? l??n
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
        </div>
        <div class="content-feature-item">
          <label>T??nh n??ng Camera</label>
          <div class="barpage-item">
            <label class="barpage-title">Camera g??c r???ng
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">Camera x??a ph??ng
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">Camera zoom ch???p xa
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">Camera macro ch???p c???n c???nh
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
        </div>
        <div class="content-feature-item">
          <label>T??nh n??ng ?????c bi???t</label>
          <div class="barpage-item">
            <label class="barpage-title">B???o m???t khu??n m???t
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">B???o m???t v??n tay
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">S???c pin nhanh 
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">S???c kh??ng d??y
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">Ch???ng n?????c, b???i
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
        </div>
      </div>
      <div class="filter-feature-more js-filter-feature-more">
        Xem th??m t??nh n??ng kh??c <i class="fa fa-caret-down" ></i>
      </div>
      <div class="content-feature-list" style="border-bottom: none; display: none;">
        <div class="content-feature-item">
          <label>Ki???u m??n h??nh</label>
          <div class="barpage-item">
            <label class="barpage-title">Si??u tr??n vi???n
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">Tr??n vi???n(tai th???, gi???t n?????c,..)
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
        </div>
        <div class="content-feature-item">
          <label>K??ch th?????c m??n h??nh</label>
          <div class="barpage-item">
            <label class="barpage-title">M??n h??nh l???n 6 in tr??? l??n
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">Nh??? g???n, d??? c???m
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
        </div>
        <div class="content-feature-item">
          <label>Ch???t li???u v???</label>
          <div class="barpage-item">
            <label class="barpage-title">Kim lo???i
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">Kim lo???i v?? k??nh
              <input type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
        </div>
      </div>
      <div class="result">
        <button type="button" class="view-result">Xem 6 k???t qu???</button>
        <button type="reset" class="clear-prop">B??? t???t c??? l???a ch???n</button>
      </div>
    </div>
  </div>
  <div class="filter-barpage">
    <div class="barpage-item">
      <label class="barpage-title">M???i
        <input type="checkbox" >
        <span class="checkmark"></span>
      </label>
    </div>
    <div class="barpage-item">
      <label class="barpage-title">Tr??? g??p 0%
        <input type="checkbox" >
        <span class="checkmark"></span>
      </label>
    </div>
    <div class="barpage-item">
      <label class="barpage-title">?????c quy???n
        <input type="checkbox" >
        <span class="checkmark"></span>
      </label>
      <span class="new">M???I</span>
    </div>
  </div>
  <div class="filter-sort">
    <span class="criteria js-sort" id="js-sort"> <span>S???p x???p</span><i class="fa fa-caret-down"></i></span>
    <div class="content-sort js-content-sort" style="">
      <label class="closefilter js-closefilter "><i class="fal fa-times-circle"></i></label>
      <span><span class="check-sort"><i class="fal fa-check"></i></span> N???i b???t nh???t</span>
      <span><span class="check-sort"></span> B??n ch???y nh???t</span>
      <span><span class="check-sort"></span> Gi?? cao ?????n th???p</span>
      <span><span class="check-sort"></span> Gi?? th???p ?????n cao</span>
    </div>
  </div>
</div>
<h1 class="h1" id="title-sort">??i???n tho???i n???i b???t nh???t</h1>
<div class="home-product" id="list-mobile">
  <?php 
    if(!empty($data["Mobile_hots"]) && !empty($data["Mobiles"])){
      $mobiles = json_decode($data["Mobiles"]);
      $mobile_hots = json_decode($data["Mobile_hots"]);
      $index = 0;
      $count = 0;
      foreach ($mobiles as $mobile) {
        if ($count == 0 || $count == 4) { ?>
          <div class="feature">
            <!-- dtdd/ //strtolower(str_replace(" ","-",$mobile_hots[$index]->name))  -->
            <a href="dtdd/detail/<?= $mobile_hots[$index]->id ?>" class="large">
              <img src="public/images/avatar_hot/<?= $mobile_hots[$index]->image_hot ?>" alt="" width="600" height="275">
              <h3><?= $mobile_hots[$index]->name ?></h3>
              <!-- <h6 class="text-promo">H??ng s???p v???</h6> -->
              <div class="product-price">
                <?php 
                if ($mobile_hots[$index]->discount != 0) { ?>
                  <strong><?= number_format(round($mobile_hots[$index]->price - $mobile_hots[$index]->price * $mobile_hots[$index]->discount / 100, -4),0,",", ".")  ?></strong>
                  <span><?= number_format($mobile_hots[$index]->price,0,",",".") ?></span>
                  <i>-<?= $mobile_hots[$index]->discount ?>%</i>
                <?php }else { ?>
                  <strong><?= number_format($mobile_hots[$index]->price,0,",", ".")  ?></strong>
                <?php }?>                      
              </div>
              <!-- <div class="product-promo noimage">
                <p>Gi???m th??m <b>500.000???</b></p>
                <p>??u ????i ?????c quy???n Galaxy Z Elite v?? g??i d???ch v??? cao c???p</p>
              </div> -->
              <!-- <label class="preorder">?????t tr?????c ?????n 24/09</label> -->
              <label class="installment">Tr??? g??p 0%</label>
              <!-- <label class="discount">GI???M 45.000???</label> -->
              <!-- <img class="icon-imgNew cate1" src="./images/Label_01-05.png" alt=""> -->
              <?php 
              if (!empty($mobile_hots[$index]->icon)) { ?>
                <img class="icon-imgNew cate1" src="public/images/icon/<?= $mobile_hots[$index]->icon?>" alt="">
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
            <h6 class="text-promo">H??ng s???p v???</h6>
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
                <p>Gi???m th??m <b><?= number_format($mobile->gift, 0,",",".")?>???</b></p>
              <?php } ?>
              <!-- <p>??u ????i ?????c quy???n Galaxy Z Elite v?? g??i d???ch v??? cao c???p</p> -->
            </div>
            <!-- <label class="preorder">?????t tr?????c ?????n 24/09</label> -->
            <label class="installment">Tr??? g??p 0%</label>
            <!-- <label class="discount">GI???M 45.000???</label> -->
            <?php 
            if (!empty($mobile->icon)) { ?>
              <img class="icon-imgNew cate1" src="public/images/icon/<?= $mobile->icon?>" alt="">
            <?php }?>
          </a>
        </div>
        <?php 
          $count++ ; 
      }
    }
   ?>
</div>
<div class="show-more">
  <label for="" class="js-show-more" data-page="1" data-category="<?= $data["CategoryId"]?>">Xem th??m s???n ph???m <i class="fa fa-caret-down"></i></label>
</div>
<div class="catetag">
  <a href="">Samsung Galaxy Note M???i</a>
  <a href="">iPhone 11 Pro Max</a>
  <a href="">iPhone 11</a>
  <a href="">Redmi Note 9S</a>
  <a href="">OPPO Reno4</a>
  <a href="">??i???n tho???i ?????c quy???n</a>
  <a href="">OnePlus</a>
  <a href="">??i???n tho???i Energizer</a>
  <a href="">??i???n tho???i th??ng minh</a>
  <a href="">??i???n tho???i pin tr??u</a>
</div>
</div>
<div class="slogan">
  <div class="container">
    <p><i class="fal fa-truck-container"></i><span class="text">Giao ha??ng nhanh cho??ng</span></p>
    <p><i class="fal fa-piggy-bank"></i><span class="text">Thanh to??n: ti???n m???t, visa / master, tr??? g??p</span></p>
    <p><i class="far fa-phone-laptop"></i><span class="text">Tr???i nghi???m s???n ph???m t???i nh??</span></p>
    <p><i class="far fa-award"></i><span class="text">L????i ??????i ta??i nha?? nhanh cho??ng</span></p>
    <p><i class="fas fa-user-headset"></i><span class="text">H??? tr??? su???t th???i gian s??? d???ng. Hotline: <span>1800.1763</span></span></p>
  </div>
</div>