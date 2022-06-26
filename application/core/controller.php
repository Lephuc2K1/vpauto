<?php
// điều khiển trung gian giữa view và model
class Controller{
	
	// hàm để chèn file và để tạo object tự động
	 function requireModels($model){
		if(file_exists(PATH_MODELS."$model.php")){
			require_once(PATH_MODELS."$model.php");
			return new $model;
		}
		 return false;
	}
	
	// hàm chèn file view vào màn hình tương ứng
	function requireView($view,$data = []){
		if(file_exists(PATH_VIEWS."$view.php")){
			require_once(PATH_VIEWS."$view.php");
		}
		else{
			require_once(PATH_VIEWS."404.php");
		}
	}
	
}