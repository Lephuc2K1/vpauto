$(document).ready(function(){
class Show_Hide{
	// ẩn
	hide(){
		// Xóa bgr
		$("div.bgr-fix").remove()

		$("body").css({
			"overflow-y": "auto"
		})
		
	}
	
	// hiện
	show(){
		$("body").css({
			"overflow-y": "hidden"
		})
		// add bgr
		$('body').prepend("<div class='bgr-fix'></div>")
	}
	
	// transform menu
	transform_menu(data,number){
		data.css({
				"transform": "translateX("+number+"%)"
			})
	}
	
	// Ẩn hiện Form
	Form(block, show, hide){
		// hiện
		show.click(function(){
			
			show_hide.show()
			
			// khi click bgr để đóng block
			$(".bgr-fix").click(function(){
				show_hide.hide()
				// xóa block
				block.removeClass("active")
			})
			
			// Hiện block
			block.addClass("active");
		})
		
		// click x
		hide.click(function(){
			show_hide.hide()
				// xóa block
			block.removeClass("active")
		})
		
	}
	
	// Menu
	Menu(block, show, hide){
		// hiện
		show.click(function(){
			
			show_hide.show()
			
			// khi click bgr để đóng block
			$(".bgr-fix").click(function(){
				show_hide.hide()
				// xóa block
				show_hide.transform_menu(block,-110)
			})
			
			// Hiện block
			show_hide.transform_menu(block,0)
		})
		
		// click x
		hide.click(function(){
			show_hide.hide()
				// xóa block
			show_hide.transform_menu(block,-110)
		})
		
	}
	
	// không có bgr
	no_bgr(block, show, hide){
		show.click(function(){
			block.addClass("active")
		})
		hide.click(function(){
			block.removeClass("active")
		})
	}
		
}
	// Form
	const register_baogia = $("#register-baogia")
	const fr_quote = $(".fr-quote")
	const register_driver = $("#register-driver")
	const test_auto = $(".test-auto")
	const close_fr = $(".close-fr")
	
	// Menu
	const menu_mobile = $(".warp-menu-mobile")
	const menu_block = $("#menu-block")
	const menu_close = $("#menu-close")
	
	// Search
	const search = $(".search")
	const open_search = $(".open-search")
	const open_search_mobile = $(".open-search-mobile")
	const close_search = $(".btn-close-search")
	
	// Filter moblie sản phẩm
	const filter_seach = $(".filter-seach")
	const open_filter = $("#open-filter")
	const close_filter = $("#close-filter")
	
	const show_hide = new Show_Hide;
	show_hide.Form(register_baogia, fr_quote, close_fr); // form báo giá
	show_hide.Form(register_driver, test_auto, close_fr); // form đăng kí lái xe
	show_hide.Menu(menu_mobile, menu_block, menu_close); // Menu mobile
	show_hide.Form(search, open_search_mobile, close_search); // Search moblie
	show_hide.no_bgr(search, open_search, close_search); // Search
	show_hide.Form(filter_seach, open_filter, close_filter); // Filter moblie sản phẩm
	
	
	// menu con moblie
	$(document).on('click', '.toggle', function (event) {
		if ($(event.target).closest('li').attr("aria-expanded") === "true") {
			$(event.target).closest('li').removeClass("active");
			$(event.target).closest('li').attr("aria-expanded","false");
		}
		else if ($(event.target).closest('li').attr("aria-expanded") === "false") {
			$(event.target).closest('li').addClass("active");
			$(event.target).closest('li').attr("aria-expanded","true");
		}
	});
	
})
