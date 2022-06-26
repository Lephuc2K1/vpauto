<style>
    @media (max-width: 575.98px) {
      .form-check-inline{
        display: block;
      }
    }
.input-group select{
  flex: 1 1 auto;
    width: 1%;
}
.col-auto{
  width: 100%;
}

.close-fr{
    position: absolute;
    top: -10px;
    left: 0px;
    cursor: pointer;
}
.close-fr i{
  font-size: 30px;
	color: red;
}
.title-form{
 margin: auto;
}
.title-form h3{
  font-weight: 600;
}
.text-fr{
  padding-bottom: 20px; text-align: center;
}
.btn-primary{
  color: white;
  background: #CA2B2D;
  border: #CA2B2D 1px solid;
}
.btn-primary:hover{
  color: #272727;
  background: white;
  border: #272727 solid 1px;
}
	#form > form > div:first-child{
		 transform: translate(-50%, -50%);
    left: 50%;
    top: 50%;
    position: fixed;
    padding: 15px 30px;
    background: white;
    box-shadow: -1px 0px 8px 0px #b4b1b1;
	z-index: 999999;
    border-radius: 10px;
	}
	#form > form{
		display: none;
	}
	#form > form{
		display: none;
	}
	#form > form.active{
		display: block;
	}
</style>
  <div id="form">
  <form id="register-driver">
      <div class="row">
        <span class="close-fr"><i class="fa-solid fa-circle-xmark"></i></span>
        <div class="form-row align-items-center">
          <div class="title-form"><h3 style="font-weight:600;">ĐĂNG KÍ LÁI THỬ XE</h3></div>
          <div class="text-fr col-12" style="padding-bottom: 20px;"><span >Để trải nghiệm xe của chúng tôi quý khách vui lòng liên hệ theo SĐT <a style="font-weight:600; color:red;" href="tel:012345678">012345678</a> hoặc bạn có thể điền vào form dưới đây để chúng tôi có thể liên hệ tới bạn trong thời gian sớm nhất. Xin cảm ơn! </span></div>
          <div class="col-auto col-lg-6 col-sm-6">
            <label class="sr-only" for="inlineFormInputGroup">Tên</label>
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa-solid fa-user"></i></div>
              </div>
              <input type="text" class="form-control" id="namedriver" placeholder="Tên">
            </div>
          </div>
          <div class="col-auto col-lg-6 col-sm-6">
            <label class="sr-only" for="inlineFormInputGroup">Email</label>
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa-solid fa-envelope"></i></div>
              </div>
              <input type="text" class="form-control" id="emaildriver" placeholder="Gmail">
            </div>
          </div>
          <div class="col-auto col-lg-6 col-sm-6">
            <label class="sr-only" for="inlineFormInputGroup">SĐT</label>
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa-solid fa-phone"></i></div>
              </div>
              <input type="text" class="form-control" id="phonedriver" placeholder="Số điện thoại">
            </div>
          </div>
          <div class="col-auto col-lg-6 col-sm-6">
            <label class="sr-only" for="inlineFormInputGroup">Dòng xe</label>
            <!-- <label for="">Dòng xe</label> -->
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa-solid fa-car"></i></div>
              </div>
              <select name="carsdriver" id="carsdriver">
                <option value="no" selected="">Dòng xe</option>
                <option value="Sedan">Sedan</option>
                <option value="SUV">SUV – xe thể thao đa dụng</option>
                <option value="CUV">Crossover (CUV)</option>
                <option value="MPV">MPV / Minivan – xe đa dụng</option>
              </select>
            </div>
          </div>
          <div class="col-auto col-lg-6 col-sm-6">
            <label class="sr-only" for="inlineFormInputGroup">SĐT</label>
            <label for="">Ngày và giờ</label>
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa-solid fa-timer"></i></div>
              </div>
              <input type="datetime-local" class="form-control" id="timedriver">
            </div>
          </div>
          <div class="col-auto col-lg-6 col-sm-6">
            <label class="sr-only" for="inlineFormInputGroup">Địa điểm</label>
            <label for="">Địa điểm</label>
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa-solid fa-location-dot"></i></div>
              </div>
              <select name="mapriver" id="mapriver">
                <option value="Hanoi" selected="">TP Hà Nội</option>
                <option value="HCM">TP Hồ Chí Minh</option>
                <option value="Danang">TP Đà Nắng</option>
              </select>
            </div>
          </div>
          <div class="col-auto col-12">
              <label class="sr-only" for="inlineFormInputGroup">Ghi chú</label>
              <label for="">Ghi chú</label>
              <div class="input-group mb-2">
                <textarea style="max-height: 100px; min-height: 100px; width: 100%;" id="notedriver" type="text" rows="10" name="content"></textarea>
              </div>
          </div>
          <div class="col-auto col-12">
            <button type="submit" class="btn btn-primary mb-2">Gửi yêu cầu</button>
          </div>
        </div>
      </div>
  </form>
  <form id="register-baogia">
    <div class="row">
      <span class="close-fr"><i class="fa-solid fa-circle-xmark"></i></span>
      <div class="form-row align-items-center">
        <div class="title-form"><h3 style="font-weight:600; ">YÊU CẦU BÁO GIÁ</h3></div>
        <div class="text-fr col-12"><span >Để được báo giá đặc biệt quý khách vui lòng liên hệ theo SĐT <a style="font-weight:600; color:red;" href="tel:012345678">012345678</a> hoặc bạn có thể điền vào form dưới đây để chúng tôi có thể liên hệ tới bạn trong thời gian sớm nhất. Xin cảm ơn! </span></div>
        <div class="col-auto">
          <label class="sr-only" for="inlineFormInputGroup">Dòng xe</label>
          <label for="">Dòng xe <span style="color: red;">*</span></label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fa-solid fa-car"></i></div>
            </div>
            <select name="cars" id="carsdx">
              <option value="no" selected="">---- Dòng xe ----</option>
              <option value="Sedan">Sedan</option>
              <option value="SUV">SUV – xe thể thao đa dụng</option>
              <option value="CUV">Crossover (CUV)</option>
              <option value="MPV">MPV / Minivan – xe đa dụng</option>
            </select>
          </div>
        </div>
        <div class="col-auto" style="display: flex; padding: 7px;">
          <!-- <label for="">Hình thức thanh toán:</label> -->
          <div class="form-check-inline">
            <span>Hình thức thanh toán:</span>
            <div style="display:flex;">
              <span>
                <label style="display: flex; cursor: pointer;align-items: center;margin-bottom:0 !important; margin-left: 10px;">
                  <input type="radio" id="checked-rmber" style="width: 15px;" name="rmberacc" class="form-control">
                  <span style="margin-left: 5px;">Trả góp</span>
                </label>
              </span>
              <span>
                <label style="display: flex; cursor: pointer;align-items: center;margin-bottom:0 !important; margin-left: 10px;">
                  <input type="radio" id="checked-rmber" style="width: 15px;" name="rmberacc" class="form-control">
                    <span style="margin-left: 5px;">Trả hết</span>
                </label>
              </span>
            </div>
          </div>
          
        </div>
        <div class="col-auto col-lg-6 col-sm-6">
          <label class="sr-only" for="inlineFormInputGroup">Tên</label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fa-solid fa-user"></i></div>
            </div>
            <input type="text" class="form-control" id="namedriver" placeholder="Tên">
          </div>
        </div>
        <div class="col-auto col-lg-6 col-sm-6">
          <label class="sr-only" for="inlineFormInputGroup">Email</label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fa-solid fa-envelope"></i></div>
            </div>
            <input type="text" class="form-control" id="emaildriver" placeholder="Gmail">
          </div>
        </div>
        <div class="col-auto col-lg-6 col-sm-6">
          <label class="sr-only" for="inlineFormInputGroup">SĐT</label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fa-solid fa-phone"></i></div>
            </div>
            <input type="text" class="form-control" id="phonedriver" placeholder="Số điện thoại">
          </div>
        </div>
        <div class="col-auto col-lg-6 col-sm-6">
          <label class="sr-only" for="inlineFormInputGroup">Địa chỉ</label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fa-solid fa-location-dot"></i></div>
            </div>
            <input type="text" class="form-control" id="phonedriver" placeholder="Địa chỉ">
          </div>
        </div>
        <div class="col-auto col-12">
            <label class="sr-only" for="inlineFormInputGroup">Yêu cầu khác</label>
            <label for="">Yêu cầu khác</label>
            <div class="input-group mb-2">
              <textarea style="max-height: 50px; min-height: 50px; width: 100%; border: 1px solid rgb(102, 102, 102);" id="notedriver" type="text" rows="10" name="content"></textarea>
              </textarea>
            </div>
        </div>
        <div class="col-auto col-12">
          <button type="submit" class="btn btn-primary mb-2">Gửi yêu cầu</button>
        </div>
      </div>
    </div>
  </form>
