<?php
 require_once("DBconfig.php");
// 1 lớp con chỉ kế thừa được 1 cha
 class DBcurd extends DBconnection{
	 private $result = null;
	 function __construct(){
		 // truy xuất đến thể  class cha 
		 parent::connection();
	 }
	  // thực hiện cấu lệnh sql vd như insert update delete cần phải có 
	  function execute($sql){
		return $this -> result = $this ->conn -> query($sql);
	}
	 // lấy giá trị riêng lẻ
	 function getData(){
		 // nếu câu lệnh query đã được thực thi thì lấy câu lệnh truy vấn
		 if($this->result){
			 $data = mysqli_fetch_assoc($this->result);
		 }
		 else{
			 $data = 0;// không thực hiện được câu query chả về là 0
		 }
		 return json_encode($data);
	 }
	 
	 // Lấy tất cả dữ liệu từ sql 
	 function getAllData(){
		// nếu câu lệnh query chưa được thực thi thì lấy câu lệnh truy vấn
		 if(!$this -> result){
			 $data = 0;
		 }
		 else{
			 // gọi hàm data thường để chạy vào FOR in ra danh sách
			 $data = mysqli_fetch_all($this->result,MYSQLI_ASSOC);
		 }
		 return json_encode($data);
	 }
	 // Thêm dữ liệu vào data
	 function InsertData($table,$arrCol = array(),$arrValue = array()){
		 $sql = "INSERT INTO $table VALUES ('[value-1]','[value-2]')";
		 // trỏ đến function truy vấn sql
		 return $this->execute($sql);
		 
	 }
	 
	 // Xóa data
	 function DeleteData($table,$id_del){
		$sql = "DELETE FROM $table WHERE $id_del";
		// trỏ đến function truy vấn sql
		return $this->execute($sql);
	 }

	 // đếm số hàng
	 function numRowData(){
		 if($this->result){
			 $num = mysqli_num_rows($this->result);
		 }
		 else{
			 $num = null;
		 }
		 return $num;
	 } 	
	 
	 // Tối ưu câu lệnh truy vấn ngắt kết nối câu lệnh truy vấn
	 function freeResult(){
		 if($this->result){
		 	return mysqli_free_result($this->result);
		 }
	 }
	
 }