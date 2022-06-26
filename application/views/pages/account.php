<?php 
$rm_user = (isset($_COOKIE['rm_email'])? $rm_user=$_COOKIE['rm_email']:"không có");
//gooogle kết nối
//	$loginURL = $gClient->createAuthUrl();
	
// faebook kết nối
//	$redirectURL = "https://localhost/testhtml/acc/fb-callback.php";
//	$permissions = ['email'];
//	$loginURLfb = $helper->getLoginUrl($redirectURL, $permissions);
?>
<!--	<a href="acc/g-callback.php"/>-->
	<style>
		body {
			background: url(public/images/imgbgr/Lovepik_com-500738259-ground-background-of-urban-highway.jpg) no-repeat center center fixed;
			background-size: cover;
			/* overflow: hidden; */
		}
	</style>
	<div class="page-account">
		<div class="logo-login">
	    <a href="<?=DOMAIN_NAME?>"><img src="public/images/logo/vpauto.png" alt=""/></a> </div>
	  <div class="tap-content"  >
			<ul class="tap-title">
				<li class="nav-item title-login active">
					<a id="tap-login" class="nav-tap">
						<span>
							LOGIN | ĐĂNG NHẬP
						</span>
					</a>
				</li>
				<li class="nav-item title-register">
					<a id="tap-register" class="nav-tap">
						<span>
							REGISTER | ĐĂNG KÍ
						</span>
					</a>
				</li>
			</ul>
		</div>
		<div id ="account" class="">
			<div class="from-resetpass">
				<a href="javascipt:;" id="backs"><i class="fas fas fa-long-arrow-left" style="font-size: 30px;"></i></a>
				<div class="title-forgetpass">
					<span> Quên Mật Khẩu</span>
				</div>
				<form method="post" id="forgetpass">
					<div class="form-group">
						<input type="text" placeholder="Email" id="rs_email" name="reset_email" class="form-control"/>
						<p id="message_resetpass"></p>
					</div>
					<div class="btn-login">
						<button type="button" id="btn-resetpass">Gửi</button>
					</div>
				</form>	
			</div>
			<div class="from-account active"  >
				<form method="post" onsubmit="" id="login">
					<div class="form-group">
						<input type="email" placeholder="Email" name="email" id="email" class="form-control"/>
					</div>
					<div class="form-group">
						<input type="password" id="password" placeholder="Password" name="password"/>
						<p id="message_login"></p>
					</div>
					<div class="remember">
						<div class="form-checked" >
							<span>
								<label style="display: flex; cursor: pointer;">
									<input type="checkbox" id="checked-rmber" style="width: 20px;" name="rmberacc" class="form-control">
										<span>Ghi nhớ tài khoản</span>
									</label>
							</span>
						</div>
						
						<div class="reset-account">
							<a id="reset-acc" href="javascipt:;">
							Quên mật khẩu
							</a>
						</div>
					</div>
					<div class="btn-login">
						<button type="button" id="btn-login">Đăng Nhập</button>
					</div>
					<div class="or-login">
						<div class="title-login-other" style="padding-bottom: 10px;">
							<span>
								Hoặc kết nối bằng
							</span>
						</div>
						<div class="row login-internet" >
							<div class="icon-login col-lg-6">
								<a href='<?php echo $loginURLfb ?>'>
									<span style="color: blue;"><i class="fab fa-facebook-f" ></i>faebook</span>
								</a>
							</div>
							<div class="icon-login col-lg-6">
								<a href='<?php echo $loginURL ?>'>
									<span style="color: red;"><i class="fab fa-google"></i>google</span>
								</a>
							</div>
						</div>
					</div>
					<div class="not-acc" style="text-align: center;padding-top: 10px;">
						<span>Chưa có tài khoản ?</span>
						<a href="#" id="register-fast">
							Đăng kí ngay
						</a>
					</div>
				</form>	
			</div>
			<div class="from-account" >
				<form method="post" id="register">
					<div class="form-group">
						<input type="text" placeholder="Name" name="rname" id="rname" value="" class="form-control" />
					</div>
					<div class="form-group">
						<input type="email" placeholder="Email" name="remail" id="remail" class="form-control"/>
					</div>
					<div class="form-group">
						<input type="password" id="rpassword" name="rpassword" placeholder="Password" class="form-control"/>
					</div>
					<div class="form-group">
						<input type="password" id="r2password" name="r2password" placeholder="Nhập lại Password" class="form-control"/>
						<p id="message_register"></p>
					</div>
					<div class="btn-register">
						<button type="button" id="btn-register">Đăng Kí</button>
					</div>
					<div class="or-login">
						<div class="title-login-other" style="padding-bottom: 10px;">
							<span>
								Hoặc kết nối bằng
							</span>
						</div>
						<div class="row login-internet" >
							<div class="icon-login col-lg-6">
								<a href='<?php echo $loginURLfb ?>'>
									<span><i class="fab fa-facebook-f"></i>faebook</span>
								</a>
							</div>
							<div class="icon-login col-lg-6">
								<a href='<?php echo $loginURL ?>'>
									<span style="color: red;"><i class="fab fa-google"></i>google</span>
								</a>
							</div>
						</div>
					</div>
					<div class="not-acc" style="text-align: center;padding-top: 10px;">
						<span>Đã có tài khoản | </span>
						<a href="#" id="login-fast">
							Đăng nhập ngay
						</a>
					</div>
				</form>	
			</div>
		</div>
	</div>

