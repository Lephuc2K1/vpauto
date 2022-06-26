<?php /*?><?php
	require_once("link.php");
	require_once("function.php");
	$sql= "SELECT * FROM `tb_products_type`";
	$query = mysqli_query($conn,$sql);
	$total_type = mysqli_num_rows($query);

// thêm
if(isset($_POST["type-add"])){
	$type_name = trim($_POST["type-name"]);
	$type_path =convert_link(trim($_POST["type-path"]));
	$type_description= $_POST["type-description"];
	date_default_timezone_set("Asia/Ho_Chi_Minh");
	$post_day=date("Y-m-d H:i:s");
	$sql = "INSERT INTO `tb_products_type`(`pt_name`, `pt_slug`, `pt_desc`, `pt_postday`) VALUES ('$type_name','$type_path','$type_description','$post_day')";
	$query = mysqli_query($conn,$sql);
	header("location:product-type.php?post_type=product");
}
//sửa
if(isset($_GET['edit'])&&isset($_GET["tag_ID"])){
	$id_type = $_GET["tag_ID"];
		$sql="SELECT * FROM `tb_products_type` WHERE pt_ID='$id_type'";
		$query =  mysqli_query($conn,$sql);
		$row =  mysqli_fetch_array($query);
		$num =  mysqli_num_rows($query);
	if($num == 1){
		$db_name = $row['pt_name'];
		$db_path = $row['pt_slug'];
		$db_id = $row['pt_ID'];
		if(isset($_POST["type-save"])){
		$type_name = $_POST["type-name"];
		$type_path =convert_link(trim($_POST["type-path"]));
		$type_description= $_POST["type-description"];
		date_default_timezone_set("Asia/Ho_Chi_Minh");
		$post_day=date("Y-m-d H:i:s");
		$sql = "UPDATE `tb_products_type` SET `pt_name`='$type_name',`pt_slug`='$type_description ',`pt_desc`='$type_path',`pt_postday`='$post_day' WHERE pt_ID='$db_id'";
		$query = mysqli_query($conn,$sql);
		header("location:product-type.php?post_type=product");
		}
	}
	else{
		echo "<strong style='color: red;'>Loại không tồn tại hoặc đã bị xóa</strong>";exit();
	}
}

//xóa
if(isset($_GET["delete"])&&isset($_GET["tag_ID"])){
	$id_type_del = $_GET["tag_ID"];
	$sql ="DELETE FROM `tb_products_type` WHERE pt_ID = '$id_type_del'";
	$query = mysqli_query($conn,$sql);
	header("location:product-type.php?post_type=product");
}
//xóa nhiều
if(isset($_POST['btn-delete-top']) ||isset($_POST['btn-delete-bottom'])){
		if (isset($_POST['name-tag'])){
			foreach( $_POST['name-tag'] as $value) {
				$sql= "DELETE FROM `tb_products_type` WHERE pt_ID = $value";
				$query = mysqli_query($conn,$sql);
		   }
		}
		header("location:product-type.php?post_type=product");
		
	}
// lọc theo keyword
if(isset($_POST['keyword_type']) && $_POST['keyword_type'] ){
	$keyword = $_POST['keyword_type'];
	if(isset($_POST['search-type'])){
		 header("location:product-type.php?post_type=product&search=$keyword");
	}
	
}<?php */?>

	<div id="admin-content" style="">
				<div class="adminbar">
					<ul class="bar-title">
									<li><a href="#">Trang Chủ</a><i class="fad fa-caret-right"></i></li>
									<li><a href="#">Quản Trị Danh Mục</a><i class="fad fa-caret-right"></i></li>
									<li><a href="#">Phân Chia Sản Phẩm</a><i class="fad fa-caret-right"></i></li>
					</ul>
				</div>
				<div id="admin-title">
					<h2 style="font-weight: 550;">
					 Phân Chia Sản Phẩm
					</h2>
					<?php /*?><?php
										if(isset($_GET["search"])){
											$link_key = addslashes($_GET['search']);
											echo "<span style='position: absolute;'>Kết quả tìm kiếm cho: <strong>$link_key</strong></span>";
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
		<div class="body-parent row">
			<form action="product-type.php?post_type=product" method="post" enctype="multipart/form-data" id="form_add_type" class=" col-lg-4">
				<div class="post-body">
					<div class="postbody-content">	
						<div class="info-post-more" style="border: none;margin-top: 40px;">
							<div class="post-into-more" >
								<table border="0" class="table-info active" >
									<tr>
										<td>
											<input type="text" id="type_name" name="type-name" placeholder="Nhập tên loại">
										</td>
									</tr>
									<tr>
										<td>
										<input type="text" name="type-path" id="type_path" placeholder="Đường dẫn tính">
										</td>
									</tr>
									<tr>
										<td>
											<textarea name="type-description" style="width: 100%; height: 200px;" id="type-description" rows="5" cols="40" placeholder="Mô tả"></textarea>
										</td>
										
									</tr>
									<tr >
										<td >
											<button style="padding: 7px;" type="submit" name="type-add" id="add_type"><i class="fas fa-plus-circle" style="margin-right: 5px;"></i>THÊM MỚI</button>
										</td>
									
									</tr>
								</table>
							</div>
								 
						</div>
					</div>
				</div>
			</form>
			<form action="" class="col-lg-8" method="post">
				<div class="wrap-list ">
					<div class="adminlist-category">
					<div class="admin-body" style="padding-top: 20px;">
						<div class="adminbody-content">
							<div class="posts-filter">
								<ul class="display-db">
									<li>Tổng Danh Mục ()</li>
										<li class="search-box">
												<input type="search" id="search-input" name="keyword_type" placeholder="Nhập tên loại sản phẩm ">
												<input type="submit" id="btn-search-type" name="search-type" value="Tìm Kiếm">
											</li>
								</ul>
								<div class="fitle-fast" id="fiter-cat">
									<div class="display-delete">
										<button type="submit" id="btn-delete-top" value="Áp dụng" name="btn-delete-top">
											<img src="images/Delete-Button.png" width="30" height="30"/>
										</button>
									</div>
								</div>
							</div>
						</div>
				</div>
						<div class="category-table">
										<table width="100%" border="0" style="border: 1px solid #616161;" class="list-category">
											<thead style="background: #FFFFFF; border: 1px solid #616161;">
													<tr>
														<td id="cbox" class="manage-column column-cb check-column" style="will-change: auto;">
															<input id="cb-select-all-1" type="checkbox">
														</td>
														<th scope="col" id="name" class="manage-column column-name column-primary sortable desc">
															<a href="#"><span>Tên</span><span class="sorting-indicator"></span></a>
														</th>
														<th scope="col" id="path" class="manage-column column-path sortable desc">
															<a href="#">Đường Dẫn</a></th>
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
												if(isset($_GET["search"])){
													$link_key = addslashes($_GET['search']);
													$sql = "SELECT * FROM `tb_products_type` WHERE pt_name LIKE '%$link_key%'";
													$query = mysqli_query($conn,$sql);
													$num = mysqli_num_rows($query);
													if($num>=1){
													while($value = mysqli_fetch_assoc($query)){
												?>
										<tr id="tag-<?=$value['pt_ID']?>">
												  <th class="checkbox-all">
													  <p class="txt-name-hide"><?=$value['pt_name']?></p>
													  <input id="" type="checkbox" name='name-tag[]' value="<?=$value['pt_ID']?>" class="name-tag">	
												  </th>
												  <td class=" column-name">
													  <strong>
														<p class="c-name">
															<?=$value['pt_name'];?>
														</p>
													  </strong>
												  </td>
													<td class="column-path">
													  <strong>
														<a href='<?=$link_type.$value['pt_slug'];?>' class="c-path">
															<?=$value['pt_slug'];?>
														</a>
													  </strong>
												  </td>
													<td class=" column-desc">
													  <strong>
														<a href="#" class="c-desc">
															<?=$value['pt_desc'];?>
														</a>
													  </strong>
												  </td>
												  <td class="column-date">
													  <p class="time-create "><?=$value['pt_postday'];?></p>
												  </td>

												  <td class="column-function">
													<div class="icon-function">
													  <a href='<?=$link_type.$value['pt_slug'];?>'><i class="fad fa-eye"></i></a>
													  <a href='<?='?edit=product_cat&tag_ID='.$value['pt_ID'];?>'><i class="fad fa-edit"></i></a>
													 <a href='<?='?delete=product_cat&tag_ID='.$value['pt_ID'];?>'><i class="fad fa-trash-alt" onClick="return confirm('Bạn có chắc chắn xóa danh mục này không?');" ></i></a>

													</div>
												  </td>
												</tr>
											<?php
											} mysqli_free_result($query);
											}
											else{
												echo "Không tìm thấy kết quả tìm kiếm";
											}
										}
										else{
													while($value = mysqli_fetch_assoc($query)){
													?>
												<tr id="tag-<?=$value['pt_ID']?>">
												  <th class="checkbox-all">
													  <p class="txt-name-hide"><?=$value['pt_name']?></p>
													  <input id="" type="checkbox" name='name-tag[]' value="<?=$value['pt_ID']?>" class="name-tag">	
												  </th>
												  <td class=" column-name">
													  <strong>
														<p class="c-name">
															<?=$value['pt_name'];?>
														</p>
													  </strong>
												  </td>
													<td class="column-path">
													  <strong>
														<a href='<?=$link_type.$value['pt_slug'];?>' class="c-path">
															<?=$value['pt_slug'];?>
														</a>
													  </strong>
												  </td>
													<td class=" column-desc">
													  <strong>
														<a href="#" class="c-desc">
															<?=$value['pt_desc'];?>
														</a>
													  </strong>
												  </td>
												  <td class="column-date">
													  <p class="time-create "><?=$value['pt_postday'];?></p>
												  </td>

												  <td class="column-function">
													<div class="icon-function">
													  <a href='<?=$link_type.$value['pt_slug'];?>'><i class="fad fa-eye"></i></a>
													  <a href='<?='?edit=product_cat&tag_ID='.$value['pt_ID'];?>'><i class="fad fa-edit"></i></a>
													 <a href='<?='?delete=product_cat&tag_ID='.$value['pt_ID'];?>'><i class="fad fa-trash-alt" onClick="return confirm('Bạn có chắc chắn xóa danh mục này không?');" ></i></a>

													</div>
												  </td>
												</tr>
												<?php } mysqli_free_result($query); }
													?>
											</tbody><?php */?>
										</table>


									</div>
						<div class="display-delete">
												<button type="submit" id="btn-delete-bottom" value="Áp dụng" name="btn-delete-bottom">
													<img src="images/Delete-Button.png" width="30" height="30"/>
												</button>
									</div>
					</div>
				</div>
			</form>
		</div>
	</div>	