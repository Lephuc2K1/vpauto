// Scroll thanh cuộn
	$(document).ready(function(){
		
		//hàm ẩn 1 thuộc tính trong java tác động lên css
		$("#scrollTop").hide()
		$(window).scroll(function(){
			$(".why-block .block-v1").css({
				"transform":"translate3d(0px,-240px,0px)"
			})
			const pos_body =$('html, body').scrollTop();
			const srcollPos = $(this).scrollTop();
			//kiểm tra xem thanh cuộn đã tác động lên hay chưa
//			console.info(Math.random())
			if($(this).scrollTop()>=100){
				$(".header--v3").css({
				"position":"fixed",
				"left":0,
				"right":0,
				"top":0,
				"z-index":999,
				"box-shadow":" -2px 3px 4px 1px #b9b9b9",
				"background": "rgba(237, 237, 236, 0.84)"
				})
			}
			else{
				$(".header--v3").css({
				"position":"relative",
				"left":0,
				"right":0,
				"z-index":999,
				"top":0,
				"box-shadow":"",
				"background": "#ededec"
				})
			}
		
			if($("div").hasClass("row-v3")){
				const scrollrow3 = $(".row-v3").offset().top;
				if(pos_body>scrollrow3-350){
//					alert("đến")
					$(".js-in-parallax-v2").css({
							"transform":"translate3d(0px,"+(-srcollPos*0.15)+"px,0px)",
							"transition": "transform 0.4s cubic-bezier(0, 0, 0, 1) 0s"
						})
					$(".js-in-parallax-v1").css({
							"transform":"translate3d(0px,"+(srcollPos*0.15)+"px,0px)",
							"transition": "transform 0.4s cubic-bezier(0, 0, 0, 1) 0s"
						})
						
					}
				else{
						$(".js-in-parallax-v1").css({
								"transform":"translate3d(0px, 240px, 0px)"
							})
					$(".js-in-parallax-v2").css({
								"transform":"	transform: translate3d(0px,-60%,0px)"
							})

				}
				if(pos_body>scrollrow3+700){
	//					alert("a")
						$(".js-in-parallax-v1").css({
								"transform":"translate3d(0px, 265px, 0px)"
							})
					$(".js-in-parallax-v2").css({
								"transform":"translate3d(0px, -265px, 0px)"
							})

						}
			}
			
			// tự động hiện thị các icon bên trái
			
					if($(this).scrollTop()>=300){
						$("#auto-fix").show("show")
					}
					else{
						$("#auto-fix").hide("show")
					}
			
			// CUỘN LÊN TOP TRONG JQEO
			// this ở đây là thuộc tinh window vì nó nằm ở trong
			if($(this).scrollTop()>=300){
				$("#scrollTop").show("show")
			}
			else{
				$("#scrollTop").hide("show")
			}
		})
	
		$("#scrollTop").click(function(){
			// chỉ load trang phải dùng html với body kết hợ với animate trong jqeo 
			$("html, body").animate({
				scrollTop:0
			},300);
		})
		
		
		
	})