<?php 
class Contact extends Controller{
	
	public $nameModels;
	
	function __construct(){
		// file models
		$this->nameModels = $this->requireModels("Users");
		
		
	}
	
	 function active(){
		// Gọi Views
		$this->requireView("main", [ // type
			"Page" => "Contact", // into
			"Title" => "Liên Hệ",
//			"Models_User" => [$this->nameModels->execute("SELECT * FROM `tb_category`"),$this->nameModels->numRowData()] // models 
		]);
		
	}
}