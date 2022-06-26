<?php /*?><?php
	require_once("link.php");
	require_once("function.php");
	$sql= "SELECT * FROM `tb_category`";
	$query = mysqli_query($conn,$sql);
	$arr_cat = mysqli_fetch_all($query,MYSQLI_ASSOC);
//	var_dump($arr_cat);exit();
	$total_cat = mysqli_num_rows($query);

	$no_img = 'upload/no-img.png';
// thêm
if(isset($_POST["cat-add"])){
	$cat_name = trim($_POST["cat-name"]);
	$cat_path =convert_link(trim($_POST["cat-path"]));
	$cat_description= $_POST["cat-description"];
	$cat_parent=$_POST["cat-parent"];
	date_default_timezone_set("Asia/Ho_Chi_Minh");
	$post_day=date("Y-m-d H:i:s");
	// kiểm tra ảnh
	$upload_img=$_FILES["upload-img"];
	$folder="upload/";
	$no_img = $folder."no-img.png";
	$path_img=$folder.basename($upload_img["name"]);
	$type_img= strtolower(pathinfo($path_img,PATHINFO_EXTENSION));
	$format_img = array("jpg","png","gif","jpeg","pdf");
	$checkOk = true;
//	move_uploaded_file($upload_img["tmp_name"],$no_img);
	if(!empty($upload_img["tmp_name"])){
		if($upload_img["size"]>10000000){
				$checkOk=false;		
		}
		else{
			$ckfile = getimagesize($upload_img["tmp_name"]);
			if($ckfile !== false) {
				if(!in_array($type_img,$format_img)){
					$checkOk=false;		
				}
				else{
					$checkOk = true;
				}
			}

		}
		if($checkOk){
			if(move_uploaded_file($upload_img["tmp_name"],$path_img)){
				
				insert_cat($cat_parent,$cat_name,$cat_path,$path_img,$cat_description,$post_day,$conn);
			}
		}
		else{
			insert_cat($cat_parent,$cat_name,$cat_path,"",$cat_description,$post_day,$conn);
		}
	}
	else{
		insert_cat($cat_parent,$cat_name,$cat_path,$no_img,$cat_description,$post_day,$conn);
	}
}
//sửa
if(isset($_GET['edit'])&&isset($_GET["tag_ID"])){
	$id_cat = $_GET["tag_ID"];
		$sql="SELECT * FROM `tb_category` WHERE c_ID='$id_cat'";
		$query =  mysqli_query($conn,$sql);
		$row =  mysqli_fetch_array($query);
		$num =  mysqli_num_rows($query);
	if($num == 1){
//		var_dump($row);exit();
		$db_name = $row['c_name'];
		$db_path = $row['c_slug'];
		$db_parent = $row['c_parent_id'];
		$db_img = $row['c_image'];
		$db_id = $row['c_ID'];
		if(isset($_POST["cat-save"])){
	$cat_name = trim($_POST["cat-name"]);
	$cat_path =convert_link(trim($_POST["cat-path"]));
	$cat_description= $_POST["cat-description"];
	$cat_parent=$_POST["cat-parent"];
	date_default_timezone_set("Asia/Ho_Chi_Minh");
	$post_day=date("Y-m-d H:i:s");
	// kiểm tra ảnh
	$upload_img=$_FILES["upload-img"];
	$folder="upload/";
	$no_img = $folder."no-img.png";
	$path_img=$folder.basename($upload_img["name"]);
	$type_img= strtolower(pathinfo($path_img,PATHINFO_EXTENSION));
	$format_img = array("jpg","png","gif","jpeg","pdf");
	$checkOk = true;
//	move_uploaded_file($upload_img["tmp_name"],$no_img);
	if(!empty($upload_img["tmp_name"])){
		if($upload_img["size"]>10000000){
				$checkOk=false;		
		}
		else{
			$ckfile = getimagesize($upload_img["tmp_name"]);
			if($ckfile !== false) {
				if(!in_array($type_img,$format_img)){
					$checkOk=false;		
				}
				else{
					$checkOk = true;
				}
			}

		}
		if($checkOk){
			if(move_uploaded_file($upload_img["tmp_name"],$path_img)){
				
				update_cat($cat_parent,$cat_name,$cat_path,$path_img,$cat_description,$post_day,$conn,$id_cat);
			}
		}
		else{
			update_cat($cat_parent,$cat_name,$cat_path,$path_img,$cat_description,$post_day,$conn,$id_cat);
		}
	}
	else{
		update_cat($cat_parent,$cat_name,$cat_path,$db_img,$cat_description,$post_day,$conn,$id_cat);
	}
		}
		
	}
}
	else{
		echo "<strong style='color: red;'>Danh mục không tồn tại hoặc đã bị xóa</strong>";exit();
	}
}

xóa
if(isset($_GET["delete"])&&isset($_GET["tag_ID"])){
	$id_cat_del = $_GET["tag_ID"];
	delete_cat($id_cat_del,$conn);
}
xóa nhiều
if(isset($_POST['btn-delete-top']) ||isset($_POST['btn-delete-bottom'])){
		if (isset($_POST['name-tag'])){
			foreach( $_POST['name-tag'] as $value) {
				delete_cat($value,$conn);
		   }
		}
		header("location:category-type.php?taxonomy=product_cat&post_type=product_cat");
		
	}
 lọc danh mục 
if(isset($_POST['filter-action'])){
    $cat_id = $_POST['product_cat'];
	$sql = "SELECT * FROM `tb_category` where c_ID=$cat_id";
	$query= mysqli_query($conn,$sql);
	$num = mysqli_num_rows($query);
	if($num == 1){	
		$row = mysqli_fetch_assoc($query);
		$db_slug =  $row["c_slug"];
		header("location:category-type.php?taxonomy=product_cat&post_type=product_cat&product_cat=$db_slug");
	}
	 
}
 lọc theo keyword
if(isset($_POST['keyword_cat']) && $_POST['keyword_cat'] ){
	$keyword = $_POST['keyword_cat'];
	if(isset($_POST['search-cat'])){
		 header("location:category-type.php?taxonomy=product_cat&post_type=product_cat&search=$keyword");
	}
	
}<?php */?>