</div>
<div id="send-email">
	<div class="container">
		<div class="row">
			<div class="text-send col-12 col-md-4 align-self-center">
				<h4 style="font-weight: 600;">
					ĐĂNG KÍ NHẬN THÔNG TIN
				</h4>
			</div>
			<div class="input-send col-12 col-md-8">
				<input id="email" placeholder="Nhập email của bạn vào đây." type="email"/>
				<div class="submit-send col-4">
					<input id="send" type="submit" value="Gửi Ngay"/>
				</div>
			</div>
			
		</div>	
	</div>
</div>
<footer id="footer">
	<div class="container">
		<div class="footer footerv1 ">
			<div class="row-footer row">
				<div class="col-footer col-md-3">
					<div class="logo-footer">
			   	 		<img src="public/images/logo/vpauto.png" width="1035" height="390" alt=""/>
					</div>
					<div class="text-ft">
						<span>Chúng tôi cam kết cung ứng các sản phẩm xe chất lượng giá tốt. Với phương châm chuyên nghiệp, uy tín và trách nhiệm.</span>
					</div>
					
				</div>
<!--
				<div class="col-footer col-footer-v2">
					<div class="menu-footer">
						<li><h4>MENU</h4></li>
						<li><a href="#">Trang chủ</a></li>
						<li><a href="#">Sản phẩm</a></li>
						<li><a href="#">Giới Thiệu </a></li>
						<li><a href="#">Bảng giá</a></li>
						<li><a href="#">Trả góp</a></li>
						<li><a href="#">Tin tức</a></li>
						<li><a href="#">Liên hệ</a></li>
					</div>
				</div>
