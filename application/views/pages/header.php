
<header id="header">
<div class="header">
<!--		header v1-->
<!--
		<div class="container">
			<div class="header--v1">
				<div class="header--v1--left">
					<i class="fa fa-hand-point-right"><strong style="margin-left: 5px;">Đăng kí lái thử</strong></i>
				</div>
				<div class="header--v1--center">
					<strong style="font-size: 20px">WELLCOM VPOTO</strong>
				</div>
				<div class="header--v1--right">
					<div class="hd--v1-icon">
						<i class="fab fa-facebook" title="facebook"></i>
						<i class="fab fa-pinterest" title="pinterest"></i>
						<i class="fab fa-linkedin-in" title="linlkedin"></i>
						<i class="fab fa-twitter-square" title="twitter"></i>
						<i class="fab fa-instagram" title="intagram"></i>
						<i class="fab fa-youtube" title="youtube"></i>
					</div>
				</div>
			</div>
		</div>
-->
<!--		header v2 logo, li�n h? -->

	<div class="header--v2">
		<div class="container">
          <div class="row">
			<div class="logo col-6">
                <div id="logo">
                   <img src="public/images/logo/vpauto.png" width="35%" alt="vpauto.com.vn"/>
                </div>
			</div>
			<div class="header--v2--right col-6 d-none d-lg-block d-xl-block" >
               <ul class="hd--v2--icon" style="margin: 25px 0px;" >
					<li class="icon-hd"><div class="icon-hd-items"><i class="fad fa-envelope"></i></div><div class="icon-hd-items"><div>Mail</div><div>cskh@vpauto.com.vn</div></div></li>
					<li class="icon-hd"><div class="icon-hd-items"><i class="fad fa-phone-volume"></i></div><div class="icon-hd-items"><div>Hotline</div><div>077.888.9999</div></div></li>
					<li class="icon-hd"><div class="icon-hd-items"><i class="fad fa-user-clock"></i></div><div class="icon-hd-items"><div>Th�?i Gian</div><div>T2-T7 | 8h-17h</div></div></li>
                </ul>
			</div>
			<div class="header--v2--right header--v2--right_mobile col-6 d-lg-none d-xl-none" >
               <ul class="hd--v2--icon" style="" >
					<li class="icon-hd open-search-mobile">
						<div class="icon-hd-items">
							<i class="fa-solid fa-magnifying-glass"></i>
						</div>
				   	</li>
				  	<div class="search" style="margin-top:20%;">
						<div class="container">
							<div class="search--txt textsearch">
								<input type="text" name="search" placeholder="Search" id="inputsearch">
								<button type="submit" class="btn btn-search">
									<i class="fa fa-search"></i>
								</button>
								<button id="btn-close-search" class="btn btn-close-search">
										<i class="fa-solid fa-xmark"></i>
								</button>
							</div>
						</div>	
					</div>	
					<li class="icon-hd">
						<div class="icon-hd-items">
							<div class="account" style="cursor:pointer;">
