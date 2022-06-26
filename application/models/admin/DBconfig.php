<?php
class DBconnection{
	private $hostname = "localhost";
	private $username = "root";
	private $passhost = "";
	private $namedata = "oop";// chỉ trong class chính
	
	protected $conn;// áp dụng cho cả thể class con
	function connection(){
		// kiểm tra xem biến đã cho đã được gán với 1 giá trị nào chưa nếu chưa thì gán nó = giá trị mình muốn
		if(!isset($this -> conn)){
			$this->conn = mysqli_connect($this->hostname,$this->username,$this->passhost,$this->namedata);
			// chuyển dữ liệu sang kiểu tiếng việt
			mysqli_set_charset($this->conn,"utf8");
			// kết nối thành công
		}
		// nếu mà có biến conn và nó băng rỗng thì chạy vào đây
		if(empty($this->conn)){
			// nếu kết nối thất bại
			exit();
		}
		return $this->conn;
	}
	function closeconn(){
		if($this->conn){
			mysqli_close($this->conn);
		}
		return $this->conn;
	}
}


