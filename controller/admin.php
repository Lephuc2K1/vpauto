<?php 
class Admin extends Controller{
	
	public $nameModels;
	
	function __construct(){
		
		// file models
		$this->nameModels = $this->requireModels("Users");
		
		
	}
	
	function active(){
		// Gọi Views
		$this->requireView("admin", [ // type
			"Page" => "theme-admin", // into
			"Title" => "Aminstartor",
//			"Models_User" => [$this->nameModels->execute("SELECT * FROM `tb_category`"),$this->nameModels->numRowData()] // models 
		]);
	}
	
	// Danh sách sản phẩm
	function list_product(){
		$this->requireView("admin", [ // type
			"Page" => "theme-list", // into
			"Title" => "Tất cả sản phẩm",
		]);
		
	}
	
	// Danh sách sản phẩm
	function category_pro(){
		$this->requireView("admin", [ // type
			"Page" => "theme-category-type", // into
			"Title" => "Danh Mục Sản Phẩm",
		]);
		
	}
		// Loại sản phẩm
	function product_type(){
		$this->requireView("admin", [ // type
			"Page" => "theme-product-type", // into
			"Title" => "Loại Sản Phẩm",
		]);
		
	}
	// Loại sản phẩm
	function new_product(){
		$this->requireView("admin", [ // type
			"Page" => "theme-post-new", // into
			"Title" => "Loại Sản Phẩm",
		]);
		
	}
}