<!--						đăng nhập thông thư�?ng-->
							<?php 
							if( (isset($_SESSION['access_token'])) || (isset($user['user_name'])) || (isset($_SESSION['access_tokenfb'])) || (isset($_COOKIE['rm_name'])) ){ ?>
							<div id="acc_hv">
								<i class="fa fa-user-circle padding-icon-menu" ></i>
								<span id="acc-name" class="active" style="z-index: 99999;">	
									<?php 
										if(isset($_SESSION['access_token'])){
											echo $_SESSION['familyName'];
										}
										if(isset($_SESSION['access_tokenfb'])) {
											echo $_SESSION['userData']['last_name'];
										}

										if(isset($user['user_name'])){
											echo $user['user_name'];
										}
										if(isset($_COOKIE['rm_name'])){
											echo $_COOKIE['rm_name'];
										}


									?>
								</span>
							</div>	
							<ul class="dropdown-acc">
								<li><a href="acc/logout.php">�?ĂNG XUẤT</a></li>						
							</ul>
							<?php }
							else {?>
							<a href="tai-khoan/"><i class="fa fa-user-circle padding-icon-menu"></i></a>
							<span id="acc-name"></span>
							<ul class="dropdown-acc">
<!--								<li style="border-bottom: 2px #F90004 solid;"><a href="acc/account.php">Tài Khoản</a></li>-->
									<li><a href="tai-khoan/">TÀI KHOẢN</a></li>						
<!--								<li><a href="acc/account.php">�?ĂNG K�?</a></li>						-->
							</ul>
							<?php } ?>
						</div>
						</div>
				   </li>
				   <li class="icon-hd"><div class="icon-hd-items"><i class="fa-solid fa-bars" id="menu-block"></i></div></li>
                </ul>
			</div>
			
          </div>
		</div>
	</div>
	<div class="header--v3  d-none d-lg-block d-xl-block">
		<div class="container">
			<div id="menu">
					<ul class="menu">
							<li class="menu-item" ><div class="menu-item-text"><a href="<?=DOMAIN_NAME?>" >TRANG CHỦ</a></div></li>
							<li class="menu-item"><div class="menu-item-text"><a href="" >GIỚI THIỆU</a></div></li>
							<li class="menu-item menu-item-product">
								<div class="menu-item-text"><a href="index.php?controller=san-pham" >SẢN PHẨM</a></div>
								<div class="mega-dropdown">
									<div class="container" >
										<div id="wrap-mega-dropdown">
											<div class="mega-company-car">
												<div class="mega-left">
													<i class="fad fa-chevron-square-left"  onclick="Back();"></i>
												</div>
												<div class="mega-company-row">
																						   <div class="mega-company-slide-tap" >
																								<div class="mega-company-slide">
																								   <div class="mega-company mega-company-Honda"><a href="#"><img src="public/images/logo-nsx-text/Honda.png" alt=""/></a></div>
																								   <div class="mega-company mega-company-Suzuki"><a href="#"><img src="public/images/logo-nsx-text/SUZUKI.png" alt=""/></a></div>
																								   <div class="mega-company mega-company-Toyota"><a href="#"><img src="public/images/logo-nsx-text/TOYOTA.png" alt=""/></a></div>
																								   <div class="mega-company mega-company-Chevrolet"><a href="#"><img src="public/images/logo-nsx-text/Chevrolet.png" alt=""/></a></div>
																								</div>
																								<div class="mega-company-slide">
																									<div class="mega-company mega-company-Ford"><a href="#"><img src="public/images/logo-nsx-text/Ford.png" alt=""/></a></div>
																									<div class="mega-company mega-company-Vinfast"><a href="#"><img src="public/images/logo-nsx-text/VinFast.png" alt=""/></a></div>
																									<div class="mega-company mega-company-Mercedes"><a href="#"><img src="public/images/logo-nsx-text/Mercedes-Benz.png" alt=""/></a></div>
																									<div class="mega-company mega-company-BMW"><a href="#"><img src="public/images/logo-nsx-text/BWM.png" alt=""/></a></div>
																								</div>
																								<div class="mega-company-slide">
																									<div class="mega-company mega-company-Audi"><a href="#"><img src="public/images/logo-nsx-text/AUDI.png" alt=""/></a></div>
																									<div class="mega-company mega-company-Hyundai"><a href="#"><img src="public/images/logo-nsx-text/Hyundai.png" alt=""/></a></div>
																									<div class="mega-company mega-company-Volvo"><a href="#"><img src="public/images/logo-nsx-text/Volvo.png" alt=""/></a></div>
																									<div class="mega-company mega-company-Volvo"><a href="#"><img src="public/images/logo-nsx-text/INFINITI.png" alt=""/></a></div>
																								</div>
																						  </div>
																						</div>
												<div class="mega-right" style="">
														<i class="fad fa-chevron-square-right" onclick="Next();"></i>
												</div>

		<!--										ẩn b�? tư vấn báo giá -->
		<!--
											  <div class="mega-quote-row">
												  <div class="mega-quote">
														<a href="#"><i class="fad fa-comments-alt"></i><strong>Tư vấn | Báo Giá</strong></a>
													</div>
											  </div>
		-->
											</div>
											<div class="mega-tab-content">
												<div class="tab-content">
													<div class="tap-0 tab-row2 active row">

							<div class="col-sp col-md-3 col-sm-4 col-6">
									<div class="infobox" >
	<!--
										<div class="frim-box">
											<h5><strong>HONDA</strong></h5>
										</div>
	-->

										<div class="img-box">
											<a href="#"><img src="public/upload/sanpham/accord-honda.png"  alt="" /></a>
										</div>
										<div class="icon-heart">
											<i class="fas fa-heart-circle"></i>
										</div>
										<div class="info-product">
											<div class="name-box">
												<a href="#">Honda CR-V 2020</a>
											</div>
											<div class="price-box">
												<span><i class="far fa-usd-circle"></i> 1.000.000.000 vnđ</span>
											</div>
										</div>
								  </div>
								</div>	
							<div class="col-sp col-md-3 col-sm-4 col-6">
									<div class="infobox" >
	<!--
										<div class="frim-box">
											<h5><strong>HONDA</strong></h5>
										</div>
	-->

										<div class="img-box">
											<a href="#"><img src="public/upload/sanpham/Tuning-Car-PNG-Photo.png"  alt="" /></a>
										</div>
										<div class="icon-heart">
											<i class="fas fa-heart-circle"></i>
										</div>
										<div class="info-product">
											<div class="name-box">
												<a href="#">Honda CR-V 2020</a>
											</div>
											<div class="price-box">
												<span><i class="far fa-usd-circle"></i> 1.000.000.000 vnđ</span>
											</div>
										</div>
								  </div>
								</div>
							<div class="col-sp col-md-3 col-sm-4 col-6">
									<div class="infobox" >
	<!--
										<div class="frim-box">
											<h5><strong>HONDA</strong></h5>
										</div>
	-->

										<div class="img-box">
											<a href="#"><img src="public/upload/sanpham/accord-honda.png"  alt="" /></a>
										</div>
										<div class="icon-heart">
											<i class="fas fa-heart-circle"></i>
										</div>
										<div class="info-product">
											<div class="name-box">
												<a href="#">Honda CR-V 2020</a>
											</div>
											<div class="price-box">
												<span><i class="far fa-usd-circle"></i> 1.000.000.000 vnđ</span>
											</div>
										</div>
								  </div>
								</div>	
							<div class="col-sp col-md-3 col-sm-4 col-6">
									<div class="infobox" >
	<!--
										<div class="frim-box">
											<h5><strong>HONDA</strong></h5>
										</div>
	-->

										<div class="img-box">
											<a href="#"><img src="public/upload/sanpham/Tuning-Car-PNG-Photo.png"  alt="" /></a>
										</div>
										<div class="icon-heart">
											<i class="fas fa-heart-circle"></i>
										</div>
										<div class="info-product">
											<div class="name-box">
												<a href="#">Honda CR-V 2020</a>
											</div>
											<div class="price-box">
												<span><i class="far fa-usd-circle"></i> 1.000.000.000 vnđ</span>
											</div>
										</div>
								  </div>
								</div>

						</div>
												</div>
											</div>
											<div class="mega-dropdown-bottom">
												<div class="click-promotion"><a href="">Chương Trình Khuyễn Mại</a></div>
												<div class="click-all-product"><a href="">Xem Tất Cả Xe</a></div>
												<div class="click-quote-consultation"><a href="">Tư Vấn | Báo Giá</a></div>
											</div>
										</div>
								  </div>	
								</div>
							</li>
							<li class="menu-item"><div class="menu-item-text" style=""><a style="" href="" >BẢNG GI�?</a></div></li>
							<li class="menu-item"><div class="menu-item-text"><a href="" >TRẢ GÓP</a></div></li>
							<li class="menu-item"><div class="menu-item-text"><a href="index.php?controller=tin-tuc" >TIN TỨC</a></div></li>
							<li class="menu-item"><div class="menu-item-text"><a href="index.php?controller=lien-he" >LIÊN HỆ</a></div></li>
					</ul>
				</div>	
			<div class="hd--v3--right">
						<div class="hd-v3-drive">
                                                    <div class="test-auto animate__animated animate__headShake animate__delay-1s animate__repeat-2 animate__slow "><a href="#"><i class="fa-solid fa-steering-wheel"></i><span>Lái thử ngay</span></a></div>
						</div>
						<div class="search-forcus">
							<a href="javascipt:;" class="open-search" ><i class="fa-solid fa-magnifying-glass"></i></a>
							<div class="search">
								<div class="container">
									<div class="search--txt textsearch">
										<input type="text" name="search" placeholder="Search" id="inputsearch">
										<button type="submit" class="btn btn-search">
										<i class="fa fa-search"></i>
										</button>
										<button id="btn-close-search" class="btn btn-close-search">
										<i class="fa-solid fa-xmark"></i>
										</button>
									</div>
								</div>	
							</div>	
						</div>
						<div class="account" style="cursor:pointer;">
