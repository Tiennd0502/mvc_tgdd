<?php 
	class Tablet extends Controller{
		public $ProductModel;
		public $TrademarkModel;
		public $CategoryModel;
		public $EvaluateModel;

		public $Categorys;
		public $CurrentPage = "tablet";
		public $name = "Tablet";

		public function __construct(){
			$this->ProductModel = $this->model("ProductModel");
			$this->TrademarkModel = $this->model("TrademarkModel");
			$this->CategoryModel = $this->model("CategoryModel");
			$this->EvaluateModel = $this->model("EvaluateModel");

			$this->Categorys= $this->CategoryModel->AllCategorys();
		}
		public function Index(){
			$tablets = $this->ProductModel->ProductByCategory(3);
			$trademarks = $this->TrademarkModel->TrademarkByCategory(3);
			$squirrelPrices = $this->ProductModel->SquirrelPrices(3);
			$this->view("home",[
										"Page" => "tablet",
										"Categorys" => $this->Categorys,
										"CurrentPage" => $this->CurrentPage,
										"Trademarks" => $trademarks,
										"Tablet" => $tablets,
										"SquirrelPrices" => $squirrelPrices,
									]);
		}
	
		public function Detail($id){
			$this->ProductModel->IncreaseViews($id);
			$product = $this->ProductModel->GetOneProduct($id);
			$trademark = $this->ProductModel->GetTrademarkProduct($id);
			$allTrademarkProduct = $this->ProductModel->AllTrademarkProduct($id);
			$evaluate = $this->EvaluateModel->GetProductEvaluate($id, "evaluate");
			$listEvaluates = $this->EvaluateModel->GetProductEvaluate($id, "content");
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