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
   <a href="javascript:;" id="trademark-more" style="border-top: 1px solid #eee">Xem th??m</a>
</div>
<!-- filter other -->
<div class="filter-other">
  <div class="filter-price">
    <label>Ch???n m???c gi??: </label>
    <a href="">D?????i 3 tri???u</a>
    <a href="">T??? 3 - 10 tri???u</a>
    <a href="">Tr??n 10 tri???u</a>
  </div>
  <div class="filter-feature">
    <label class="criteria js-filter-feature" id="js-filter-feature"> <span>T??nh n??ng</span><i class="fa fa-caret-down"></i>
    </label>
    <div class="content-feature printer js-content-feature" style="">
      <label class="closefeature"><i class="fal fa-times-circle"></i></label>
      <div class="content-feature-list">
        <div class="content-feature-item">
          <label>M??n h??nh</label>
          <div class="barpage-item">
            <label class="barpage-title">Kho???ng 7"
              <input type="checkbox">
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">Kho???ng 8"
              <input type="checkbox">
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">Kho???ng 9"
              <input type="checkbox">
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">Tr??n 10"
              <input type="checkbox">
              <span class="checkmark"></span>
            </label>
          </div>
        </div>
        <div class="content-feature-item">
          <label>RAM</label>
          <div class="barpage-item">
            <label class="barpage-title">1GB
              <input type="checkbox">
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">2GB
              <input type="checkbox">
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">3GB
              <input type="checkbox">
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">4GB
              <input type="checkbox">
              <span class="checkmark"></span>
            </label>
          </div>
        </div>
      </div>
      <div class="content-feature-list">
        <div class="content-feature-item">
          <label>Camera sau</label>
          <div class="barpage-item">
            <label class="barpage-title">D?????i 3MP
              <input type="checkbox">
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">T??? 3MB -5MB
              <input type="checkbox">
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">Tr??n 5MB
              <input type="checkbox">
              <span class="checkmark"></span>
            </label>
          </div>
        </div>
        <div class="content-feature-item">
          <label>T??nh n??ng ?????c bi???t</label>
          <div class="barpage-item">
            <label class="barpage-title">2 SIM
              <input type="checkbox">
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">Th???c hi???n cu???c g???i
              <input type="checkbox">
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">42 mm
              <input type="checkbox">
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">Pin s??? d???ng tr??n 8 gi???
              <input type="checkbox">
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">S???c pin nhanh
              <input type="checkbox">
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="barpage-item">
            <label class="barpage-title">H??? tr??? OTG
              <input type="checkbox">
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
<h1 class="h1">M??y t??nh b???ng n???i b???t nh???t</h1>
<div class="home-product">
  <!-- L???y 2 s???n ph???m laptop n???i b???t c?? image_hot -->
  <?php 
    if(isset($data["Tablet"]) && !empty($data["Tablet"])){
      $tablets = json_decode($data["Tablet"], TRUE);
      $ltablet_hot = array();
      $index = 0;
      foreach ($tablets as $key => $tablet) {
        if(!empty($tablet["image_hot"])){
          $ltablet_hot[] = $tablet;
          unset($tablets[$key]);
          $index ++ ;
        }
        if($index == 2){
          break;
        }
      }
      $index = 0;
      $count = 0;
      foreach ($tablets as $tablet) {
        if ($count == 0 || $count == 4) { ?>
          <div class="feature">
            <!-- dtdd/ //strtolower(str_replace(" ","-",$ltablet_hot[$index]->name))  -->
            <a href="tablet/detail/<?= $ltablet_hot[$index]["id"] ?>" class="large">
              <img src="public/images/avatar_hot<?= $ltablet_hot[$index]["image_hot"] ?>" alt="" width="600" height="275">
              <h3><?= $ltablet_hot[$index]["name"] ?></h3>
              <!-- <h6 class="text-promo">H??ng s???p v???</h6> -->
              <div class="product-price">
                <?php 
                if ($ltablet_hot[$index]["discount"] != 0) { ?>
                  <strong><?= number_format(round($ltablet_hot[$index]["price"] - $ltablet_hot[$index]["price"] * $ltablet_hot[$index]["discount"] / 100, -4),0,",", ".")  ?></strong>
                  <span><?= number_format($ltablet_hot[$index]["price"],0,",",".") ?></span>
                  <i>-<?= $ltablet_hot[$index]["discount"] ?>%</i>
                <?php }else { ?>
                  <strong><?= number_format($ltablet_hot[$index]["price"],0,",", ".")  ?></strong>
                <?php }?>                      
              </div>
              <div class="product-promo noimage">
                <?php if(!empty($ltablet_hot[$index]["gift"]) && is_numeric($ltablet_hot[$index]["gift"])){ ?>
                  <p>Gi???m th??m <b><?= number_format($ltablet_hot[$index]["gift"], 0,",",".")?>???</b></p>
                <?php } ?>
              </div>
              <!-- <label class="preorder">?????t tr?????c ?????n 24/09</label> -->
              <label class="installment">Tr??? g??p 0%</label>
              <!-- <label class="discount">GI???M 45.000???</label> -->
              <!-- <img class="icon-imgNew cate1" src="./images/Label_01-05.png" alt=""> -->
            </a>
          </div>
        <?php $index = 1; $count++ ; }?>
        <div>
          <a href="tablet/detail/<?= $tablet["id"] ?>" class="large">
            <img src="public/images/avatar<?= $tablet["image"] ?>" alt="" width="180" height="180">
            <h3><?= $tablet["name"] ?></h3>
            <!-- <h6 class="text-promo">H??ng s???p v???</h6> -->
            <div class="product-price">
              <?php 
              if ($tablet["discount"] != 0) { ?>
                <strong><?= number_format(round($tablet["price"] - $tablet["price"] * $tablet["discount"] / 100, -4),0,",", ".")  ?></strong>
                <span><?= number_format($tablet["price"],0,",",".") ?></span>
                <i>-<?= $tablet["discount"] ?>%</i>
              <?php }else { ?>
                <strong><?= number_format($tablet["price"],0,",", ".")  ?></strong>
              <?php }?>                    
            </div>
            <div class="product-promo noimage">
              <?php if(!empty($tablet["gift"])){ ?>
                <p>Gi???m th??m <b><?= number_format($tablet["gift"], 0,",",".")?>???</b></p>
              <?php } ?>
              <!-- <p>??u ????i ?????c quy???n Galaxy Z Elite v?? g??i d???ch v??? cao c???p</p> -->
            </div>
            <!-- <label class="preorder">?????t tr?????c ?????n 24/09</label> -->
            <label class="installment">Tr??? g??p 0%</label>
            <!-- <label class="discount">GI???M 45.000???</label> -->
            <?php 
            if (!empty($tablet["icon"])) { ?>
              <img class="icon-imgNew cate2" src="public/images/icon<?= $tablet["icon"]?>" alt="">
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