<!--						đăng nhập thông thư�?ng-->
							<?php 
							if( (isset($_SESSION['access_token'])) || (isset($user['user_name'])) || (isset($_SESSION['access_tokenfb'])) || (isset($_COOKIE['rm_name'])) ){ ?>
							<div id="acc_hv">
								<i class="fa fa-user-circle padding-icon-menu" ></i>
								<span id="acc-name" class="active" style="z-index: 99999;">	
									<?php 
										if(isset($_SESSION['access_token'])){
											echo $_SESSION['familyName'];
										}
										if(isset($_SESSION['access_tokenfb'])) {
											echo $_SESSION['userData']['last_name'];
										}

										if(isset($user['user_name'])){
											echo $user['user_name'];
										}
										if(isset($_COOKIE['rm_name'])){
											echo $_COOKIE['rm_name'];
										}


									?>
								</span>
							</div>	
							<ul class="dropdown-acc">
								<li><a href="acc/logout.php">�?ĂNG XUẤT</a></li>						
							</ul>
							<?php }
							else {?>
							<a href="index.php?controller=tai-khoan"><i class="fa fa-user-circle padding-icon-menu"></i></a>
							<span id="acc-name"></span>
							<ul class="dropdown-acc">
<!--								<li style="border-bottom: 2px #F90004 solid;"><a href="acc/account.php">Tài Khoản</a></li>-->
									<li><a href="tai-khoan/">TÀI KHOẢN</a></li>						
<!--								<li><a href="acc/account.php">�?ĂNG K�?</a></li>						-->
							</ul>
							<?php } ?>
						</div>
						<div class="shopping">
						<i class="fad fa-shopping-cart "></i>
						</div>
						<div class="Language--Translation">
							<a href="tai-khoan/"> <i class="fad fa-globe "></i><span>VN | EN</span></a>
						</div>
				 </div>	
        </div>
	</div>
	<style>
		#header--menu--mobile .warp-menu-mobile {
     	    box-shadow: -3px 7px 7px 3px #000000;
			background-color: #F5F6FA;
			height: 100%;
			position: fixed;
			z-index: 9999999;
			top: 0;
			width: 50%;
			 transform: translateX(-110%); 
			transition: all 0.5s ease;
			    overflow: scroll;
}
		#menu-mobile .menu-mobile-item{
			    border-bottom: 1px #b1b0b0 solid;
    			display: flex;
			flex-flow: row wrap;
		}
		#menu-mobile .menu-mobile-item a{
			        display: flex;
    padding: 15px 0px 15px 15px;
    text-transform: uppercase;
    font-weight: 600;
    position: relative;
			    flex-grow: 1;
		}
		#menu-mobile .menu-mobile-item:last-child a{
			flex-grow: 0;
		}
		#menu-mobile .menu-mobile-item:last-child a i{
			font-size: 20px;
		}
		#menu-mobile .menu-mobile-item:last-child{
			border-bottom: none;
		}
		button.toggle {
      		 width: 45px;
			position: relative;
			background: none;
			border: none;
			transition:  all 0.2s ease;
		}
		.menu-mobile-child .menu-mobile-child-item a{
			padding: 10px 0px 10px 20px !important;
		}
		#menu-mobile .menu-mobile-item a:hover{
			   color: red;
		}
		#menu-mobile .menu-mobile-item button.toggle i{
			    font-size: 18px;
				position: absolute;
				top: 50%;
				transform: translateY(-50%);
				right: 15px;
		}
		.menu-close i{
			font-size: 30px;
			padding-left: 15px;
			cursor: pointer;	
		}
		div#menu-close {
			cursor: pointer;
		}
		ul.menu-mobile-child {
			width: 100%;
			/* position: fixed; */
			position: absolute;
			 opacity: 0; 
			transform: translateX(-100%);
			
			transition: all 0s ease;
		}
		.menu-mobile-item.active ul.menu-mobile-child{
			position: inherit;
			opacity: 1;
			transform: translateX(0%);
			transition:  all 0.2s ease;
		}
		.menu-mobile-item.active .toggle{
			transform: rotate(-180deg);
		}
		.bgr-menu-mobile.active {
    background: #0000008a;
    width: 100%;
    height: 100%;
    position: fixed;
    z-index: 10;
	overflow: hidden;
}
				.bgr-fix {
    background: #00000091;
    width: 100%;
    height: 100%;
    position: fixed;
    z-index: 777777;
	overflow: hidden;
}
			</style>

