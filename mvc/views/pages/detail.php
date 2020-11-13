<div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0&appId=609494949900356&autoLogAppEvents=1"></script>

<?php 
	if (isset($data["Product"]) && !empty($data["Product"])) {
		$product = json_decode($data["Product"]);
	}
	if (isset($data["Trademark"]) && !empty($data["Trademark"])) {
		$trademark = json_decode($data["Trademark"]);
	}
	if (isset($data["AllTrademarkProduct"]) && !empty($data["AllTrademarkProduct"])) {
		$trademarkPrds = json_decode($data["AllTrademarkProduct"]);
	}
	if (isset($data["Evaluate"]) && !empty($data["Evaluate"])) {
		$evaluates = json_decode($data["Evaluate"]);
	}
	if (isset($data["ContentEvaluate"]) && !empty($data["ContentEvaluate"])) {
		$contentEvaluates = json_decode($data["ContentEvaluate"]);
	}
 ?>
<div class="submenu">
  <a href="home">Trang chủ </a><span> &rsaquo; </span><a href="<?= $data["CurrentPage"] ?>"><?= $data["SubLink"] ?></a><span> &rsaquo; </span><a href="<?= $data["CurrentPage"] ?>/Detail/"><?= $data["SubLink"] ?> <?= $trademark->name ?></a>
</div>
<div class="title">
  <h1><?= $data["SubLink"] ?> <?= $product->infor->name ?></h1>
  <div class="rating-result">
    <i class="fas fa-star voted"></i>
    <i class="fas fa-star voted"></i>
    <i class="fas fa-star voted"></i>
    <i class="fas fa-star "></i>
    <i class="fas fa-star "></i>
    <span>9 đánh giá</span>
  </div>
  <div class="like-share">
    <div class="fb-like" data-href="" data-width="344" data-layout="button_count" data-action="like" data-size="small" data-share="true">
    </div>
	</div>
