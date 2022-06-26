<div id="admin-content" >
	<div class="adminbar">
					<ul class="bar-title">
									<li><a href="#">Trang Chủ</a><i class="fad fa-caret-right"></i></li>
									<li><a href="#">Quản Trị Danh Mục</a><i class="fad fa-caret-right"></i></li>
									<li><a href="post-new?post-type?product">Tất Cả Sản Phẩm</a><i class="fad fa-caret-right"></i></li>
					</ul>
				</div>
				<div id="admin-title">
					<h2 style="font-weight: 550;">
					Tất Cả Sản Phẩm
					</h2>
				  </div>
				<div class="admin-body">
					<div class="adminbody-content">
						<div class="posts-filter">
							<ul class="display-db">
								<li><a href="#">Tổng Sản Phẩm (số lượng)</a></li>
								<li><a href="#">Đã Xuất Bản</a></li>
								<li><a href="#">Đã Xóa</a></li>
								<li class="search-box">
									<input type="search" id="search-input" placeholder="Tìm kiếm ở đây">
									<input type="submit" id="btn-search-input" value="Tìm Kiếm">
								</li>
								<li id="add-pr" style="position: absolute;right: 0;">
									<a href="post-new.php?post_type=product"><button style="padding: 7px;"><i class="fas fa-plus-circle" style="margin-right: 5px;"></i>THÊM MỚI</button></a>
								</li>
							</ul>
							<div class="fitle-fast">
								<select name="status" id="product_cat" class="dropdown_status">
									<option value="" selected="selected">Tác Vụ</option>
									<option class="showed" value="da-xuat-ban">Đã Xuất Bản(số lượng)</option>
									<option class="deleted" value="thung-rac">Thùng Rác(số lượng)</option>

								</select>
								<input type="submit" id="btn-status" value="Áp dụng">
								<select name="product_cat" id="product_cat" class="dropdown_product_cat">
									<option value="" selected="selected">Chọn danh mục</option>
									<option class="level-0" value="chua-phan-loai">Chưa phân loại&nbsp;&nbsp;(số lượng)</option>
									<option class="level-0" value="honda">HONDA(số lượng)</option>
									<option class="level-1" value="honda-jazz">&#45;&#45; Honda Jazz (số lượng)</option>
									<option class="level-1" value="hondacivi">&#45;&#45;  Honda civic(số lượng)</option>
								</select>
								<select name="product_type" id="product_type" class="dropdown_product_type">
									<option value="" selected="selected">Loại Sản Phẩm</option>
									<option class="chua-phan-loai" value="chua-phan-loai">Chưa phân loại(số lượng)</option>
									<option class="pro-new" value="thoi-trang-nam">Mới Về</option>
									<option class="pro-vip" value="pro_vip">Nổi Bật Nhất</option>
									<option class="pro-hot" value="pro_new">Hót Nhất</option>
									<option class="pro-0%" value="pro_0%">Trả Góp</option>
								</select>
								<select name="product_contry" id="product_contry" class="dropdown_product_contry">
									<option value="" selected="selected">Nước Sản Xuất</option>
									<option class="contry-null" value="chua-phan-loai">Chưa phân loại&nbsp;&nbsp;(số lượng)</option>
									<option class="contry-jp" value="honda">Nhật Bản(số lượng)</option>
									<option class="contry-us" value="honda-jazz">Mỹ (số lượng)</option>
								</select>
								<input type="submit" name="filter_action" id="post-query-submit" class="button" value="Lọc">		</div>
						</div>
					</div>
				</div>
				<div class="adminlist-products">
					<div class="products-table">
						<table width="100%" border="0" style="border: 1px solid #616161;" class="list-products">
							<thead style="background: #FFFFFF; border: 1px solid #616161;">
									<tr>
										<td id="cb" class="manage-column column-cb check-column">
											<input id="cb-select-all-1" type="checkbox">
										</td>
										<th scope="col" id="thumb" class="manage-column column-thumb">
											<span class="wc-image tips">Ảnh</span>
										</th>
										<th scope="col" id="name" class="manage-column column-name column-primary sortable desc">
											<a href="#"><span>Tên</span><span class="sorting-indicator"></span></a>
										</th>
										<th scope="col" id="sku" class="manage-column column-sku sortable desc">
											<a href="#">Mã<span class="sorting-indicator"></span></a>
										</th>
										<th scope="col" id="is_in_stock" class="manage-column column-is_in_stock">Kho</th>
										<th scope="col" id="price" class="manage-column column-price sortable desc">
											<a href="#">
												<span>Giá</span><span class="sorting-indicator"></span>
											</a>
										</th>
										<th scope="col" id="product_cat" class="manage-column column-product_cat">Danh mục</th>
										<th scope="col" id="featured" class="manage-column column-featured" style="cursor: help;">
											<span class="wc-featured parent-tips" data-tip="Loại Sản Phẩm">Loại</span>
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
								<tbody id='the-list'>
								<tr>
							      <th class="checkbox-all check-column">
									  <p class="txt-name-hide">Tên Sản Phẩm</p>
									  <input id="" type="checkbox" name='name-tag[]'>	
							      </th>
								  <td class=" column-thumb">
									<a class="img-products " href="#">
										<img src="../img/Product/Honda/edit/Honda CR-V 2020.png"/> 
									</a>
							  	  </td>
								  <td class=" column-name">
									  <strong>
										<a href="#" class="info-name">
											Honda CR-v 2020
										</a>
									  </strong>
								  </td>
								  <td class="column-sku">
									<p class="pro-code ">
										Hcr20
									</p>
								 </td>
								  <td class="column-is_in_stock">
									  <p class="stock-all">Có Sẵn</p>
								 </td>
								  <td class="column-price">
									  <p class="pro-price ">400 triệu</p>
								  </td>
								  <td class="column-product_cat">
									  <a class="pro-category "  href="#">Honda</a>
								  </td>
								  <td class="products-type column-featured">
