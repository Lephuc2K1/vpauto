<?php
require_once("../Model/core/cl_dbconfig.php");
require_once("core/cl_function.php");

if(isset($_POST["submit"])){
	$name = $_POST["namedm"];
	$class_Active = new Active();
	$sql ="SELECT * FROM `tb_category` where c_ID=2";
// hàm class truy vấn 
	$class_Active->execute($sql);
// hàm in ra các giá trị trong db
	$db= $class_Active->getData();
//	echo $db["ca_name"];
	$data = array(
	'c_ID',
	'C_NAME'
	);
	
	foreach($data as $val){
		
	}
	
//	echo 	 $sql = "INSERT INTO tb_category(foreach($data as $val){echo $val}) VALUES ('[value-1]','[value-2]')";
	
	

	
}

?>