</div>
<div class="detail">
  <aside class="left-image">
    <div class="avatar">
      <img src="public/images/avatar<?= $product->infor->image ?>" alt="">
      <?php 
      	if (!empty($product->infor->icon)) { ?>
      		<img src="public/images/icon<?= $product->infor->icon ?>" class="icon-imgNew cate1" alt="">
      <?php } ?>
      
    </div>
    <span class="text-view">Xem hình thực tế sản phẩm</span>
    <div class="theme">
    	<?php if (!empty($product->image_library)) {
    		foreach ($product->image_library as $item) { ?>
    			<div class="option">
		        <div><img src="public/images/image_library<?= $item->path ?>"></div>
		        <!-- <span>Xanh Dương</span> -->
		      </div>
    	<?php	}
    	 	} 
    	?>
      <div class="video">
        <div><i class="fab fa-youtube"></i></div>
        <span>Video</span>
      </div>
      <div class="open-box">
        <div><i class="fal fa-box-open"></i></div>
        <span>Mở hộp, k.mãi</span>
      </div>
      <div class="view360">
        <div><i class="fas fa-undo-alt"></i></div>
        <span>Hình 360 <br>độ</span>
      </div>
    </div>
  </aside>
  <aside class="center-sale">
    <!-- <p>Bạn đang xem phiên bản: <span><b>Reno3</b></span></p>
    <div class="version">
      <div class="option check">
        <label><i class="fas fa-check-circle"></i><span>Reno3</span></label>
        <span>7.490.000₫</span>
      </div>
      <div class="option">
        <label><i class="fal fa-circle"></i><span>Reno3 Pro</span></label>
        <span>10.590.000₫</span>
      </div>
    </div> -->
    <div class="product-price">
    	<?php 
        if ($product->infor->discount != 0) { ?>
          <strong><?= number_format(round($product->infor->price - $product->infor->price * $product->infor->discount / 100, -4),0,",", ".")  ?>₫</strong>
          <span><?= number_format($product->infor->price,0,",",".") ?>₫</span>
          <i>-<?= $product->infor->discount ?>%</i>
        <?php }else { ?>
          <strong><?= number_format($product->infor->price,0,",", ".") ?>₫</strong>
        <?php }?>
      <label class="installment">Trả góp 0%</label> 
    </div>  
    <div class="banner">
      <img src="public/images/banner/DocquyenDes-380x100-1.png" alt="">
    </div> 
    <div class="detail-promotion">
      <div class="promotion-title">
        Khuyễn mãi
        <i>Giá và khuyến mãi dự kiến áp dụng đến 31/08</i>
      </div>
      <div class="inforpr">
        <span><i class="fas fa-check-circle"></i>Tặng 2 suất mua Đồng hồ thời trang giảm 40% (không áp dụng thêm khuyến mãi khác) <a href="">(click xem chi tiết)</a></span>
        <span><i class="fas fa-check-circle"></i>Phụ kiện mua kèm giảm 20% (không áp dụng phụ kiện hãng, không áp dụng đồng thời KM khác)</span>
      </div>
      <div class="vipservices">
        <b>Chọn thêm các dịch vụ <span>miễn phí chỉ có ở TGDĐ</span></b>
        <div class="barpage-item">
          <label class="barpage-title">Giao hàng tử cửa hàng gần bạn nhất
            <input type="checkbox" checked="true">
            <span class="checkmark"></span>
          </label>
        </div>
        <div class="barpage-item">
          <label class="barpage-title">Chuyển danh bạ, dữ liệu qua máy mới
            <input type="checkbox" >
            <span class="checkmark"></span>
          </label>
        </div>
        <div class="barpage-item">
          <label class="barpage-title">Mang nhiều màu để bạn lựa chọn
            <input type="checkbox" class="js-show-vipservices">
            <span class="checkmark"></span>
          </label>
        </div>
        <div style="display: none">
          <div class="addmore">
            <p>Chọn màu sản phẩm (không mua không sao)</p>
            <div class="theme">
              <div class="option">
                <div><img src="./images/oppo-reno3-den-200x200-1-180x125.png"></div>
                <div class="barpage-item">
                  <label class="barpage-title">Đen
                    <input type="checkbox" class="js-chosse-color">
                    <span class="checkmark"></span>
                  </label>
                </div>
              </div>
              <div class="option">
                <div><img src="./images/oppo-reno3-trang-400x460-400x460.png"></div>
                <div class="barpage-item">
                  <label class="barpage-title">Trắng
                    <input type="checkbox" class="js-chosse-color">
                    <span class="checkmark"></span>
                  </label>
                </div>
              </div>
              <div class="option">
                <div><img src="./images/oppo-reno3-xanh-200x200-2-180x125.png"></div>
                <div class="barpage-item">
                  <label class="barpage-title">Xanh dương
                    <input type="checkbox" class="js-chosse-color">
                    <span class="checkmark"></span>
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="barpage-item">
          <label class="barpage-title">Mang thêm điện thoại khác để bạn xem
            <input type="checkbox" class="js-show-vipservices">
            <span class="checkmark"></span>
          </label>
        </div>
        <div class="bring-more">
          <input type="text" name="" placeholder="Nhập tên điện thoại bạn muốn xem">
        </div>
      </div>
    </div> 
    <div class="donate">
      <i class="fal fa-gift"></i>
      <span><b>Tặng 100.000₫</b> mua online tại Web thành viên BachhoaXANH.com, áp dụng tại Tp.HCM, Tp.Nha Trang, Tp.Phan Thiết <a href="" target="_blank">(click xem chi tiết)</a></span>
    </div> 
    <div class="discount">
      <div>
        <i class="fab fa-cc-jcb"></i>
        <span>Giảm thêm <b>600.000đ</b> khi thanh toán bằng thẻ JCB cho sản phẩm từ 6.000.000đ.</span><br>
        <a href="" target="_blank">Xem hướng dẫn</a>
      </div>
      <div>
        <span >Mua ngay</span>
      </div>
    </div>
    <p class="quotation"><i class="fal fa-comment-alt-exclamation"></i><a href="">Báo giá cao</a></p>
    <div class="area-order">
      <a class="buy-now" href="Cart" data-id="<?= $product->infor->id ?>"><b>Mua ngay</b><span>Giao tận nơi hoặc nhận tại siêu thị</span></a>
    </div>
    <div class="area-order">
      <a class="installment-cash" href=""><b>Mua Trả góp 0%</b><span>Thủ tục đơn giản</span></a>
      <a class="installment-card" href=""><b>Trả góp qua thẻ</b><span>Visa, Master, JBC</span></a>
    </div>
    <div class="call-order">
      <span>Gọi đặt mua: <a href="">1800.1060</a> (miễn phí - 7:30-22:00)</span>
    </div>
  </aside>
  <aside class="right-infor">
    <p class="map-check"><i class="far fa-map-marker-check"></i>Kiểm tra có hàng tại nơi bạn ở không?</p>
    <div class="accessories">
      <div class="donate">
        <i class="fal fa-box-full"></i>
        <span>Bộ sản phẩm gồm: <a href="" target="_blank"> Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim, Ốp lưng</a></span>
      </div>
      <div class="donate">
        <i class="fas fa-award"></i>
        <span>Bảo hành chính hãng 12 tháng</span>
      </div>
      <div class="donate">
        <i class="far fa-undo-alt"></i>
        <span>Lỗi là đổi mới trong 1 tháng tại hơn 2034 siêu thị toàn quốc <a href="" target="_blank">Xem chi tiết</a></span>
      </div>
    </div>
    <div class="product-old">
      <a href="">Xem OPPO Reno3 cũ</a>
      <span>Giá dưới: <strong>6.530.000₫</strong></span>
      <span>Bảo hành tới 10 tháng</span>
    </div>
  </aside>
