<?php /*?><?php
function($data,$conn){
	$sql = "INSERT INTO `tb_products`(`p_name`, `p_image`, `p_image_list`, `p_price`, `p_year`, `p_content`, `p_short_desc`, `p_inventory`, `p_feature`, `p_fuel`, `p_gear`, `p_engine`, `p_production`, `p_slug`, `p_keyword`, `pc_ID`, `attribute_ID`, `pt_ID`, `li_ID`) VALUES ('')";
	return(mysqli_query($conn,$sql));
}
if(isset($_POST["btn-post"])){
	$data = array(
		'name' => $_POST["post-title"],
		'code' => $_POST["code-pr"],
		'slug' => convert_link(trim($_POST["post-title"])),
//		'price' =>isset($_POST["price-pr"])? number_format($_POST["price-pr"],0, '', '.') :0,
		'keyword' =>$_POST["keyword-pr"],
		'year' => $_POST["year-pr"],
		'gear' => $_POST["gear-pr"],
		'fuel' => $_POST["fuel-pr"],
		'content' => $_POST["content"],
		'short-content' => $_POST["short-content"],
		'product-stock' => $_POST["product-stock"],
		'product-cat' => isset($_POST["product-cat"]) ? $_POST["product-cat"] : "" ,
		'product-type' => isset($_POST["product-type"]) ? $_POST["product-type"] : "" ,
	);
	var_dump($data["slug"]);exit();
	if((isset($_POST["product-cat"]))&&$_POST["product-cat"]){
		$pr_category = $_POST["product-cat"];//Danh mục sản phẩm
		foreach($pr_category as $value){
			echo $value;
		}
//		exit();
	}
//		if(isset($_POST["product-type"])&&$_POST["product-type"]){
//		$pr_type = $_POST["product-type"];//Loại sản phẩm
//		foreach($pr_type as $value){
//			echo $value;
//		}
//		exit();
//	}
	
}

if(isset($_GET["post_type"])){
	?><?php */?>
	<div id="admin-content">
				<div class="adminbar">
					<ul class="bar-title">
									<li><a href="#">Trang Chủ</a><i class="fad fa-caret-right"></i></li>
									<li><a href="#">Quản Trị Danh Mục</a><i class="fad fa-caret-right"></i></li>
									<li><a href="#">Thêm Mới Sản Phẩm</a><i class="fad fa-caret-right"></i></li>
					</ul>
				</div>
				<div id="admin-title">
					<h2 style="font-weight: 550;">
					  Thêm Mới Sản Phẩm
					</h2>
				  </div>
			  <style>
		
			  </style>
			<form action="" method="post" id="post_pro" enctype="multipart/form-data">
				
				<div class="post-body row">
					<div class="postbody-content col-lg-9">
						<div class="title-wrap">
							<div class="post-title">
								<label class="tiltle-in-input" style="display: none;">Tên Sản Phẩm</label>
								<input type="text" name="post-title" id="title" value="" placeholder="Nhập Tên Sản Phẩm" >
							</div>
						</div>
						<div class="content-wrap row">
							<div class="info-post-more col-lg-6">
								<div class="post-title-info">
									<div class="header-title title-info-more">
										<span>
											Dữ liệu về sản phẩm
										</span>
									</div>
								</div>
								<div class="post-into-more" style="border-top: none;" >
									<div class="nav-tab-more">
										<ul class="nav-tab">
											<li class="tab-item-more active">Cơ Bản</li>
											<li class="tab-item-more">Nâng Cao</li>
										</ul>
									</div>
									<table border="0" class="table-info active" >
										<tr>
											<td class="code-post">
											Mã:
											</td>
											<td>
											<input type="text" name="code-pr">
											</td>
										</tr>
										<tr>
											<td class="code-post">
											Giá:
											</td>
											<td>
											<input type="text" name="price-pr">
											</td>
										</tr>

										<tr>
											<td class="code-post">
											Từ Khóa:
											</td>
											<td>
											<input type="text" name="keyword-pr">
											</td>
										</tr>
										<tr>
											<td class="code-post">
											Thuộc tính:
											</td>
											<td>
													<div class="checkbox_type"> 
														<?php /*?><?php
		$sql = "SELECT * FROM `tb_products_type`";
		$query = mysqli_query($conn,$sql);
		while($row = mysqli_fetch_assoc($query)){


														?>
														<div class="type-type-wrap">
															<span>
																<label>
																	<input type="checkbox" name="product-type[]" id="type-<?=$row["pt_slug"]?>" value='<?=$row["pt_ID"]?>'  >
																	<p><?=$row["pt_name"]?></p>
																</label>
															</span>
														</div>
														<?php } ?><?php */?>
													</div>
											</td>

										</tr>
										<tr>
											<td class="code-post">
											Trạng thái:
											</td>
											<td>
											<select name="product-stock" id="product_stock" class="dropdown_product_contry">
												<option value="1" id="yes-stock" selected="selected">Có Sẵn</option>
												<option id="no-stock" value="0">Chưa Về</option>
											</select>
											</td>
										</tr>
									</table>

									<table border="0" class="table-info" >

										<tr>
											<td class="year-post">
											Năm:
											</td>
											<td>
											<input type="number" name="year-pr">
											</td>
										</tr>


										<tr>

											<td class="gear-post">
											Hộp Số:
											</td>
											<td>
											<input type="text" name="gear-pr">
											</td>
										</tr>
										<tr>
											<td class="fuel-post">
											Nhiên Liệu
											</td>
											<td>
											<select name="fuel-pr" id="productfuel" class="dropdown_product_fuel">
												<option value="" selected="selected" value="fuel-xang">Động cơ xăng</option>
												<option class="fuel-diesel" value="fuel-diesel">Động cơ diesel</option>
												<option class="fuel-dien" value="fuel-dien">Động cơ điện</option>

											</select>
											</td>
										</tr>
										<tr>
											<td class="code-post">
											Tính Năng:
											</td>
											<td>
											<select name="product_contry" id="product_contry" class="dropdown_product_contry">
												<option value="" selected="selected">Cơ Bản</option>
												<option class="contry-null" value="chua-phan-loai">Nâng Cao</option>
												<option class="contry-null" value="chua-phan-loai">Pro</option>

											</select>
											</td>
										</tr>
										<tr>
											<td class="code-post">
											Màu:
											</td>
											<td>
											<select name="product_contry" id="product_contry" class="dropdown_product_contry">

												<option value="" selected="selected">Xanh</option>
												<option class="contry-null" value="chua-phan-loai">Đỏ</option>
												<option class="contry-null" value="chua-phan-loai">Vàng</option>

											</select>
											</td>
										</tr>
									</table>
								</div>	 
							</div>
							<div class="category-wrap col-lg-6">
								<div class="post-title-category">
									<div class="header-title title-category">
										<span>
											Danh mục sản phẩm
										</span>
									</div>
								</div>
								<div class="product-cat">
									<div class="checkbox_cat"> 
						<?php /*?>								<?php
		$sql = "SELECT * FROM `tb_category`";
		$query = mysqli_query($conn,$sql);
		$arr_cat = mysqli_fetch_all($query,MYSQLI_ASSOC);
		foreach(category_list($arr_cat) as $value){


														?>
														<div class="cat-wrap">
															<span>
																<label>
																	<input type="checkbox" id="product-cat-<?=$value["c_ID"]?>"  value='<?=$value["c_ID"]?>' name="product-cat[]" >
																	<p><?=str_repeat('&rarr; ',$value["level"]).$value['c_name'];?></p>
																</label>
															</span>
														</div>
														<?php } mysqli_free_result($query); ?>
													</div><?php */?>
								</div>
							</div>
						</div>
						
						<div class="content-edit col-lg-12">
							<div class="content-wrap">
								<div class="header-title title-content">
									<span>
										Nội dung
									</span>
								</div>
								<div id="content-editor">
									<input value="" name="content" id="content">
								</div>
							</div>
						
						</div>
						<div class="short-content-edit col-lg-12">
							<div class="short-content-wrap">
								<div class="header-title title-content-short">
									<span>
										Mô tả ngắn
									</span>
								</div>
								
								<div id="short-content-editor">
									<input value="" name="short-content" id="short-content">
								</div>
							</div>
						
						</div>
					</div>
					<style>
						input#btn-post:hover,input#btn-post-add:hover,input#btn-temp:hover{
								background: white;
													color: #0a34ff;
						}
						.dropdown_status li:first-child {
							text-align: center;
							background: white !important;
							color: #0a34ff !important;
						}
						input#btn-post,input#btn-post-add,input#btn-temp,.dropdown_status li:first-child {
											padding: 10px;
											border: 1px #3F3F3F solid;
											width: 130px;
											border-radius: 10px;
											background: #0a34ff;
											color: white;
							    margin: 10px;
													
									}
					a#btn-view {
							color: #0a34ff;
						margin: auto 0;
						}
					</style>
					
					
				
				</div>
				<div class="post-slidebar-container col-lg-3">
						<div class=" slidebar-wrap">
							<div class="post-slide-title">
								<div class="header-title title-show-hide">
									<span>
										Tình Trạng 
									</span>
								</div>
								<ul class="dropdown_status">
									<li>
										<a href="#" id='btn-view'>Xem thử</a>
									</li>
									<li>
										<input type="submit"  id='btn-temp' name="btn-temp"  value="Lưu nháp">
									</li>
									<li>
										<input type="submit"  id='btn-post' name="btn-post"  value="Đăng sản phẩm">
									</li>
									<li>
										<input type="submit"  id='btn-post-add' name="btn-post-add"  value="Đăng và thêm">
									</li>
								</ul>
							</div>
							<div class="post-slide-title">
								<div class="header-title title-img">
									<span>
										Ảnh đại diện 
									</span>
								</div>
								<div id="img-body" class="img-post">
									<input type="file" id="choose-img">
									<img src="images/Honda CR-V 2020.png"/>
								</div>
							</div>
							<div class="post-slide-title">
								<div class="header-title title-img">
									<span>
										Danh sách ảnh
									</span>
								</div>
								<div id="img-list" class="img-post">
									<input type="file" id="select-img" multiple="multiple">
									<div id="img-list-wrap">
										<img src="images/Honda CR-V 2020.png" class="col-lg-4"/>
										<img src="images/Honda CR-V 2020.png" class="col-lg-4"/>
										<img src="images/Honda CR-V 2020.png" class="col-lg-4"/>
										<img src="images/Honda CR-V 2020.png" class="col-lg-4"/>
										<img src="images/Honda CR-V 2020.png" class="col-lg-4"/>
										<img src="images/Honda CR-V 2020.png" class="col-lg-4"/>
										
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>	
			</form>
		</div>