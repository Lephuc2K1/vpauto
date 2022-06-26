<?php 
class Products extends Controller{
	
	public $nameModels;
	
	function __construct(){
		
		// file models
		$this->nameModels = $this->requireModels("Users");
		
	}
	
	function active(){
		// Gọi Views
		
		$this->requireView("main", [ // type
			"Page" => "products", // into
			"Title" => "Sản Phẩm | Chất lượng, giá tốt, uy tín, trách nhiệm",
			"Models_User" => [$this->nameModels->execute("SELECT * FROM `tb_category`"),$this->nameModels->numRowData()] // models 
		]);
		
	}
	
}