<?php
$GLOBALS["A"] = array(
	/** 	Tên contro ** link  */
			"Home" => "home",
			"Admin" => "admin",
			"News" => "tin-tuc",
			"Product" => "san-pham",
			"Account" => "tai-khoan"
		);

class App{

	protected $controller = "home"; // thanh địa chỉ đầu tiên, link menu
	protected $active = "active"; // con của menu
	protected $params = []; // các value là một giá trị mảng
	
	
	// Quy tác url của controller tương ứng
	public $rulesController = array(
	/** 	Tên contro ** link  */
			"Home" => "home",
			"Admin" => "admin",
			"News" => "tin-tuc",
			"Products" => "san-pham",
			"Account" => "tai-khoan",
			"Product_details" => "chi-tiet-sp",
			"New_details" => "chi-tiet-tin-tuc",
			"Contact" => "lien-he"
		);
	// Quy tác url của active tương ứng
	protected $rulesActive = array(
	/** 	Tên class ** link  */
			"active" => "active",
			"Admin" => "admin",
		);
	
	function __construct(){
		
		$urlController = isset($_GET["controller"])? filter_var(trim($_GET["controller"]), FILTER_SANITIZE_URL) : ""; // các controller
		$urlActive = isset($_GET["active"])? filter_var(trim($_GET["active"]), FILTER_SANITIZE_URL) : ""; // hàm trong controller
		// Xử lý controller
		// controler rỗng -> mặc đinh trang chủ
		if(empty($urlController)){
			if(file_exists(PATH_CONTROLLER.$this->controller.".php")){
					require_once(PATH_CONTROLLER.$this->controller.".php");
//					exit();
			}
				//require_once(PATH_VIEWS."404.php");
		}
		else{
			// request theo tiếng việt trong các controller
			foreach($this->rulesController as $controller => $value){
				if($urlController === $value){
					if(file_exists(PATH_CONTROLLER.$controller.".php")){
						require_once(PATH_CONTROLLER.$controller.".php");
					
						$this->controller = $controller;
						break;
					}
					require_once(PATH_VIEWS."404.php");
				}
				if(!in_array($urlController,$this->rulesController)){
					require_once(PATH_VIEWS."404.php");
				}
			}
		}
		
		// tạo 1 object;
		$this->controller = new $this->controller;
		
		// xử lý active
		// kiểm tra xem trong file home có function đó ko
		//-------------- Tên Class ---- Tên phương thức(hàm)-----
		if(method_exists($this->controller,$urlActive)){
				$this->active = $urlActive;
				// hàm dùng để thay cho gọi nhiều class, function(static) mà ko xác định đươc object
				//---------------------- tên class ------ function -- array value link --
		}
		call_user_func_array(array($this->controller,$this->active), $this->params);
			
		
	}
	function testFunctionNew(){
		
	}
}