<!--
									<ul>
										<li class="products-type-item--check-box">
											<span>
												<label>
													<input type="checkbox" id="type-check-null" >
													<i class="fa"></i>
													<p>Chưa Phân Loại</p>
												</label>
											</span>
										</li>
										<li class="products-type-item--check-box">
											<span>
												<label>
													<input type="checkbox" id="type-check-hot" >
													<i class="fa"></i>
													<p>Nổi Bật</p>
												</label>
											</span>
										</li>
										<li class="products-type-item--check-box">
											<span>
												<label >
													<input type="checkbox" id="type-check-hot"  >
													<i class="fa"></i>
													<p>New<p>
												</label>
											</span>
										</li>
										<li class="products-type-item--check-box">
											<span>
												<label >
													<input type="checkbox" id="type-check-hot" >
													<i class="fa"></i>
													<p>Hót Nhất</p>
												</label>
											</span>
										</li>
										<li class="products-type-item--check-box">
											<span>
												<label >
													<input type="checkbox" id="type-check-hot" >
													<i class="fa"></i>
													<p>0%</p>
												</label>
											</span>
										</li>
									</ul>
-->
									<ul class="product-type">
										<li class="product-type-item">
											Chưa Phân Loại, Nổi Bật, Mới Nhất, Hót nhất
										</li>  
									</ul>
								  </td>
								  <td class="column-date">
									  <p class="time-create ">1:1:2020</p>
								  </td>

								  <td class="column-function">
									<div class="icon-function">
									  <a href="#"><i class="fad fa-eye"></i></a>
									  <a href="#"><i class="fad fa-edit"></i></a>
									  <a href="#"><i class="fad fa-copy"></i></a>
									  <a href="#"><i class="fad fa-trash-alt"></i></a>
									  
									</div>
								  </td>
							</tr>
									
							</tbody>
						</table>
						

					</div>
					<div class="edit-list">
							<a href="#"><button style="padding: 7px 15px; border: 1px #002BFE solid;"><i class="fad fa-check" #2FFF00tyle="margin-right: 5px;"></i>Lưu</button></a>
					</div>
				</div>
	
			</div>
 