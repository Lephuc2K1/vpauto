<?php 
class Product_details extends Controller{
	
	public $nameModels;
	
	function __construct(){
		// file models
		$this->nameModels = $this->requireModels("Users");
		
		
	}
	
	 function active(){
		// Gọi Views
		$this->requireView("main", [ // type
			"Page" => "product-details", // into
			"Title" => "Tên Sản Phẩm",
//			"Models_User" => [$this->nameModels->execute("SELECT * FROM `tb_category`"),$this->nameModels->numRowData()] // models 
		]);
		
	}
}