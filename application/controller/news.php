<?php 
class News extends Controller{
	
	public $nameModels;
	
	function __construct(){
		
		// file models
//		$this->nameModels = $this->requireModels("Users");
		
	}
	
	function active(){
		// Gọi Views
		
		$this->requireView("main", [ // type
			"Page" => "news", // into
			"Title" => "Tin tức cập nhập liên tục và mới nhất",
			//"Models_User" => [$this->nameModels->execute("SELECT * FROM `tb_category`"),$this->nameModels->numRowData()] // models 
		]);
		
	}
	function abc(){
		// Gọi Views
		$this->requireView("users", [ // type
			"Page" => "news", // into
			"Title" => "VPauto - Nhà cung cấp ôtô xuyên lục địa",
			//"Models_User" => [$this->nameModels->execute("SELECT * FROM `tb_category`"),$this->nameModels->numRowData()] // models 
		]);
		
	}

}