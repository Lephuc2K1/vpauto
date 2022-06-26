
function CheckForm(dtform,dturl,dtclik,path,name){
	dtclik.click(function(event){
			var name = name.val();
			var path =path.val();
			if(name==""){
				name.css({
					"box-shadow":"0px 0px 2px 0px red",
					"border":"1px red solid"
				})
				event.preventDefault();
			}
		
			else{
				if(path==""){
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
			var name =name.val();
			if(name.length>0){
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
			var path = path.val();
			if(path.length>0){
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
		