<div id="img-acc">
	<div id="img-box">
<!--    <img src="../img/imgbgr/bgr-home/login-logout.png" alt=""/> -->
	</div>
</div>
	<script type="text/javascript">

		// hàm gọi để chạy jqeo sau khi load trang
		$(document).ready(function(){
		// kiểm tra gmail có đúng định dang ko
		function validateEmail(email) {
		  var regex = /^([a-zA-Z])+([a-zA-Z0-9_.+-])+\@(([a-zA-Z])+\.+?(com|co|in|org|net|edu|info|gov|vekomy))\.?(com|co|in|org|net|edu|info|gov)?$/;
		  return regex.test(email);
		}
			
		// hàm gửi mail quên mật khẩu
		$('#btn-resetpass').click(function(){
//			alert("vào");
			var result =$('#message_resetpass');
			var rsemail= $('#rs_email').val();
			if(rsemail==""){
				result.html("*Vui lòng nhập email");
				result.css("color", "red");
				
			}
			else if(!validateEmail(rsemail)){
					 result.html("*Email không đúng định dạng"); result.css("color", "red");
				 }
			else{
				$.ajax({
				url: 'show_data.php',
				method:'post',
				
				data:$("#forgetpass").serialize(),
				success:function(response){
					if(response==1){
						result.css("color", "chartreuse");result.html("Kiểm tra email để đổi mật khẩu");
						$('#rs_email').focus().val("");
					}
					else{
						result.html("*Tài khoản không tồn tại");result.css("color", "red");
					 }
				},
				dataType:'text'
				
				
				
			})
			
			}
			
			
			
		})	
			
			
			
			// dăng kí
		
		$('#btn-register').click(function(){
			var rname = $('#rname').val();
			var remail =  $('#remail').val();
			var rpassword = $('#rpassword').val();
			var r2password =  $('#r2password').val();
			
			var result =$('#message_register');
			 if(rname == ""){
				result.html("*Vui lòng nhập tên");result.css("color", "red");
//				 return false;
			 }
			 else{
				  if(remail == ""){
					result.html("*Vui lòng nhập email");result.css("color", "red");
//					return false;
				 }
				 else if(!validateEmail(remail)){
					 result.html("*Email không đúng định dạng"); result.css("color", "red");
				 }
				 else{
					 
					if(rpassword == ""){
						result.html("*Vui lòng nhập pass");result.css("color", "red");
//						return false;
						}
					 else{
						 if(rpassword.length<6){
							result.html("*Pass phải >= 6 kí tự");result.css("color", "red");
//							 return false;
						}
						 else{
							if(r2password == ""){
								result.html("*Vui lòng nhập pass");result.css("color", "red");
//								return false;
							}
							 else{
								 if(r2password != rpassword){
									result.html("*Pass không khớp");result.css("color", "red");
//									 return false;
								 }
								 else{
								// onclik trong jqeo
								// cách gọi hàm ajax
								$.ajax({
									// gọi đến đường dẫn file php để sử lý các dữ liệu trong file
									url:"show_data.php",
									// chọn phương thức dể chuyền dữ liệu post hoặc get
									method: "post",
									// sử lý dữ liệu riêng lẻ trong from
						//			data:{
						//				
						//				email:$('#tên id').val(),
						//				.......
						//			}

									// sử lý tất cả dữ liệu có trong from có thuộc tính name
									data: $("#register").serialize(),//lấy toàn thông tin các fields trong form bằng hàm serialize của jquery
									success : function(response){
										// chuyển hướng đến trang chủ khi mà đã kích hoạt đúng
											if(response==1){
												 result.css("color", "chartreuse");
												 result.html("Kiểm tra email để kích hoạt tài khoản")
												$('#rname').focus().val("");
												$('#rpassword').val("");
												$('#r2password').val("");
											 }
											else{
												 result.html("*Tài khoản đã tồn tại");result.css("color", "red");
											}
										},
									dataType:'text'

					//					console.log(response);

					//				}

								});
				
								 }
					
								 
							 }
					 		}
					 }
				 }
			 }

		});
			
			// click đăng nhập
			$('#btn-login').click(function(){
			var result =$('#message_login');
			var email = $("#email").val();
			var password = $("#password").val();
			if(email==""){
				result.html("*Vui lòng nhập email")	;result.css("color", "red");
					
			}
			else if(!validateEmail(email)){
				result.html("*Email không đúng định dạng");result.css("color", "red");
			}
			else{
								 
					if(password == ""){
						result.html("*Vui lòng nhập pass");result.css("color", "red");
//						return false;
						}
					 else{
						 if(password.length<6){
							result.html("*Pass phải >= 6 kí tự");result.css("color", "red");
//							 return false;
						}
						 else{
							 $.ajax({
								 url : "show_data.php",
								 method:"post",
								 data:$("#login").serialize(),
								 success: function(response){
									
									 if(response==1){
										
										 url = "http://localhost/testhtml/index.php";
										 $( location ).attr("href", url);
//										  result.style.color='chartreuse';
//										 result.html("Đăng Nhập Thành Công");
										 
									 }
									 else {
										 result.html("*Tài khoản hoặc mật khẩu chưa chính xác");result.css("color", "red");
							
									 }
									 
									 
								 }
								 
							 });
							 
							 }
						 
					 }
			}
			
		})
			
			
		})
		
	</script>