</div>
	<div id="header--menu--mobile" class="d-lg-none d-xl-none">
			<div class="warp-menu-mobile">
				<div class="menu-close" id="menu-close">
				<i class="fa-solid fa-xmark" ></i></div>
				<ul id="menu-mobile">
					<li class="menu-mobile-item"><a href="index.php">Trang Chủ</a></li>
					<li class="menu-mobile-item"><a href="">Giới Thiệu</a></li>
					<li class="menu-mobile-item" aria-expanded='false'>
						<a href="index.php?controller=san-pham">Sản Phẩm</a>
						<button class="toggle"><i class="fa-solid fa-caret-down"></i></button>
						
						<ul class="menu-mobile-child">
							<li class="menu-mobile-child-item">
								<a href="">Honda</a>
							</li>
							<li class="menu-mobile-child-item">
								<a href="">Honda</a>
							</li>
							<li class="menu-mobile-child-item">
								<a href="">Honda</a>
							</li>
							
						</ul>
					</li>
					<li class="menu-mobile-item" aria-expanded='false'>
						<a href="">Sản Phẩm</a>
						<button class="toggle"><i class="fa-solid fa-caret-down"></i></button>
						
						<ul class="menu-mobile-child">
							<li class="menu-mobile-child-item">
								<a href="">Honda</a>
							</li>
							<li class="menu-mobile-child-item">
								<a href="">Honda</a>
							</li>
							<li class="menu-mobile-child-item">
								<a href="">Honda</a>
							</li>
							
						</ul>
					</li>
					
					<li class="menu-mobile-item"><a href="index.php?controller=tai-khoan">Tài Khoản</a></li>
					<li class="menu-mobile-item"><a href="index.php?controller=tin-tuc">Tin Tức</a></li>
					<li class="menu-mobile-item"><a href="index.php?controller=lien-he">Liên Hệ</a></li>
					<li class="menu-mobile-item">
						<a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
						<a href="https://mail.google.com/"><i class="far fa-envelope" ></i></a>
						<a href="tel:0379291580"><i class="fas fa-phone-alt"></i></a>
						
					</li>
				</ul>
			</div>
	</div>
</header>