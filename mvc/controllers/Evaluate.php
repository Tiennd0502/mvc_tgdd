<?php 
	class Evaluate extends Controller{
		public $breadcrumb = "Bảng điều khiển";
		public $admin_navbar = "admin_navbar";
		public $title = "Bình luận";
		public $current  = "Evaluate";

		public $EvaluateModel;
		public $CustumerModel;
		public $ProductModel;

		public function __construct(){
			$this->EvaluateModel = $this->model("EvaluateModel");
			$this->CustumerModel = $this->model("CustumerModel");
			$this->ProductModel = $this->model("ProductModel");
		}
		public function Index(){
			// lấy mã hh, tên hh
		 	// đếm số hàng trong bảng bình luận có product_id = 
			// lấy thời gian bình luận sớm nhất, mới nhất trong bảng bình luận có product_id đó
			if (isset($_SESSION["admin"])) {
				$evaluates = $this->EvaluateModel->AllEvaluates();

				$this-> view("admin_page", [
											"Admin_navbar" => $this->admin_navbar,
											"Current" => $this->current,
			  							"Page" => "admin_evaluate",
			  							"Page_title"=>"admin_page_header", 
			  							"Title" => $this->title,
		  								"Breadcrumb" => $this->breadcrumb,
		  								"Evaluates" => $evaluates,
										]);
			}else {
	  		echo '<h3> Vui lòng <a href="admin" >đăng nhập</a> trước khi sử dụng chức năng</h3>';
	  		exit;
	  	}
		}

		public function DelEvaluatePrd($product_id){
			$result = $this->EvaluateModel->DelEvaluatePrd($product_id);
			$evaluates = $this->EvaluateModel->AllEvaluates();
			$this->view("admin_page",[
									"Admin_navbar" => $this->admin_navbar,
									"Current" => $this->current,
	  							"Page" => "admin_evaluate",
	  							"Page_title"=>"admin_page_header", 
	  							"Title" => $this->title,
  								"Breadcrumb" => $this->breadcrumb,
  								"Evaluates" => $evaluates,
  								"Result" => $result,
									]);
		}

		public function ViewDetail($product_id){
			$evaluates = $this->EvaluateModel->GetProductEvaluate($product_id,"content");
			$this->view("admin_page",[
									"Admin_navbar" => $this->admin_navbar,
									"Current" => $this->current,
	  							"Page" => "admin_evaluate_detail",
	  							"Page_title"=>"admin_page_header", 
	  							"Title" => $this->title,
  								"Breadcrumb" => $this->breadcrumb,
  								"Evaluates" => $evaluates,
  								"ProductId" => $product_id,
									]);
		}

		public function DelEvaluate($product_id, $evaluate_id){
			$result = $this->EvaluateModel->DelEvaluate($evaluate_id);
			$evaluates = $this->EvaluateModel->GetProductEvaluate($product_id,"content");
			$this->view("admin_page",[
									"Admin_navbar" => $this->admin_navbar,
									"Current" => $this->current,
	  							"Page" => "admin_evaluate_detail",
	  							"Page_title"=>"admin_page_header", 
	  							"Title" => $this->title,
  								"Breadcrumb" => $this->breadcrumb,
  								"Evaluates" => $evaluates,
  								"Result" => $result,
  								"ProductId" => $product_id,
									]);
		}
		

	}
?>