</div>
<div class="box-content">
  <aside class="left-content">
    <h2>Đặc điểm nổi bật của <?= $product->infor->name ?></h2>
    <div id="owl-detail" class="owl-carousel owl-detail owl-theme">
  	<?php 
  		foreach ($product->image_carousel as $item) { ?>
  			<div class="item">
	    		<a href=""><img src="public/images/image_carousel<?= $item->path ?>"></a>
	    	</div>
  	<?php } ?>
    </div>
    <article class="area-article">
  		<?= $product->infor->description?>
  	</article>
  	<p class="read-more js-read-more">Đọc thêm <i class="fas fa-caret-down"></i></p>
  	<div class="bottom-order">
  		<div class="infor-product">
  			<img src="public/images/avatar/<?= $product->infor->image?>" alt="">
  			<div>
  				<h3>Điện thoại <?= $product->infor->name?></h3>
  				<?php 
		        if ($product->infor->discount != 0) { ?>
		          <strong><?= number_format(round($product->infor->price - $product->infor->price * $product->infor->discount / 100, -4),0,",", ".") ?>₫</strong>
		        <?php }else { ?>
		          <strong><?= number_format($product->infor->price,0,",", ".") ?>₫</strong>
		        <?php }?>
  			</div>
  		</div>
  		<div class="area-order">
        <a class="buy-now" href="Cart" data-id="<?= $product->infor->id ?>"><b>Mua ngay</b></a>
        <a class="installment-cash" href=""><b>Mua Trả góp 0%</b></a>
        <a class="installment-card" href=""><b>Trả góp qua thẻ</b></a>
    	</div>
  	</div>
  	<div class="same-kind" id="same-kind">
  		<h4>Các sản phẩm cùng loại</h4>
  		<div class="home-product">
  			<?php 
  				$count = 0;
  				foreach ($trademarkPrds as $item) { ?>
  					<div>
			        <a href="dtdd/<?= $item->id ?>" class="large">
			          <img src="public/images/avatar<?= $item->image ?>" alt="" width="180" height="180">
			          <h3><?= $item->name ?></h3>
			          <!-- <h6 class="text-promo">Hàng sắp về</h6> -->
			          <div class="product-price">
			            <?php 
						        if ($item->discount != 0) { ?>
						          <strong><?= number_format(round($item->price - $item->price * $item->discount / 100, -4),0,",", ".")  ?>₫</strong>
						          <br>
						          <span style="margin-left: 0"><?= number_format($item->price,0,",",".") ?>₫</span>
						          <i>-<?= $item->discount ?>%</i>
						        <?php }else { ?>
						          <strong><?= number_format($item->price,0,",", ".") ?>₫</strong>
						        <?php }?>                     
			          </div>
			          <div class="rating-result">
			            <i class="fas fa-star voted"></i>
			            <i class="fas fa-star voted"></i>
			            <i class="fas fa-star voted"></i>
			            <i class="fas fa-star "></i>
			            <i class="fas fa-star "></i>
			          </div>
			          <div class="product-promo noimage">
			            <p><b></b></p>
			            <!-- <p>Ưu đãi đặc quyền Galaxy Z Elite và gói dịch vụ cao cấp</p> -->
			          </div>
			          <!-- <label class="preorder">Đặt trước đến 24/09</label> -->
			          <!-- <label class="installment">Trả góp 0%</label> -->
			          <!-- <label class="discount">GIẢM 45.000₫</label> -->
			          <!-- <img class="icon-imgNew cate1" src="./images/Label_01-05.png" alt=""> -->
			        </a>
			      </div>
  			<?php 
  				$count ++	;
  				if ($count == 4) { break; }
  				} 
  			?>
  		</div>
  	</div>
  	<div class="evaluate">
  		<div class="evaluate-content">
  			<div class="rating-result">
  				<b><?= isset($evaluates->avg) ? $evaluates->avg : 0 ?><i class="fas fa-star voted"></i></b>
  			</div>
  			<div class="evaluate-detail">
  				<div class="evaluate-item">
  					<span> 5 <i class="fas fa-star voted"></i></span>
  					<div class="bgb">
  						<div class="bgb-in" style="width: <?= isset($evaluates->percent->Star5) ? $evaluates->percent->Star5 : 0 ?>%"></div>
  					</div>
  					<span><strong><?= isset($evaluates->count) ? $evaluates->count->Star5 : 0 ?> </strong>đánh giá</span>
  				</div>
  				<div class="evaluate-item">
  					<span> 4 <i class="fas fa-star voted"></i></span>
  					<div class="bgb">
  						<div class="bgb-in" style="width: <?= isset($evaluates->percent->Star4) ? $evaluates->percent->Star4 : 0 ?>%"></div>
  					</div>
  					<span><strong><?= isset($evaluates->count->Star4) ? $evaluates->count->Star4 : 0 ?> </strong>đánh giá</span>
  				</div>
  				<div class="evaluate-item">
  					<span> 3 <i class="fas fa-star voted"></i></span>
  					<div class="bgb">
  						<div class="bgb-in" style="width: <?= isset($evaluates->percent->Star3) ? $evaluates->percent->Star3 : 0 ?>%"></div>
  					</div>
  					<span><strong><?= isset($evaluates->count->Star3) ? $evaluates->count->Star3 : 0 ?> </strong>đánh giá</span>
  				</div>
  				<div class="evaluate-item">
  					<span> 2 <i class="fas fa-star voted"></i></span>
  					<div class="bgb">
  						<div class="bgb-in" style="width: <?= isset($evaluates->percent->Star2) ? $evaluates->percent->Star2 : 0 ?>%"></div>
  					</div>
  					<span><strong><?= isset($evaluates->count->Star2) ? $evaluates->count->Star2 : 0 ?> </strong>đánh giá</span>
  				</div>
  				<div class="evaluate-item">
  					<span> 1 <i class="fas fa-star voted"></i></span>
  					<div class="bgb">
  						<div class="bgb-in" style="width: <?= isset($evaluates->percent->Star1) ? $evaluates->percent->Star1 : 0 ?>%"></div>
  					</div>
  					<span><strong><?= isset($evaluates->count->Star1) ? $evaluates->count->Star1 : 0 ?> </strong>đánh giá</span>
  				</div>
  			</div>
  			<div class="send-myevaluate">
  				<a href="javascript:void(0)" class="show-input">Gửi đánh giá của bạn</a>
  			</div>
  		</div>
  		<form class="input" style="display: none" method="POST" id="js-my-evaluate">
    		<div class="myevaluate">
    			<span>Chọn đánh giá của bạn</span>
    			<input type="hidden" name="product_id" value="<?= $product->infor->id ?>">
    			<input type="hidden" name="voted" id="hdfStar" value="0" data-value="0">
    			<span class="rating-result" id="js-myevaluate">
    				<i class="fas fa-star" id="s1"></i>
    				<i class="fas fa-star" id="s2"></i>
    				<i class="fas fa-star" id="s3"></i>
    				<i class="fas fa-star" id="s4"></i>
    				<i class="fas fa-star" id="s5"></i>
    			</span>
    			<span class="lsStar hide"> Không thích</span>
    		</div>
    		<div class="write-comment hide" >
    			<div class="write">
    				<textarea name="content_evaluated" id ="js-content-evaluated" placeholder="Nhập đánh giá về sản phẩm (tối thiểu 80 ký tự)"></textarea>
    				<div class="attach-photo">
    					<div class="attach">
								<label onmousedown="ShowAttach('attach-evaluate')" onclick="AttachImgs(this, 'image-evaluate')"><i class="fas fa-camera-retro mr-2"></i> Đính kèm ảnh</label>
								<span class="ckeckWrite"></span>
							</div>
      				<!-- <label for="fileRatingUpload"><i class="fas fa-camera-retro"></i>Đính kèm ảnh</label>
      				<span class="ckeckWrite"></span>
      				<input type="file" id="fileRatingUpload" style="display: none"> -->
      			</div>
    			</div>
    			<div class="person-infor">
    				<input type="text" name="name" id="name" placeholder="Họ và tên">
    				<input type="tel" name="phone" id="phone" pattern="[0-9]{10}" required placeholder="Số điện thoại">
    				<input type="Email" name="email" id="email" placeholder="Email">
    				<a href="javascript:void(0)" onclick="InsertEvaluate()">Gửi đánh giá</a>
    				<button type="reset" id="js-reset-evaluate" class="d-none"></button>
    			</div>
    			<div class="list-attach" id="attach-evaluate" style="border-top: none; background-color: #fff; width: 100%">
						<ul class="attach-view" id="attach-view-image-evaluate">
							<li class="" id="insert-attach-image-evaluate">
							</li>
						</ul>
					</div>
    			<div class="barpage-item share" style="width: 100%">
            <label class="barpage-title">Tôi sẽ giới thiệu sản phẩm này cho bạn bè người thân
              <input type="checkbox" class="js-show-vipservices" name="share">
              <span class="checkmark"></span>
            </label>
          </div>
          <div id="js-error-message" style="color: #d0021b;width: 100%"></div>
    		</div>
  		</form>
  	</div>
  	<div class="view-evaluate">
  		<ul class="list-evaluate">
  			<?php
  				foreach ($contentEvaluates as $item) { ?>
  					<li class="evaluate-ask">
		  				<div class="custumer">
		  					<strong><?= $item->fullname ?></strong>
		  					<label class="check-buy">
		  						<i class="fas fa-badge-check"></i> 
		  						Đã mua tại Thegioididong.com
		  					</label>
		  				</div>
		  				<div class="custumer-evaluate">
		  					<span class="rating-result">
		  					<?php 
		  						for ($i = 0; $i < 5; $i++) { 
		  							if ($i + 1 <= $item->voted) { ?>
		  								<i class="fas fa-star voted"></i>
		  							<?php }else{ ?>
		  								<i class="fas fa-star "></i>
		  							<?php }
		  						}
		  					 ?>
							  </span>
							  <i><?= $item->content ?></i>
		  				</div>
		  				<div class="view-share">
		  					<?php 
		  						if ($item->share =="1") { ?>
		  							<i class="fas fa-heart"></i> Sẽ giới thiệu sản phẩm này cho bạn bè, người thân
		  					<?php } ?>
		  					
		  				</div>
		  				<div class="answer">
		  					<a class="respondent" onclick="ShowReply(id)" href="javascript:void(0)">Thảo luận</a>
		  					<?php 
		  						$time = (time() - $item->created_time);
		  						$date = $time/(24*60*60);
		  						$hour = $time/(60*60);
		  						$minute = $time/60;
		  						if ( $date >=1){ ?>
		  							<a class="time-respont" href="javascript:void(0)"> <?= round($date)?> ngày trước</a>
		  						<?php }elseif($hour >= 1){ ?>
		  							<a class="time-respont" href="javascript:void(0)"> <?= round($hour) ?> giờ trước</a>
		  						<?php }else{ ?> 
		  							<a class="time-respont" href="javascript:void(0)"> <?= round($minute) ?> phút trước</a> 
		  						<?php }?>
		  				</div>
		  			</li>
  				<?php }?>
  		</ul>
  		<?php if (!empty($contentEvaluates)): ?>
  			<div style="padding: 0.5rem;">
	  			<a class="btn-bgc-none" href="dtdd/<?= $product->infor->id?>/danh-gia"><i class="far fa-hand-point-right"></i> Xem tất cả đánh giá</a>
	  		</div>
  		<?php endif ?>
  		
  	</div>
  	<div class="comment" style="width: 100%; display:block">
      <div class="fb-comments" data-href="http://localhost/Web204_MVC/dtdd/detail/<?= $product->infor->id?>" data-numposts="7" data-width="100%"></div> 
    </div>

  </aside>
  <aside class="right-content">
    <h2>Thông số kỹ thuật</h2>
    <div class="specification">
      <div class="specification-item">
        <span>Màn hình:</span>
        <span><?= $product->infor->screen?></span>  
      </div>
      <div class="specification-item">
        <span>Hệ điều hành:</span>
        <span><a href="" target="_blank"><?= $product->infor->operating_system ?></a></span>  
      </div>
      <div class="specification-item">
        <span>Camera sau: </span>
        <span><?= $product->infor->rear_camera ?></span>  
      </div>
      <div class="specification-item">
        <span>Camera trước:</span>
        <span><?= $product->infor->front_camera ?></span>  
      </div>
      <div class="specification-item">
        <span>CPU:</span>
        <span><a href="" target="_blank"><?= $product->infor->cpu ?></a></span>  
      </div>
      <div class="specification-item">
        <span>RAM:</span>
        <span><?= $product->infor->ram ?></span>  
      </div>
      <div class="specification-item">
        <span>Bộ nhớ trong:</span>
        <span><?= $product->infor->internal_memory ?></span>  
      </div>
      <?php 
      	if ($product->infor->memory_stick != "") { ?>
      		<div class="specification-item">
		        <span>Thẻ nhớ:</span>
		        <span><a href="" target="_blank"><?= $product->infor->memory_stick ?></a></span>  
		      </div>
      <?php } ?>
      <!-- <div class="specification-item">
        <span></span>
        <span><b>HOT</b><a href="" target="_blank"></a></span>  
      </div> -->
      <div class="specification-item">
        <span>Dung lượng pin:</span>
        <span><?= $product->infor->battery_capacity ?></span>  
      </div>
      <div class="view-detail-more">
        Xem thêm cấu hình chi tiết
      </div>
    </div>
    <?php 
      $positon = strpos($product->infor->name, "(");
      if($positon == false){
       $name = $product->infor->name;
      }else{
       $name = trim(substr($product->infor->name, 0, $positon));
      } 
    ?>
    <div class="news-list">
      <h4>Tin tức về <?= $name ?></h4>
      <ul>
      	<li>
      		<a href="">
          	<img src="./images/opporeno4tim-16_800x450-300x200.jpg" alt="">
          	<h3>Trên tay OPPO Reno4 Tím Khói: Tôn lên vẻ sang trọng, quý phái cho các chị em, giá không thay đổi</h3>
          </a>
      	</li>
      	<li>
      		<a href="">
          	<img src="./images/oppo-sm-megamall-concept-store-with-coleen-garcia_800x450-300x200.jpg" alt="">
          	<h3>OPPO hợp tác với América Móvil để thâm nhập thị trường smartphone Mỹ Latinh, đường đua quốc tế ai sẽ hụt hơi trước đây?</h3>
          </a>
      	</li>
      	<li>
      		<a href="">
          	<img src="./images/opporeno4tim-16_800x450-300x200.jpg" alt="">
          	<h3>Trên tay OPPO Reno4 Tím Khói: Tôn lên vẻ sang trọng, quý phái cho các chị em, giá không thay đổi</h3>
          	<span><i class="fas fa-comment-alt"></i> 1 bình luận</span>
          </a>
      	</li>
      </ul>
      <a href="">Xem tất cả các tin liên quan</a>
    </div>
    <div class="news-list">
      <h4>Hướng dẫn về <?= $name ?></h4>
      <ul>
      	<li>
      		<a href="">
          	<img src="./images/huong-dan-cach-kich-hoat-bao-mat-khuon-mat-tren-oppo-reno3-thumb-1.jpg" alt="">
          	<h3>Hướng dẫn cách kích hoạt bảo mật khuôn mặt trên OPPO Reno3</h3>
          </a>
      	</li>
      	<li>
      		<a href="">
          	<img src="./images/oppo-sm-megamall-concept-store-with-coleen-garcia_800x450-300x200.jpg" alt="">
          	<h3>OPPO hợp tác với América Móvil để thâm nhập thị trường smartphone Mỹ Latinh, đường đua quốc tế ai sẽ hụt hơi trước đây?</h3>
          </a>
      	</li>
      	<li>
      		<a href="">
          	<img src="./images/so-sanh-oppo-reno3-va-reno2-f-cung-muc-gia-nen-chon-mua - thumb.jpg" alt="">
          	<h>3So sánh OPPO Reno3 và Reno2 F: Cùng mức giá, nên chọn mua máy nào?</h3>
          	<span><i class="fas fa-comment-alt"></i> 1 bình luận</span>
          </a>
      	</li>
      </ul>
      <a href="">Xem thêm hướng dẫn</a>
    </div>
    <div class="acc-attach">
      <h4>Sản phẩm thường mua cùng </h4>
      <ul>
      	<li>
      		<a href="">
      			<img src="./images/tai-nghe-ep-mozard-ds509-wb-xam-1-600x600.jpg" alt="">
      			<h3>Tai nghe EP Mozard DS509-WB Xám</h3>
      			<strong>102.000₫</strong>
      		</a>
      	</li>
      	<li>
      		<a href="">
      			<img src="./images/tai-nghe-ep-mozard-ds509-wb-xam-1-600x600.jpg" alt="">
      			<h3>Tai nghe EP Mozard DS509-WB Xám</h3>
      			<strong>102.000₫</strong>
      		</a>
      	</li>
      	<li>
      		<a href="">
      			<img src="./images/sac-du-phong-polymer-10000mah-xiaomi-mi-18w-den-1-600x600.jpg" alt="">
      			<h3>Tai nghe EP Mozard DS509-WB Xám</h3>
      			<strong>449.000₫</strong>
      		</a>
      	</li>
      </ul>
      <a href="">Xem tất cả phụ kiện OPPO Reno3</a>
    </div>
  </aside>
</div>