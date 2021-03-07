<?php 
	class Dtdd extends Controller{
		public $ProductModel;
		public $TrademarkModel;
		public $CategoryModel;
		public $EvaluateModel;

		public $Categorys;
		public $CurrentPage = "dtdd";
		public $name ="Điện thoại";

		public function __construct(){
			$this->ProductModel = $this->model("ProductModel");
			$this->TrademarkModel = $this->model("TrademarkModel");
			$this->CategoryModel = $this->model("CategoryModel");
			$this->EvaluateModel = $this->model("EvaluateModel");

			$this->Categorys= $this->CategoryModel->AllCategorys();

		}
		public function Index(){
			$mobiles = $this->ProductModel->ProductByCategory(1);
			$trademarks = $this->TrademarkModel->TrademarkByCategory(1);
			$mobile_hots= $this->ProductModel->ProductByCategory(1,true);
			$this->view("home",[
										"Page" => "mobile",
										"Categorys" => $this->Categorys,
										"CurrentPage" => $this->CurrentPage,
										"Trademarks" => $trademarks,
										"Mobiles" => $mobiles,
               		 	"Mobile_hots" => $mobile_hots,
										"CategoryId" => "1",
									]);
		}
		// public function Detail($firstname, $lastname=""){
		// 	if($lastname != ""){
		// 		$productName = $firstname ."/".$lastname;
		// 	}else {
		// 		$productName = $firstname;
		// 	}
		// 	$products = $this->ProductModel->GetOneProduct(1);
		// 	$trademarks = $this->TrademarkModel->TrademarkByCategory(1);
		// 	$this->view("home",[
		// 								"Page" => "detail",
		// 								"Categorys" => $this->Categorys,
		// 								"Trademarks" => $trademarks,
		// 								// "Mobile" => $mobiles,
		// 							]);
		// }
		public function Detail($id){
			$this->ProductModel->IncreaseViews($id);
			$product = $this->ProductModel->GetOneProduct($id);
			$trademark = $this->ProductModel->GetTrademarkProduct($id);
			$allTrademarkProduct = $this->ProductModel->AllTrademarkProduct($id);
			$evaluate = $this->EvaluateModel->GetProductEvaluate($id, "evaluate");
			$listEvaluates = $this->EvaluateModel->GetProductEvaluate($id, "content");
			$category = 
			$this->view("home",[
										"Page" => "detail",
										"Categorys" => $this->Categorys,
										"CurrentPage" => $this->CurrentPage,
										"Product" => $product,
										"Trademark" => $trademark,
										"AllTrademarkProduct" => $allTrademarkProduct,
										"Evaluate" => $evaluate,
										"ContentEvaluate" => $listEvaluates,
										"SubLink"=> $this->name,
									]);
		}
	}
 ?>