-->
				<div class="col-footer col-md-2 col-sm-6">
					<div class="menu-footer">
						<li><h4>HỖ TRỢ</h4></li>
						<li><a href="#"> Dự toán chi phí</a></li>
						<li><a href="#"> Đăng ký lái thử</a></li>
						<li><a href="#">Hỗ trợ tài chính</a></li>
						<li><a href="#"> Yêu cầu báo giá</a></li>
					</div>
				</div>
				<div class="col-footer col-md-3 col-sm-6">
					<div class="menu-footer">
						<li><h4>DỊCH VỤ</h4></li>
						<li><a href="#"> Chương trình dịch vụ</a></li>
						<li><a href="#"> Chính sách bảo hành</a></li>
						<li><a href="#">Phụ tùng & Phụ kiện</a></li>
						<li><a href="#">  Chăm sóc khách hàng</a></li>
					</div>
				</div>
				<div class="col-footer col-md-4" style="">
					<h4 >KẾT NỐI VỚI CHÚNG TÔI</h4>
<!--
					<div class="internet">
						<h4 style="font-weight: 600;">KẾT NỐI VỚI CHÚNG TÔI</h4>
						<div style="margin-bottom: 10px;display: flex;">
							<li><a href="#"><i class="fab fa-facebook" style="color: blue;"></i></a></li>
							<li><a href="#"><i class="fab fa-whatsapp" style="color: greenyellow;"></i></a></li>
							<li><a href="#"><i class="far fa-at" style="color:orange;"></i></a></li>
							<li><a href="#"><i class="fab fa-pinterest" style="color: red;"></i></a></li>
							<li><a href="#"><i class="fab fa-instagram" style="color:hsla(281,88%,32%,1.00)"></i></a></li>
							<li><a href="#"><i class="fab fa-youtube" style="color: red;"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter-square" style="color:hsla(191,100%,50%,1.00)"></i></a></li>
						</div>
					</div>
