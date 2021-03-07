<?php 
	if (isset($data["Data"]) && !empty($data["Data"]) ) {
		$products = json_decode($data["Data"]);
		foreach ($products as $product):?>
			<div>
          <!-- dtdd/detail/ //strtolower(str_replace(" ","-",$product->name))  -->
          <a href="dtdd/detail/<?= $product->id ?>" class="large">
            <img src="public/images/avatar/<?= $product->image?>" alt="" width="180" height="180">
            <h3><?= $product->name?></h3>
            <h6 class="text-promo">Hàng sắp về</h6>
            <div class="product-price">
              <?php 
              if ($product->discount != 0) { ?>
                <strong><?= number_format(round($product->price - $product->price * $product->discount / 100, -4),0,",", ".")  ?></strong>
                <span><?= number_format($product->price,0,",",".") ?></span>
                <i>-<?= $product->discount ?>%</i>
              <?php }else { ?>
                <strong><?= number_format($product->price,0,",", ".")  ?></strong>
              <?php }?>                    
            </div>
            <div class="product-promo noimage">
              <?php if(!empty($product->gift)){ ?>
                <p>Giảm thêm <b><?= number_format($product->gift, 0,",",".")?>₫</b></p>
              <?php } ?>
              <!-- <p>Ưu đãi đặc quyền Galaxy Z Elite và gói dịch vụ cao cấp</p> -->
            </div>
            <!-- <label class="preorder">Đặt trước đến 24/09</label> -->
            <label class="installment">Trả góp 0%</label>
            <!-- <label class="discount">GIẢM 45.000₫</label> -->
            <?php 
            if (!empty($product->icon)) { ?>
              <img class="icon-imgNew cate1" src="public/images/icon/<?= $product->icon?>" alt="">
            <?php }?>
          </a>
        </div>



<?php 
	 endforeach ;
	}else {
		echo "empty";
	}
	
 ?>