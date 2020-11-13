<?php 
	
	class Dashboard extends Controller{

		public $breadcrumb = "Bảng điều khiển";
		public $admin_navbar = "admin_navbar";
		public $current      = "Dashboard";
		public function __construct(){
		}

		public function Index(){
			if (isset($_SESSION["admin"])) {
	  		$this->view("admin_page",[
		  							"Admin_navbar" => $this->admin_navbar,
		  							"Current" => $this->current,
		  							"Page" => "dashboard",
		  							"Page_title"=>"admin_page_header", 
		  							"Title" => "Điều khiển",
	  								"Breadcrumb" => $this->breadcrumb
		  						]);
	  	}else {
				echo '<h3> Vui lòng <a href="admin" >đăng nhập</a> trước khi sử dụng chức năng</h3>';
	  		exit;
	  	}
		}
	}
?>