-->
					<div class="text-map" style="text-align: justify;margin-top: 10px;">
							<span><i class="far fa-map-marker-alt"></i>VPĐD: Tầng 7, Toà nhà văn phòng T14 Khu Đô Thị Vinhomes, 458 Minh Khai, Khu đô thị Times City, Hai Bà Trưng, Hà Nội</span>
					</div>
					<div class="info">
						<div id="mail">
							<a href="cskh@vpauto.com.vn"><i class="fal fa-envelope"></i>cskh@vpauto.com.vn</a>
						</div>
						<div id="phone">
							<a href="tel:0778889999"><i class="fal fa-phone"></i>077.888.9999</a>
						</div>
						
						<div id="time">
						<i class="fal fa-clock"></i> Thứ 2 - Thứ 7 | 8:00 - 17:00
					</div>
					</iv>
			
				</div>

			</div>
				<div class="footer-v2 col-12">
				<div class="text-license">
					<span>Copyright 2021 © VPAUTO.COM.VN | All rights reserved</span>
				</div>
			</div>
		</div>
		</div>
	</div>
	<div id="auto-fix">
		<a href="javascipt:;" id="scrollTop" ><i class="far fa-arrow-circle-up"></i> </a>
		<style type="text/css">		
		</style>
		<div class="hotline-phone-ring-wrap">
			<div class="hotline-phone-ring">
				<div class="hotline-phone-ring-circle"></div>
				<div class="hotline-phone-ring-circle-fill"></div>
				<div class="hotline-phone-ring-img-circle">
					<a href="tel:0988333069" class="pps-btn-img">
						<img src="https://nocodebuilding.com/wp-content/uploads/2020/07/icon-call-nh.png" alt="Gọi điện thoại" width="50">
					</a>
				</div>
			</div>
				<div class="hotline-bar">
					<a href="tel:0379291580">
						<span class="text-hotline">0379291580</span>
					</a>
				</div>
		</div>
		<style>
.hotline-phone-ring-wrap {
	position: fixed;
    bottom: -20px;
    left: -20px;
    z-index: 9999;
}
.text-hotline{
	color: #fff !important;
}
.hotline-phone-ring {
  position: relative;
  visibility: visible;
  background-color: transparent;
  width: 110px;
  height: 110px;
  cursor: pointer;
  z-index: 11;
  -webkit-backface-visibility: hidden;
  -webkit-transform: translateZ(0);
  transition: visibility .5s;
  left: 0;
  bottom: 0;
  display: block;
}

.hotline-phone-ring-circle {
    width: 85px;
  height: 85px;
  top: 10px;
  left: 10px;
  position: absolute;
  background-color: transparent;
  border-radius: 100%;
  border: 2px solid #e60808;
  -webkit-animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
  animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
  transition: all .5s;
  -webkit-transform-origin: 50% 50%;
  -ms-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
  opacity: 0.5;
}
.hotline-phone-ring-circle-fill {
    width: 55px;
  height: 55px;
  top: 25px;
  left: 25px;
  position: absolute;
  background-color: rgba(230, 8, 8, 0.7);
  border-radius: 100%;
  border: 2px solid transparent;
  -webkit-animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
  animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
  transition: all .5s;
  -webkit-transform-origin: 50% 50%;
  -ms-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
}
.hotline-phone-ring-img-circle {
    background-color: #e60808;
    width: 33px;
  height: 33px;
  top: 37px;
  left: 37px;
  position: absolute;
  background-size: 20px;
  border-radius: 100%;
  border: 2px solid transparent;
  -webkit-animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
  animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
  -webkit-transform-origin: 50% 50%;
  -ms-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  justify-content: center;
}
.hotline-phone-ring-img-circle .pps-btn-img {
    display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
}
.hotline-phone-ring-img-circle .pps-btn-img img {
    width: 20px;
    height: 20px;
}
.hotline-bar {
  position: absolute;
  background: rgba(230, 8, 8, 0.75);
  height: 40px;
  width: 180px;
  line-height: 40px;
  border-radius: 3px;
  padding: 0 10px;
  background-size: 100%;
  cursor: pointer;
  transition: all 0.8s;
  -webkit-transition: all 0.8s;
  z-index: 9;
  box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.1);
  border-radius: 50px !important;
  /* width: 175px !important; */
  left: 33px;
  bottom: 37px;
  
}
.hotline-bar > a {
  color: #fff;
  text-decoration: none;
  font-size: 15px;
  font-weight: bold;
  text-indent: 50px;
  display: block;
  letter-spacing: 1px;
  line-height: 40px;
  font-family: Arial;
}
.hotline-bar > a:hover,
.hotline-bar > a:active {
  color: #fff;
}
@-webkit-keyframes phonering-alo-circle-anim {
  0% {
    -webkit-transform: rotate(0) scale(0.5) skew(1deg);
    -webkit-opacity: 0.1;
  }
  30% {
    -webkit-transform: rotate(0) scale(0.7) skew(1deg);
    -webkit-opacity: 0.5;
  }
  100% {
    -webkit-transform: rotate(0) scale(1) skew(1deg);
    -webkit-opacity: 0.1;
  }
}
@-webkit-keyframes phonering-alo-circle-fill-anim {
  0% {
    -webkit-transform: rotate(0) scale(0.7) skew(1deg);
    opacity: 0.6;
  }
  50% {
    -webkit-transform: rotate(0) scale(1) skew(1deg);
    opacity: 0.6;
  }
  100% {
    -webkit-transform: rotate(0) scale(0.7) skew(1deg);
    opacity: 0.6;
  }
}
@-webkit-keyframes phonering-alo-circle-img-anim {
  0% {
    -webkit-transform: rotate(0) scale(1) skew(1deg);
  }
  10% {
    -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
  }
  20% {
    -webkit-transform: rotate(25deg) scale(1) skew(1deg);
  }
  30% {
    -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
  }
  40% {
    -webkit-transform: rotate(25deg) scale(1) skew(1deg);
  }
  50% {
    -webkit-transform: rotate(0) scale(1) skew(1deg);
  }
  100% {
    -webkit-transform: rotate(0) scale(1) skew(1deg);
  }
}
@media (max-width: 768px) {
  .hotline-bar {
    display: none;
  }
}
</style>
		<div class="quote-wrap">
			<div class="quote">
				<div class="icon-wrap fr-quote">
					<a href="javascipt:;" class="pps-btn-icon">
						<i class="fa-solid fa-comment-quote"></i>
					</a>
				</div>
			</div>
			<div class="text-quote fr-quote">
				<span>BÁO GIÁ</span>
			</div>
		</div>
