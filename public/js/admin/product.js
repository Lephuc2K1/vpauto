$(document).ready(function(){
//		$(".txt-name-hide").hide();
const checkall = document.getElementsByName("name-tag[]");
$("#btn-delete-top").click(function(){
	 return confirm("Bạn có chắc chắn muốn xóa danh mục này không!")
})
$("#btn-delete-bottom").click(function(){
	 return confirm("Bạn có chắc chắn muốn xóa danh mục này không!")
})
$(document).on('click','.name-tag', function(){
   $('.name-tag').each( function(){
   if(!$('input[name="name-tag[]"]:checked').length > 0)
{
    $('.display-delete').css({
						"opacity":"0",
						"z-index":"-1"
						
					})
}else{
     $('.display-delete').css({
						"opacity":"1",
						"z-index":"0"
						
					})
}

     }
  );
 }
);
	if(checkall.length < 8){
		$("#btn-delete-bottom").css({
						"display":"none"
						
					})
	}
	else{
		$("#btn-delete-bottom").css({
						"display":"block"
						
						
					})
	}

		// check tất cả các sản phẩm
		$("#cb-select-all-1").click(function(){
			if(this.checked){
				$('.display-delete').css({
						"opacity":1,
						"z-index":"0"
						
						
					})
		
				for(var i = 0; i < checkall.length;i++){
					checkall[i].checked=true;
				}
			}
			else{
				$('.display-delete').css({
						"opacity":"0",
						"z-index":"-1"
						
					})
				for(var j = 0; j < checkall.length;j++){
					checkall[j].checked=false;
					

				}
			}
		});
		
	const n = document.querySelector.bind(document);
	const nn = document.querySelectorAll.bind(document);
	const items_pro = nn(".tab-item-more");
	const tab_pro = nn(".table-info");
	items_pro.forEach(function(tab,index){
			const indextab= tab_pro[index]
		tab.onclick = function(){
			n(".tab-item-more.active").classList.remove("active");
			n(".table-info.active").classList.remove("active");
			this.classList.add("active");
			indextab.classList.add("active");
		}
		
	})
	
	})
