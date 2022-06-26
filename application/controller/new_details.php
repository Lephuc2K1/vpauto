<?php 
class New_details extends Controller{
	
	public $nameModels;
	
	function __construct(){
		// file models
		$this->nameModels = $this->requireModels("Users");
		
		
	}
	
	 function active(){
		// Gọi Views
		$this->requireView("main", [ // type
			"Page" => "new-details", // into
			"Title" => "Tên Tin Tức",
//			"Models_User" => [$this->nameModels->execute("SELECT * FROM `tb_category`"),$this->nameModels->numRowData()] // models 
		]);
		
	}
}