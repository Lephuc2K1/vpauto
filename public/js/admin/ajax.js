$(document).ready(function(){

	// hàm sử lý danh mục và loại sản phẩm được phân chia
function CheckForm(dtform,dturl,dtclik,path,name){
	dtclik.click(function(event){
			var nameip = name.val();
			var pathip =path.val();
			if(nameip==""){
				name.css({
					"box-shadow":"0px 0px 2px 0px red",
					"border":"1px red solid"
				})
				event.preventDefault();
			}
		
			else{
				if(pathip==""){
					path.css({
					"box-shadow":"0px 0px 2px 0px red",
					"border":"1px red solid"
					})
					event.preventDefault();
				}
				else{
						$.ajax({
					method:"post",
					url: dturl,
					data:dtform.serialize(),
					success : function(){
						
//								alert("vào");
					
						
						
					},
//					error: function (data) {
//						console.log('An error occurred.');
//						console.log(data);
//					}
					
				})
				}
		}
			})
		name.keyup(function(){
			var nameip =name.val();
			if(nameip.length>0){
				name.css({
					"box-shadow":"0px 0px 2px 0px white",
					"border":"1px #1b1b1b solid"
					})
			}
			else{
				name.css({
					"box-shadow":"0px 0px 2px 0px red",
					"border":"1px red solid"
				})
			}
		})
	path.keyup(function(){
			var pathip = path.val();
			if(pathip.length>0){
				path.css({
					"box-shadow":"0px 0px 2px 0px white",
					"border":"1px #1b1b1b solid"
					})
			}
			else{
				path.css({
					"box-shadow":"0px 0px 2px 0px red",
					"border":"1px red solid"
				})
			}
		})
}
// danh mục sản phẩm
// thêm danh mục
const catname = $("#cat_name")
const catpath = $("#cat_path")
const addformcat = $("#form_add_cat");
const addclickcat = $('#add_cat');
const caturl = "category-type.php";
CheckForm(addformcat,caturl,addclickcat,catpath,catname);
	
// sửa danh mục	
const saveformcat = $("#form_save_cat");
const saveclickcat = $('#save_cat');
CheckForm(saveformcat,caturl,saveclickcat,catpath,catname);
	
// loại sản phẩm
// thêm loại sản phẩm
const addformtype = $("#form_add_type");
const addclicktype = $('#add_type');
const typename = $('#type_name');
const typepath = $('#type_path');
const typeurl = "product-type.php";
CheckForm(addformtype,typeurl,addclicktype,typepath,typename);
	
// sửa loại sản phẩm
const svformtype = $("#form_save_type");
const svclicktype = $('#save_type');
CheckForm(svformtype,typeurl,svclicktype,typepath,typename);

// xử lý các sản phẩm
function CheckPost(dtform,dturl,dtclik,name){
	dtclik.click(function(event){
			var nameip = name.val();
			if(nameip==""){
				name.css({
					"box-shadow":"0px 0px 2px 0px red",
					"border":"1px red solid"
				})
				event.preventDefault();
			}
		
			else{
						$.ajax({
					method:"post",
					url: dturl,
					data:dtform.serialize(),
					success : function(){
						
//								alert("vào");
					
						
						
					},
//					error: function (data) {
//						console.log('An error occurred.');
//						console.log(data);
//					}
					
				})
				}
		
			})
		name.keyup(function(){
			var nameip =name.val();
			if(nameip.length>0){
				name.css({
					"box-shadow":"0px 0px 2px 0px white",
					"border":"1px #1b1b1b solid"
					})
			}
			else{
				name.css({
					"box-shadow":"0px 0px 2px 0px red",
					"border":"1px red solid"
				})
			}
		})
}
// thêm sản phẩm mới
const titlepro = $("#title")
const addformpro = $("#post_pro");
const addclickpro = $('#btn-post');
const tempclickpro = $('#btn-temp');
const viewclickpro = $('#btn-view');
const add_post_clickpro = $('#btn-post-add');
const prourl = "post-new.php.php";
CheckPost(addformpro,prourl,addclickpro,titlepro)
CheckPost(addformpro,prourl,add_post_clickpro,titlepro)
CheckPost(addformpro,prourl,tempclickpro,titlepro)
CheckPost(addformpro,prourl,viewclickpro,titlepro)
})