<style>
	.quote-wrap{
		position: fixed;
    bottom: -20px;
    right: 185px;
    z-index: 9999;
	}
	.quote{
  position: relative;
  visibility: visible;
  background-color: transparent;
/*  width: 110px;*/
  height: 110px;
  cursor: pointer;
  z-index: 11;
  -webkit-backface-visibility: hidden;
  -webkit-transform: translateZ(0);
  transition: visibility .5s;
  right: 0;
  bottom: 0;
  display: block;

	}
	.icon-wrap {
    background-color: #e60808;
    width: 33px;
  height: 33px;
  top: 37px;
  left: 37px;
  position: absolute;
  background-size: 20px;
  border-radius: 100%;
  border: 2px solid transparent;
  -webkit-animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
  animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
  -webkit-transform-origin: 50% 50%;
  -ms-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  justify-content: center;
}
.icon-wrap .pps-btn-icon {
    display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
}
.icon-wrap .pps-btn-icon i {
	color: white !important;
    font-size: 25px !important;
}
.text-quote {
  position: absolute;
  background: rgba(230, 8, 8, 0.75);
  height: 40px;
  width: 140px;
  line-height: 40px;
  border-radius: 3px;
  padding: 0 10px;
  background-size: 100%;
  cursor: pointer;
  transition: all 0.8s;
  -webkit-transition: all 0.8s;
  z-index: 9;
  box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.1);
  border-radius: 50px !important;
  /* width: 175px !important; */
  left: 33px;
  bottom: 37px;
  
}
.text-quote > span {
	color: white !important;
  text-decoration: none;
  font-size: 15px;
  font-weight: bold;
  text-indent: 35px;
  display: block;
  letter-spacing: 1px;
  line-height: 40px;
  font-family: Arial;
	z-index: 9;
}
.text-quote > span:hover,
.text-quote > span:active {
  color: #fff !important;
}
@media (max-width: 768px) {
  .text-quote {
    display: none;
  }
  .quote-wrap{
    right: 90px;
	}
}
	</style>
		<div class="icon-fix">
			<li><a href="https://www.facebook.com/"><img src="public/images/logo/facebook_ico.png" alt=""/></a></li>
<!--			<li><a href="https://www.facebook.com/"><i class="fab fa-facebook-messenger" style="color:#BA1FFC;"></i></a></li>-->
		 	<li><a href="https://mail.google.com/"><img src="public/images/logo/zalo_ico.png" alt=""/></a></li>
			<li><a href="tel:0379291580"><img src="public/images/logo/mail_ico.png" alt=""/></a></li>
<!--
			<li><a href="https://www.google.com/maps?ll=21.001149,105.816512&z=14&t=m&hl=vi&gl=US&mapclient=embed&q=Khu+%C4%91%C3%B4+th%E1%BB%8B+Royal+City+Th%C6%B0%E1%BB%A3ng+%C4%90%C3%ACnh+Thanh+Xu%C3%A2n+H%C3%A0+N%E1%BB%99i"><i class="fas fa-map-marker-alt"></i></a></li>
			<li><a href=""></a></li>
-->
		</div>
	</div>
	
</footer>

<!--
<script type="text/javascript" id="carousels-libs" >
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
-->



