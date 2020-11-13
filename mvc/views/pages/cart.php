<?php 
	// echo $_SESSION["cart"]["8"]["quantity"];exit;
 ?>
 
<section id ="container-cart">
	<div class="bar-top">
		<a href="home"><i class="fal fa-chevron-left"></i>Mua thêm sản phẩm khác</a>
		<p>Giỏ hàng của bạn</p>
	</div>
	<div class="container-cart">
		<form method="POST" id="form-order">
			<label class="error-color">Dịch vụ mang thêm màu khác và sản phẩm để tham khảo chỉ áp dụng khi đặt mua duy nhất 1 sản phẩm.</label>
			<div class="list-order">
				<?php 
					$total = 0;
					$discount = 0; 
					foreach ($_SESSION["cart"] as $key => $item) { ?>
						<div class="order-item">
							<div class="">
								<a href="<?= $item["slug"]?>/Detail/<?= $key?>"><img src="public/images/avatar/<?= $item["image"]?>" alt="">
								</a>
								<a href="Cart" class="delete js-delete" data-id="<?= $key?>"><i class="fas fa-times-circle"></i>Xóa</a>
							</div>
							<div class="prd-infor">
								<div>
									<a href="<?= $item["slug"]?>/Detail/<?= $key?>"><?= $item["name"]?></a>
									<strong><?= number_format($item["price"],0,",", ".") ?>₫</strong>
								</div>
								<div class="promotion">
									<?php 
										if ($item["discount"] != 0) { ?>
											<span>Giảm giá <?= number_format(round($item["price"] * $item["discount"] / 100, -4),0,",", ".") ?>đ</span>
									<?php } ?>
									<span>Phụ kiện mua kèm giảm 20% (không áp dụng phụ kiện hãng, không áp dụng đồng thời KM khác)</span>
									<span>Tặng 2 suất mua Đồng hồ thời trang giảm 40% (không áp dụng thêm khuyến mãi khác)<a href="">(click xem chi tiết)</a></span>
								</div>
								<?php 
									if ($item["discount"] != 0) { ?>
										<div><span>Giảm 
											<strong ><?= number_format(round($item["price"] * $item["discount"] / 100, -4),0,",", ".") ?>₫</strong>
											 còn 
											 <strong><?= number_format(round($item["price"] - $item["price"] * $item["discount"] / 100, -4),0,",", ".")  ?>₫</strong>
											</span>
										</div>
								<?php } ?>
								
								<div class="" style="display: flex;justify-content: space-between;align-items: center">
									<div class="choose-color">
										<span class="js-cart-color">Màu: Đen <i class="fas fa-caret-down"></i></span>
										<div class="content-choose">
											<div class="choose-color-item js-color-item">
												<img src="./images/oppo-reno3-den-200x200-1-180x125.png" alt="">
												<span>Đen</span>
											</div>
											<div class="choose-color-item js-color-item">
												<img src="./images/oppo-reno3-trang-200x200-1-180x125.png" alt="">
												<span>Trắng</span>
											</div>
											<div class="choose-color-item js-color-item">
												<img src="./images/oppo-reno3-xanh-200x200-2-180x125.png" alt="">
												<span>Xanh Dương</span>
											</div>
										</div>
									</div>
									<div class="choose-number">
			              <input type="hidden" class="" name="quantity[<?= $key?>]" id="quantity<?= $key ?>" value="1">
			              <div class="abate js-change-quantity" change="abate"></div>
			              <div class="number" data-id="<?= $key ?>"><?= $item["quantity"]?></div>
			              <div class="augment js-change-quantity" change="augment" ></div>
			          	</div>
								</div>
								<!-- <div class="barpage-item" style="margin-top: 10px;">
			            <label class="barpage-title">Mang nhiều màu để bạn lựa chọn
			              <input type="checkbox" class="js-show-vipservices">
			              <span class="checkmark"></span>
			            </label>
			          </div> -->
			          <!-- <div style="display: none">
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
			              </div>
			            </div>
			          </div> -->
							</div>
						</div>
					<?php 
						$total +=  $item["price"] * $item["quantity"] ;
						$discount += round($item["price"] * $item["discount"] / 100, -4) * $item["quantity"] ; } ?>
				
			</div>
			
			<div class="area-total">
				<div >
					<span>Tổng tiền: </span>
					<span class="total"><?= number_format($total,0,",", ".") ?>₫</span>
				</div>
				<?php 
					if ($discount != 0) { ?>
						<div>
							<span>Giảm: </span>
							<span class="all-discount">-<?= number_format($discount,0,",", ".") ?>₫</span>
						</div>
				<?php } ?>
				<div>
					<span><b>Cần thanh toán: </b></span>
					<strong><?= number_format($total - $discount,0,",", ".") ?>₫</strong>
				</div>
				<div class="coupon-code">
					<div class="text-code js-text-code" id="js-text-code">Sử dụng mã giảm giá
					</div>
					<div class="input-code js-input-code" style="display: none">
						<input type="text" name="" placeholder="Nhập mã giảm giá">
						<span class="btn">Áp dụng</span>
					</div>
				</div>
			</div>
			<div class="infor-user">
				<div class="checkradio">
					<div class="barpage-item">
	          <label class="barpage-title">Anh
	            <input type="radio" name="gender" checked="">
	            <span class="checkmark"></span>
	          </label>
	        </div>
	        <div class="barpage-item">
	          <label class="barpage-title">Chị
	            <input type="radio" name="gender">
	            <span class="checkmark"></span>
	          </label>
	        </div>
				</div>
				<div class="area-infor">
					<input type="text" name="name" placeholder="Họ và tên" >
					<input type="text" name="phone" placeholder="Số điện thoại">
				</div>
				<div class="other-note">
					<input type="text" name="otherNote" placeholder="Yêu cầu khác (không bắt buộc)">
				</div>
				<div class="area-orther">
					<div><b>Để được phục vụ nhanh hơn,</b> hãy chọn thêm:</div>
					<div class="checkradio">
						<div class="barpage-item">
	            <label class="barpage-title">Địa chỉ giao hàng
	              <input type="radio" data-name="delivery-address" checked="" class="js-change-address">
	              <span class="checkmark"></span>
	            </label>
	          </div>
	          <div class="barpage-item">
	            <label class="barpage-title">Nhận tại siêu thị
	              <input type="radio" data-name="received-market" class="js-change-address">
	              <span class="checkmark"></span>
	            </label>
	          </div>
					</div>
					<div class="area-address js-delivery-address">
						<div class="address-list">
							<div class="address-item">
								<span>Hà Nội</span><i class="fas fa-caret-down"></i>
							</div>
							<div class="address-item">
								<span>Chọn quận, huyện</span><i class="fas fa-caret-down"></i>
							</div>
							<div class="address-item">
								<span>Chọn phường, xã</span><i class="fas fa-caret-down"></i>
							</div>
							<div class="address-item">
								<input type="text" name="address" placeholder="Số nhà, tên, đường">
							</div>
						</div>
						<div class="delivery-time">
							<div class="guide">
								<b>Hướng dẫn:</b> Chọn địa chỉ để biết chính xác thời gian giao hàng
							</div>
						</div>
						<!-- <div class="barpage-item">
	            <label class="barpage-title">Gọi người khác nhận hàng nếu có
	              <input type="checkbox" class="js-show-vipservices">
	              <span class="checkmark"></span>
	            </label>
	          </div>
	          <div style="display: none; margin-bottom: 10px;" >
	        		<div class="addmore">
	        			<div class="checkradio">
		  						<div class="barpage-item">
			              <label class="barpage-title">Anh
			                <input type="radio" name="ortherGender" checked="">
			                <span class="checkmark"></span>
			              </label>
			            </div>
			            <div class="barpage-item">
			              <label class="barpage-title">Chị
			                <input type="radio" name="ortherGender">
			                <span class="checkmark"></span>
			              </label>
			            </div>
		  					</div>
		  					<div class="area-infor">
		  						<input type="text" name="name" placeholder="Họ và tên">
		  						<input type="text" name="name" placeholder="Số điện thoại">
		  					</div>
	        		</div>
	        	</div> -->
	        	<div class="barpage-item">
	            <label class="barpage-title">Chuyển danh bạ, dữ liệu qua máy mới
	              <input type="checkbox" class="">
	              <span class="checkmark"></span>
	            </label>
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
	          <div class="barpage-item">
	            <label class="barpage-title">Xuất hóa đơn công ty
	              <input type="checkbox" class="js-show-vipservices">
	              <span class="checkmark"></span>
	            </label>
	          </div>
	          <div class="bring-more">
	            <input type="text" name="" placeholder="Tên công ty">
	            <input type="text" name="" placeholder="Địa chỉ">
	            <input type="text" name="" placeholder="Mã số thuế">
	          </div>
					</div>
					<div class="area-address area-market js-received-market" style="display: none">
						<div class="address-list">
							<div class="address-item">
								<span>Hà Nội</span><i class="fas fa-caret-down"></i>
							</div>
							<div class="address-item">
								<span>Chọn quận, huyện</span><i class="fas fa-caret-down"></i>
							</div>
						</div>
						<div class="bring-more" style="display: block;margin-top: 0;">
	            <input type="text" name="" placeholder="Nhập tên đường để tìm nhanh siêu thị" style="margin: 0">
	          </div>
	          <div class="checkradio" style="display: flex;flex-direction: column">
							<div class="barpage-item">
	              <label class="barpage-title">Đạc 7, xã Thọ Xuân, H. Đan Phượng, TP. Hà Nội
	                <input type="radio" name="delivery-address" checked="">
	                <span class="checkmark"></span>
	              </label>
	            </div>
	            <div class="barpage-item">
	              <label class="barpage-title">Số 193 - 195 đường Cầu Diễn, Phường Phúc Diễn, Quận Bắc Từ Liêm, Thành phố Hà Nội
	                <input type="radio" name="delivery-address">
	                <span class="checkmark"></span>
	              </label>
	            </div>
	            <div style="color:#288ad6; margin-bottom: 10px;">
	            	<span style="margin-right: 10px">Xem thêm siêu thị</span><i class="fas fa-caret-down" style="font-size: 18px"></i>
	            </div>
						</div>
						<div class="address-item" style="width: 100%">
							<span style="color: #333">Thời gian nhận: </span><span>Hôm nay 06/09</span><i class="fas fa-caret-down"></i>
						</div>
	          <div class="barpage-item">
	            <label class="barpage-title">Xuất hóa đơn công ty
	              <input type="checkbox" class="js-show-vipservices">
	              <span class="checkmark"></span>
	            </label>
	          </div>
	          <div class="bring-more">
	            <input type="text" name="" placeholder="Tên công ty">
	            <input type="text" name="" placeholder="Địa chỉ">
	            <input type="text" name="" placeholder="Mã số thuế">
	          </div>
					</div>
					<div class="choose-pay">
						<a href="javasctipt:void(0)" class="pay-offline" id="pay-offline" >Đặt hàng</a>
						<p>Bạn có thể chọn hình thức thanh toán sau khi đặt hàng</p>
					</div>
				</div>
			</div>
		</form>
	</div>
</section>
<p class="provision">Bằng cách đặt hàng, bạn đồng ý với <a href="/tos" target="_blank">Điều khoản sử dụng</a> của Thegioididong</p>