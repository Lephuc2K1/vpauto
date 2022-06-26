// load logo khi click
//tabs sản phẩm
//	 $(window).on('load', function(event){
//						  $('.loadimg.active').delay(200).fadeOut('fast');
//					  });
		const n	= document.querySelector.bind(document)
		const nn = document.querySelectorAll.bind(document)
		//Gán giá trị đó vào biến và thay document vào là tên thẻ class
		const itemsrow2 = nn('.items-tabs-row2')
		const tabsrow2 =nn('.tab-row2')
		const loader= nn('.load')
			itemsrow2.forEach(function(tab,index){
				
				const tabsrow =tabsrow2[index]
				  tab.onclick = function(){
//					console.log(this)
					  n('.items-tabs-row2.active').classList.remove('active')
					  n('.tab-row2.active').classList.remove('active')
					 
					  
					  this.classList.add('active')
					  tabsrow.classList.add('active')
					  n('.load').classList.add('active')
					  setTimeout(function(){
						n('.load.active').classList.remove('active')		  
					},500);

   
					}
	});

							

//	Tap tin tức
	const itemsnew=nn('.items-tab-new')
	const newstabs=nn('.news-table')
//	console.log(itemsnew,newstabs)
	itemsnew.forEach(function(tabs,index){
		const newstab = newstabs[index]
		tabs.onclick=function(){
			n('.items-tab-new.active').classList.remove('active')
			n('.news-table.active').classList.remove('active')
			this.classList.add('active')
			newstab.classList.add('active')
			}
	});
	//	Tap chi tiết sản phẩm
	const items_panels=nn(".tabs-panels-items")
	const items_tabs=nn(".items-content")
		items_tabs.forEach(function(tabs,index){
			const items_panel = items_panels[index]
			tabs.onclick = function(){
				n(".tabs-panels-items.active").classList.remove('active')
				n(".items-content.active").classList.remove('active')
				this.classList.add("active")
				items_panel.classList.add("active")
			}
		})

const itemslayout = nn('.icon-layout')
const product_tap = nn('.listview-product')

// gọi làm lặp để gán sự kiến click
itemslayout.forEach(function(tabss,index){
	const index_pr = product_tap[index]
	tabss.onclick =function(){
		// xóa thẻ hiện thị rồi add thêm vào thẻ dc click
		//n('icon-layout.active').classList.remove('active')
		n('.icon-layout.active').classList.remove('active')
		n('.listview-product.active').classList.remove('active')
		// thẻ this click hiện tại sẽ được add thêm thẻ để cho ẩn
		this.classList.add('active')
		index_pr.classList.add('active')
		 n('.load').classList.add('active')
					  setTimeout(function(){
						n('.load.active').classList.remove('active')
						  
						  
					},500);

	
		
	}
	
});
const itemacc = nn('.nav-item')
const tabacc = nn('.from-account')
//console.log(itemacc,tabacc);
itemacc.forEach(function(tab,index){
	const indextabacc = tabacc[index]
tab.onclick = function(){
	n('.from-account.active').classList.remove('active')
	n('.nav-item.active').classList.remove('active')
	
	//add class
	this.classList.add('active')
	indextabacc.classList.add('active')
}	
// nứt đăng kí đăng nhập nhanh
})

n('#login-fast').onclick = function(){
	n('#account .from-account:nth-child(3).active').classList.remove('active')
	n('#account .from-account:nth-child(2)').classList.add('active')
	n('.title-register.active').classList.remove('active')
	n('.title-login').classList.add('active')
//	alert("vào")
}

n('#register-fast').onclick = function(){
	n('.from-account:nth-child(3)').classList.add('active')
	n('.from-account:nth-child(2).active').classList.remove('active')
	n('.title-login.active').classList.remove('active')
	n('.title-register').classList.add('active')	
}
n('#reset-acc').onclick = function(){
	n('#account .from-account:nth-child(2).active').classList.remove('active');
	n('.tap-content').style.display='none';
	n('.from-resetpass').style.display='block';
}
n('#backs').onclick = function(){
	n('#account .from-account:nth-child(2)').classList.add('active');
	n('.tap-content').style.display='block';
	n('.from-resetpass').style.display='none';
//	n('#backs').style.display='none';	
}
n('.from-resetpass').style.display='none';
