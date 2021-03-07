<?php  
	class History_Cart extends Controller{
		public $CategoryModel;
		public $Categorys;

		public function __construct(){
			$this->CategoryModel = $this->model("CategoryModel");
			$this->Categorys= $this->CategoryModel->AllCategorys();

		}
		public function Index(){
			$this->view("home",[
									"Page"         => "history_cart", 
										"Categorys" => $this->Categorys,
									
	  			]);
		}
	}
?>