<?php 
	class Fwatch extends Controller{
		public $ProductModel;
		public $TrademarkModel;
		public $CategoryModel;
		public $EvaluateModel;

		public $Categorys;
		public $CurrentPage = "fwatch";
		public $name ="Đồng hồ thời trang";


		public function __construct(){
			$this->ProductModel = $this->model("ProductModel");
			$this->TrademarkModel = $this->model("TrademarkModel");
			$this->CategoryModel = $this->model("CategoryModel");
			$this->EvaluateModel = $this->model("EvaluateModel");

			$this->Categorys= $this->CategoryModel->AllCategorys();
		}
		public function Index(){
			
			$this->view("home",[
										"Page" => "fwatch",
										"Categorys" => $this->Categorys,
										"CurrentPage" => $this->CurrentPage,
										"Trademarks" => $this->TrademarkModel->TrademarkByCategory(5),
										"Laptop" => $this->ProductModel->ProductByCategory(5),
										"SquirrelPrices" => $this->ProductModel->SquirrelPrices(5),
										"ClassBody" => "",
										"Fwatch" => $this->ProductModel->ProductByCategory(5),
										"Swatch" => $this->ProductModel->ProductByCategory(6),
										'Albert' => $this->ProductModel->ProductByTrademark(38),
										'Men_watchs' => $this->ProductModel->ProductByCategory(5,false,'nam'),
										'Filter_watchs' => $this->ProductModel->ProductByTrademark(39),
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