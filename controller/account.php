<?php 
class Account extends Controller{
	
	public $nameModels;
	
	function __construct(){
		// file models
		$this->nameModels = $this->requireModels("Users");
		
		
	}
	
	 function active(){
		// Gọi Views
		$this->requireView("users", [ // type
			"Page" => "account", // into
			"Title" => "VPauto - Nhà cung cấp ôtô xuyên lục địa",
			"Models_User" => [$this->nameModels->execute("SELECT * FROM `tb_category`"),$this->nameModels->numRowData()] // models 
		]);
		
	}
}