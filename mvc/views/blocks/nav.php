<div id="nav">
  <nav class="container nav">
  	<?php 
  		if (isset($data["Categorys"])) {
  			$categorys = json_decode($data["Categorys"], TRUE);
  			foreach ($categorys as $key => $category) { ?>
  				<a class="<?= (isset($data["CurrentPage"]) && $data["CurrentPage"]== $category['slug']) ? "current-page" : "" ?>" href="<?= $category['slug']?>" title="<?= $category['title'] ?>"><?= !empty($category['icon']) ? html_entity_decode($category['icon']) : "" ?><?= $category['name'] ?></a>
  			<?php }
  		}
  	 ?>
    <!-- <a href="dtdd" title="Điện thoại di động, smartphone"><i class="fal fa-mobile"></i>Điện thoại</a>
    <a href="laptop.html" title="Máy tính xách tay, laptop"><i class="fal fa-laptop"></i>Laptop</a>
    <a href="pc.html" title="Máy tính bảng, tablet"><i class="fal fa-tablet"></i>Tablet</a>
    <a href="accessories.html" title="Phụ kiện điện thoại di động, phụ kiện tablet, phụ kiện laptop"><i class="fal fa-headphones"></i>Phụ kiện</a>
    <a href="fwatch.html" title="Đồng hồ thời trang"><i class="fal fa-watch"></i>Đồng hồ thời trang</a>
    <a href="swatch.html" title="Đồng hồ thông minh"><i class="fal fa-watch-calculator"></i>Đồng hồ thông minh</a>
    <a href="printer.html" title="PC, máy in"><i class="fal fa-desktop-alt"></i>PC, máy in</a>
    <a href="" title="Máy cũ giá rẻ, máy đổi trả thegioididong">Máy cũ giá rẻ</a>
    <a href="#" title="">Sim, thẻ cào</a>
    <a href="#" title="">Trả góp, điện, nước</a> -->
  </nav>
</div>