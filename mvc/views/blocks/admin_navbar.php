<!-- Navigation -->
<nav class="navbar navbar-expand-md fixed-top navbar-dark">
	<div class="navbar-header ">
		<a class="navbar-brand" href="Dashboard">Xin chào <?= $_SESSION["admin"]["username"] ?></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	</div>
	<!-- Top Menu Items -->
	<div class="nav navbar-right top-nav ">
		<div class="dropdown">
		  <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-envelope"></i></a>
		  <div class="dropdown-menu dropdown-menu-right message-dropdown" aria-labelledby="dropdownMenuLink">
		    <a class="dropdown-item" href="#">
		    	<div class="media">
					  <img src="http://placehold.it/50x50" alt="John Doe" class="mr-2 mt-2" >
					  <div class="media-body">
					    <h5 class="media-heading"><strong>John Smith</strong></h5>
              <p class="small text-muted"><i class="fal fa-clock"></i> Yesterday at 4:32 PM</p>
              <p >Lorem ipsum dolor ...</p>
					  </div>
					</div>
		    </a>
		    <a class="dropdown-item" href="#">
		    	<div class="media">
					  <img src="http://placehold.it/50x50" alt="John Doe" class="mr-2 mt-2" >
					  <div class="media-body">
					    <h5 class="media-heading"><strong>John Smith</strong></h5>
              <p class="small text-muted"><i class="fal fa-clock"></i> Yesterday at 4:32 PM</p>
              <p>Lorem ipsum dolor ...</p>
					  </div>
					</div>
		    </a>
		    <a class="dropdown-item" href="#">
		    	<div class="message-footer">
		    		Read All New Messages
		    	</div>
		    </a>
		  </div>
		</div>
		<div class="dropdown">
		  <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bells"></i></a>
		  <div class="dropdown-menu dropdown-menu-right message-dropdown" aria-labelledby="dropdownMenuLink">
		    <a class="dropdown-item" href="#">
		    	Alert Name 
		    </a>
		  </div>
		</div>
		<div class="dropdown">
		  <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		    <i class="fas fa-user"></i> <?= $_SESSION["admin"]["fullname"] ?>
		  </a>
		  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
		    <a class="dropdown-item" href="#"><i class="fas fa-user"></i> Hồ sơ</a>
		    <a class="dropdown-item" href="#"><i class="fas fa-envelope"></i> Hộp thư đến</a>
		    <a class="dropdown-item" href="#"><i class="fas fa-cogs"></i> Đổi mật khẩu</a>
		    <div class="dropdown-divider"></div>
		    <a class="dropdown-item" id="js-logout" href="admin" onclick="Logout()"><i class="fas fa-power-off"></i> Đăng xuất</a>
		  </div>
		</div>
	</div>
	<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
	<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="nav navbar-nav side-nav flex-column">
      <li class="nav-item <?= ($data["Current"] =='Dashboard') ? "active" : ""?>">
        <a class="nav-link" href="Dashboard"><i class="fas fa-tachometer-alt"></i> Bảng điều khiển<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item <?= ($data["Current"] =='Chart') ? "active" : ""?>">
        <a class="nav-link" href="Chart"><i class="fas fa-analytics"></i> Biểu đồ</a>
      </li>
      <li class="nav-item <?= ($data["Current"] =='Category') ? "active" : ""?> ">
        <a class="nav-link" href="Category"><i class="fas fa-tasks"></i> Loại hàng</a>
      </li>
      <li class="nav-item <?= ($data["Current"] =='Trademark') ? "active" : ""?> ">
        <a class="nav-link" href="Trademark"><i class="fas fa-trademark"></i> Thương hiệu</a>
      </li>
      <li class="nav-item <?= ($data["Current"] =='Product') ? "active" : ""?> ">
        <a class="nav-link" href="Product"><i class="fas fa-sitemap"></i> Hàng hóa</a>
      </li>
      <li class="nav-item <?= ($data["Current"] =='Custumer') ? "active" : ""?> ">
        <a class="nav-link" href="Custumer"><i class="fas fa-users"></i> Khách hàng</a>
      </li>
      <li class="nav-item <?= ($data["Current"] =='Evaluate') ? "active" : ""?> ">
        <a class="nav-link" href="Evaluate"> <i class="fas fa-comments-alt"></i> Đánh giá </a>
      </li>
      <li class="nav-item <?= ($data["Current"] =='Order') ? "active" : ""?> ">
        <a class="nav-link" href="Order"><i class="fas fa-ballot-check"></i> Đơn hàng</a>
      </li>
      <li class="nav-item <?= ($data["Current"]=='Privilege') ? "active" : ""?> ">
        <a class="nav-link" href="Privilege"><i class="fas fa-users-cog"></i> Phân quyền</a>
      </li>
    </ul>
  </div>
</nav>