<!--
// in hiện thị view
if(isset($_GET["taxonomy"])&&isset($_GET["post_type"])){
	?>
-->
	<div id="admin-content">
				<div class="adminbar">
					<ul class="bar-title">
									<li><a href="#">Trang Chủ</a><i class="fad fa-caret-right"></i></li>
									<li><a href="#">Quản Trị Danh Mục</a><i class="fad fa-caret-right"></i></li>
									<li><a href="#">Danh Mục Sản Phẩm</a><i class="fad fa-caret-right"></i></li>
					</ul>
				</div>
				<div id="admin-title">
					<h2 style="font-weight: 550;">
					 Danh Mục Sản Phẩm
					</h2>
				<?php /*?>	<?php
										if(isset($_GET["search"])){
											$link_key = addslashes($_GET['search']);
											echo "<span>Kết quả tìm kiếm cho: <strong>$link_key</strong></span>";
										}
										
	
									?><?php */?>
				  </div>
			  <style>

				.cat_parent {
					width: 200px;
					padding: 4px;
					padding-left: 10px;
				}
				input:focus,textarea:focus {
				outline: none;
				}
				  #cat_name,#cat_path{
					  box-shadow:0px 0px 2px 0px #fff;
					border:1px #393939 solid;
				  }
				  .post-into-more tr td img{
					  width: 50px;
				  }
				  .display-delete{
					opacity: 0;transition: 0.2s ease all;z-index: -1;
				}

				  
					</style>
			<form action="category-type.php?taxonomy=product" method="post" enctype="multipart/form-data" id="form_add_cat">
				<div class="post-body">
					<div class="postbody-content">	
						<div class="info-post-more">
							<div class="post-into-more" >
								<table border="0" class="table-info active" >
									<tr>
										<td class="cat-name" >
										Tên Danh Mục
										</td>
										<td>
											<input type="text" id="cat_name" name="cat-name">
										</td>
									</tr>
									<tr>
										<td class="cat-path">
										Đường Đẫn
										</td>
										<td>
										<input type="text" name="cat-path" id="cat_path">
										</td>
									</tr>
									<tr>
										<td class="code-post">
										Mô Tả
										</td>
										<td>
											<textarea name="cat-description" style="width: 100%; height: 200px;"  id="cat-description" rows="5" cols="40"></textarea>
										
										</td>
										
									</tr>
									<tr>
										<td class="cat-parent">
										Danh Mục Cha
										</td>
										<td>
										<select name="cat-parent" class="cat_parent">
											<option value="-1">Trỗng</option>
										
											<?php /*?><?php foreach(category_list($arr_cat) as $value){ ?>
											<option class='<?='cat-level-'.$value["level"];?>' value='<?=$value["c_ID"]?>' >
												<?=str_repeat('&rarr; ',$value["level"]).$value['c_name'];?>
											</option>
											<?php } ?><?php */?>
										</select>
										</td>
										
									</tr>
									<tr>
										<td class="code-post">
										Ảnh Danh Mục
										</td>
										<td>
										<input type="file" id="choose-img" accept="image/*" value='' name="upload-img">
										</td>
										<td>
											<img src='' />
										</td>
										
									</tr>
									<tr >
										<td></td>
										<td >
											<button style="padding: 7px;" type="submit" name="cat-add" id="add_cat"><i class="fas fa-plus-circle" style="margin-right: 5px;"></i>THÊM MỚI</button>
										</td>
									
									</tr>
								</table>
							</div>
								 
						</div>
					</div>
				</div>
			</form>
		<form action="" method="post">
			<div class="admin-body" style="padding-top: 20px;">
						<div class="adminbody-content">
							<div class="posts-filter">
								<ul class="display-db">
									<li>Tổng Danh Mục ()</li>
									<li class="search-box">
										<input type="search" id="search-input" name="keyword_cat" placeholder="Nhập tên danh mục ">
										<input type="submit" id="btn-search-cat" name="search-cat" value="Tìm Kiếm">
									</li>
									
								</ul>
								<div class="fitle-fast" id="fiter-cat">
									<div class="display-delete">
										<button type="submit" id="btn-delete-top" value="Áp dụng" name="btn-delete-top">
											<img src="images/Delete-Button.png" width="30" height="30"/>
										</button>
									</div>
									<select name="product_cat" id="product_cat" class="dropdown_product_cat">
										<option value="-1">Trỗng</option>
											<?php /*?><?php foreach(category_list($arr_cat) as $value){ ?>
											<option class='<?='cat-level-'.$value["level"];?>' value='<?=$value["c_ID"]?>' >
												<?=str_repeat('&rarr; ',$value["level"]).$value['c_name'];?>
											</option>
											<?php } ?><?php */?>
									</select>
									<input type="submit" name="filter-action" id="post-query-submit" class="button" value="Lọc">
								</div>
							</div>
						</div>
				</div>
				<div class="adminlist-category">
							<div class="category-table">
								<table width="100%" border="0" style="border: 1px solid #616161;" class="list-category">
									<thead style="background: #FFFFFF; border: 1px solid #616161;">
											<tr>
												<td id="cbox" class="manage-column column-cb check-column" style="will-change: auto;">
													<input id="cb-select-all-1" type="checkbox">
												</td>
												<th scope="col" id="thumb" class="manage-column column-thumb">
													<span class="wc-image tips">Ảnh</span>
												</th>
												<th scope="col" id="name" class="manage-column column-name column-primary sortable desc">
													<a href="#"><span>Tên Danh Mục</span><span class="sorting-indicator"></span></a>
												</th>
												<th scope="col" id="path" class="manage-column column-path sortable desc">
													<a href="#">Đường Dẫn<span class="sorting-indicator"></span></a>
												</th>
												<th scope="col" id="desc" class="manage-column column-desc sortable desc">
													<a href="#">
														<span>Mô Tả</span><span class="sorting-indicator"></span>
													</a>
												</th>
												<th scope="col" id="date" class="manage-column column-date sortable asc">
													<a href="#">
													<span>Ngày</span><span class="sorting-indicator"></span></a>
												</th>
												<th scope="col" id="featured" class="manage-column column-function" style="cursor: help;">
													<span class="wc-featured parent-tips" data-tip="Chức Năng">Chức Năng</span>
												</th>
										  </tr>
										</thead>
										<?php /*?><tbody id='the-list'>
										<?php
										if(isset($_GET['product_cat'])){
											$link_slug = $_GET['product_cat'];
											$sql = "SELECT * FROM `tb_category` where c_slug='$link_slug'";
											$query= mysqli_query($conn,$sql);
											$arr_filter =  mysqli_fetch_all($query,MYSQLI_ASSOC);
											foreach($arr_filter as $value ){  ?>
										<tr id="tag-<?=$value['c_ID']?>">
										  <th class="checkbox-all">
											  <p class="txt-name-hide"><?=$value['c_name']?></p>
											  <input id="" type="checkbox" name='name-tag[]' value="<?=$value['c_ID']?>" class="name-tag">	
										  </th>
										  <td class=" column-thumb">
											<a class="img-category " href="#">
												<img src='<?=$value['c_image'];?>'/> 
											</a>
										  </td>
										  <td class=" column-name">
											  <strong>
												<p class="c-name">
													<?=$value['c_name'];?>
												</p>
											  </strong>
										  </td>
											<td class="column-path">
											  <strong>
												<a href='<?=$link_cat.$value['c_slug'];?>' class="c-path">
													<?=$value['c_slug'];?>
												</a>
											  </strong>
										  </td>
											<td class=" column-desc">
											  <strong>
												<a href="#" class="c-desc">
													<?=$value['c_desc'];?>
												</a>
											  </strong>
										  </td>
										  <td class="column-date">
											  <p class="time-create "><?=$value['c_postday'];?></p>
										  </td>

										  <td class="column-function">
											<div class="icon-function">
											  <a href='<?=$link_cat.$value['c_slug'];?>'><i class="fad fa-eye"></i></a>
											  <a href='<?='?taxonomy=product_cat&edit=product_cat&tag_ID='.$value['c_ID'];?>'><i class="fad fa-edit"></i></a>
											 <a href='<?='?taxonomy=product_cat&delete=product_cat&tag_ID='.$value['c_ID'];?>'><i class="fad fa-copy"></i></a>
											 <a href='<?='?taxonomy=product_cat&delete=product_cat&tag_ID='.$value['c_ID'];?>'><i class="fad fa-trash-alt" onClick="return confirm('Bạn có chắc chắn xóa danh mục này không?');" ></i></a>

											</div>
										  </td>
										</tr>
											<?php
												} mysqli_free_result($query);
											}
										
										else{
											foreach(category_list($arr_cat) as $value){
											?>
										<tr id="tag-<?=$value['c_ID']?>" class="level-<?=$value['level']?>">
										  <th class="checkbox-all">
											  <p class="txt-name-hide"><?=$value['c_name']?></p>
											  <input id="" type="checkbox" name='name-tag[]' value="<?=$value['c_ID']?>" class="name-tag">	
										  </th>
										  <td class=" column-thumb">
											<a class="img-category " href="#">
												<img src='<?=$value['c_image'];?>'/> 
											</a>
										  </td>
										  <td class=" column-name">
											  <strong>
												<p class="c-name">
													<?=str_repeat('&rarr; ',$value["level"]).$value['c_name'];?>
												</p>
											  </strong>
										  </td>
											<td class="column-path">
											  <strong>
												<a href='<?=$link_cat.$value['c_slug'];?>' class="c-path">
													<?=$value['c_slug'];?>
												</a>
											  </strong>
										  </td>
											<td class=" column-desc">
											  <strong>
												<a href="#" class="c-desc">
													<?=$value['c_desc'];?>
												</a>
											  </strong>
										  </td>
										  <td class="column-date">
											  <p class="time-create "><?=$value['c_postday'];?></p>
										  </td>

										  <td class="column-function">
											<div class="icon-function">
											  <a href='<?=$link_cat.$value['c_slug'];?>'><i class="fad fa-eye"></i></a>
											  <a href='<?='?taxonomy=product_cat&edit=product_cat&tag_ID='.$value['c_ID'];?>'><i class="fad fa-edit"></i></a>
											 <a href='<?='?taxonomy=product_cat&delete=product_cat&tag_ID='.$value['c_ID'];?>'><i class="fad fa-copy"></i></a>
											 <a href='<?='?taxonomy=product_cat&delete=product_cat&tag_ID='.$value['c_ID'];?>'><i class="fad fa-trash-alt" onClick="return confirm('Bạn có chắc chắn xóa danh mục này không?');" ></i></a>

											</div>
										  </td>
										</tr>
										<?php }mysqli_free_result($query); }
										// in theo từ khóa
											if(isset($_GET["search"])){
											$link_key = addslashes($_GET['search']);
											$sql = "SELECT * FROM `tb_category` WHERE c_name LIKE '%$link_key%'";
											$query = mysqli_query($conn,$sql);
											$arr_search = mysqli_fetch_all($query,MYSQLI_ASSOC);
											$num = mysqli_num_rows($query);
											if($num>=1){
											foreach($arr_search as $value){
												?>
										<tr id="tag-<?=$value['c_ID']?>">
										  <th class="checkbox-all">
											  <p class="txt-name-hide"><?=$value['c_name']?></p>
											  <input id="" type="checkbox" name='name-tag[]' value="<?=$value['c_ID']?>" class="name-tag">	
										  </th>
										  <td class=" column-thumb">
											<a class="img-category " href="#">
												<img src='<?=$value['c_image'];?>'/> 
											</a>
										  </td>
										  <td class=" column-name">
											  <strong>
												<p class="c-name">
													<?=$value['c_name'];?>
												</p>
											  </strong>
										  </td>
											<td class="column-path">
											  <strong>
												<a href='<?=$link_cat.$value['c_slug'];?>' class="c-path">
													<?=$value['c_slug'];?>
												</a>
											  </strong>
										  </td>
											<td class=" column-desc">
											  <strong>
												<a href="#" class="c-desc">
													<?=$value['c_desc'];?>
												</a>
											  </strong>
										  </td>
										  <td class="column-date">
											  <p class="time-create "><?=$value['c_postday'];?></p>
										  </td>

										  <td class="column-function">
											<div class="icon-function">
											  <a href='<?=$link_cat.$value['c_slug'];?>'><i class="fad fa-eye"></i></a>
											  <a href='<?='?taxonomy=product_cat&edit=product_cat&tag_ID='.$value['c_ID'];?>'><i class="fad fa-edit"></i></a>
											 <a href='<?='?taxonomy=product_cat&delete=product_cat&tag_ID='.$value['c_ID'];?>'><i class="fad fa-copy"></i></a>
											 <a href='<?='?taxonomy=product_cat&delete=product_cat&tag_ID='.$value['c_ID'];?>'><i class="fad fa-trash-alt" onClick="return confirm('Bạn có chắc chắn xóa danh mục này không?');" ></i></a>

											</div>
										  </td>
										</tr>
											<?php
											}mysqli_free_result($query);
											}
											else{
												echo "Không tìm thấy kết quả tìm kiếm";
											}
										}
											?>
									</tbody><?php */?>
								</table>


							</div>
							<div class="display-delete">
										<button type="submit" id="btn-delete-bottom" value="Áp dụng" name="btn-delete-bottom">
											<img src="images/Delete-Button.png" width="30" height="30"/>
										</button>
							</div>
<!--
							<div class="edit-list">
									<a href="#"><button style="padding: 7px 15px; border: 1px #002BFE solid;"><i class="fad fa-check" #2FFF00tyle="margin-right: 5px;"></i>Lưu</button></a>
							</div>
-->
						</div>
				</form>
		</div>
