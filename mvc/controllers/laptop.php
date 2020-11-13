<?php 
	class Laptop extends Controller{
		public $ProductModel;
		public $TrademarkModel;
		public $CategoryModel;
		public $EvaluateModel;

		public $Categorys;
		public $CurrentPage = "laptop";
		public $name ="Laptop";

		public function __construct(){
			$this->ProductModel = $this->model("ProductModel");
			$this->TrademarkModel = $this->model("TrademarkModel");
			$this->CategoryModel = $this->model("CategoryModel");
			$this->EvaluateModel = $this->model("EvaluateModel");

			$this->Categorys= $this->CategoryModel->AllCategorys();
		}
		public function Index(){
			$laptops = $this->ProductModel->ProductByCategory(2);
			$trademarks = $this->TrademarkModel->TrademarkByCategory(2);
			$squirrelPrices = $this->ProductModel->SquirrelPrices(2);
			$this->view("home",[
										"Page" => "laptop",
										"Categorys" => $this->Categorys,
										"CurrentPage" => $this->CurrentPage,
										"Trademarks" => $trademarks,
										"Laptop" => $laptops,
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
										"SubLink"=> $this->name
									]);
		}
	}
 ?>